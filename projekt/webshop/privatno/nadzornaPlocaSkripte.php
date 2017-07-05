<script>
			Highcharts.chart('lijevi', {
			
			    title: {
			        text: 'Broj upisanih polaznika po godinama'
			    },
			
			    yAxis: {
			        title: {
			            text: 'Broj polaznika'
			        }
			    },
			    legend: {
			        layout: 'vertical',
			        align: 'right',
			        verticalAlign: 'middle'
			    },
			
			    plotOptions: {
			        series: {
			            pointStart: 2010
			        }
			    },
			
			    series: [{
			        name: 'Polaznici',
			        data: [85, 47, 59, 56, 88, 78]
			    }]
			
			});
			
			
			
			//desni
			Highcharts.chart('desni', {
			    chart: {
			        plotBackgroundColor: null,
			        plotBorderWidth: null,
			        plotShadow: false,
			        type: 'pie'
			    },
			    title: {
			        text: 'Broj polaznika po grupama'
			    },
			    tooltip: {
			        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
			    },
			    plotOptions: {
			        pie: {
			            allowPointSelect: true,
			            cursor: 'pointer',
			            dataLabels: {
			                enabled: true,
			                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
			                style: {
			                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
			                }
			            }
			        }
			    },
			    series: [{
			        name: 'Grupe',
			        colorByPoint: true,
			        data: [{
			            name: 'WP15',
			            y: 20
			        }, {
			            name: 'J16',
			            y: 12,
			            sliced: true,
			            selected: true
			        }, {
			            name: 'SR',
			            y: 4
			        }, {
			            name: 'WD12',
			            y: 12
			        }]
			    }]
			});
		</script>