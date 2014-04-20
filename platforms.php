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
    <title>ParkView - Lassen Volcanic NP - Popular Platforms</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
		.time-selectors {margin-top: 30px;}
		.time-selector {float: right; margin-left: 10px; margin-bottom: 2em;}
		.stat {font-size: 3em; line-height: 1em; margin-top: 0em;}
		.stat-type {line-height: 1.2em; margin-bottom: 0.5em;}
		.stat-context {font-size: 0.75em; color: #27ae60; margin-bottom: 2em; line-height: 1em;}
		.report-row {border-top: 1px solid #ecf0f1; padding-top: 1.5em;}
		.gray {color: #D8D8D8;}
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
	        <li><a href="places.php?year=2013&quarter=3">Popular Places</a></li>
	        <li class="active"><a href="#">Popular Platforms</a></li>
	        <li><a href="sentiment?year=2013&quarter=3">Negative Reviews</a></li>
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
				<h3>Popular Platforms - <?php echo htmlspecialchars($_GET["year"])." - Quarter ".htmlspecialchars($_GET["quarter"]); ?></h3>
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
		</div>
		<div class="row">
			<div class="col-md-3 stats" data-container="body" data-toggle="ReviewsPopover" data-placement="top" data-content='<div id="Reviews" style="min-width: 200px; height: 150px; margin: 0 auto"></div>'>
				<div class="stat text-center">
					<?php echo $db->getCount(['Yelp','Trip_Advisor']); ?>
				</div>
				<div class="stat-type text-center">reviews</div>
			</div>
			<div class="col-md-3 stats" data-container="body" data-toggle="CommentsPopover" data-placement="top" data-content='<div id="Comments" style="min-width: 200px; height: 150px; margin: 0 auto"></div>'>
				<div class="stat text-center">
					<?php echo $db->getCount(['Facebook','Twitter']); ?>
				</div>
				<div class="stat-type text-center">comments</div>
			</div>
			<div class="col-md-3 stats" data-container="body" data-toggle="ContributorsPopover" data-placement="top" data-content='<div id="Contributors" style="min-width: 200px; height: 150px; margin: 0 auto"></div>'>
				<div class="stat text-center"><?php echo $db->getContributors(); ?> </div>
				<div class="stat-type text-center">contributors</div>
			</div>
			<div class="col-md-3 stats" data-container="body" data-toggle="TotalReachPopover" data-placement="top" data-content='<div id="TotalReach" style="min-width: 200px; height: 150px; margin: 0 auto"></div>'>
				<div class="stat text-center"><?php echo $db->getCount(); ?></div>
				<div class="stat-type text-center">total reach</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3"><div class="stat-context text-center"><?php echo 	$db->getAggregateCountChange(['Yelp','Trip_Advisor']) ?> from last year</div></div>
			<div class="col-md-3"><div class="stat-context text-center"><?php echo 	$db->getAggregateCountChange(['Twitter']) ?> from last year</div></div>
			<div class="col-md-3"><div class="stat-context text-center"><?php echo $db->getContributorsPercentChange(); ?> from last year</div></div>
			<div class="col-md-3"><div class="stat-context text-center"><?php echo 	$db->getAggregateCountChange(['Yelp','Trip_Advisor','Twitter']) ?> from last year</div></div>
		</div>

		<!--Twitter-->
		<div class="row report-row">
			<div class="col-md-2 text-center">
				<img class="stat-image" src="images/icons/twitter/twitter-128-black.png" height="64" width="64" alt="Twitter"/>
				Twitter
			</div>
			<div class="col-md-2 text-center">
					<div class="stat"><?php echo $db->getCount('Twitter'); ?></div>
					<div class="stat-type">reviews from visitors</div>
			</div>
			<div class="col-md-4">
				<div id="Twitter" style="min-width: 310px; height: 150px; margin: 0 auto"></div>
			</div>
			<div class="col-md-2 text-center">
				<div class="stat gray">-</div>
			</div>
			<div class="col-md-2 text-center">
				<comment>
					"<?php echo $db->getLastComment('Twitter'); ?>"
				</comment>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 text-center">
			</div>
			<div class="col-md-2 text-center">
				<div class="stat-context text-center"><?php echo $db->getCountPercentChange('Twitter');?> from last year</div>
			</div>
		</div>
		<!--TripAdvisor-->
		<div class="row report-row">
			<div class="col-md-2 text-center">
				<img class="stat-image" src="images/icons/tripadvisor/tripadvisor-128-black.png" height="64" width="64" alt="Twitter"/>
				TripAdvisor
			</div>
			<div class="col-md-2 text-center">
					<div class="stat"><?php echo $db->getCount('Trip_Advisor'); ?></div>
					<div class="stat-type">reviews from visitors</div>
			</div>
			<div class="col-md-4">
				<div id="TripAdvisor" style="min-width: 310px; height: 150px; margin: 0 auto"></div>
			</div>
			<div class="col-md-2 text-center">
				<div class="stat"><?php echo $db->getAverageRating('trip_advisor'); ?>/5</div>
				<div class="stat-type">avg. rating</div>
			</div>
			<div class="col-md-2 text-center">
				<comment>
					"<?php echo $db->getLastComment('Trip_Advisor'); ?>"
				</comment>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 text-center">
			</div>
			<div class="col-md-2 text-center">
				<div class="stat-context text-center"><?php echo $db->getCountPercentChange('Trip_Advisor');?> from last year</div>
			</div>
			<div class="col-md-4 text-center">
			</div>
			<div class="col-md-2 text-center">
				<div class="stat-context text-center"><?php echo $db->getAverageRatingChange('trip_advisor');?> from last year</div>
			</div>
		</div>
		<!--Yelp-->
		<div class="row report-row">
			<div class="col-md-2 text-center">
				<img class="stat-image" src="images/icons/yelp/yelp-128-black.png" height="64" width="64" alt="Twitter"/>
				Yelp
			</div>
			<div class="col-md-2 text-center">
					<div class="stat"><?php echo $db->getCount('Yelp'); ?></div>
					<div class="stat-type">reviews from visitors</div>
			</div>
			<div class="col-md-4">
				<div id="Yelp" style="min-width: 310px; height: 150px; margin: 0 auto"></div>
			</div>
			<div class="col-md-2 text-center">
				<?php if ( $db->getAverageRating('yelp'))
				{ echo '
				<div class="stat">'.$db->getAverageRating('yelp').'/5</div>
				<div class="stat-type">avg. rating</div>'; }
				else
				{ echo '
				<div class="stat gray">-</div>'; }
			?>
			</div>
			<div class="col-md-2 text-center">
				<comment>
					"<?php echo $db->getLastComment('Yelp'); ?>"
				</comment>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 text-center">
			</div>
			<div class="col-md-2 text-center">
				<div class="stat-context text-center"><?php echo $db->getCountPercentChange('Yelp');?> from last year</div>
			</div>
			<div class="col-md-4 text-center">
			</div>
			<div class="col-md-2 text-center">
				<div class="stat-context text-center"><?php echo $db->getAverageRatingChange('yelp');?> from last year</div>
			</div>
		</div>
		<!--Facebook-->
		<div class="row report-row">
			<div class="col-md-2 text-center">
				<img class="stat-image" src="images/icons/facebook/facebook-128-black.png" height="64" width="64" alt="Twitter"/>
				Facebook
			</div>
			<div class="col-md-2 text-center">
					<div class="stat"><?php echo $db->getCount('Facebook'); ?></div>
					<div class="stat-type">comments from others</div>
			</div>
			<div class="col-md-4">
				<div id="Facebook" style="min-width: 310px; height: 150px; margin: 0 auto"></div>
			</div>
			<div class="col-md-2 text-center">
				<div class="stat gray">-</div>
			</div>
			<div class="col-md-2 text-center">
				<comment>
					<?php if ( $db->getLastComment('Facebook') ) { echo '<a href="'.$db->getLastComment('Facebook').'">View image</a>'; }; ?>
					
				</comment>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 text-center">
			</div>
			<div class="col-md-2 text-center">
				<div class="stat-context text-center">
					<?php if ( $db->getCountPercentChange('Facebook') ) { echo $db->getCountPercentChange('Facebook'); } ?>
				</div>
			</div>
		</div>

		<!--Flickr-->
		<div class="row report-row">
			<div class="col-md-2 text-center">
				<img class="stat-image" src="images/icons/flickr/flickr-128-black.png" height="64" width="64" alt="Twitter"/>
				Flickr
			</div>
			<div class="col-md-2 text-center">
					<div class="stat"><?php echo $db->FLgetCount('Flickr'); ?></div>
					<div class="stat-type">pictures from others</div>
			</div>
			<div class="col-md-4">
				<div id="Flickr" style="min-width: 310px; height: 150px; margin: 0 auto"></div>
			</div>
			<div class="col-md-2 text-center">
				<div class="stat gray">-</div>
			</div>
			<div class="col-md-2 text-center">
				<comment>
					<?php if ( $db->FLgetLastComment('Flickr') ) { echo '<a href="'.$db->FLgetLastComment('Flickr').'">View image</a>'; }; ?>
					
				</comment>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 text-center">
			</div>
			<div class="col-md-2 text-center">
				<div class="stat-context text-center">
					<?php if ( $db->FLgetCountPercentChange('Flickr') ) { echo $db->FLgetCountPercentChange('Flickr'); } ?>
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
	<script src="http://jedfoster.com/js/readmore.min.js"></script>
	<?php include 'chart_javascript.php'; ?>
  </body>
</html>
