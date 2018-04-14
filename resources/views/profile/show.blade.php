@extends('layouts.app', ['isProfile' => true])

@section('content')
<main class="margin-main">
  <div class="user-info">
    <div class="wrapper">
        <div class="user-img">
          <img src="images/user.png" alt="">
        </div>
        <div class="user-email">
          <p>{{ $client->getEmail() }}</p>
        </div>
        <div class="ask-payout">
          <a href="#" class="button">Ask a payout</a>
        </div>
    </div>
  </div>
  <div class="personal-charts">
    <div class="wrapper">
      <div class="personal-token-chart">
        <h2>Your investment</h2>
        <div class="chart-element">
          <ul class="nav-tabs">
            <li class="tab active">
              <a href="#tabUSD">@lang('index.chart.token_price') USD</a>
            </li>
            <li class="tab">
              <a href="#tabBTC">@lang('index.chart.token_price') BTC</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane" id="tabUSD">
              <div id="tokenChartUSD" style="min-width: 310px; height: 400px; max-width: 100%; margin: 0 auto"></div>
            </div>
            <div class="tab-pane hidden" id="tabBTC">
              <div id="tokenChartBTC" style="min-width: 310px; height: 400px; max-width: 100%; margin: 0 auto"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="portfolio-chart">
    <div class="wrapper">
      <div class="chart-element">
        <div id="portfolioChart" style="min-width: 310px; height: 400px; max-width: 100%; margin: 0 auto"></div>
      </div>
      <div class="chart-summary">
        <p><i class="fas fa-user"></i>Client's token value: <span>3354</span></p>
        <p><i class="fas fa-chart-bar"></i>@lang('index.chart.token_price'): <span>$469</span></p>
        <p><i class="fas fa-chart-bar"></i>@lang('index.chart.token_price'): <span>Ƀ748</span></p>
        <p><i class="fas fa-chart-line"></i>@lang('index.chart.funds_yields'): <span>693.86%</span></p>
      </div>
    </div>
  </div>
</main>
@endsection
