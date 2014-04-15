<?php
include 'propel_include.php';
date_default_timezone_set('America/Los_Angeles');

class ParkDBQuery
{
	var $year;
	var $quarter;
	var $datasources = array();
	var $places = [
		'Bumpass' => "Bumpass Hell",
		"Manzanita" => "Manzanita Lake",
		"Visitor" => "Visitor Center",
		"Sulphur" => "Sulphur Works",
		"King" => "King's Creek",
		"Southwest" => "Southwest Campground",
		"Warner" => "Warner Valley",
		"Summit" => "Summit Lake North",
		"Mount" => "Mount Lassen",
		"Fantastic" => "Fantastic Lava Beds",
		"Boiling" => "Boiling Springs Lake",
		"Devil" => "Devil's Kitchen",
		"Juniper" => "Juniper Lake",
		"Terminal" => "Terminal Geyser",
		"Snag" => "Snag Lake",
		"Cliff" => "Cliff Lake"
		];
	
	function setYear($year)
	{
		$this->year = $year;
	}
	
	function getYear($year)
	{
		return $this->year;
	}
	
	function getQuarter($quarter)
	{
		return $this->quarter;
	}
	
	function setQuarter($quarter)
	{
		$this->quarter = $quarter;
	}
	
	function getDateRange($year,$quarter)
	{
		$end_month = $quarter*3;
		$start_month = $end_month - 3;
		$start_month = ($start_month == 0 ? 1 : $start_month);
		return array( "min" => $year.'-'.$start_month.'-1 00:00:00', 
					  "max" => $year.'-'.$end_month.'-31 00:00:00');
	}
	
	function getCount($service)
	{
		$date_range = $this->getDateRange($this->year,$this->quarter);
		$name = $service.'Query';
		$datasource = new $name;	
		$results = $datasource::create()
			->filterByDate($date_range)
			->count();
		return $results;
	}
	
	function getFullName($short_name)
	{
		return $this->places[$short_name];
	}
	
	function getCountsForGraph($service)
	{
		$array = array();
		$name = $service.'Query';
		$datasource = new $name;
		$date_range = $this->getDateRange($this->year,$this->quarter);	
		$results = $datasource::create()
			->filterByDate($date_range)
			->withColumn('MONTH(date)','Month')
			->groupBy('Month')
			->withColumn('COUNT(date)','Count')
			->find();
		foreach ( $results as $result)
		{
			array_push($array,$result->getCount());
		};
		return join($array,",");		
	}
	
	function getPlaceCountsForGraph()
	{
		$data = [];
		foreach (['Yelp','TripAdvisor','Twitter'] as $service)
		{
			$name = $service.'Query';
			$datasource = new $name;
			$date_range = $this->getDateRange($this->year,$this->quarter);	
			$results = $datasource::create()
				->filterByDate($date_range)
				->withColumn('MONTH(date)','Month')
				->groupBy('Month')
				->withColumn('COUNT(date)','Count')
				->find();
			foreach ( $results as $result)
			{
				if (isset($data[$result->getMonth()]))
				{
					$data[$result->getMonth()] =+ $result->getCount();
				}
				else
				{
					$data[$result->getMonth()] = $result->getCount();
				}
				
			}
		}
		$datasource = new FlickrQuery;
		$results = $datasource::create()
				->filterByDatetaken($date_range)
				->withColumn('MONTH(dateTaken)','Month')
				->groupBy('Month')
				->withColumn('COUNT(dateTaken)','Count')
				->find();
		foreach ( $results as $result)
		{
				$data[$result->getMonth()] = $data[$result->getMonth()] + $result->getCount();
		}		
		return join(",",$data);
	}
	
	function getSpecificPlaceCountForGraph($place)
	{
		$data = [];
		$placeString = 'filterBy'.$place;
		foreach (['Yelp','TripAdvisor','Twitter'] as $service)
		{
			$name = $service.'Query';
			$datasource = new $name;
			$date_range = $this->getDateRange($this->year,$this->quarter);	
			$results = $datasource::create()
				->filterByDate($date_range)
				->$placeString(1)
				->withColumn('MONTH(date)','Month')
				->groupBy('Month')
				->withColumn('COUNT(date)','Count')
				
				->find();
			foreach ( $results as $result)
			{
				if (isset($data[$result->getMonth()]))
				{
					$data[$result->getMonth()] =+ $result->getCount();
				}
				else
				{
					$data[$result->getMonth()] = $result->getCount();
				}
				
			}
		}
		$datasource = new FlickrQuery;
		$results = $datasource::create()
				->filterByDatetaken($date_range)
				->$placeString(1)
				->withColumn('MONTH(dateTaken)','Month')
				->groupBy('Month')
				->withColumn('COUNT(dateTaken)','Count')
				->find();
		foreach ( $results as $result)
		{
				$data[$result->getMonth()] = $data[$result->getMonth()] + $result->getCount();
		}		
		return join(",",$data);
	}
	
	function getMonthsForGraph($service)
	{
		$array = array();
		$name = $service.'Query';
		$datasource = new $name;
		$date_range = $this->getDateRange($this->year,$this->quarter);	
		$results = $datasource::create()
			->filterByDate($date_range)
			->withColumn('MONTH(date)','Month')
			->withColumn('YEAR(date)','Year')
			->groupBy('Month')
			->find();
		foreach ( $results as $result)
		{
			$month = date("M", mktime(0, 0, 0,intval($result->getMonth()), 10));
			$year = $result->getYear();
			array_push($array,"'".$month." ".$year."'");
		};
		return join($array,",");		
	}
	
	function getAggregateCount($services_array)
	{
		$this_year_total = 0;
		foreach ( $services_array as $service )
		{
			$name = $service.'Query';
			$datasource = new $name;	
			$date_range = $this->getDateRange($this->year,$this->quarter);
			$this_year = $datasource::create()
				->filterByDate($date_range)
				->count();
			$this_year_total = $this_year + $this_year_total;	
		}
		return $this_year_total;
	}
	
	function getTop3Places()
	{
		$array = [];
		foreach( $this->places as $short_name => $full_name )
		{
			$array[$short_name] = $this->getAggregateCountForPlace(['Yelp','Twitter','TripAdvisor'],$short_name);
		}
		arsort($array);
		$array = array_slice($array,0,3);
		return $array;
	}
	
	function getFirstPlaceCountsForGraph()
	{
		$place = key(array_slice($this->getTop3Places(),0,1));
		return $this->getSpecificPlaceCountForGraph($place);
	}
	
	function getSecondPlaceCountsForGraph()
	{
		$place = key(array_slice($this->getTop3Places(),1,1));
		return $this->getSpecificPlaceCountForGraph($place);
	}
	
	function getThirdPlaceCountsForGraph()
	{
		$place = key(array_slice($this->getTop3Places(),2,1));
		return $this->getSpecificPlaceCountForGraph($place);
	}
	
	function getAggregateCountForPlace($services_array,$place)
	{
		$this_year_total = 0;
		$placeString = 'filterBy'.$place;
		$date_range = $this->getDateRange($this->year,$this->quarter);
		foreach ( $services_array as $service )
		{
			$name = $service.'Query';
			$datasource = new $name;	
			$this_year = $datasource::create()
				->filterByDate($date_range)
				->$placeString(1)
				->count();
			$this_year_total = $this_year + $this_year_total;	
		}
		
		$datasource = new FlickrQuery;	
		$flickr = $datasource::create()
			->filterByDatetaken($date_range)
			->$placeString(1)
			->count();
		
		return $this_year_total + $flickr;
	}
	
	function getCountPercentChange($service)
	{
		$name = $service.'Query';
		$datasource = new $name;	
		$date_range = $this->getDateRange($this->year,$this->quarter);
		$this_year = $datasource::create()
			->filterByDate($date_range)
			->count();
		$date_range = $this->getDateRange($this->year-1,$this->quarter);
		$last_year = $datasource::create()
			->filterByDate($date_range)
			->count();
		$change = round( ( ( $this_year - $last_year ) / $this_year ) * 100 );
		if ( $change < 0 )
		{
			return '<span class="glyphicon glyphicon-arrow-down"></span>'.abs($change)."%";
		}
		else
		{
			return '<span class="glyphicon glyphicon-arrow-up"></span>'.abs($change)."%";
		}
	}

	function getNumberOfTweetsFromPark($park_account_id)
	{
	}
	
	function getAggregateCountChange($services_array )
	{
		$this_year_total = 0;
		$last_year_total = 0;
		foreach ( $services_array as $service )
		{
			$name = $service.'Query';
			$datasource = new $name;	
			$date_range = $this->getDateRange($this->year,$this->quarter);
			$this_year = $datasource::create()
				->filterByDate($date_range)
				->count();
			$this_year_total = $this_year + $this_year_total;	
			$date_range = $this->getDateRange($this->year-1,$this->quarter);
			$last_year = $datasource::create()
				->filterByDate($date_range)
				->count();
			$last_year_total = $last_year_total + $last_year;	
		}	
		$change = round( ( ( $this_year_total - $last_year_total ) / $this_year_total ) * 100 );
		if ( $change < 0 )
		{
			return '<span class="glyphicon glyphicon-arrow-down"></span>'.abs($change)."%";
		}
		else
		{
			return '<span class="glyphicon glyphicon-arrow-up"></span>'.abs($change)."%";
		}
		
	}
	
	function getAggregateCountsForGraph($services_array)
	{
		$array = array();
		foreach ( $services_array as $service )
		{
			$count = $this->getCount($service);
			array_push($array,$count);
		}
		return join($array,',');	
	}
	
	function getAverageRating($service)
	{
		$datasource = new FtReviewsQuery;	
		$date_range = $this->getDateRange($this->year,$this->quarter);
		$avg_rating = $datasource::create()
				->filterBySocial($service)
				->filterByDate($date_range)
				->withColumn('AVG(ft_Reviews.rating)','average')
				->groupBy('social')
				->find();
		
		return round(current($avg_rating)->getAverage(),1);
	}
	
	function getAverageRatingForPlace($place)
	{
		$con = Propel::getConnection();
		$sql = "SELECT AVG(`rating`) FROM
(
	SELECT ft_Reviews.rating
	FROM ft_Reviews
	JOIN YELP on ft_Reviews.recordID = YELP.id
	WHERE ft_Reviews.social = 'yelp' 
		AND YELP.".$place." > 0
		AND YEAR(ft_Reviews.date) = ".$this->year."
		AND QUARTER(ft_Reviews.date) = ".$this->quarter."

	UNION ALL

	SELECT ft_Reviews.rating
	FROM ft_Reviews
	JOIN TRIP_ADVISOR on ft_Reviews.recordID = TRIP_ADVISOR.id
	WHERE ft_Reviews.social = 'trip_advisor' 
		AND QUARTER(ft_Reviews.date) = ".$this->quarter."
		AND YEAR(TRIP_ADVISOR.date) = ".$this->year."
		AND TRIP_ADVISOR.".$place." > 0

) AS child";
		$stmt = $con->prepare($sql);
		$stmt->execute();
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return round(current($results)['AVG(`rating`)'],1);
	}
		
	function getAverageRatingChange($service)
	{
		$datasource = new FtReviewsQuery;	
		$date_range = $this->getDateRange($this->year,$this->quarter);
		$avg_rating_this_year = $datasource::create()
				->filterBySocial($service)
				->filterByDate($date_range)
				->withColumn('AVG(ft_Reviews.rating)','average')
				->groupBy('social')
				->find();
		$avg_rating_this_year = current($avg_rating_this_year)->getAverage();
		$date_range = $this->getDateRange($this->year-1,$this->quarter);		
		$avg_rating_last_year = $datasource::create()
				->filterBySocial($service)
				->filterByDate($date_range)
				->withColumn('AVG(ft_Reviews.rating)','average')
				->groupBy('social')
				->find();
		$avg_rating_last_year = current($avg_rating_last_year)->getAverage();
		$change = round( ( ( $avg_rating_this_year - $avg_rating_last_year ) / $avg_rating_last_year ) * 100 );
		if ( $change < 0 )
		{
			return '<span class="glyphicon glyphicon-arrow-down"></span>'.abs($change)."%";
		}
		else
		{
			return '<span class="glyphicon glyphicon-arrow-up"></span>'.abs($change)."%";
		}
	}
	
	function getLastComment($service)
	{
		$name = $service.'Query';
		$datasource = new $name;
		$date_range = $this->getDateRange($this->year,$this->quarter);
		$last_comment = $datasource::create()
				->filterByDate($date_range)
				->orderByDate('desc')
				->limit(1)
				->find();
		switch ($service)
		{
			case 'Twitter':
				$message = current($last_comment)->getTweet();
				break;
			case 'Yelp':
				print('!');
				$message = current($last_comment)->getComment();
				break;
			case 'Flickr':
				$message = current($last_comment)->getPhotourl();
				break;
			case 'TripAdvisor':
				$message = current($last_comment)->getComment();
				break;
		}	
		return substr($message, 0, 50)."...";
	}


	function FLgetCount($service)
	{
		$date_range = $this->getDateRange($this->year,$this->quarter);
		$name = $service.'Query';
		$datasource = new $name;	
		$results = $datasource::create()
			->filterByDatetaken($date_range)
			->count();
		return $results;
	}
	
	function FLgetCountsForGraph($service)
	{
		$array = array();
		$name = $service.'Query';
		$datasource = new $name;
		$date_range = $this->getDateRange($this->year,$this->quarter);	
		$results = $datasource::create()
			->filterByDatetaken($date_range)
			->withColumn('MONTH(dateTaken)','Month')
			->groupBy('Month')
			->withColumn('COUNT(dateTaken)','Count')
			->find();
		foreach ( $results as $result)
		{
			array_push($array,$result->getCount());
		};
		return join($array,",");		
	}
	
	function FLgetMonthsForGraph($service)
	{
		$array = array();
		$name = $service.'Query';
		$datasource = new $name;
		$date_range = $this->getDateRange($this->year,$this->quarter);	
		$results = $datasource::create()
			->filterByDatetaken($date_range)
			->withColumn('MONTH(dateTaken)','Month')
			->withColumn('YEAR(dateTaken)','Year')
			->groupBy('Month')
			->find();
		foreach ( $results as $result)
		{
			$month = date("M", mktime(0, 0, 0,intval($result->getMonth()), 10));
			$year = $result->getYear();
			array_push($array,"'".$month." ".$year."'");
		};
		return join($array,",");		
	}
	
	function FLgetAggregateCount($services_array)
	{
		$this_year_total = 0;
		foreach ( $services_array as $service )
		{
			$name = $service.'Query';
			$datasource = new $name;	
			$date_range = $this->getDateRange($this->year,$this->quarter);
			$this_year = $datasource::create()
				->filterByDatetaken($date_range)
				->count();
			$this_year_total = $this_year + $this_year_total;	
		}
		return $this_year_total;
	}
	
	function FLgetCountPercentChange($service)
	{
		$name = $service.'Query';
		$datasource = new $name;	
		$date_range = $this->getDateRange($this->year,$this->quarter);
		$this_year = $datasource::create()
			->filterByDatetaken($date_range)
			->count();
		$date_range = $this->getDateRange($this->year-1,$this->quarter);
		$last_year = $datasource::create()
			->filterByDatetaken($date_range)
			->count();
		if ( $this_year == 0 OR $last_year == 0 )
		{
			return false;
		}
		$change = round( ( ( $this_year - $last_year ) / $this_year ) * 100 );
		if ( $change < 0 )
		{
			return '<span class="glyphicon glyphicon-arrow-down"></span>'.abs($change)."%";
		}
		else
		{
			return '<span class="glyphicon glyphicon-arrow-up"></span>'.abs($change)."%";
		}
	}
	
	function FLgetAggregateCountChange($services_array )
	{
		$this_year_total = 0;
		$last_year_total = 0;
		foreach ( $services_array as $service )
		{
			$name = $service.'Query';
			$datasource = new $name;	
			$date_range = $this->getDateRange($this->year,$this->quarter);
			$this_year = $datasource::create()
				->filterByDatetaken($date_range)
				->count();
			$this_year_total = $this_year + $this_year_total;	
			$date_range = $this->getDateRange($this->year-1,$this->quarter);
			$last_year = $datasource::create()
				->filterByDatetaken($date_range)
				->count();
			$last_year_total = $last_year_total + $last_year;	
		}
		if ( $this_year_total == 0 OR $last_year_total == 0 )
		{
			return false;
		}
		$change = round( ( ( $this_year_total - $last_year_total ) / $this_year_total ) * 100 );
		if ( $change < 0 )
		{
			return '<span class="glyphicon glyphicon-arrow-down"></span>'.abs($change)."%";
		}
		else
		{
			return '<span class="glyphicon glyphicon-arrow-up"></span>'.abs($change)."%";
		}
		
	}
	
	function FLgetAggregateCountsForGraph($services_array)
	{
		$array = array();
		foreach ( $services_array as $service )
		{
			$count = $this->FLgetCount($service);
			array_push($array,$count);
		}
		return join($array,',');	
	}

	
	function FLgetLastComment($service)
	{
		$name = $service.'Query';
		$datasource = new $name;
		$date_range = $this->getDateRange($this->year,$this->quarter);
		$last_comment = $datasource::create()
				->filterByDatetaken($date_range)
				->orderByDatetaken('desc')
				->limit(1)
				->find();
		if ( count($last_comment) > 0 )
		{
			switch ($service)
			{
				case 'Twitter':
					$message = current($last_comment)->getTweet();
					break;
				case 'Yelp':
					print('!');
					$message = current($last_comment)->getComment();
						break;
				case 'Flickr':
					$message = current($last_comment)->getPhotourl();
					break;
				case 'TripAdvisor':
					$message = current($last_comment)->getComment();
					break;
			}	
			return $message;
		}
		else
		{
			return false;
		}
		
	}

	
}

$db = new ParkDBQuery;
$db->setYear(htmlspecialchars(2013));
$db->setQuarter(htmlspecialchars(3));
print $db->getThirdPlaceCountsForGraph();

?>
