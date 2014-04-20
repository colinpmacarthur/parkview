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
	
	function getCount($services=['all'],$place=false)
	{
		if ( is_string($services) )
		{
			$services = [$services];
		};
		$total = 0;
		foreach ( $services as $service )
		{
			$count = FactSnsdataQuery::create()
			  	->_if($service!="all"||$place)
                          	  ->useTrackSitesQuery()
		 	           ->_if($service!="all")
			            ->useSocialnetsQuery()
			             ->filterBySns($service)
			            ->endUse()
                                   ->_endif()
			          ->_if($place)
			           ->filterByPlace($place)
			          ->_endif()
		      	         ->endUse()
			        ->_endif()
				->useDimPeriodQuery()
				 ->filterByYear($this->getYear())
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
			 ->_if($service||$place)
                          ->useTrackSitesQuery()
		 	   ->_if($service)
			    ->useSocialnetsQuery()
			     ->filterBySns($service)
			    ->endUse()
                           ->_endif()
			   ->_if($place)
			    ->filterByPlace($place)
			   ->_endif()
			  ->endUse()
			 ->_endif()
			 ->useDimPeriodQuery()
			  ->filterByYear($this->getYear())
			  ->filterByQuarter($this->getQuarter())
			  ->groupBy('month')
			 ->endUse()
			 ->withColumn('COUNT(id)','Count')
			 ->withColumn('DIM_PERIOD.Month', 'Month')
			 ->find();
		foreach ( $results as $result)
		{
			array_push($counts,$result->getCount());
			$dateTimeObj = DateTime::createFromFormat('!m', $result->getMonth());
			array_push($months,"'".$dateTimeObj->format('F')."'");
		};
		return [ 'counts' => join($counts,","),
			 'months' => join($months,",")
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
                	          ->useTrackSitesQuery()
				   ->groupBy('Place')
				  ->endUse()
				 ->useDimPeriodQuery()
				  ->filterByYear($this->getYear())
				  ->filterByQuarter($this->getQuarter())
				 ->endUse()
				 ->withColumn('COUNT(id)','Count')
				 ->withColumn('TRACK_SITES.Place','Place')
				 ->orderByCount('desc')
				 ->find();
			foreach ( $results as $result)
			{
				if ($result->getPlace())
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
			return array_slice($this->rankedplaces,0,2);
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
		$this->year = $this->year - 1;
		$last_year = $this->getCount($service);
		if ( $last_year == 0 ) return 'N/A';
		$this->year = $this->year + 1;
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
			  	->_if($service!="all"||$place)
                          	  ->useTrackSitesQuery()
		 	           ->_if($service!="all")
			            ->useSocialnetsQuery()
			             ->filterBySns($service)
			            ->endUse()
                                   ->_endif()
			          ->_if($place)
			           ->filterByPlace($place)
			          ->_endif()
		      	         ->endUse()
			        ->_endif()
				->useDimPeriodQuery()
				 ->filterByYear($this->getYear())
				 ->filterByQuarter($this->getQuarter())
				->endUse()
				->useDimUserQuery()
				 ->useAllsnsdataQuery()
				  ->groupBy('user')
				 ->endUse()
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
			  	->_if($service!="all"||$place)
                          	  ->useTrackSitesQuery()
		 	           ->_if($service!="all")
			            ->useSocialnetsQuery()
			             ->filterBySns($service)
			            ->endUse()
                                   ->_endif()
			          ->_if($place)
			           ->filterByPlace($place)
			          ->_endif()
		      	         ->endUse()
			        ->_endif()
				->useDimPeriodQuery()
				 ->filterByYear($this->getYear())
				 ->filterByQuarter($this->getQuarter())
				 ->groupBy('Year')
				->endUse()
				->filterByRating(array('min'=>1))
				->withColumn('SUM(FACT_SNSDATA.rating)','Sum')
				->withColumn('COUNT(id)','Count')
				->find();
			if ( count($result) < 1 ) return false;
			$sum =+ current($result)->getSum();
			$count =+ current($result)->getCount();
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
			->useFactSnsdataQuery()
		 	 ->useTracksitesQuery()
		          ->useSocialnetsQuery()
			   ->filterBySns($service)
			  ->enduse() 
			 ->enduse()
			 ->useDimPeriodQuery()
			  ->filterByYear($this->getYear())
			  ->filterByQuarter($this->getQuarter())
			 ->enduse()	
			->enduse()			 		 
			->withColumn('DIM_PERIOD.creation_date','Date')
			->orderBy('Date')
			->limit(1)
			->find();
		if (count($results) < 1) return false; 
		return substr(current($results)->getComment(),0,75)."...";
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

$db = new ParkDBQuery;
$db->setYear(htmlspecialchars(2014));
$db->setQuarter(htmlspecialchars(2));
print($db->getCount(["Facebook","Twitter"])." ");
print($db->getAggregateCountsForGraph(["Facebook","Twitter"]));
