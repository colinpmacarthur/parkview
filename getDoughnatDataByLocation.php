<?php
	$quarter = $_POST['quarter'];
	$year = $_POST['year'];
	//get data from mysql and put them into an array

	try{
		$doughnatdata = array();
		require_once('cfg.php');
		$dbh = new PDO($db['dsn'], $db['user'], $db['password']);

		$sql_ratings = '
			SELECT place, latitude, longitude, sum(negative) as negative, sum(neutral) as neutral, sum(positive) as positive
			FROM(
				SELECT year(DIM_PERIOD.creation_date) as year, quarter(DIM_PERIOD.creation_date) as quarter, TRACK_SITES.place as place, TRACK_SITES.latitude as latitude, TRACK_SITES.longitude as longitude, count(*) as negative, 0 as neutral, 0 as positive
				FROM FACT_SNSDATA, DIM_PERIOD, TRACK_SITES
				WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id
				AND FACT_SNSDATA.site_id = TRACK_SITES.site_id
				AND FACT_SNSDATA.sentiment < -0.1
				AND TRACK_SITES.place <>""
				AND TRACK_SITES.sns_id IN(1, 3)
				GROUP BY year(DIM_PERIOD.creation_date), quarter(DIM_PERIOD.creation_date), TRACK_SITES.place

				UNION ALL

				SELECT year(DIM_PERIOD.creation_date) as year, quarter(DIM_PERIOD.creation_date) as quarter, TRACK_SITES.place as place, TRACK_SITES.latitude as latitude, TRACK_SITES.longitude as longitude, 0 as negative, count(*) as neutral, 0 as positive
				FROM FACT_SNSDATA, DIM_PERIOD, TRACK_SITES
				WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id
				AND FACT_SNSDATA.site_id = TRACK_SITES.site_id
				AND FACT_SNSDATA.sentiment between -0.1 and 0.1
				AND TRACK_SITES.place <>""
				AND TRACK_SITES.sns_id IN(1, 3)
				GROUP BY year(DIM_PERIOD.creation_date), quarter(DIM_PERIOD.creation_date), TRACK_SITES.place

				UNION ALL

				SELECT year(DIM_PERIOD.creation_date) as year, quarter(DIM_PERIOD.creation_date) as quarter, TRACK_SITES.place as place, TRACK_SITES.latitude as latitude, TRACK_SITES.longitude as longitude, 0 as negative, 0 as neutral, count(*) as positive
				FROM FACT_SNSDATA, DIM_PERIOD, TRACK_SITES
				WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id
				AND FACT_SNSDATA.site_id = TRACK_SITES.site_id
				AND FACT_SNSDATA.sentiment > 0.1
				AND TRACK_SITES.place <>""
				AND TRACK_SITES.sns_id IN(1, 3)
				GROUP BY year(DIM_PERIOD.creation_date), quarter(DIM_PERIOD.creation_date), TRACK_SITES.place
			) as UNI
			WHERE year = ' . $year . '
			AND quarter = ' . $quarter . '
			GROUP BY place
		';
		$st = $dbh->query($sql_ratings);

		//put data into an array
		while ($row = $st->fetchObject()) {
			$doughnatdata[] = array(
				'siteName'=> $row->place, 
				'latitude'=> $row->latitude, 
				'longitude'=> $row->longitude, 
				'negative' => $row->negative, 
				'neutral' => $row->neutral, 
				'positive' => $row->positive);
		}

				//encode $snsRatings as json format for javascript
		    header('Content-Type: application/json');
 				$jsondoughnatdata = json_encode($doughnatdata);
				echo $jsondoughnatdata;

		exit;
	}

	catch (PDOException $e){
		print('Error:'.$e->getMessage());
    die();
	}

			$dbh = null;
?>