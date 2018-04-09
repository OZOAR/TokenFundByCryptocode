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
      <div class="chart-img">
        <img src="images/graph.png" alt="">
      </div>
      <div class="chart-summary">
        <p><i class="fas fa-chart-bar"></i>@lang('index.chart.token_price'): <span>$469</span></p>
        <p><i class="fas fa-chart-bar"></i>@lang('index.chart.token_price'): <span>Ƀ748</span></p>
        <p><i class="fas fa-chart-line"></i>@lang('index.chart.funds_yields'): <span>693.86%</span></p>
      </div>
    </div>
  </div>
  <div class="how-it-works">
    <div class="wrapper">
      <div class="how-summary">
        <p>@lang('index.about.summary1')</p>
        <p>@lang('index.about.summary2')</p>
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
  <div class="currency-chart">
    <div class="wrapper">
      <div class="chart-img">
        <img src="images/chart.png" alt="">
      </div>
      <div class="chart-summary">
        <p><i class="fas fa-chart-bar"></i>@lang('index.chart.token_price'): <span>$469</span></p>
        <p><i class="fas fa-chart-bar"></i>@lang('index.chart.token_price'): <span>Ƀ748</span></p>
        <p><i class="fas fa-chart-line"></i>@lang('index.chart.funds_yields'): <span>693.86%</span></p>
        <a href="#" class="button join-button">@lang('index.chart.invest')</a>
      </div>
    </div>
  </div>
  <div class="contacts">
    <h2>Contact Us</h2>
    <ul class="nav-tabs">
      <li class="tab active">
        <a href="#tabOne"><i class="fas fa-map-marker"></i>Russia</a>
      </li>
      <li class="tab">
        <a href="#tabTwo"><i class="fas fa-map-marker"></i>Kazakhstan</a>
      </li>
      <li class="tab">
        <a href="#tabThree"><i class="fas fa-map-marker"></i>Czech Republic</a>
      </li>
    </ul>
    <div>
    <div class="tab-content">
      <div class="tab-pane" id="tabOne">
        <div id="map-first" class="map"></div>
        <div class="wrapper">
          <div class="contacts-info">
              <div class="address">
                <i class="fas fa-location-arrow"></i>
                <div class="address-info">
                  <p>Russia, Moscow</p>
                  <p>Протопопоский пер., 14, 129090</p>
                </div>
              </div>
              <div class="phones">
                <i class="fas fa-phone"></i>
                <div class="phones-info">
                  <p><a href="tel:+07090909000">+07090909000</a></p>
                  <p><a href="tel:+07090909000">+07090909000</a></p>
                </div>
              </div>
              <div class="email">
                <i class="fas fa-envelope"></i>
                <a href="mailto:vid_investfond@gmail.com">vid_investfond@gmail.com</a>
              </div>
          </div>
        </div>
      </div>
      <div class="tab-pane hidden" id="tabTwo">
        <div id="map-second" class="map"></div>
        <div class="wrapper">
          <div class="contacts-info">
              <div class="address">
                <i class="fas fa-location-arrow"></i>
                <div class="address-info">
                  <p>Алматы, Казахстан</p>
                  <p>ул. Маркова, 26, 050040</p>
                </div>
              </div>
              <div class="phones">
                <i class="fas fa-phone"></i>
                <div class="phones-info">
                  <p><a href="tel:+07090909000">+07090909000</a></p>
                  <p><a href="tel:+07090909000">+07090909000</a></p>
                </div>
              </div>
              <div class="email">
                <i class="fas fa-envelope"></i>
                <a href="mailto:vid_investfond@gmail.com">vid_investfond@gmail.com</a>
              </div>
          </div>
        </div>
      </div>
      <div class="tab-pane hidden" id="tabThree">
        <div id="map-third" class="map"></div>
        <div class="wrapper">
          <div class="contacts-info">
              <div class="address">
                <i class="fas fa-location-arrow"></i>
                <div class="address-info">
                  <p>Prague, Czech Republic</p>
                  <p>Nademlejnská 1069/20, 198 00</p>
                </div>
              </div>
              <div class="phones">
                <i class="fas fa-phone"></i>
                <div class="phones-info">
                  <p><a href="tel:+07090909000">+07090909000</a></p>
                  <p><a href="tel:+07090909000">+07090909000</a></p>
                </div>
              </div>
              <div class="email">
                <i class="fas fa-envelope"></i>
                <a href="mailto:vid_investfond@gmail.com">vid_investfond@gmail.com</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
