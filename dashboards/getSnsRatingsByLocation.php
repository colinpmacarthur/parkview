<?php
	$endmonth = intval($_POST['quarter'])*3;
	$startmonth = $endmonth-2;
	$year = $_POST['year'];
	$quarter = $_POST['quarter'];
	$targetSNS = "1, 2, 3, 4, 5";
	//get data from mysql and put them into an array
	try{
		$geolocation = null;
		require_once('cfg.php');
		$dbh = new PDO($db['dsn'], $db['user'], $db['password']);

		$sql_ratings = '
			SELECT DIM_PLACES.place as siteName, DIM_PLACES.latitude as latitude, DIM_PLACES.longitude as longitude, count(*) as totalMentions
			FROM FACT_SNSDATA, DIM_PERIOD, DIM_SNS, DIM_PLACES
			WHERE year(DIM_PERIOD.creation_date) = ' . $year . '
			AND quarter(DIM_PERIOD.creation_date) = ' . $quarter . '
			AND FACT_SNSDATA.date_id = DIM_PERIOD.date_id
			AND FACT_SNSDATA.places_row_id = DIM_PLACES.row_id
			AND DIM_PLACES.place <>""
			AND DIM_SNS.sns_id = FACT_SNSDATA.sns_id
			AND DIM_SNS.sns_number IN(' . $targetSNS . ')
			GROUP BY DIM_PLACES.place
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