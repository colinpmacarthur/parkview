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
				SELECT year(DIM_PERIOD.creation_date) as year, Quarter(DIM_PERIOD.creation_date) as quarter, count(*) as negative, 0 as neutral, 0 as positive
				FROM FACT_SNSDATA, DIM_PERIOD, TRACK_SITES
				WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id
				AND FACT_SNSDATA.site_id = TRACK_SITES.site_id
				AND TRACK_SITES.sns_id IN(' . $targetSNS . ')
				AND FACT_SNSDATA.sentiment < ' . strval($thnega) . '
				GROUP BY Year(DIM_PERIOD.creation_date), Quarter(DIM_PERIOD.creation_date)

				UNION ALL

				SELECT year(DIM_PERIOD.creation_date) as year, Quarter(DIM_PERIOD.creation_date) as quarter, 0 as negative, count(*) as neutral, 0 as positive
				FROM FACT_SNSDATA, DIM_PERIOD, TRACK_SITES
				WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id
				AND FACT_SNSDATA.site_id = TRACK_SITES.site_id
				AND TRACK_SITES.sns_id IN(' . $targetSNS . ')
				AND FACT_SNSDATA.sentiment between ' . strval($thnega) . ' and ' . strval($thposi) . '
				GROUP BY Year(DIM_PERIOD.creation_date), Quarter(DIM_PERIOD.creation_date)
				
				UNION ALL

				SELECT year(DIM_PERIOD.creation_date) as year, Quarter(DIM_PERIOD.creation_date) as quarter, 0 as negative, 0 as neutral, count(*) as positive
				FROM FACT_SNSDATA, DIM_PERIOD, TRACK_SITES
				WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id
				AND FACT_SNSDATA.site_id = TRACK_SITES.site_id
				AND TRACK_SITES.sns_id IN(' . $targetSNS . ')
				AND FACT_SNSDATA.sentiment > ' . strval($thposi) . '
				GROUP BY Year(DIM_PERIOD.creation_date), Quarter(DIM_PERIOD.creation_date)
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