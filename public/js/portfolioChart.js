$(document).ready(function() {
Highcharts.chart('portfolioChart', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    tooltip: {
        pointFormat: '{point.ticket}: <b>{point.percentage:.1f}%</b> <br />Balance: <b>{point.balance}</b><br />USD: <b>{point.usd}</b>'
    },
    plotOptions: {
        pie: {
          allowPointSelect: true,
          cursor: 'pointer',
          dataLabels: {
              enabled: false
          },
          showInLegend: true
        }
    },
    series: [{
        colorByPoint: true,
        data: [{
            name: 'Bitcoin',
            ticket: 'BTC',
            balance: 9.7646,
            usd: '$80,656',
            y: 61.41
        }, {
            name: 'Ethereum',
            ticket: 'BTC',
            balance: 9.7646,
            usd: '$80,656',
            y: 11.84
        }, {
            name: 'Cindicator',
            ticket: 'BTC',
            balance: 9.7646,
            usd: '$80,656',
            y: 10.85
        }, {
            name: 'Tezos',
            ticket: 'BTC',
            balance: 9.7646,
            usd: '$80,656',
            y: 4.67
        }, {
            name: 'Bitcoin Cash',
            ticket: 'BTC',
            balance: 9.7646,
            usd: '$80,656',
            y: 4.18
        }, {
            name: 'EOS',
            ticket: 'BTC',
            balance: 9.7646,
            usd: '$80,656',
            y: 1.64
        }, {
            name: 'ICON',
            ticket: 'BTC',
            balance: 9.7646,
            usd: '$80,656',
            y: 1.6
        }, {
            name: 'QQ',
            ticket: 'BTC',
            balance: 9.7646,
            usd: '$80,656',
            y: 1.2
        }, {
            name: 'Other',
            ticket: 'BTC',
            balance: 9.7646,
            usd: '$80,656',
            y: 2.61
        }]
    }]
});
});
