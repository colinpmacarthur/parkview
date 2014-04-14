<?php
	$endmonth = intval($_POST['quarter'])*3;
	$startmonth = $endmonth-2;
	$year = $_POST['year'];

	//get data from mysql and put them into an array
	try{
		$geolocation = null;
		require_once('cfg.php');
		$dbh = new PDO($db['dsn'], $db['user'], $db['password']);

		$sql_ratings = "SELECT siteName, latitude, longitude, ratingFive, ratingFour, ratingThree, ratingTwo, ratingOne, totalMentions FROM justtest WHERE Year = " . $_POST['year'] . " AND Month BETWEEN " . $startmonth . " AND " . $endmonth;
		$st = $dbh->query($sql_ratings);

		//put data into an array
		while ($row = $st->fetchObject()) {
			$snsRatings[] = array(
				'siteName'=> $row->siteName, 
				'latitude'=> $row->latitude, 
				'longitude'=> $row->longitude, 
				'ratingFive' => $row->ratingFive, 
				'ratingFour' => $row->ratingFour, 
				'ratingThree' => $row->ratingThree, 
				'ratingTwo' => $row->ratingTwo, 
				'ratingOne' => $row->ratingOne, 
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