<?php

require_once 'ParkViewPage.php';
require_once 'highroller/HighRollerColumnChart.php';

class ParkViewPlatformPage extends ParkViewPage
{
    function renderBody()
    {
        $this->renderSummaries();
        $this->renderPlatformList();
    }

    function renderSummaries()
    {
        
        echo '<div class="row" style="padding-top: 1em; background-color: #fafaf5">';
		echo ' 	<div class="col-md-3 stats" data-container="body" data-toggle="reviewspopover" data-placement="top" data-content=\'<div id="reviews" style="min-width: 200px; height: 150px; margin: 0 auto"></div>\'>';
	    echo ' 		<div class="stat text-center">';
	    echo             $this->db->getCount(['Yelp','Trip_Advisor']);
		echo ' 		</div>';
		echo ' 		<div class="stat-type text-center">reviews</div>';
		echo ' 	</div>';
		echo ' 	<div class="col-md-3 stats" data-container="body" data-toggle="CommentsPopover" data-placement="top" data-content=\'<div id="Comments" style="min-width: 200px; height: 150px; margin: 0 auto"></div>\'>';
		echo '		<div class="stat text-center">';
		echo             $this->db->getCount(['Facebook','Twitter']);
		echo ' 		</div>';
		echo ' 		<div class="stat-type text-center">comments</div>';
		echo ' 	</div>';
	    echo ' 	<div class="col-md-3 stats" data-container="body" data-toggle="ContributorsPopover" data-placement="top" data-content=\'<div id="Contributors" style="min-width: 200px; height: 150px; margin: 0 auto"></div>\'>';
		echo '		<div class="stat text-center">';
        echo             $this->db->getContributors();
        echo '       </div>';
		echo ' 		<div class="stat-type text-center">contributors</div>';
		echo '	</div>';
		echo '	<div class="col-md-3 stats" data-container="body" data-toggle="TotalReachPopover" data-placement="top" data-content=\'<div id="TotalReach" style="min-width: 200px; height: 150px; margin: 0 auto"></div>\'>';
		echo ' 		<div class="stat text-center">';
        echo             $this->db->getCount();
        echo '       </div>';
		echo ' 		<div class="stat-type text-center">total reach</div>';
		echo ' 	</div>';
        echo '</div>';
        echo '<div class="row" style="margin-bottom: 1em; background-color: #FAFAF5">';
		echo ' 	<div class="col-md-3">';
        echo '      <div class="stat-context text-center">';
        echo 	        $this->db->getAggregateCountChange(['Yelp','Trip_Advisor']).'from last year';
        echo '      </div>';
        echo '  </div>';
		echo '  <div class="col-md-3">';
        echo '      <div class="stat-context text-center">';
        echo 	        $this->db->getAggregateCountChange(['Twitter']).'from last year';
        echo '      </div>';
        echo '  </div>';
		echo ' 	<div class="col-md-3">';
        echo '      <div class="stat-context text-center">';
        echo             $this->db->getContributorsPercentChange().'from last year';
        echo '      </div>';
        echo '  </div>';
		echo '  <div class="col-md-3">';
        echo '      <div class="stat-context text-center">';
        echo            $this->db->getAggregateCountChange(['Yelp','Trip_Advisor','Twitter']).'from last year';
        echo '      </div>';
        echo '  </div>';
		echo '</div>';
    }

    function renderPlatformList()
    {
        $services = $this->getSortedServicesList();
        $no_count_services = array();
        foreach ( $services as $count => $setting )
		{
		    if ( $this->db->getCount($setting['name']) > 0)
		    {
                $this->renderPlatformListItem($setting);
		    }
		    else
		    {
			    array_push($no_count_services, $setting['full_name']);
		    }
		}
		if (count($no_count_services) > 0) 
            echo 'No data from '.join(', ',$no_count_services).' this quarter.'; 
    }	
    
    function getSortedServicesList()
    {
	    $no_count_services = [];
  	    $services = [ $this->db->getCount('yelp')  => [ 'name' => 'yelp', 'full_name' => 'Yelp', 'noun' => 'reviews' ],
  	    		      $this->db->getCount('trip_advisor') => ['name' => 'trip_advisor', 'full_name' => 'Trip Advisor', 'noun' => 'reviews' ],
  	    		      $this->db->getCount('flickr') => [ 'name' => 'flickr', 'full_name' => 'Flickr', 'noun' => 'photos' ],
  	    		      $this->db->getCount('twitter') => [ 'name' => 'twitter', 'full_name' => 'Twitter', 'noun' => 'posts' ],
  	    		      $this->db->getCount('facebook') => [ 'name' => 'facebook', 'full_name' => 'Facebook', 'noun' => 'posts' ]
  	    		    ];
  	    krsort($services);
        return $services;
    }

    function getPercentChange($setting)
    {
        $percent_change = $this->db->getCountPercentChange($setting['name']);
		$percent_change = $percent_change ? $percent_change.' from last year' : '';
        return $percent_change;
    }	

    function getAverageRating($setting)
    {
        $rating = $this->db->getAverageRating($setting['name']);
		$rating = $rating 
                ? $rating.'<span class="gray">/5</span>' : '<span class="gray">N/A</span>';
        return $rating;
    }

    function getChart($setting)
    {

        $chartData = $this->db->getCountForGraph($setting['name'])['counts'];
        $series = new HighRollerSeriesData();
		$series->addName($setting['full_name'].' '.$setting['noun'])->addData($chartData);
		$chart = new HighRollerColumnChart();
		$chart->chart->renderTo = $setting['name'].'Chart';
		$chart->title->text = '';
        $chart->title->color = '#616161'; 
        $chart->legend->enabled = false;
        $chart->style->fontFamily = 'Lato, Helvetica';
		$chart->yAxis->title->text = ucwords($setting['noun']);
        $chart->yAxis->title->style->color = "#9C9999";
        $chart->yAxis->lineColor = "#9C9999";
        $chart->yAxis->stackLabels->enabled = true;
        $chart->yAxis->stackLabels->style->color = '#9C9999';
        $chart->yAxis->gridLineWidth = 0;
        $chart->xAxis->title->text = "Month";
		$chart->xAxis->title->style->color = "#9C9999";
        $chart->xAxis->categories = $this->db->getCountForGraph($setting['name'])['months'];
        $chart->xAxis->labels->style->color = "#9C9999";
        $chart->plotOptions->column->stacking = "normal";
        $chart->plotOptions->column->pointPadding = 0.2;
        $chart->plotOptions->column->borderWidth = 0;
        $chart->exporting->enabled = true;
        $chart->colors = ['#89AC6A'];
        $chart->addSeries($series);
        return $chart;	
    }

    function renderPlatformListItem($setting)
    {
	echo '
		<div class="row report-row" style="padding-top: 2em; padding-bottom: 2em;">
			<div class="col-md-2" style="color: #616161;">
				<img class="stat-image" src="images/icons/'.$setting['name'].'/'.$setting['name'].'-128-black.png" height="64" width="64" alt=""/>
				'.$setting['full_name'].'
			</div>
			<div class="col-md-2 text-center">
					<div class="stat-junior">'.$this->db->getCount($setting['name']).'</div>
					<div class="stat-type">reviews from visitors</div>
					<div class="stat-context text-center">'.$this->getPercentChange($setting).'</div>
			</div>
			<div class="col-md-4">
				<div style="height:10em;" id="'.$setting['name'].'Chart">
					<script type="text/javascript">
						'.$this->getChart($setting)->renderChart().'
					</script>
				</div>
			</div>
			<div class="col-md-2 text-center">
				<div class="stat-junior">'.$this->getAverageRating($setting).'</div>
				<div class="stat-type">Average rating</div>
			</div>
			<div class="col-md-2" style="font-size: 0.8em;">'.$this->db->getLastComment($setting['name']).'
			</div>
		</div>
		';
    }
}
?>
