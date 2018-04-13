<div class="logout-popup popup hidden">
  <a href="#" id="closeLoginForm"><i class="far fa-times-circle"></i></a>
  <div class="logout-wrapper">
    <div class="logout-message">
      <p>@lang('index.auth.logout_message')</p>
    </div>
    <div class="logout-buttons">
      <a href="#" class="button logout-confirm">@lang('index.auth.yes')</a>
      <a href="#" class="button logout-cancel">@lang('index.auth.no')</a>
    </div>
    <form id="logout-form" action="/logout" method="POST" class="hidden">
      {{ csrf_field() }}
    </form>
  </div>
</div>
