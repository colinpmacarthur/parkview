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
	var $rankedplaces;
	
	function setYear($year)
	{
		$this->year = $year;
	}
	
	function getYear()
	{
		return $this->year;
	}
	
	function getQuarter()
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
	
	function getCount($services=['all'],$place=false,$year=false)
	{
		if ( is_string($services) ) $services = [$services];
		$year = $year ? $year : $this->getYear();

		$total = 0;
		foreach ( $services as $service )
		{
			$count = FactSnsdataQuery::create()
		 	        ->_if($place)
                          	  ->useDimPlacesQuery()
			           ->filterByPlace($place)
		      	         ->endUse()
			        ->_endif()
			        ->_if($service!="all")
			          ->useDimCommentsQuery()
			           ->filterBySns($service)
			          ->endUse()
                                ->_endif()
			        ->useDimPeriodQuery()
				 ->filterByYear($year)
				 ->filterByQuarter($this->getQuarter())
				->endUse()
				->count();
			$total =+ $count;
		}
		return $total;
	}
	
	function getFullName($short_name)
	{
		return $this->places[$short_name];
	}
	
	function getCountForGraph($service=false, $place=false)
	{
		$counts = array();
		$months = array();
		$results = FactSnsdataQuery::create()
			 ->_if($place)
                           ->useDimPlacesQuery()
			    ->filterByPlace($place)
		      	   ->endUse()
			  ->_endif()
			  ->_if($service!="all")
			   ->useDimCommentsQuery()
			    ->filterBySns($service)
			   ->endUse()
                          ->_endif()
			  ->useDimPeriodQuery()
			   ->filterByYear($this->getYear())
			   ->filterByQuarter($this->getQuarter())
			   ->groupBy('month')
			  ->endUse()
			  ->withColumn('COUNT(FACT_SNSDATA.id)','Count')
			  ->withColumn('DIM_PERIOD.Month', 'Month')
			  ->find();
		foreach ( $results as $result)
		{
			array_push($counts,intval($result->getCount()));
			$dateTimeObj = DateTime::createFromFormat('!m', $result->getMonth());
			array_push($months,$dateTimeObj->format('F'));
		};
		return [ 'counts' => $counts,
			 'months' => $months
		       ];		

	}
	
	function getCountsForGraph($service)
	{
		return $this->getCountForGraph($service)['counts'];
	}
	function getPlaceCountsForGraph()
	{
		return $this->getCountForGraph()['counts'];	
	}
	
	function getSpecificPlaceCountForGraph($place)
	{
		return $this->getCountForGraph(false,$place)['counts'];
	}
	
	function getMonthsForGraph($service)
	{
		return $this->getCountForGraph($service)['months'];
	}
	
	function getAggregateCount($services_array)
	{
		return $this->getCount($services_array);
	}

	function getPlaceRanked($rank=0)
	{
		if (!isset($this->rankedplaces))
		{
			$results_array = array();
			$results = FactSnsdataQuery::create()
                	          ->useDimPlacesQuery()
				   ->groupBy('Place')
				  ->endUse()
				 ->useDimPeriodQuery()
				  ->filterByYear($this->getYear())
				  ->filterByQuarter($this->getQuarter())
				 ->endUse()
				 ->withColumn('COUNT(FACT_SNSDATA.row_id)','Count')
				 ->withColumn('DIM_PLACES.Place','Place')
				 ->orderByCount('desc')
				 ->find();
			foreach ( $results as $result)
			{
				if (($result->getPlace()))
				{
					array_push($results_array,
						  [ 
						    'place' => $result->getPlace(),
						    'count' => $result->getCount()
						  ]
				 		 );
				}
			};
			$this->rankedplaces =  $results_array;	
		}
		if ( $rank == 0 )
		{
			return $this->rankedplaces;
		}
		else
		{
			return $this->rankedplaces[$rank-1];
		} 
	}
	
	function getFirstPlaceCountsForGraph()
	{
		$place = $this->getPlaceRanked(1)['place'];
		return $this->getCountForGraph(false,$place)['counts'];
	}
	
	function getSecondPlaceCountsForGraph()
	{
		$place = $this->getPlaceRanked(2)['place'];
		return $this->getCountForGraph(false,$place)['counts'];
	}

	function getThirdPlaceCountsForGraph()
	{
		return $this->getPlaceRanked(3)['count'];
	}
	
	function getAggregateCountForPlace($services_array,$place)
	{
		return $this->getCount($services_array,$place);
	}
	
	function getCountPercentChange($service='all')
	{
		$this_year = $this->getCount($service);
		$last_year = $this->getCount($service,false,$this->getYear()-1);
		if ( $last_year == 0 ) return 'N/A';
		$change = round( ( ( $this_year - $last_year ) / $last_year ) * 100 );
		if ( $change < 0 ) {
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
		return $this->getCountPercentChange($services_array);
	}
	
	function getAggregateCountsForGraph($services_array,$place=false)
	{
		$array = array();
		foreach ( $services_array as $service )
		{
			$count = $this->getCount($service,$place);
			array_push($array,$count);
		}
		return join($array,',');	
	}
	
	function getAggregateCountForGraph($services_array,$place=false)
	{
		$array = array();
		foreach ( $services_array as $service )
		{
			$count = $this->getCount($service,$place);
			array_push($array,$count);
		}
		return $array;	
	}
	function getContributors($services=['all'],$place=false)
	{
		if ( is_string($services) )
		{
			$services = [$services];
		};
		$total = 0;
		foreach ( $services as $service )
		{
			$count = FactSnsdataQuery::create()
			         ->_if($place)
                                  ->useDimPlacesQuery()
		 	           ->filterByPlace($place)
		      	          ->endUse()
			         ->_endif()
			         ->_if($service!="all")
			          ->useDimCommentsQuery()
			           ->filterBySns($service)
			          ->endUse()
                                 ->_endif()
			         ->useDimPeriodQuery()
				  ->filterByYear($this->getYear())
				  ->filterByQuarter($this->getQuarter())
				 ->endUse()
				 ->useDimUserQuery()
				  ->groupBy('user')
				 ->endUse()
				->count();
			$total =+ $count;
		}
		return $total;
	}

	
	function getAggregateContributorsForGraph($services_array)
	{
		$array = array();
		foreach ( $services_array as $service )
		{
			$count = $this->getContributors($service);
			array_push($array,$count);
		}
		return join($array,',');	
	}
		
	function getContributorsPercentChange($service='all')
	{
		$this_year = $this->getContributors($service);
		$this->year = $this->year - 1;
		$last_year = $this->getContributors($service);
		if ( $last_year == 0 ) return 'N/A';
		$this->year = $this->year + 1;
		$change = round( ( ( $this_year - $last_year ) / $this_year ) * 100 );
		if ( $change < 0 ) {
			return '<span class="glyphicon glyphicon-arrow-down"></span>'.abs($change)."%";
		}
		else
		{
			return '<span class="glyphicon glyphicon-arrow-up"></span>'.abs($change)."%";
		}
	}


	function getAverageRating($services=['all'],$place=false)
	{	
		if ( is_string($services) )
		{
			$services = [$services];
		};
		$count = 0;
		$sum = 0;
		foreach ( $services as $service )
		{
			$result = FactSnsdataQuery::create()
		 	        ->_if($place)
                                 ->useDimPlacesQuery()
		 	           ->filterByPlace($place)
		      	         ->endUse()
			         ->_endif()
			         ->_if($service!="all")
			          ->useDimCommentsQuery()
			           ->filterBySns($service)
			          ->endUse()
                                 ->_endif()
			         ->useDimPeriodQuery()
				  ->filterByYear($this->getYear())
				  ->filterByQuarter($this->getQuarter())
				 ->endUse()
				 ->filterByRating(array('min'=>1))
				 ->withColumn('SUM(FACT_SNSDATA.rating)','Sum')
				 ->withColumn('COUNT(FACT_SNSDATA.id)','Count')
				 ->find();
			if ( count($result) < 1 ) return false;
			$sum =+ current($result)->getSum();
			$count =+ current($result)->getCount();
			if ( $count == 0 ) return false;
		}

		return round($sum/$count,1);
	}
	
	function getAverageRatingForPlace($place)
	{
		return $this->getAverageRating('all',$place);
	}
	
	function getAverageRatingChange($services='all',$place=false)
	{
		$this_year = $this->getAverageRating($services,$place);
		$this->year = $this->year - 1;
		$last_year = $this->getAverageRating($services,$place);
		$this->year = $this->year + 1;
		$change = round( ($this_year-$last_year)/$last_year, 1);
		if ($change < 0)
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
		$results = DimCommentsQuery::create()
		         ->filterBySns($service)
			 ->useFactSnsdataQuery()
		          ->useDimPeriodQuery()
			   ->filterByYear($this->getYear())
			   ->filterByQuarter($this->getQuarter())
			  ->endUse()
		         ->endUse()
                         ->withColumn('DIM_PERIOD.creation_date','Date')
			 ->orderBy('Date')
			->limit(1)
			->find();
		if (count($results) < 1) return false; 
		return substr(current($results)->getComment(),0,125).'...<a href="'.current($results)->getLink().'"> Read more</a>';
	}


	function FLgetCount($service)
	{
		return $this->getCount('Flickr');
	}
	
	function FLgetCountsForGraph($service)
	{
		return $this->getCountForGraph('Flickr')['counts'];
	}
	
	function FLgetMonthsForGraph($service)
	{
		return $this->getCountForGraph('Flickr')['months'];
	}

	function FLgetCountPercentChange($service)
	{
		return $this->getCountPercentChange('Flickr');
	}
	
	function FLgetLastComment($service)
	{
		return $this->getLastComment('Twitter');
	}

	
}

