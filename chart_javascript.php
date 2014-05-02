<script type="text/javascript">
    
	    
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
    
