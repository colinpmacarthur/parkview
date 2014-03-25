
$(function () {
	
		$("[data-toggle=tooltip]").tooltip();
		
		$("[data-toggle=popover]").popover({trigger:"hover", html:"true", placement:"bottom"});
		$('[data-toggle=popover]').on('shown.bs.popover', function () {
			$('#container2').highcharts({
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
	                    "Facebook",
	                    "Twitter",
	                    "TripAdvisor",
	                    "Yelp",
	                    "Other"
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
	                name: 'Facebook Comments',
	                data: [45, 47, 52, 58, 60]
	    
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

		
		
        $('#container').highcharts({
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
                    "F' 12",
                    "W' 13",
                    "Sp' 13",
                    "Su' 13",
                    "W' 13"
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
                data: [45, 47, 52, 58, 60]
    
            }],
            legend: { 
				enabled: false 
			},
			exporting: {
				enabled: false
			},
			colors: ['#27ae60']
        });
        $('#container10').highcharts({
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
                    "F' 12",
                    "W' 13",
                    "Sp' 13",
                    "Su' 13",
                    "W' 13"
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
                data: [45, 47, 52, 58, 60]
    
            }],
            legend: { 
				enabled: false 
			},
			exporting: {
				enabled: false
			},
			colors: ['#27ae60']
        });
        $('#container3').highcharts({
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
                    "F' 12",
                    "W' 13",
                    "Sp' 13",
                    "Su' 13",
                    "W' 13"
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
                data: [45, 47, 52, 58, 60]
    
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
    
    
