<?php
include 'parkdbquery.php';
$db = new ParkDBQuery;
$db->setYear(htmlspecialchars($_GET["year"]));
$db->setQuarter(htmlspecialchars($_GET["quarter"]));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ParkView - Lassen Volcanic NP - Popular Places</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <style>
		.time-selectors {margin-top: 30px;}
		.time-selector {float: right; margin-left: 10px; margin-bottom: 2em;}
		.stat {font-size: 3em; line-height: 1em; margin-top: 0em;}
		.stat-type {line-height: 1.2em; margin-bottom: 0.5em;}
		.stat-context {font-size: 0.75em; color: #27ae60; margin-bottom: 2em; line-height: 1em;}
		.report-row {border-top: 1px solid #ecf0f1; padding-top: 1.5em; padding-bottom: 1em;}
		.gray {color: #D8D8D8;}

		body { padding-top: 70px; }
    </style>
    <!-- Loading Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico">
 	 <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/flat-ui.css" rel="stylesheet">
		<link href="css/demo.css" rel="stylesheet">
    <link rel="shortcut icon" href="parkview-master/images/favicon.ico">
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script type="text/javascript" src="js/maplabel.js"></script>
		<script src="http://people.ischool.berkeley.edu/~sasaki/fp/d3-master/d3.js"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
		<script src="http://code.highcharts.com/highcharts.js"></script>
		<script src="http://code.highcharts.com/modules/exporting.js"></script>
    <!-- <script src="js/jquery-ui-1.10.3.custom.min.js"></script> -->
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/flatui-checkbox.js"></script>
    <script src="js/flatui-radio.js"></script>
    <script src="js/jquery.tagsinput.js"></script>
    <script src="js/jquery.placeholder.js"></script>
   <!-- <script src="parkview-master/js/jquery.stacktable.js"></script> -->
    <script src="http://vjs.zencdn.net/4.3/video.js"></script>
    <script src="js/application.js"></script>
 <?php include 'chart_javascript_places.php'; ?>


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">ParkView</a>
	    </div>
	    
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Popular Places</a></li>
	        <li><a href="platforms.php?year=2013&quarter=3">Popular Platforms</a></li>
	        <li><a href="sentiment.html?year=2013&quarter=3">Negative Reviews</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Current Park: Lassen Volcanic NP <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            <li>No other parks available.</li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h3>Popular Places - <?php echo htmlspecialchars($_GET["year"])." - Quarter ".htmlspecialchars($_GET["quarter"]); ?></h3>
			</div>
			<div class="col-md-4 time-selectors" >
				<div class="dropdown time-selector">
				<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><?php echo $db->year." - Quarter ".$db->quarter; ?><span class="caret"></span></button>
				<span class="dropdown-arrow"></span>
					<ul class="dropdown-menu">
					    <li><a href="?year=2013&quarter=1">2013 - Quarter 1</a></li>
					    <li><a href="?year=2013&quarter=2">2013 - Quarter 2</a></li>
					    <li><a href="?year=2013&quarter=3">2013 - Quarter 3</a></li>
					    <li><a href="?year=2013&quarter=4">2013 - Quarter 4</a></li>
					</u>
				</div>
			</div>
			<div class="row">
						<div class="col-md-6" id="map-canvas" style="height: 700px;">
				<script>
					var cityCircle;
					var cityMarker;

					function initialize() {

					// Create the map.
						var mapOptions = {
							zoom: 12,
							center: new google.maps.LatLng(40.497852, -121.420814),
							mapTypeId: google.maps.MapTypeId.ROADMAP
						}; //var mapOptions closed

						var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

					//ordering php to get data
						$.ajax({
							type: 'POST',
							url: 'getSnsRatingsByLocation.php',
							data: {'year':<?php echo $db->getYear(); ?>, 'quarter':<?php echo $db->getQuarter(); ?>},
							dataType: "json",

							success: function(hoge) {
								console.log(JSON.stringify(hoge));
								//iterate making circles, markers, and infowindows for each point
								//alert(hoge[0].ratingThree);
								var i;
								for (i =0; i<hoge.length; i++) {
								// make a circle for i visiting site
									var populationOptions = {
										strokeColor: '#FF0000',
										strokeOpacity: 0.8,
										strokeWeight: 2,
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
				<div class="col-md-6">
					<b>Number of Mentions Over Time</b>
					<div id="TotalActivityOverMonths" style="min-width: 310px; height: 150px; margin: 0 auto"></div>
					
					<?php
						$i = 1;
						foreach ($db->getPlaceRanked() as $place)
						{
							echo '<div class="row">
						<div class="col-md-6">'.$place['place'].'</div>
					</div>
					<div class="row report-row">
						<div class="col-md-2 stats">
							<div class="stat gray text-center">15</div>
							<div class="stat-type gray text-center">Traffic Count</div>
						</div>
						<div class="col-md-6">
							<div id="'.$i.'" style="min-width: 200px; height: 100px; margin: 0 auto"></div>
						</div>
						<div class="col-md-2 stats">
							<div class="stat text-center">'.$db->getAverageRating('all',$place['place']).'</div>
							<div class="stat-type text-center">Avg. Rating</div>
						</div>
						<div class="col-md-2 stats">
							<div class="stat text-center">'.$place['count'].'</div>
							<div class="stat-type text-center">Popularity Index</div>
						</div>
					</div>';
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
