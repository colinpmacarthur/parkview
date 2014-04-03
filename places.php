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
		body { padding-top: 70px; }
    </style>
    <!-- Loading Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico">
 
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
	        <li><a href="#">Popular Platforms</a></li>
	        <li><a href="#">Problems</a></li>
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
				<h3>Popular Places - Spring 2014</h3>
			</div>
			<div class="col-md-4 time-selectors" >
				<div class="dropdown time-selector">
				<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">2014<span class="caret"></span></button>
				<span class="dropdown-arrow"></span>
					<ul class="dropdown-menu">
					    <li><a href="#fakelink">2013</a></li>
					    <li><a href="#fakelink">2012</a></li>
					    <li><a href="#fakelink">2011</a></li>
					</u>
				</div>
				
				<div class="dropdown time-selector">
				<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Spring<span class="caret"></span></button>
				<span class="dropdown-arrow"></span>
					<ul class="dropdown-menu">
					    <li><a href="#fakelink">Summer</a></li>
					    <li><a href="#fakelink">Fall</a></li>
					    <li><a href="#fakelink">Winter</a></li>
					</u>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">Graph goes here</div>
				<div class="col-md-6">
					<b>Number of Mentions Over Time</b>
					<div id="container" style="min-width: 310px; height: 150px; margin: 0 auto"></div>
					<div class="row">
						<div class="col-md-6">Manzanita Lake</div>
					</div>
					<div class="row report-row">
						<div class="col-md-2 stats" data-container="body" data-toggle="popover" data-placement="top" data-content='<div id="container2" style="min-width: 200px; height: 150px; margin: 0 auto"></div>'>
							<div class="stat text-center">15</div>
							<div class="stat-type text-center">Traffic Count</div>
						</div>
						<div class="col-md-6">
							<div id="container_other" style="min-width: 200px; height: 100px; margin: 0 auto"></div>
						</div>
						<div class="col-md-2 stats">
							<div class="stat text-center">15</div>
							<div class="stat-type text-center">Avg. Rating</div>
						</div>
						<div class="col-md-2 stats" data-container="body" data-toggle="popover" data-placement="top" data-content='The popularity index is calculated....'>
							<div class="stat text-center">15</div>
							<div class="stat-type text-center">Popularity Index</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">Manzanita Lake</div>
					</div>
					<div class="row report-row">
						<div class="col-md-2 stats" data-container="body" data-toggle="popover" data-placement="top" data-content='<div id="container2" style="min-width: 200px; height: 150px; margin: 0 auto"></div>'>
							<div class="stat text-center">15</div>
							<div class="stat-type text-center">Traffic Count</div>
						</div>
						<div class="col-md-6">
							<div id="container_other" style="min-width: 200px; height: 100px; margin: 0 auto"></div>
						</div>
						<div class="col-md-2 stats">
							<div class="stat text-center">15</div>
							<div class="stat-type text-center">Avg. Rating</div>
						</div>
						<div class="col-md-2 stats" data-container="body" data-toggle="popover" data-placement="top" data-content='The popularity index is calculated....'>
							<div class="stat text-center">15</div>
							<div class="stat-type text-center">Popularity Index</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 small">Copyright 2014 ParkView. All rights reserved.</div>
			</div>
		</div>
		
		
	</div>
    
    <!-- /.container -->


    <!-- Load JS here for greater good =============================-->
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/flatui-checkbox.js"></script>
    <script src="js/flatui-radio.js"></script>
    <script src="js/jquery.tagsinput.js"></script>
    <script src="js/jquery.placeholder.js"></script>
  	<script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="http://code.highcharts.com/modules/exporting.js"></script>
	<script src="chart_javascript.js"></script>
  </body>
</html>