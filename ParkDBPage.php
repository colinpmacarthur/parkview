<?php
require_once 'parkdbquery.php';
require_once 'highroller/HighRoller.php';
require_once 'highroller/HighRollerSeriesData.php';
require_once 'highroller/HighRollerLineChart.php';
require_once 'highroller/HighRollerLineChart.php';

class ParkViewPage
{

    var $year;
    var $quarter;
    var $db;
    var $page_name;
    
/*    function __construct()
    {
        $this->setYearQuarter();
        $this->openParkDBQuery();
    }    
*/
    function setYearQuarter()
    {
        $year = isset($_GET["year"])
              ? htmlspecialchars($_GET["year"]) : 2014;
        $qtr  = isset($_GET["quarter"])
              ? htmlspecialchars($_GET["quarter"]) : 1;
        $this->year = $year;
        $this->quarter = $qtr;
    }

    function getYear()
    {
        return $this->year;
    }

    function getQuarter()
    {
        return $this->getQuarter();
    }
    
    function setPageName($name)
    {
        $this->page_name = $name;
    }

    function getPageName()
    {
        return $this->page_name;
    }

    function openParkDBQuery()
    {
        $db   = new ParkDBQuery();
        $db->setYear($this->year);
        $db->setQuarter($this->quarter);
        $this->db = $db;
    }
    
    function renderHead()
    {
        echo '
            <head>
                <meta charset="utf-8">
                <title>ParkView - '.$this->getPageName().'</title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
                <link href="css/flat-ui.css" rel="stylesheet">
                <link href="css/parkview.css" rel="stylesheet"> 
                <!--[if lt IE 9]>
                  <script src="js/html5shiv.js"></script>
                  <script src="js/respond.min.js"></script>
                <![endif]-->
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
                .HighRoller::setHighChartsLocation("highcharts/js/highcharts.js");?>
            </head>
        ';
    } 
    
    function renderNav()
    {
        echo '
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
    	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    	                <ul class="nav navbar-nav">
    	                    <li><a href="places.php?year=2013&quarter=3">Popular Places</a></li>
    	                    <li class="active"><a href="#">Popular Platforms</a></li>
    	                    <li><a href="sentiment.html?year=2013&quarter=3">Negative Reviews</a></li>
    	                </ul>
    	                <ul class="nav navbar-nav navbar-right">
    	                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-weight: 600;">Lassen Volcanic NP <b class="caret"></b></a>
    	                        <ul class="dropdown-menu">
    	                            <li>No other parks available.</li>
    	                        </ul>
    	                    </li>
    	                </ul>
    	            </div>
    	        </div>
    	</nav>
        ';
    }
    function renderNavBarItems()
    {
        $pages = array(
            array(
                'short_name' => 'Places',
                'full_name' => 'Popular Places',
                'file_name' => 'places.php',
            ),
            array(
                'short_name' => 'Platforms',
                'full_name' => 'Popular Platforms',
                'file_name' => 'platforms.php',
            ),
            array(
                'short_name' => 'Negative Reviews',
                'full_name' => 'Negative Reviews',
                'file_name' => 'sentiment.html',
            ),
        );
        $html = "";
        foreach ($pages as $page_info)
        {
            $current = $this->getPageName() == $page_info['full_name']
                     ? 'class="active"' : '';
            $year    = $this->getYear();
            $html =+ '<li><a href="places.php?year=2013&quarter=3">Popular Places</a></li>';
       
        }
    }
    
    function renderTitle()
    {
        echo '
            <div class="row" >
	    	    <div class="col-md-8" style="padding-left:0px;">
	    	    	<h3>Popular Platforms Q'.$this->getQuarter().'-'.$this->getYear().'</h3>
	    		</div>
	    		<div class="col-md-4 time-selectors" >
	    			<div class="dropdown time-selector">
	    			<button class="btn btn-primary dropdown-toggle" style="font-weight: 600;" data-toggle="dropdown">Select Quarter<span class="caret"></span></button>
	    			<span class="dropdown-arrow"></span>
	    				<ul class="dropdown-menu">
	    				    <li><a href="?year=2013&quarter=1">2013 - quarter 1</a></li>
	    				    <li><a href="?year=2013&quarter=2">2013 - quarter 2</a></li>
	    				    <li><a href="?year=2013&quarter=3">2013 - quarter 3</a></li>
	    				    <li><a href="?year=2013&quarter=4">2013 - quarter 4</a></li>
	    				</u>
	    			</div>
	    		</div>
	    	</div>
        ';        
    }

    function renderBody()
    {
        echo "Error: Don't call ParkViewPage directly!";
    }
    
    function renderPage()
    {
        echo '<!DOCTYPE html>';
        echo '<html lang="en">';
        $this->renderHead();
        echo '<body>';
        echo '<div class="container">';
        $this->renderNav();
        $this->renderTitle();
        $this->renderBody();
        echo '</div>';
        echo '<body>';
    
    }


}

?>
