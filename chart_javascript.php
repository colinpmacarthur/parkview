<script type="text/javascript">
$(function () {
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
	                data: [<?php echo $db->getAggregateCountsForGraph(['Yelp','Trip_Advisor']);?>]
	    
	            }],
	            legend: { 
					enabled: false 
				},
				exporting: {
					enabled: false
				},
				colors: ['#89AC6A']
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
	                    "Facebook","Twitter"
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
	                data: [<?php echo $db->getAggregateCountsForGraph(['Facebook','Twitter']);?>]
	    
	            }],
	            legend: { 
					enabled: false 
				},
				exporting: {
					enabled: false
				},
				colors: ['#89AC6A']
	        });
	    });
		$("[data-toggle=ContributorsPopover]").popover({trigger:"hover", html:"true", placement:"bottom"});
		$('[data-toggle=ContributorsPopover]').on('shown.bs.popover', function () {
			$('#Contributors').highcharts({
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
	                    "Trip Advisor",
	                    "Yelp",
			    "Twitter",
			    "Flickr"
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
	                name: 'Number of Contributors',
	                data: [<?php echo $db->getContributors('Trip_Advisor');?>]
	    
	            }],
	            legend: { 
					enabled: false 
				},
				exporting: {
					enabled: false
				},
				colors: ['#89AC6A']
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
	                data: [<?php echo $db->getAggregateCountsForGraph(['Yelp','Trip_Advisor','Twitter']);?>]
	    
	            }],
	            legend: { 
					enabled: false 
				},
				exporting: {
					enabled: false
				},
				colors: ['#89AC6A']
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
			colors: ['#89AC6A']
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
                    <?php echo $db->getMonthsForGraph('Trip_Advisor');?>
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
                data: [<?php echo $db->getCountsForGraph('Trip_Advisor');?>]
    
            }],
            legend: { 
				enabled: false 
			},
			exporting: {
				enabled: false
			},
			colors: ['#89AC6A']
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
			colors: ['#86AC6A']
        });

        $('#Facebook').highcharts({
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
                    <?php echo $db->getMonthsForGraph('Facebook');?>
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
                data: [<?php echo $db->getCountsForGraph('Twitter');?>]
    
            }],
            legend: { 
				enabled: false 
			},
			exporting: {
				enabled: false
			},
			colors: ['#89AC6A']
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
                    <?php echo $db->getCountForGraph('Flickr')['months'];?>
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
                name: 'Flickr Photos',
                data: [<?php echo $db->getCountForGraph('Flickr')['counts'];?>]
    
            }],
            legend: { 
				enabled: false 
			},
			exporting: {
				enabled: false
			},
			colors: ['#89AC6A']
        });
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
			colors: ['#89AC6A']
        });
     });
</script>
    
