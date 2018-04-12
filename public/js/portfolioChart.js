$(document).ready(function() {
Highcharts.chart('portfolio-chart', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
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
        name: 'Currency',
        colorByPoint: true,
        data: [{
            name: 'Bitcoin',
            y: 61.41
        }, {
            name: 'Ethereum',
            y: 11.84
        }, {
            name: 'Cindicator',
            y: 10.85
        }, {
            name: 'Tezos',
            y: 4.67
        }, {
            name: 'Bitcoin Cash',
            y: 4.18
        }, {
            name: 'EOS',
            y: 1.64
        }, {
            name: 'ICON',
            y: 1.6
        }, {
            name: 'QX',
            y: 1.2
        }, {
            name: 'Other',
            y: 2.61
        }]
    }]
});
});
