<?php
	$thposi = 0.1;
	$thnega = -0.1;
	$targetSNS = "1, 3";
	$quarter = $_POST['quarter'];
	$year = $_POST['year'];
	//get data from mysql and put them into an array

	try{
		$doughnatdata = array();
		require_once('cfg.php');
		$dbh = new PDO($db['dsn'], $db['user'], $db['password']);

		$sql_scatter = '
			SELECT place, totalMentions, averageSentiment
			FROM(
					SELECT place, sum(negative)+sum(neutral)+sum(positive) as totalMentions, (-1*sum(negative)+0*sum(neutral)+1*sum(positive))/(sum(negative)+sum(neutral)+sum(positive)) as averageSentiment
					FROM(
						SELECT DIM_PERIOD.year, DIM_PERIOD.quarter, DIM_PLACES.place, DIM_PLACES.latitude, DIM_PLACES.longitude, count(*) as negative, 0 as neutral, 0 as positive
						FROM FACT_SNSDATA, DIM_PERIOD, DIM_SNS, DIM_PLACES
						WHERE FACT_SNSDATA.sentiment < ' . strval($thnega) . '
						AND FACT_SNSDATA.date_id = DIM_PERIOD.date_id
						AND DIM_PLACES.row_id = FACT_SNSDATA.row_id
						AND DIM_PLACES.place <>""
						AND DIM_PLACES.latitude <>""
						AND DIM_PLACES.longitude <>""
						AND DIM_SNS.sns_id = FACT_SNSDATA.sns_id
						AND DIM_SNS.sns_number IN(' . $targetSNS . ')
						GROUP BY DIM_PERIOD.year, DIM_PERIOD.quarter, DIM_PLACES.place

						UNION ALL

						SELECT DIM_PERIOD.year, DIM_PERIOD.quarter, DIM_PLACES.place, DIM_PLACES.latitude, DIM_PLACES.longitude, 0 as negative, count(*) as neutral, 0 as positive
						FROM FACT_SNSDATA, DIM_PERIOD, DIM_SNS, DIM_PLACES
						WHERE FACT_SNSDATA.sentiment between ' . strval($thnega) . ' and ' . strval($thposi) . '
						AND FACT_SNSDATA.date_id = DIM_PERIOD.date_id
						AND DIM_PLACES.row_id = FACT_SNSDATA.row_id
						AND DIM_PLACES.place <>""
						AND DIM_PLACES.latitude <>""
						AND DIM_PLACES.longitude <>""
						AND DIM_SNS.sns_id = FACT_SNSDATA.sns_id
						AND DIM_SNS.sns_number IN(' . $targetSNS . ')
						GROUP BY DIM_PERIOD.year, DIM_PERIOD.quarter, DIM_PLACES.place

						UNION ALL

						SELECT DIM_PERIOD.year, DIM_PERIOD.quarter, DIM_PLACES.place, DIM_PLACES.latitude, DIM_PLACES.longitude, 0 as negative, 0 as neutral, count(*) as positive
						FROM FACT_SNSDATA, DIM_PERIOD, DIM_SNS, DIM_PLACES
						WHERE FACT_SNSDATA.sentiment > ' . strval($thnega) . '
						AND FACT_SNSDATA.date_id = DIM_PERIOD.date_id
						AND DIM_PLACES.row_id = FACT_SNSDATA.row_id
						AND DIM_PLACES.place <>""
						AND DIM_PLACES.latitude <>""
						AND DIM_PLACES.longitude <>""
						AND DIM_SNS.sns_id = FACT_SNSDATA.sns_id
						AND DIM_SNS.sns_number IN(' . $targetSNS . ')
						GROUP BY DIM_PERIOD.year, DIM_PERIOD.quarter, DIM_PLACES.place
					) as UNI
					WHERE year = ' . $year . '
					AND quarter = ' . $quarter . '
					GROUP BY place
			) as UNITED
			WHERE totalMentions < 10
			AND averageSentiment < 0
		';
		$st = $dbh->query($sql_scatter);

		//put data into an array
		while ($row = $st->fetchObject()) {
			$doughnatdata[] = array(
				'siteName'=> $row->place, 
				'totalMentions' => $row->totalMentions, 
				'averageSentiment' => $row->averageSentiment);
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