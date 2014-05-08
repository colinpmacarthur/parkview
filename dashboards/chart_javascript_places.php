<script type="text/javascript">
$(function () {
        $('#TotalActivityOverMonths').highcharts({
            chart: {
                type: 'column',
                style: {
						fontFamily: 'Lato, Helvetica'
						}
            },
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: [
                <?php echo $db->getMonthsForGraph('Twitter');?>
                    
                ],
                tickLength: 0,
                title: {
						text: "Posts, reviews or other activity from visitors",
						style: "color: black;"
						}
            },
            yAxis: {
                    stackLabels: {
						style: {
								color: 'black'
								},
						enabled: true
					},
                    gridLineWidth: 0,	
					title: {
						text: ''
					},
					labels: {
						enabled: false
					}
            },
            plotOptions: {
                column: {
					stacking: 'normal',
                    pointPadding: 0.2,
                    borderWidth: 0
                }
                
            },
            series: [{
                name: 'Counts',
                data: [<?php echo $db->getPlaceCountsForGraph();?>]
    
            }],
            legend: { 
				enabled: false 
			},
			exporting: {
				enabled: false
			},
			colors: ['#27ae60']
        });
        $('#1').highcharts({
            chart: {
                type: 'column',
                style: {
						fontFamily: 'Lato, Helvetica'
						}
            },
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: [
                <?php echo $db->getMonthsForGraph('Twitter');?>
                    
                ],
                tickLength: 0,
                title: {
						text: "Posts, reviews or other activity from visitors",
						style: "color: black;"
						}
            },
            yAxis: {
                    stackLabels: {
						style: {
								color: 'black'
								},
						enabled: true
					},
                    gridLineWidth: 0,	
					title: {
						text: ''
					},
					labels: {
						enabled: false
					}
            },
            plotOptions: {
                column: {
					stacking: 'normal',
                    pointPadding: 0.2,
                    borderWidth: 0
                }
                
            },
            series: [{
                name: 'Counts',
                data: [<?php echo $db->getFirstPlaceCountsForGraph();?>]
    
            }],
            legend: { 
				enabled: false 
			},
			exporting: {
				enabled: false
			},
			colors: ['#27ae60']
        });
        $('#2').highcharts({
            chart: {
                type: 'column',
                style: {
						fontFamily: 'Lato, Helvetica'
						}
            },
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: [
                <?php echo $db->getMonthsForGraph('Twitter');?>
                    
                ],
                tickLength: 0,
                title: {
						text: "Posts, reviews or other activity from visitors",
						style: "color: black;"
						}
            },
            yAxis: {
                    stackLabels: {
						style: {
								color: 'black'
								},
						enabled: true
					},
                    gridLineWidth: 0,	
					title: {
						text: ''
					},
					labels: {
						enabled: false
					}
            },
            plotOptions: {
                column: {
					stacking: 'normal',
                    pointPadding: 0.2,
                    borderWidth: 0
                }
                
            },
            series: [{
                name: 'Counts',
                data: [<?php echo $db->getSecondPlaceCountsForGraph();?>]
    
            }],
            legend: { 
				enabled: false 
			},
			exporting: {
				enabled: false
			},
			colors: ['#27ae60']
        });
        $('#3').highcharts({
            chart: {
                type: 'column',
                style: {
						fontFamily: 'Lato, Helvetica'
						}
            },
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: [
                <?php echo $db->getMonthsForGraph('Twitter');?>
                    
                ],
                tickLength: 0,
                title: {
						text: "Posts, reviews or other activity from visitors",
						style: "color: black;"
						}
            },
            yAxis: {
                    stackLabels: {
						style: {
								color: 'black'
								},
						enabled: true
					},
                    gridLineWidth: 0,	
					title: {
						text: ''
					},
					labels: {
						enabled: false
					}
            },
            plotOptions: {
                column: {
					stacking: 'normal',
                    pointPadding: 0.2,
                    borderWidth: 0
                }
                
            },
            series: [{
                name: 'Counts',
                data: [<?php echo $db->getThirdPlaceCountsForGraph();?>]
    
            }],
            legend: { 
				enabled: false 
			},
			exporting: {
				enabled: false
			},
			colors: ['#27ae60']
        });
    });
</script>
    

