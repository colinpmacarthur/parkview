<?php
require_once "ParkViewPlatformPage.php";
require_once "ParkViewPage.php";
$page = new ParkViewPage;
$page->setPageName('Popular Places');
$page->setYearQuarter(htmlspecialchars($_GET["year"]),htmlspecialchars($_GET["quarter"]));
?>
<!DOCTYPE html>
<html lang="en">
    <?php $page->renderHead() ?> 
    <body>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script type="text/javascript" src="js/maplabel.js"></script>
		<script src="http://people.ischool.berkeley.edu/~sasaki/fp/d3-master/d3.js"></script>	
	<div class="container">
	<?php 
		$page->renderNav();
		$page->renderTitle();
	 ?>
		<div class="row">
			<div class="col-md-6" id="map-canvas" style="height: 700px;">
				<script>
					var cityCircle;
					var cityMarker;

					function initialize() {

					// Create the map.
						var mapOptions = {
							zoom: 11,
							center: new google.maps.LatLng(40.497852, -121.420814),
							mapTypeId: google.maps.MapTypeId.ROADMAP
						}; //var mapOptions closed

						var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

					//ordering php to get data
						$.ajax({
							type: 'POST',
							url: 'getSnsRatingsByLocation.php',
							data: {'year':$year, 'quarter':$quarter1},
							dataType: "json",

							success: function(hoge) {
								//console.log(JSON.stringify(hoge));
								//iterate making circles, markers, and infowindows for each point
								//alert(hoge[0].ratingThree);
								var i;
								for (i =0; i<hoge.length; i++) {
								// make a circle for i visiting site
									var populationOptions = {
										strokeColor: '#FF0000',
										strokeOpacity: 0.8,
										strokeWeight: 1,
										fillColor: '#FF0000',
										fillOpacity: 0.35,
										map: map,
										center: new google.maps.LatLng(hoge[i].latitude, hoge[i].longitude),
										radius: hoge[i].totalMentions * (100),
										clickable: true
									}; //population option closed
		 
					 				// add the circle to the map.
									cityCircle = new google.maps.Circle(populationOptions);

									// create label
									var mapLabel = new MapLabel({
										text: hoge[i].siteName + ' : ' + hoge[i].totalMentions,
										map: map,
										fontSize: 12,
										align: 'center'
									});

									// add the label to the map
									mapLabel.set('position', new google.maps.LatLng(hoge[i].latitude, hoge[i].longitude));

								} //for roop closed
							}, //success closed
							error: function(XMLHttpRequest, textStatus, errorThrown) {
								alert('Error : ' + errorThrown);
							} // error closed
						}); //ajax closed
					}; // function closed

					google.maps.event.addDomListener(window, 'load', initialize);
				</script>
				</div>
				<div class="col-md-6" style="overflow: scroll; height: 700px;">
					<span style="color: #616161; font-weight: 600;">Park Places</span><?php
						$i = 1;
						foreach ($page->db->getPlaceRanked() as $place)
						{
						$rating = $page->db->getAverageRating('all',$place['place']);
						$rating = $rating ? $rating.'<span class=gray>/5</span>' : '<span class="gray">N/A'; 


					$chart2Data = $page->db->getAggregateCountForGraph(['Trip_Advisor','Yelp','Facebook','Twitter','Flickr'],$place['place']);
       				$series = new HighRollerSeriesData();
	   		 		$series->addName('Total activity')->addData($chart2Data);
	   		 	 	$chart2 = new HighRollerBarChart();
	   		 	 	$chart2->chart->renderTo = 'chart'.$i;
	   		 		$chart2->title->text = '';
       		 	 	$chart2->title->color = '#616161'; 
       		 	 	$chart2->legend->enabled = false;
       		 	 	$chart2->style->fontFamily = 'Lato, Helvetica';
	   		 	 	$chart2->yAxis->title->text = ucwords('Total activity');
       		 	 	$chart2->yAxis->title->style->color = "#9C9999";
       		 	 	$chart2->yAxis->lineColor = "#9C9999";
       		 	 	$chart2->yAxis->stackLabels->enabled = true;
       		 	 	$chart2->yAxis->stackLabels->style->color = '#9C9999';
       		 	 	$chart2->yAxis->gridLineWidth = 0;
       		 	 	$chart2->xAxis->title->text = "Month";
	   		 	 	$chart2->xAxis->title->style->color = "#9C9999";
       		 	 	$chart2->xAxis->categories = ['Trip Advisor',
					'Yelp','Facebook','Twitter','Flickr'];
       		 	 	$chart2->xAxis->labels->style->color = "#9C9999";
       		 	 	$chart2->plotOptions->column->stacking = "normal";
       		 	 	$chart2->plotOptions->column->pointPadding = 0.2;
       		 	 	$chart2->plotOptions->column->borderWidth = 0;
       		 	 	$chart2->exporting->enabled = true;
       		 	 	$chart2->colors = ['#89AC6A'];
       		 	 	$chart2->addSeries($series);
								echo '
					<div class="row">
						<div class="col-md-6" style="color: #616161">'.$place['place'].'</div>
					</div>
					<div style="margin-left: 0px;" class="row report-row">
						
						<div class="col-md-3 stats">
							<div class="stat text-center">'.$place['count'].'</div>
							<div class="stat-type text-center">Popularity Index</div>
						</div>
						<div class="col-md-6">
							<div id="chart'.$i.'" style="min-width: 200px; height: 150px; margin: 0 auto">
								<script type="text/javascript">
									'.$chart2->renderChart().' 
								</script>
							</div>		
						</div>
						<div class="col-md-3 stats">
							<div class="stat text-center">'.$rating.'</div>
							<div class="stat-type text-center">Avg. Rating</div>
						</div>		
				</div>	
						';
						$i++;
						}
					?>
										
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 small">Copyright 2014 ParkView. All rights reserved.</div>
			</div>
		</div>
		
		
	</div>
    
    <!-- /.container -->


    <!-- Load JS here for greater good =============================-->
  </body>
</html>
