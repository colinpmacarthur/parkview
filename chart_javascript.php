<script type="text/javascript">
$(function () {
		alert('!!!!');
		$("[data-toggle=tooltip]").tooltip();
		$("[data-toggle=ReviewsPopover]").popover({trigger:"hover", html:"true", placement:"bottom"});
		$('[data-toggle=ReviewsPopover]').on('shown.bs.popover', function () {
			$('#Reviews').highcharts({
	            chart: {
	                type: 'bar',
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
	                    "Yelp",
	                    "TripAdvisor"
	                ],
	                tickLength: 0,
	                
	            },
	            yAxis: {
	                    gridLineWidth: 0,	
						title: {
							text: ''
						},
						labels: {
							enabled: false
						},
						stackLabels: {
							style: {
									color: 'black'
									},
							enabled: true
						}
	            },
	            plotOptions: {
	                bar: {
						stacking: 'normal',
	                    pointPadding: 0.2,
	                    borderWidth: 0
	                }
	                
	            },
	            series: [{
	                name: 'Number of Reviews',
	                data: [<?php echo $db->getAggregateCountsForGraph(['Yelp','TripAdvisor']);?>]
	    
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
	    $("[data-toggle=CommentsPopover]").popover({trigger:"hover", html:"true", placement:"bottom"});
		$('[data-toggle=CommentsPopover]').on('shown.bs.popover', function () {
			$('#Comments').highcharts({
	            chart: {
	                type: 'bar',
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
	                    "Twitter"
	                ],
	                tickLength: 0,
	                
	            },
	            yAxis: {
	                    gridLineWidth: 0,	
						title: {
							text: ''
						},
						labels: {
							enabled: false
						},
						stackLabels: {
							style: {
									color: 'black'
									},
							enabled: true
						}
	            },
	            plotOptions: {
	                bar: {
						stacking: 'normal',
	                    pointPadding: 0.2,
	                    borderWidth: 0
	                }
	                
	            },
	            series: [{
	                name: 'Number of Comments',
	                data: [<?php echo $db->getAggregateCountsForGraph(['Twitter']);?>]
	    
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
	    $("[data-toggle=TotalReachPopover]").popover({trigger:"hover", html:"true", placement:"bottom"});
	    $('[data-toggle=TotalReachPopover]').on('shown.bs.popover', function () {
			$('#TotalReach').highcharts({
	            chart: {
	                type: 'bar',
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
	                    "Yelp",
	                    "TripAdvisor",
	                    "Twitter"
	                ],
	                tickLength: 0,
	                
	            },
	            yAxis: {
	                    gridLineWidth: 0,	
						title: {
							text: ''
						},
						labels: {
							enabled: false
						},
						stackLabels: {
							style: {
									color: 'black'
									},
							enabled: true
						}
	            },
	            plotOptions: {
	                bar: {
						stacking: 'normal',
	                    pointPadding: 0.2,
	                    borderWidth: 0
	                }
	                
	            },
	            series: [{
	                name: 'Number of Comments',
	                data: [<?php echo $db->getAggregateCountsForGraph(['Yelp','TripAdvisor','Twitter']);?>]
	    
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
	    
	    
        $('#Twitter').highcharts({
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
						text: "Posts from others",
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
                name: 'Facebook Comments',
                data: [<?php echo $db->getCountsForGraph('Twitter');?>]
    
            }],
            legend: { 
				enabled: false 
			},
			exporting: {
				enabled: false
			},
			colors: ['#27ae60']
        });
        $('#TripAdvisor').highcharts({
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
                    <?php echo $db->getMonthsForGraph('TripAdvisor');?>
                ],
                tickLength: 0,
                title: {
						text: "Reviews from visitors",
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
                name: 'TripAdvisor Reviews',
                data: [<?php echo $db->getCountsForGraph('TripAdvisor');?>]
    
            }],
            legend: { 
				enabled: false 
			},
			exporting: {
				enabled: false
			},
			colors: ['#27ae60']
        });
        $('#Yelp').highcharts({
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
                    <?php echo $db->getMonthsForGraph('Yelp');?>
                ],
                tickLength: 0,
                title: {
						text: "Reviews from visitors",
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
                name: 'Yelp Reviews',
                data: [<?php echo $db->getCountsForGraph('Yelp');?>]
    
            }],
            legend: { 
				enabled: false 
			},
			exporting: {
				enabled: false
			},
			colors: ['#27ae60']
        });
        $('#Flickr').highcharts({
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
                    <?php echo $db->FLgetMonthsForGraph('Flickr');?>
                ],
                tickLength: 0,
                title: {
						text: "Reviews from visitors",
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
                name: 'Yelp Reviews',
                data: [<?php echo $db->FLgetCountsForGraph('Flickr');?>]
    
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
    
