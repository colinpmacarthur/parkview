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

		$sql_ratings = "SELECT year(date) as year, ceil((Month(date))/3) as quarter, count(*) as count, rating between 4 and 5 as positive from SNSratings where ceil((Month(date))/3) = " . $quarter . " and Year(date) = " . $year . " and rating between 4 and 5 group by year(date), ceil((Month(date))/3) union all SELECT year(date) as year, ceil((Month(date))/3) as quarter, count(*) as count, rating between 4 and 5 as positive from SNSratings where ceil((Month(date))/3) = " . $p1quarter . " and Year(date) = " . $p1year . " and rating between 4 and 5 group by year(date), ceil((Month(date))/3) union all SELECT year(date) as year, ceil((Month(date))/3) as quarter, count(*) as count, rating between 4 and 5 as positive from SNSratings where ceil((Month(date))/3) = " . $p2quarter . " and Year(date) = " . $p2year . " and rating between 4 and 5 group by year(date), ceil((Month(date))/3) union all SELECT year(date) as year, ceil((Month(date))/3) as quarter, count(*) as count, rating between 4 and 5 as positive from SNSratings where ceil((Month(date))/3) = " . $p3quarter . " and Year(date) = " . $p3year . " and rating between 4 and 5 group by year(date), ceil((Month(date))/3) union all SELECT year(date) as year, ceil((Month(date))/3) as quarter, count(*) as count, rating between 4 and 5 as positive from SNSratings where ceil((Month(date))/3) = " . $p4quarter . " and Year(date) = " . $p4year . " and rating between 4 and 5 group by year(date), ceil((Month(date))/3) union all SELECT year(date) as year, ceil((Month(date))/3) as quarter, count(*) as count, rating between 4 and 5 as positive  from SNSratings where ceil((Month(date))/3) = " . $quarter . " and Year(date) = " . $year . " and rating between 1 and 3 group by year(date), ceil((Month(date))/3) union all SELECT year(date) as year, ceil((Month(date))/3) as quarter, count(*) as count, rating between 4 and 5 as positive  from SNSratings where ceil((Month(date))/3) = " . $p1quarter . " and Year(date) = " . $p1year . " and rating between 1 and 3 group by year(date), ceil((Month(date))/3) union all SELECT year(date) as year, ceil((Month(date))/3) as quarter, count(*) as count, rating between 4 and 5 as positive from SNSratings where ceil((Month(date))/3) = " . $p2quarter . " and Year(date) = " . $p2year . " and rating between 1 and 3 group by year(date), ceil((Month(date))/3) union all SELECT year(date) as year, ceil((Month(date))/3) as quarter, count(*) as count, rating between 4 and 5 as positive from SNSratings where ceil((Month(date))/3) = " . $p3quarter . " and Year(date) = " . $p3year . " and rating between 1 and 3 group by year(date), ceil((Month(date))/3) union all SELECT year(date) as year, ceil((Month(date))/3) as quarter, count(*) as count, rating between 4 and 5 as positive from SNSratings where ceil((Month(date))/3) = " . $p4quarter . " and Year(date) = " . $p4year . " and rating between 1 and 3 group by year(date), ceil((Month(date))/3)";
		$st = $dbh->query($sql_ratings);

		//put data into an array
		while ($row = $st->fetchObject()) {
			$snsRatingsQ[$row->year . "Q" . $row->quarter . $row->positive] = $row->count;
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