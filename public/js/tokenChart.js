$(document).ready(function() {
  var data = [
    [Date.parse('2018-03-18'), 0.8218],
    [Date.parse('2018-03-19'), 0.8893],
    [Date.parse('2018-03-20'), 0.9155],
    [Date.parse('2018-03-21'), 0.8218],
    [Date.parse('2018-03-22'), 0.8954]
  ];
  Highcharts.chart('tokenChart', {
      chart: {
          zoomType: 'x'
      },
      title: {
          text: ''
      },
      subtitle: {
          text: ''
      },
      xAxis: {
          type: 'datetime'
      },
      yAxis: {
          title: {
              text: 'TKN price(USD)'
          }
      },
      legend: {
          enabled: false
      },
      plotOptions: {
          area: {
              fillColor: {
                  linearGradient: {
                      x1: 0,
                      y1: 0,
                      x2: 0,
                      y2: 1
                  },
                  stops: [
                      [0, Highcharts.getOptions().colors[0]],
                      [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                  ]
              },
              marker: {
                  radius: 2
              },
              lineWidth: 1,
              states: {
                  hover: {
                      lineWidth: 1
                  }
              },
              threshold: null
          }
      },
      series: [{
          type: 'area',
          name: 'TKN price in USD',
          data: data
      }]
  });
});
