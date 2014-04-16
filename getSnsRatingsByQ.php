<?php
	$quarter = $_POST['quarter'];
	$year = $_POST['year'];
	if ($quarter == 4){
		$p1quarter = 3;
		$p1year = $year;
		$p2quarter = 2;
		$p2year = $year;
		$p3quarter = 1;
		$p3year = $year;
		$p4quarter = 4;
		$p4year = $year-1;
	}elseif ($quarter == 3){
		$p1quarter = 2;
		$p1year = $year;
		$p2quarter = 1;
		$p2year = $year;
		$p3quarter = 4;
		$p3year = $year-1;
		$p4quarter = 3;
		$p4year = $year-1;
	}elseif ($quarter == 2){
		$p1quarter = 1;
		$p1year = $year;
		$p2quarter = 4;
		$p2year = $year-1;
		$p3quarter = 3;
		$p3year = $year-1;
		$p4quarter = 2;
		$p4year = $year-1;
	}else{
		$p1quarter = 4;
		$p1year = $year-1;
		$p2quarter = 3;
		$p2year = $year-1;
		$p3quarter = 2;
		$p3year = $year-1;
		$p4quarter = 1;
		$p4year = $year-1;
	}

	//get data from mysql and put them into an array
	try{
		$snsRatingsQ = array();
		require_once('cfg.php');
		$dbh = new PDO($db['dsn'], $db['user'], $db['password']);

		$sql_ratings = "
			SELECT year(DIM_PERIOD.creation_date) as year, ceil((Month(DIM_PERIOD.creation_date))/3) as quarter, count(*) as count, 'P' as senti 
			FROM FACT_SNSDATA, DIM_PERIOD 
			WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id 
			AND ceil((Month(DIM_PERIOD.creation_date))/3) = " . $quarter . " 
			AND Year(DIM_PERIOD.creation_date) = " . $year . " 
			AND FACT_SNSDATA.sentiment >= 0.5 
				union all 
			SELECT year(DIM_PERIOD.creation_date) as year, ceil((Month(DIM_PERIOD.creation_date))/3) as quarter, count(*) as count, 'P' as senti 
			FROM FACT_SNSDATA, DIM_PERIOD 
			WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id 
			AND ceil((Month(DIM_PERIOD.creation_date))/3) = " . $p1quarter . " 
			AND Year(DIM_PERIOD.creation_date) = " . $p1year . " 
			AND FACT_SNSDATA.sentiment >= 0.5 
				union all 
			SELECT year(DIM_PERIOD.creation_date) as year, ceil((Month(DIM_PERIOD.creation_date))/3) as quarter, count(*) as count, 'P' as senti 
			FROM FACT_SNSDATA, DIM_PERIOD 
			WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id 
			AND ceil((Month(DIM_PERIOD.creation_date))/3) = " . $p2quarter . " 
			AND Year(DIM_PERIOD.creation_date) = " . $p2year . " 
			AND FACT_SNSDATA.sentiment >= 0.5 
				union all 
			SELECT year(DIM_PERIOD.creation_date) as year, ceil((Month(DIM_PERIOD.creation_date))/3) as quarter, count(*) as count, 'P' as senti 
			FROM FACT_SNSDATA, DIM_PERIOD 
			WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id 
			AND ceil((Month(DIM_PERIOD.creation_date))/3) = " . $p3quarter . " 
			AND Year(DIM_PERIOD.creation_date) = " . $p3year . " 
			AND FACT_SNSDATA.sentiment >= 0.5 
				union all 
			SELECT year(DIM_PERIOD.creation_date) as year, ceil((Month(DIM_PERIOD.creation_date))/3) as quarter, count(*) as count, 'P' as senti 
			FROM FACT_SNSDATA, DIM_PERIOD 
			WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id 
			AND ceil((Month(DIM_PERIOD.creation_date))/3) = " . $p4quarter . " 
			AND Year(DIM_PERIOD.creation_date) = " . $p4year . " 
			AND FACT_SNSDATA.sentiment >= 0.5 
				union all 
			SELECT year(DIM_PERIOD.creation_date) as year, ceil((Month(DIM_PERIOD.creation_date))/3) as quarter, count(*) as count, 'O' as senti 
			FROM FACT_SNSDATA, DIM_PERIOD 
			WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id 
			AND ceil((Month(DIM_PERIOD.creation_date))/3) = " . $quarter . " 
			AND Year(DIM_PERIOD.creation_date) = " . $year . " 
			AND FACT_SNSDATA.sentiment between -0.5 AND 0.5 
			AND NOT FACT_SNSDATA.sentiment = 0 
				union all 
			SELECT year(DIM_PERIOD.creation_date) as year, ceil((Month(DIM_PERIOD.creation_date))/3) as quarter, count(*) as count, 'O' as senti 
			FROM FACT_SNSDATA, DIM_PERIOD 
			WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id 
			AND ceil((Month(DIM_PERIOD.creation_date))/3) = " . $p1quarter . " 
			AND Year(DIM_PERIOD.creation_date) = " . $p1year . " 
			AND FACT_SNSDATA.sentiment between -0.5 AND 0.5 
			AND NOT FACT_SNSDATA.sentiment = 0 
				union all 
			SELECT year(DIM_PERIOD.creation_date) as year, ceil((Month(DIM_PERIOD.creation_date))/3) as quarter, count(*) as count, 'O' as senti 
			FROM FACT_SNSDATA, DIM_PERIOD 
			WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id 
			AND ceil((Month(DIM_PERIOD.creation_date))/3) = " . $p2quarter . " 
			AND Year(DIM_PERIOD.creation_date) = " . $p2year . " 
			AND FACT_SNSDATA.sentiment between -0.5 AND 0.5 
			AND NOT FACT_SNSDATA.sentiment = 0 
				union all 
			SELECT year(DIM_PERIOD.creation_date) as year, ceil((Month(DIM_PERIOD.creation_date))/3) as quarter, count(*) as count, 'O' as senti 
			FROM FACT_SNSDATA, DIM_PERIOD 
			WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id 
			AND ceil((Month(DIM_PERIOD.creation_date))/3) = " . $p3quarter . " 
			AND Year(DIM_PERIOD.creation_date) = " . $p3year . " 
			AND FACT_SNSDATA.sentiment between -0.5 AND 0.5 
			AND NOT FACT_SNSDATA.sentiment = 0 
				union all 
			SELECT year(DIM_PERIOD.creation_date) as year, ceil((Month(DIM_PERIOD.creation_date))/3) as quarter, count(*) as count, 'O' as senti 
			FROM FACT_SNSDATA, DIM_PERIOD 
			WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id 
			AND ceil((Month(DIM_PERIOD.creation_date))/3) = " . $p4quarter . " 
			AND Year(DIM_PERIOD.creation_date) = " . $p4year . " 
			AND FACT_SNSDATA.sentiment between -0.5 AND 0.5 
			AND NOT FACT_SNSDATA.sentiment = 0 
				union all 
			SELECT year(DIM_PERIOD.creation_date) as year, ceil((Month(DIM_PERIOD.creation_date))/3) as quarter, count(*) as count, 'N' as senti 
			FROM FACT_SNSDATA, DIM_PERIOD 
			WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id 
			AND ceil((Month(DIM_PERIOD.creation_date))/3) = " . $quarter . " 
			AND Year(DIM_PERIOD.creation_date) = " . $year . " 
			AND FACT_SNSDATA.sentiment < -0.5 
				union all 
			SELECT year(DIM_PERIOD.creation_date) as year, ceil((Month(DIM_PERIOD.creation_date))/3) as quarter, count(*) as count, 'N' as senti 
			FROM FACT_SNSDATA, DIM_PERIOD 
			WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id 
			AND ceil((Month(DIM_PERIOD.creation_date))/3) = " . $p1quarter . " 
			AND Year(DIM_PERIOD.creation_date) = " . $p1year . " 
			AND FACT_SNSDATA.sentiment < -0.5 
				union all 
			SELECT year(DIM_PERIOD.creation_date) as year, ceil((Month(DIM_PERIOD.creation_date))/3) as quarter, count(*) as count, 'N' as senti 
			FROM FACT_SNSDATA, DIM_PERIOD 
			WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id 
			AND ceil((Month(DIM_PERIOD.creation_date))/3) = " . $p2quarter . " 
			AND Year(DIM_PERIOD.creation_date) = " . $p2year . " 
			AND FACT_SNSDATA.sentiment < -0.5 
				union all 
			SELECT year(DIM_PERIOD.creation_date) as year, ceil((Month(DIM_PERIOD.creation_date))/3) as quarter, count(*) as count, 'N' as senti 
			FROM FACT_SNSDATA, DIM_PERIOD 
			WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id 
			AND ceil((Month(DIM_PERIOD.creation_date))/3) = " . $p3quarter . " 
			AND Year(DIM_PERIOD.creation_date) = " . $p3year . " 
			AND FACT_SNSDATA.sentiment < -0.5 
				union all 
			SELECT year(DIM_PERIOD.creation_date) as year, ceil((Month(DIM_PERIOD.creation_date))/3) as quarter, count(*) as count, 'N' as senti 
			FROM FACT_SNSDATA, DIM_PERIOD 
			WHERE FACT_SNSDATA.date_id = DIM_PERIOD.date_id 
			AND ceil((Month(DIM_PERIOD.creation_date))/3) = " . $p4quarter . " 
			AND Year(DIM_PERIOD.creation_date) = " . $p4year . " 
			AND FACT_SNSDATA.sentiment < -0.5
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