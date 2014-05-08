<?php
	$thposi = 0.1;
	$thnega = -0.1;
	$targetSNS = "1, 3";

	//get data from mysql and put them into an array
	try{
		$snsRatingsQ = array();
		require_once('cfg.php');
		$dbh = new PDO($db['dsn'], $db['user'], $db['password']);

		$sql_senti = '
			SELECT year, quarter, sum(negative) as negative, sum(neutral) as neutral, sum(positive) as positive
			FROM(
				SELECT DIM_PERIOD.year, DIM_PERIOD.quarter, count(*) as negative, 0 as neutral, 0 as positive
				FROM FACT_SNSDATA, DIM_PERIOD, DIM_PLACES, DIM_SNS
				WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id
				AND FACT_SNSDATA.places_row_id = DIM_PLACES.row_id
				AND DIM_SNS.sns_id = FACT_SNSDATA.sns_id
				AND DIM_SNS.sns_number IN(' . $targetSNS . ')
				AND FACT_SNSDATA.sentiment < ' . strval($thnega) . '
				GROUP BY DIM_PERIOD.year, DIM_PERIOD.quarter

				UNION ALL

				SELECT DIM_PERIOD.year, DIM_PERIOD.quarter, 0 negative, count(*) as neutral, 0 as positive
				FROM FACT_SNSDATA, DIM_PERIOD, DIM_PLACES, DIM_SNS
				WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id
				AND FACT_SNSDATA.places_row_id = DIM_PLACES.row_id
				AND DIM_SNS.sns_id = FACT_SNSDATA.sns_id
				AND DIM_SNS.sns_number IN(' . $targetSNS . ')
				AND FACT_SNSDATA.sentiment between ' . strval($thnega) . ' and ' . strval($thposi) . '
				GROUP BY DIM_PERIOD.year, DIM_PERIOD.quarter
				
				UNION ALL

				SELECT DIM_PERIOD.year, DIM_PERIOD.quarter, 0 as negative, 0 as neutral, count(*) as positive
				FROM FACT_SNSDATA, DIM_PERIOD, DIM_PLACES, DIM_SNS
				WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id
				AND FACT_SNSDATA.places_row_id = DIM_PLACES.row_id
				AND DIM_SNS.sns_id = FACT_SNSDATA.sns_id
				AND DIM_SNS.sns_number IN(' . $targetSNS . ')
				AND FACT_SNSDATA.sentiment > ' . strval($thnega) . '
				GROUP BY DIM_PERIOD.year, DIM_PERIOD.quarter
			) as UNITED
			GROUP BY year, quarter
		';
		$st = $dbh->query($sql_senti);

		//put data into an array
		while ($row = $st->fetchObject()) {
			$snsRatingsQ[$row->year . 'Q' . $row->quarter] = array(
				'negative' => $row->negative, 
				'neutral' => $row->neutral, 
				'positive' => $row->positive);
		}

		//print_r($snsRatingsQ);

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