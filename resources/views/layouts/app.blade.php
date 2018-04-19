<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<body {!! isset($isProfile) && $isProfile ? 'class="userPage"': 'class="homePage"'!!}>
<header {!! isset($isProfile) && $isProfile ? '': 'id="headerHome"'!!}{!! isset($isProfile) && $isProfile ? ' class="header-color"': ''!!}>
    <div class="wrapper clearfix">
        <div class="logo">
            <a href="/"><img src="images/logo-white.png" alt=""></a>
        </div>
        <div class="navigation">
            <nav>
                <div class="language-switcher">
                    <form action="{{ route('locale.reset') }}">
                        <input type="hidden" name="lang" value="{{ (app()->getLocale() === 'en') ? 'ru' : 'en' }}">
                        <input type="submit" value="{{ app()->getLocale() }}">
                    </form>
                </div>
                <a href="/">FAQ</a>
                <a href="/">Whitepaper</a>
                <a href="javascript;;" class="loginCta">@lang('index.auth.login')</a>
            </nav>
        </div>
    </div>
</header>
@yield('content')
<footer>
    <div class="wrapper">
        <h2>@lang('index.footer.title')</h2>
        <div class="social-links">
            <a href="https://www.facebook.com/VID-Invest-Fund-1075679845915902"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/vidinvestfund"><i class="fab fa-twitter"></i></a>
            <a href="https://t.me/vidinvestfund"><i class="fab fa-telegram"></i></a>
            <a href="#"><i class="fas fa-envelope"></i></a>
            <a href="https://www.linkedin.com/company/vid-invest-fund/"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
</footer>
<div id="popupBg" class="hidden"></div>
@include('partials.login_form')
</body>
</html>
