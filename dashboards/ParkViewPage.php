<?php
require_once 'parkdbquery.php';
require_once 'highroller/HighRoller.php';
require_once 'highroller/HighRollerSeriesData.php';

class ParkViewPage
{

    var $year;
    var $quarter;
    var $db;
    var $page_name;  

    function setYearQuarter($year,$quarter)
    {
        $this->year = ($year);
        $this->quarter = ($quarter);
        $this->openParkDBQuery(); }

    function getYear()
    {
        return $this->year;
    }

    function getQuarter()
    {
        return $this->quarter;
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
                '.HighRoller::setHighChartsLocation("highcharts/js/highcharts.js").'
				.'.$this->renderAdditionalHead().'
            </head>';
        
    } 

	function renderAdditionalHead()
	{

	}
    
    function renderNav()
    {
        	echo '<nav class="navbar navbar-default navbar-fixed-top" role="navigation">';
    	    echo '    <div class="container-fluid">';
    	    echo '        <!-- Brand and toggle get grouped for better mobile display -->';
    	    echo '        <div class="navbar-header">';
    	    echo '            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">';
    	    echo '                <span class="sr-only">Toggle navigation</span>';
    	    echo '                <span class="icon-bar"></span>';
    	    echo '                <span class="icon-bar"></span>';
    	    echo '                <span class="icon-bar"></span>';
    	    echo '            </button>';
    	    echo '            <a class="navbar-brand" href="#">ParkView</a>';
    	    echo '        </div>';
    	    echo '        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">';
    	    echo '            <ul class="nav navbar-nav">';
    	    echo 			  	  $this->renderNavBarItems();
			echo '            </ul>';
    	    echo '            <ul class="nav navbar-nav navbar-right">';
    	    echo '                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-weight: 600;">Lassen Volcanic NP <b class="caret"></b></a>';
    	    echo '                    <ul class="dropdown-menu">';
    	    echo '                        <li>No other parks available.</li>';
    	    echo '                    </ul>';
    	    echo '                </li>';
    	    echo '            </ul>';
    	    echo '        </div>';
    	    echo '    </div>';
    		echo '</nav>';
        
    }
    function renderNavBarItems()
    {
        $pages = [
            [
                'short_name' => 'Popular Places',
                'full_name' => 'Popular Places',
                'file_name' => 'places.php',
            ],
            [
                'short_name' => 'Popular Platforms',
                'full_name' => 'Popular Platforms',
                'file_name' => 'platforms.php',
            ],
            [
                'short_name' => 'Negative Reviews',
                'full_name' => 'Negative Reviews',
                'file_name' => 'sentiment.html',
            ],
        ];
        $html = "";
        foreach ($pages as $page_info)
        {
			$current = $this->getPageName() == $page_info['full_name']
                     ? 'class="active"' : '';
            $year    = $this->getYear();
			$quarter = $this->getQuarter();
            $html = $html.'<li '.$current.'><a href="'.$page_info['file_name'].'?year='.$year.'&quarter='.$quarter.'">'.$page_info['short_name'].'</a></li>';
       
        }
		echo $html;
    }
    
    function renderTitle()
    {
        echo '
            <div class="row" >
	    	    <div class="col-md-8" style="padding-left:0px;">
	    	    	<h3>'.$this->getPageName().': Quarter '.$this->getQuarter().' - '.$this->getYear().'</h3>
	    		</div>
	    		<div class="col-md-4 time-selectors" >
	    			<div class="dropdown time-selector">
	    			<button class="btn btn-primary dropdown-toggle" style="font-weight: 600;" data-toggle="dropdown">Select Quarter<span class="caret"></span></button>
	    			<span class="dropdown-arrow"></span>
	    				<ul class="dropdown-menu">
	    				    <li><a href="?year=2013&quarter=4">Quarter 4 - 2013</a></li>
	    				    <li><a href="?year=2013&quarter=3">Quarter 3 - 2013</a></li>
	    				    <li><a href="?year=2013&quarter=2">Quarter 2 - 2013</a></li>
	    				    <li><a href="?year=2013&quarter=1">Quarter 1 - 2013</a></li>
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
