<?php
	$endmonth = intval($_POST['quarter'])*3;
	$startmonth = $endmonth-2;
	$year = $_POST['year'];
	$modosu = $endmonth+1;

	//get data from mysql and put them into an array
	try{
		$reviews = null;
		require_once('cfg.php');
		$dbh = new PDO($db['dsn'], $db['user'], $db['password']);

		$sql_user_review = 'SELECT * from SNSratings WHERE rating BETWEEN 1 and 3 AND date < "' . $year . '-' . $modosu . '-01" Order By date desc LIMIT 0,3';
		$st = $dbh->query($sql_user_review);



		//put data into an array
		while ($row = $st->fetchObject()) {
     	$reviews[] = array(
				'SNS' => $row->SNS,
				'username' => $row->userName,
				'address' => $row->address,
				'date'=> $row->date, 
				'rating'=> $row->rating, 
				'comment'=> $row->comment, 
				'URL' => $row->pageURL);
		}

		//encode $snsRatings as json format for javascript
    header('Content-Type: application/json');
		$jsonreviews = json_encode($reviews);
		echo $jsonreviews;

	exit;
	}

	catch (PDOException $e){
		print('Error:'.$e->getMessage());
    die();
	}

			$dbh = null;
?>

