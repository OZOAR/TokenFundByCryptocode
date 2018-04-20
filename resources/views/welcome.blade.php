@extends('layouts.app')

@section('content')
    <main>
        <div class="main-banner">
            <div class="main-banner-absolute">
                <div class="banner-summary">
                    <div class="wrapper">
                        <h1 id="title">@lang('index.banner.title')</h1>
                        <p id="sub-title">@lang('index.banner.subtitle')</p>
                        <p>@lang('index.banner.summary')</p>
                        <a href="javascript;;" class="button loginCta">@lang('index.banner.button')</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="variants-of-token">
            <div class="wrapper">
                <h2>@lang('index.variants.title')</h2>
                <div class="variants-list">
                    <div class="variant-token">
                        <p>@lang('index.variants.variant_cons')</p>
                    </div>
                    <div class="variant-token">
                        <p>@lang('index.variants.variant_aggress')</p>
                    </div>
                </div>
                <div class="variants-list variants-buttons">
                    <a href="#portfolios-block" class="button">@lang('index.chart.current_stat')</a>
                </div>
            </div>
        </div>

        <div class="how-it-works">
            <div class="wrapper">
                <div class="how-summary">
                    <h2>@lang('index.about.how')</h2>
                    <p>@lang('index.about.summary')</p>
                    <a href="#" class="button join-button">@lang('index.about.button')</a>
                </div>
                <div class="how-img">
                    <img src="images/blockchain3.png" alt="">
                </div>
            </div>
        </div>

        <div class="home-token-chart" id="portfolios-block">
            <h2>@lang('index.chart.current_stat')</h2>
            <div class="wrapper">
                <div class="chart-element">
                    <ul class="nav-tabs">
                        <li class="tab active">
                            <a href="#tab-cons">@lang('index.variants.cons_button')</a>
                        </li>
                        <li class="tab">
                            <a href="#tab-aggress">@lang('index.variants.aggress_button')</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane" id="tab-cons">
                            <div id="tokenChartUSD" style="max-width: 350px; height: 250px;"></div>
                            <div id="portfolioChartCons"
                                 style="max-width: 420px; height: 300px;"></div>
                            <div class="chart-summary">
                                <p><i class="fas fa-chart-bar"></i>@lang('index.chart.token_price') USD:
                                    <span>$394</span></p>
                                <p><i class="fas fa-chart-bar"></i>@lang('index.chart.token_price') BTC:
                                    <span>Ƀ561</span></p>
                                <p><i class="fas fa-chart-line"></i>@lang('index.chart.funds_yields'):
                                    <span>803.12%</span></p>
                            </div>
                        </div>
                        <div class="tab-pane hidden" id="tab-aggress">
                            <div id="tokenChartBTC" style="max-width: 350px; height: 250px;"></div>
                            <div id="portfolioChartAggress" style="max-width: 420px; height: 300px;"></div>
                            <div class="chart-summary">
                                <p><i class="fas fa-chart-bar"></i>@lang('index.chart.token_price') USD:
                                    <span>$469</span></p>
                                <p><i class="fas fa-chart-bar"></i>@lang('index.chart.token_price') BTC:
                                    <span>Ƀ748</span></p>
                                <p><i class="fas fa-chart-line"></i>@lang('index.chart.funds_yields'):
                                    <span>693.86%</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="number-items">
            <div class="item">
                <span><img src="/images/user-white.png" alt="" width="100"/></span>
                <p>@lang('index.team.1.name')</p>
                <p class="user-job"><i>@lang('index.team.1.job')</i></p>
            </div>
            <div class="item">
                <span><img src="/images/user-white.png" alt="" width="100"/></span>
                <p>@lang('index.team.2.name')</p>
                <p class="user-job"><i>@lang('index.team.2.job')</i></p>
            </div>
            <div class="item">
                <span><img src="/images/user-white.png" alt="" width="100"/></span>
                <p>@lang('index.team.3.name')</p>
                <p class="user-job"><i>@lang('index.team.3.job')</i></p>
            </div>
            <div class="item">
                <span><img src="/images/user-white.png" alt="" width="100"/></span>
                <p>@lang('index.team.4.name')</p>
                <p class="user-job"><i>@lang('index.team.4.job')</i></p>
            </div>
        </div>
        <div class="number-items row-new">
            <div class="item">
                <span><img src="/images/user-white.png" alt="" width="100"/></span>
                <p>@lang('index.team.5.name')</p>
                <p class="user-job"><i>@lang('index.team.5.job')</i></p>
            </div>
            <div class="item">
                <span><img src="/images/user-white.png" alt="" width="100"/></span>
                <p>@lang('index.team.6.name')</p>
                <p class="user-job"><i>@lang('index.team.6.job')</i></p>
            </div>
            <div class="item">
                <span><img src="/images/user-white.png" alt="" width="100"/></span>
                <p>@lang('index.team.7.name')</p>
                <p class="user-job"><i>@lang('index.team.7.job')</i></p>
            </div>
        </div>

        <div class="portfolio-chart">
            <div class="wrapper">
                <div class="chart-element">
                    <div id="portfolioChart"
                         style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
                </div>
                <div class="chart-summary">
                    <p><i class="fas fa-chart-bar"></i>@lang('index.chart.token_price'): <span>$469</span></p>
                    <p><i class="fas fa-chart-bar"></i>@lang('index.chart.token_price'): <span>Ƀ748</span></p>
                    <p><i class="fas fa-chart-line"></i>@lang('index.chart.funds_yields'): <span>693.86%</span></p>
                    <a href="javascript;;" class="button join-button">@lang('index.chart.invest')</a>
                </div>
            </div>
        </div>

        @include('partials.contacts')

        <div id="partners">
            <div class="partners-item item">
                <span><a href="https://www.cryptech.cloud/"><img src="/images/partners/cryptech.png" alt=""
                                                                 width="100"/></a></span>
            </div>
            <div class="partners-item item">
                <span><a href="https://www.cryptech.cloud/"><img src="/images/partners/cryptech-cloud.png" alt=""
                                                                 width="100"/></a></span>
            </div>
            <div class="partners-item item">
                <span><a href="https://cryptocode.by/"><img src="/images/partners/cryptocode.png" alt=""
                                                            width="100"/></a></span>
            </div>
            <div class="partners-item item">
                <span><a href="https://fundplatform.io/en/"><img src="/images/partners/fund-green.png" alt=""
                                                                 width="100"/></a></span>
            </div>
            <div class="partners-item item">
                <span><a href="https://www.genesis-mining.com/"><img src="/images/partners/gm-logo.png" alt=""
                                                                     width="100"/></a></span>
            </div>
            <div class="partners-item item">
                <span><a href="http://kabc.kz/"><img src="/images/partners/kabc-logo.png" alt=""
                                                     width="100"/></a></span>
            </div>
            <div class="partners-item item">
                <span><a href="https://nem.io/"><img src="/images/partners/nem-logo.png" alt="" width="100"/></a></span>
            </div>
            <div class="partners-item item">
                <span><a href="https://newmining.ru/"><img src="/images/partners/new-mining.jpg" alt=""
                                                           width="100"/></a></span>
            </div>
        </div>
    </main>
@endsection
