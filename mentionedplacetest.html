<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ParkView - Lassen Volcanic NP - Popular Platforms</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
			.time-selectors {margin-top: 30px;}
			.time-selector {float: right; margin-left: 10px; margin-bottom: 2em;}
			.stat {font-size: 3em; line-height: 1em; margin-top: 0em;}
			.stat-type {line-height: 1.2em; margin-bottom: 0.5em;}
			.stat-context {font-size: 0.75em; color: #27ae60; margin-bottom: 2em; line-height: 1em;}
			.report-row {border-top: 1px solid #ecf0f1; padding-top: 1.5em;}
			#myinfowindow{width:140px; height:20px; overflow:hidden;}
			body { padding-top: 70px; }
    </style>
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
   </head>

  <body>

		<?php
			$quarter = 1;
			if(isset($_GET['quarter'])){
			  $quarter = $_GET['quarter'];
			}
			$year = 2013;
			if(isset($_GET['year'])){
			  $year = $_GET['year'];
			}
			$endmonth = intval($quarter)*3;
			$startmonth = $endmonth-2;
		?>

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
	        <li><a href="places.php">Popular Places</a></li>
	        <li><a href="platforms.php">Popular Platforms</a></li>
	        <li class="active"><a href="sentiment.html">Sentiment Analysis</a></li>
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
				<h3>SNS Mentions: <?php echo $year . " - Quarter " . $quarter; ?></h3>
			</div>
			<div class="col-md-2 time-selectors col-md-offset-2" >
				<form>
	        <select id="seasonList" name="herolist" value="Season" class="select-block" onChange="top.location.href=value">
						<option value="#">Select Qtr</option>
	          <option value="?quarter=1&year=2014">2014 - Q1</option>
	          <option value="?quarter=4&year=2013">2013 - Q4</option>
	          <option value="?quarter=3&year=2013">2013 - Q3</option>
	          <option value="?quarter=2&year=2013">2013 - Q2</option>
	          <option value="?quarter=1&year=2013">2013 - Q1</option>
	          <option value="?quarter=4&year=2012">2012 - Q4</option>
	          <option value="?quarter=3&year=2012">2012 - Q3</option>
	          <option value="?quarter=2&year=2012">2012 - Q2</option>
	          <option value="?quarter=1&year=2012">2012 - Q1</option>
	          <option value="?quarter=4&year=2011">2011 - Q4</option>
	          <option value="?quarter=3&year=2011">2011 - Q3</option>
	          <option value="?quarter=2&year=2011">2011 - Q2</option>
	          <option value="?quarter=1&year=2011">2011 - Q1</option>
	          <option value="?quarter=4&year=2010">2010 - Q4</option>
	          <option value="?quarter=3&year=2010">2010 - Q3</option>
	          <option value="?quarter=2&year=2010">2010 - Q2</option>
	          <option value="?quarter=1&year=2010">2010 - Q1</option>
        	</select>
				</form>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12" id="map-canvas" style="height: 700px;"></div>
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
							data: {'year':<?php echo $year; ?>, 'quarter':<?php echo $quarter; ?>},
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
	</div><!-- /.container -->
  </body>
</html>
