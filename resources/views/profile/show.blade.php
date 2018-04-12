@extends('layouts.app', ['isProfile' => true])

@section('content')
<main class="margin-main">
  <div class="user-info">
    <div class="wrapper">
      <div class="personal-info">
        <div class="user-img">
          <img src="images/user.png" alt="">
        </div>
        <div class="user-email">
          <p>admin@gmail.com</p>
        </div>
      </div>
      <div class="token-info">
        <div class="chart-summary">
          <p><i class="fas fa-user"></i>Client's token value: <span>3354</span></p>
          <p><i class="fas fa-chart-bar"></i>Token price in USD: <span>$469</span></p>
          <p><i class="fas fa-chart-bar"></i>Token price in BTC: <span>Ƀ748</span></p>
          <p><i class="fas fa-chart-line"></i>Funds yields: <span>693.86%</span></p>
        </div>
      </div>
    </div>
  </div>
  <div class="personal-charts">
    <div class="wrapper">
      <div class="personal-token-chart">
        <h2>Your investment</h2>
        <p><img src="images/graph.png" alt=""></p>
      </div>
      <div class="porfolio-chart">
        <h2>Portfolio</h2>
        <p><img src="images/chart.png" alt=""></p>
      </div>
    </div>
  </div>
  <div class="ask-payout">
    <div class="wrapper">
      <a href="#" class="button">Ask a payout</a>
    </div>
  </div>
</main>
@endsection
