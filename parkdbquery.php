<?php
include 'propel_include.php';
date_default_timezone_set('America/Los_Angeles');

class ParkDBQuery
{
	var $year;
	var $quarter;
	var $datasources = array();
	
	function setYear($year)
	{
		$this->year = $year;
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
			array_push($array,$month." ".$year);
		};
		return join($array,", ");		
	}
	
	function getAggregateCount($services_array)
	{
		$total = 0;
		foreach ( $services_array as $service )
		{
			$count = $this->getCount($service);
			$total = $total + $count;
		}	
		return $total;
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
		return round( ( ( $this_year - $last_year ) / $this_year ) * 100 );
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
		print $last_year_total;
		print $this_year_total;
		return round( ( ( $this_year_total - $last_year_total ) / $this_year_total ) * 100 );
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
		$name = $service.'Query';
		$date_range = $this->getDateRange($this->year,$this->quarter);
		$avg_rating = $datasource::create()
				->filterBySocial($service)
				->filterByDate($date_range)
				->withColumn('AVG(ft_Reviews.rating)','average')
				->groupBy('social')
				->find();
		
		return current($avg_rating)->getAverage();
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
		return round( ( ( $avg_rating_this_year - $avg_rating_last_year ) / $avg_rating_last_year ) * 100 );
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
		return $message;
	}
	
}

?>
