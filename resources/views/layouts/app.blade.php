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
      </div>
      <div class="footer-navigation">
        <a href="#">FAQ</a>
        <a href="#">White Paper</a>
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
