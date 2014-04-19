<?php
	$endmonth = intval($_POST['quarter'])*3;
	$startmonth = $endmonth-2;
	$year = $_POST['year'];
	$quarter = $_POST['quarter'];
	//get data from mysql and put them into an array
	try{
		$geolocation = null;
		require_once('cfg.php');
		$dbh = new PDO($db['dsn'], $db['user'], $db['password']);

		$sql_ratings = '
			SELECT TRACK_SITES.place as siteName, TRACK_SITES.latitude as latitude, TRACK_SITES.longitude as longitude, count(*) as totalMentions
			FROM FACT_SNSDATA, DIM_PERIOD, TRACK_SITES
			WHERE year(DIM_PERIOD.creation_date) = ' . $year . '
			AND quarter(DIM_PERIOD.creation_date) = ' . $quarter . '
			AND FACT_SNSDATA.date_id = DIM_PERIOD.date_id
			AND FACT_SNSDATA.site_id = TRACK_SITES.site_id
			AND TRACK_SITES.place <>""
			AND TRACK_SITES.sns_id IN(1, 3)
			GROUP BY TRACK_SITES.place
		';
		$st = $dbh->query($sql_ratings);

		//put data into an array
		while ($row = $st->fetchObject()) {
			$snsRatings[] = array(
				'siteName'=> $row->siteName, 
				'latitude'=> $row->latitude, 
				'longitude'=> $row->longitude, 
				'totalMentions' => $row->totalMentions);
		}

				//encode $snsRatings as json format for javascript
		    header('Content-Type: application/json');
 				$jsonSnsRatings = json_encode($snsRatings);
				echo $jsonSnsRatings;

		exit;
	}

	catch (PDOException $e){
		print('Error:'.$e->getMessage());
    die();
	}

			$dbh = null;
?>