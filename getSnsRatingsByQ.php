<?php
	//get data from mysql and put them into an array
	try{
		$snsRatingsQ = array();
		require_once('cfg.php');
		$dbh = new PDO($db['dsn'], $db['user'], $db['password']);

		$sql_ratings = "
			SELECT year(DIM_PERIOD.creation_date) as year, ceil((Month(DIM_PERIOD.creation_date))/3) as quarter, ABS(round(FACT_SNSDATA.sentiment)) as sentiment, count(*) as count
			FROM FACT_SNSDATA, DIM_PERIOD 
			WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id
			AND NOT FACT_SNSDATA.sentiment = 0
			AND FACT_SNSDATA.sentiment between -0.5 AND 0.5
			GROUP BY Year(DIM_PERIOD.creation_date), Quarter(DIM_PERIOD.creation_date)

			UNION ALL

			SELECT year(DIM_PERIOD.creation_date) as year, ceil((Month(DIM_PERIOD.creation_date))/3) as quarter, round(FACT_SNSDATA.sentiment) as sentiment, count(*) as count
			FROM FACT_SNSDATA, DIM_PERIOD 
			WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id
			AND NOT FACT_SNSDATA.sentiment = 0
			AND FACT_SNSDATA.sentiment < -0.5
			GROUP BY Year(DIM_PERIOD.creation_date), Quarter(DIM_PERIOD.creation_date)

			UNION ALL

			SELECT year(DIM_PERIOD.creation_date) as year, ceil((Month(DIM_PERIOD.creation_date))/3) as quarter, round(FACT_SNSDATA.sentiment) as sentiment, count(*) as count
			FROM FACT_SNSDATA, DIM_PERIOD 
			WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id
			AND NOT FACT_SNSDATA.sentiment = 0
			AND FACT_SNSDATA.sentiment >= 0.5
			GROUP BY Year(DIM_PERIOD.creation_date), Quarter(DIM_PERIOD.creation_date)
		";
		$st = $dbh->query($sql_ratings);

		//put data into an array
		while ($row = $st->fetchObject()) {
			$snsRatingsQ[$row->year . "Q" . $row->quarter . $row->sentiment] = $row->count;
		}

				//encode $snsRatings as json format for javascript
		    header('Content-Type: application/json');
 				$jsonSnsRatingsQ = json_encode($snsRatingsQ);
				echo $jsonSnsRatingsQ;

		exit;
	}

	catch (PDOException $e){
		print('Error:'.$e->getMessage());
    die();
	}

			$dbh = null;
?>