<?php

require_once 'ParkViewPage.php';
require_once 'highroller/HighRollerColumnChart.php';
require_once 'highroller/HighRollerBarChart.php';

class ParkViewPlatformPage extends ParkViewPage
{
    function renderBody()
    {
		$this->renderPopoverChartJavascript();
        echo '<span style="font-weight: 600; color: #616161; margin-left: -15px;">Summary</span>';
		$this->renderSummaries();
        echo '<span style="font-weight: 600; color: #616161; margin-left: -15px;">Platform Details</span>';
		$this->renderPlatformList();
    }

	function renderAdditionalHead()
	{
	}

    function renderSummaries()
    {
        
        echo '<div class="row" style="padding-top: 1em; background-color: #fafaf5">';
		echo ' 	<div class="col-md-3 stats" data-container="body" data-toggle="ReviewsPopover" data-placement="top" data-content=\'<div id="Reviews" style="min-width: 200px; height: 150px; margin: 0 auto"></div>\'>';
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

	function renderPopoverChartJavascript()
	{
		echo '<script language="javascript" type="text/javascript">'."\r\n";
		echo "	$(function () {"."\r\n";
		echo "	$('[data-toggle=tooltip]').tooltip();"."\r\n";
		echo "	$('[data-toggle=ReviewsPopover]').popover({trigger:'hover', html:'true', placement:'bottom'});"."\r\n";
		echo "	$('[data-toggle=ReviewsPopover]').on('shown.bs.popover', function () {"."\r\n";
		echo "		$('#Reviews').highcharts({"."\r\n";
		echo "            chart: {"."\r\n";
		echo "                type: 'bar',"."\r\n";
		echo "                style: {"."\r\n";
		echo "						fontFamily: 'Lato, Helvetica'"."\r\n";
		echo "						}"."\r\n";
		echo "            },"."\r\n";
		echo "            title: {"."\r\n";
		echo "                text: ''"."\r\n";
		echo "            },"."\r\n";
		echo "            subtitle: {"."\r\n";
		echo "                text: ''"."\r\n";
		echo "            },"."\r\n";
		echo "            xAxis: {"."\r\n";
		echo "                categories: ["."\r\n";
		echo "                    'Yelp',"."\r\n";
		echo "                    'TripAdvisor'"."\r\n";
		echo "                ],"."\r\n";
		echo "                tickLength: 0,"."\r\n";
		echo "                "."\r\n";
		echo "            },"."\r\n";
		echo "            yAxis: {"."\r\n";
		echo "                    gridLineWidth: 0,	"."\r\n";
		echo "					title: {"."\r\n";
		echo "						text: ''"."\r\n";
		echo "					},"."\r\n";
		echo "					labels: {"."\r\n";
		echo "						enabled: false"."\r\n";
		echo "					},"."\r\n";
		echo "					stackLabels: {"."\r\n";
		echo "						style: {"."\r\n";
		echo "								color: 'black'"."\r\n";
		echo "								},"."\r\n";
		echo "						enabled: true"."\r\n";
		echo "					}"."\r\n";
		echo "            },"."\r\n";
		echo "            plotOptions: {"."\r\n";
		echo "                bar: {"."\r\n";
		echo "					stacking: 'normal',"."\r\n";
		echo "                    pointPadding: 0.2,"."\r\n";
		echo "                    borderWidth: 0"."\r\n";
		echo "                }"."\r\n";
		echo "                "."\r\n";
		echo "            },"."\r\n";
		echo "            series: [{"."\r\n";
		echo "                name: 'Number of Reviews',"."\r\n";
		echo "                data: [".$this->db->getAggregateCountsForGraph(['Yelp','Trip_Advisor'])."]"."\r\n";
		echo "    "."\r\n";
		echo "            }],"."\r\n";
		echo "            legend: { "."\r\n";
		echo "				enabled: false "."\r\n";
		echo "			},"."\r\n";
		echo "			exporting: {"."\r\n";
		echo "				enabled: false"."\r\n";
		echo "			},"."\r\n";
		echo "			colors: ['#89AC6A']"."\r\n";
		echo "        });"."\r\n";
		echo "    });"."\r\n";
		echo "    $('[data-toggle=CommentsPopover]').popover({trigger:'hover', html:'true', placement:'bottom'});"."\r\n";
		echo "	$('[data-toggle=CommentsPopover]').on('shown.bs.popover', function () {"."\r\n";
		echo "		$('#Comments').highcharts({"."\r\n";
		echo "            chart: {"."\r\n";
		echo "                type: 'bar',"."\r\n";
		echo "                style: {"."\r\n";
		echo "						fontFamily: 'Lato, Helvetica'"."\r\n";
		echo "						}"."\r\n";
		echo "            },"."\r\n";
		echo "            title: {"."\r\n";
		echo "                text: ''"."\r\n";
		echo "            },"."\r\n";
		echo "            subtitle: {"."\r\n";
		echo "                text: ''"."\r\n";
		echo "            },"."\r\n";
		echo "            xAxis: {"."\r\n";
		echo "                categories: ["."\r\n";
		echo "                    'Facebook','Twitter'"."\r\n";
		echo "                ],"."\r\n";
		echo "                tickLength: 0,"."\r\n";
		echo "                "."\r\n";
		echo "            },"."\r\n";
		echo "            yAxis: {"."\r\n";
		echo "                    gridLineWidth: 0,	"."\r\n";
		echo "					title: {"."\r\n";
		echo "						text: ''"."\r\n";
		echo "					},"."\r\n";
		echo "					labels: {"."\r\n";
		echo "						enabled: false"."\r\n";
		echo "					},"."\r\n";
		echo "					stackLabels: {"."\r\n";
		echo "						style: {"."\r\n";
		echo "								color: 'black'"."\r\n";
		echo "								},"."\r\n";
		echo "						enabled: true"."\r\n";
		echo "					}"."\r\n";
		echo "            },"."\r\n";
		echo "            plotOptions: {"."\r\n";
		echo "                bar: {"."\r\n";
		echo "					stacking: 'normal',"."\r\n";
		echo "                    pointPadding: 0.2,"."\r\n";
		echo "                    borderWidth: 0"."\r\n";
		echo "                }"."\r\n";
		echo "                "."\r\n";
		echo "            },"."\r\n";
		echo "            series: [{"."\r\n";
		echo "                name: 'Number of Comments',"."\r\n";
		echo "                data: [".$this->db->getAggregateCountsForGraph(['Facebook','Twitter'])."]"."\r\n";
		echo "    "."\r\n";
		echo "            }],"."\r\n";
		echo "            legend: { "."\r\n";
		echo "				enabled: false "."\r\n";
		echo "			},"."\r\n";
		echo "			exporting: {"."\r\n";
		echo "				enabled: false"."\r\n";
		echo "			},"."\r\n";
		echo "			colors: ['#89AC6A']"."\r\n";
		echo "        });"."\r\n";
		echo "    });"."\r\n";
		echo "	$('[data-toggle=ContributorsPopover]').popover({trigger:'hover', html:'true', placement:'bottom'});"."\r\n";
		echo "	$('[data-toggle=ContributorsPopover]').on('shown.bs.popover', function () {"."\r\n";
		echo "		$('#Contributors').highcharts({"."\r\n";
		echo "            chart: {"."\r\n";
		echo "                type: 'bar',"."\r\n";
		echo "                style: {"."\r\n";
		echo "						fontFamily: 'Lato, Helvetica'"."\r\n";
		echo "						}"."\r\n";
		echo "            },"."\r\n";
		echo "            title: {"."\r\n";
		echo "                text: ''"."\r\n";
		echo "            },"."\r\n";
		echo "            subtitle: {"."\r\n";
		echo "                text: ''"."\r\n";
		echo "            },"."\r\n";
		echo "            xAxis: {"."\r\n";
		echo "                categories: ["."\r\n";
		echo "                    'Yelp',"."\r\n";
		echo "                    'Trip Ad.',"."\r\n";
		echo "					  'Facebook',"."\r\n";
		echo "		   			  'Twitter',"."\r\n";
		echo "		    		  'Flickr'"."\r\n";
		echo "                ],"."\r\n";
		echo "                tickLength: 0,"."\r\n";
		echo "                "."\r\n";
		echo "            },"."\r\n";
		echo "            yAxis: {"."\r\n";
		echo "                    gridLineWidth: 0,	"."\r\n";
		echo "					title: {"."\r\n";
		echo "						text: ''"."\r\n";
		echo "					},"."\r\n";
		echo "					labels: {"."\r\n";
		echo "						enabled: false"."\r\n";
		echo "					},"."\r\n";
		echo "					stackLabels: {"."\r\n";
		echo "						style: {"."\r\n";
		echo "								color: 'black'"."\r\n";
		echo "								},"."\r\n";
		echo "						enabled: true"."\r\n";
		echo "					}"."\r\n";
		echo "            },"."\r\n";
		echo "            plotOptions: {"."\r\n";
		echo "                bar: {"."\r\n";
		echo "					stacking: 'normal',"."\r\n";
		echo "                    pointPadding: 0.2,"."\r\n";
		echo "                    borderWidth: 0"."\r\n";
		echo "                }"."\r\n";
		echo "                "."\r\n";
		echo "            },"."\r\n";
		echo "            series: [{"."\r\n";
		echo "                name: 'Number of Contributors',"."\r\n";
		echo "                data: [".$this->db->getAggregateContributorsForGraph(['Yelp','Trip_Advisor','Facebook','Twitter','Flicker'])."]"."\r\n";
		echo "    "."\r\n";
		echo "            }],"."\r\n";
		echo "            legend: { "."\r\n";
		echo "				enabled: false "."\r\n";
		echo "			},"."\r\n";
		echo "			exporting: {"."\r\n";
		echo "				enabled: false"."\r\n";
		echo "			},"."\r\n";
		echo "			colors: ['#89AC6A']"."\r\n";
		echo "        });"."\r\n";
		echo "    });"."\r\n";
		echo "	    $('[data-toggle=TotalReachPopover]').popover({trigger:'hover', html:'true', placement:'bottom'});"."\r\n";
		echo "    $('[data-toggle=TotalReachPopover]').on('shown.bs.popover', function () {"."\r\n";
		echo "		$('#TotalReach').highcharts({"."\r\n";
		echo "            chart: {"."\r\n";
		echo "                type: 'bar',"."\r\n";
		echo "                style: {"."\r\n";
		echo "						fontFamily: 'Lato, Helvetica'"."\r\n";
		echo "						}"."\r\n";
		echo "            },"."\r\n";
		echo "            title: {"."\r\n";
		echo "                text: ''"."\r\n";
		echo "            },"."\r\n";
		echo "            subtitle: {"."\r\n";
		echo "                text: ''"."\r\n";
		echo "            },"."\r\n";
		echo "            xAxis: {"."\r\n";
		echo "                categories: ["."\r\n";
		echo "                    'Yelp',"."\r\n";
		echo "                    'Trip Ad.',"."\r\n";
		echo "					  'Facebook',"."\r\n";
		echo "		   			  'Twitter',"."\r\n";
		echo "		    		  'Flickr'"."\r\n";
		echo "                ],"."\r\n";
		echo "                tickLength: 0,"."\r\n";
		echo "                "."\r\n";
		echo "            },"."\r\n";
		echo "            yAxis: {"."\r\n";
		echo "                    gridLineWidth: 0,	"."\r\n";
		echo "					title: {"."\r\n";
		echo "						text: ''"."\r\n";
		echo "					},"."\r\n";
		echo "					labels: {"."\r\n";
		echo "						enabled: false"."\r\n";
		echo "					},"."\r\n";
		echo "					stackLabels: {"."\r\n";
		echo "						style: {"."\r\n";
		echo "								color: 'black'"."\r\n";
		echo "								},"."\r\n";
		echo "						enabled: true"."\r\n";
		echo "					}"."\r\n";
		echo "            },"."\r\n";
		echo "            plotOptions: {"."\r\n";
		echo "                bar: {"."\r\n";
		echo "					stacking: 'normal',"."\r\n";
		echo "                    pointPadding: 0.2,"."\r\n";
		echo "                    borderWidth: 0"."\r\n";
		echo "                }"."\r\n";
		echo "                "."\r\n";
		echo "            },"."\r\n";
		echo "            series: [{"."\r\n";
		echo "                name: 'Number of Comments',"."\r\n";
		echo "                data: [".$this->db->getAggregateCountsForGraph(['Yelp','Trip_Advisor','Facebook','Twitter','Flickr'])."]"."\r\n";
		echo "    "."\r\n";
		echo "            }],"."\r\n";
		echo "            legend: { "."\r\n";
		echo "				enabled: false "."\r\n";
		echo "			},"."\r\n";
		echo "			exporting: {"."\r\n";
		echo "				enabled: false"."\r\n";
		echo "			},"."\r\n";
		echo "			colors: ['#89AC6A']"."\r\n";
		echo "        });"."\r\n";
		echo "    });"."\r\n";
		echo "	});"."\r\n";
		echo "</script>"."\r\n";
	}

}
?>
