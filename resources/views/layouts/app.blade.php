<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<body>
  <header id="header"{!! isset($isProfile) && $isProfile ? ' class="header-color"': ''!!}>
    <div class="wrapper clearfix">
      <div class="logo">
        <img src="images/logo-white.png" alt="">
      </div>
      <div class="navigation">
        <nav>
          <div class="language-switcher">
            <form action="{{ route('locale.reset') }}">
              <input type="hidden" name="lang" value="{{ (app()->getLocale() === 'en') ? 'ru' : 'en' }}">
              <input type="submit" value="{{ app()->getLocale() }}">
            </form>
          </div>
          @guest
            <a href="#" class="loginCta">@lang('index.auth.login')<i class="fas fa-user"></i></a>
          @else
            <a href="#" class="logoutCta">@lang('index.auth.logout')<i class="fas fa-user"></i></a>
          @endguest
        </nav>
      </div>
    </div>
  </header>
  @yield('content')
  <footer>
    <div class="wrapper">
      <h2>@lang('index.footer.title')</h2>
      <div class="social-links">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-telegram"></i></a>
          <a href="#"><i class="fas fa-envelope"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
      </div>
      <div class="footer-navigation">
        <a href="#">FAQ</a>
        <a href="#">White Paper</a>
      </div>
      <p>With the unprecedented rise of cryptocurrencies and blockchain technology, new opportunities are arising in field of investment. As the traditional type of economy is reshaping its form, the money will flow into cryptocurrencies, either for the speculative purposes of gaining capital profit or by supporting projects that are built on decentralised platforms. Importantly, individual investors with little knowledge of cryptocurrency content do not want to miss opportunities to be exposed to undervalued digital assets. This is why the The Token Fund is coming.</p>
      <div class="footer-info">
        <p>THE INFORMATION PROVIDED ON THIS WEBSITE IS NOT INTENDED FOR DISTRIBUTION TO, OR USE BY, ANY PERSON OR ENTITY IN THE UNITED STATES OR THE REPUBLIC OF SINGAPORE, OR IN ANY JURISDICTION OR COUNTRY WHERE SUCH DISTRIBUTION OR USE WOULD BE CONTRARY TO ANY LAW OR REGULATION, OR WHICH WOULD SUBJECT THE TOKEN FUND AND/OR ENTITY CREATING THE TKN TOKENS (INCLUDING THEIR AFFILIATES) OR ANY OF THEIR PRODUCTS OR SERVICES TO ANY REGISTRATION, LICENSING OR OTHER AUTHORIZATION REQUIREMENT WITHIN SUCH JURISDICTION OR COUNTRY.
YOU ARE ONLY ALLOWED TO PURCHASE TKN TOKENS IF AND BY BUYING TKN TOKENS YOU COVENANT, REPRESENT, AND WARRANT THAT YOU ARE NEITHER A U. S. CITIZEN OR PERMANENT RESIDENT OF THE UNITED STATES, NOR DO YOU HAVE A PRIMARY RESIDENCE OR DOMICILE IN THE UNITED STATES, INCLUDING PUERTO RICO, THE U. S. VIRGIN ISLANDS, AND ANY OTHER POSSESSIONS OF THE UNITED STATES. IN ORDER TO BUY TKN TOKENS AND BY BUYING TKN TOKENS YOU COVENANT, REPRESENT, AND WARRANT THAT NONE OF THE OWNERS OF THE COMPANY, OF WHICH YOU ARE AN AUTHORIZED OFFICER, ARE U. S. CITIZEN OR PERMANENT RESIDENT OF THE UNITED STATES, NOR DO YOU HAVE A PRIMARY RESIDENCE OR DOMICILE IN THE UNITED STATES, INCLUDING PUERTO RICO, THE U. S. VIRGIN ISLANDS, AND ANY OTHER POSSESSIONS OF THE UNITED STATES. SHOULD THIS CHANGE AT ANY TIME, YOU SHALL IMMEDIATELY NOTIFY THE CREATOR OF TKN TOKENS.
CREATOR OF TKN TOKENS SHALL RESERVE THE RIGHT TO REFUSE SELLING TKN TOKENS TO ANYONE WHO DOES NOT MEET CRITERIA NECESSARY FOR THEIR BUYING, AS SET OUT HEREUNDER AND BY THE APPLICABLE LAW. IN PARTICULAR, THE CREATOR OF TKN TOKENS MAY REFUSE SELLING TKN TOKENS TO U. S. CITIZENS, PERMANENT RESIDENTS OF THE UNITED STATES AND THOSE USERS WHO DO NOT MEET ELIGIBILITY CRITERIA ESTABLISHED BY THE CREATOR OF TKN TOKENS FROM TO TIME IN ITS SOLE DISCRETION.</p>
        <p>The data content of this website is intended for general information purposes only and does not constitute solicitation of or an offer to purchase any securities. This website should be used for general research purposes only. It does not, nor does it purport to, constitute any form of professional investment advice, recommendation or independent analysis. Consequently, the information contained on this website has not been prepared in accordance with the relevant rules and regulations governing such publications in various jurisdictions.</p>
      </div>
    </div>
  </footer>
  <div id="popupBg" class="hidden"></div>
  @guest
    @include('partials.login_form')
  @else
    @include('partials.logout_form')
  @endguest
</body>
</html>
