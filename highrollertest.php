<?php
require_once('highroller/HighRoller.php');
require_once('highroller/HighRollerSeriesData.php');
require_once('highroller/HighRollerLineChart.php');
$chartData = array(5324, 7534, 6234, 7234, 8251, 10324);
$series1 = new HighRollerSeriesData();
$series1->addName('myData')->addData($chartData);
$linechart = new HighRollerLineChart();
$linechart->chart->renderTo = 'linechart';
$linechart->title->text = 'Hello HighRoller';
$linechart->yAxis->title->text = 'Total';
print_r($linechart);
$linechart->addSeries($series1);
?>
 
<head>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
</head>
 
<body>
<div id="linechart"></div>
<script type="text/javascript">
<?php echo $linechart->renderChart();?>
</script>
</body>
