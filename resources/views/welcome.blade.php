@extends('layouts.app')

@section('content')
<main>
  <div class="main-banner">
    <div class="main-banner-absolute">
      <div class="banner-summary">
        <div class="wrapper">
          <h1 id="title">@lang('index.banner.title')</span>
          </h1>
          <p>@lang('index.banner.subtitle')</p>
          <p>@lang('index.banner.summary')</p>
          <a href="#" class="button loginCta">@lang('index.banner.button')</a>
        </div>
      </div>
    </div>
  </div>
  <div class="home-token-chart">
    <h2>Live update</h2>
    <div class="wrapper">
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
            <div id="tokenChartUSD" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
          </div>
          <div class="tab-pane hidden" id="tabBTC">
            <div id="tokenChartBTC" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
          </div>
        </div>
      </div>
      <div class="chart-summary">
        <p><i class="fas fa-chart-bar"></i>@lang('index.chart.token_price') USD: <span>$469</span></p>
        <p><i class="fas fa-chart-bar"></i>@lang('index.chart.token_price') BTC: <span>Ƀ748</span></p>
        <p><i class="fas fa-chart-line"></i>@lang('index.chart.funds_yields'): <span>693.86%</span></p>
      </div>
    </div>
  </div>
  <div class="how-it-works">
    <div class="wrapper">
      <div class="how-summary">
        <h2>How it works?</h2>
        <p>@lang('index.about.summary1')</p>
        <a href="#" class="link">White Paper</a>
        <a href="#" class="button join-button">@lang('index.about.button')</a>
      </div>
      <div class="how-img">
        <img src="images/blockchain3.png" alt="">
      </div>
    </div>
  </div>
  <div class="number-items">
    <div class="item">
      <span>7854 k+</span>
      <p>@lang('index.digits.1')</p>
    </div>
    <div class="item">
      <span>548</span>
      <p>@lang('index.digits.2')</p>
    </div>
    <div class="item">
      <span>80 k+</span>
      <p>@lang('index.digits.3')</p>
    </div>
    <div class="item">
      <span>89</span>
      <p>@lang('index.digits.4')</p>
    </div>
  </div>
  <div class="portfolio-chart">
    <div class="wrapper">
      <div class="chart-element">
        <div id="portfolioChart" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
      </div>
      <div class="chart-summary">
        <p><i class="fas fa-chart-bar"></i>@lang('index.chart.token_price'): <span>$469</span></p>
        <p><i class="fas fa-chart-bar"></i>@lang('index.chart.token_price'): <span>Ƀ748</span></p>
        <p><i class="fas fa-chart-line"></i>@lang('index.chart.funds_yields'): <span>693.86%</span></p>
        <a href="#" class="button join-button">@lang('index.chart.invest')</a>
      </div>
    </div>
  </div>
  @include('partials.contacts')
</main>
@endsection
