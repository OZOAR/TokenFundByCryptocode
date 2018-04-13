<div class="logout-popup popup hidden">
  <a href="#" id="closeLoginForm"><i class="far fa-times-circle"></i></a>
  <div class="logout-wrapper">
    <div class="logout-message">
      <p>Are you sure you want sign out?</p>
    </div>
    <div class="logout-buttons">
      <a href="#" class="button logout-confirm">Yes</a>
      <a href="#" class="button logout-cancel">No</a>
    </div>
    <form id="logout-form" action="/logout" method="POST" class="hidden">
      {{ csrf_field() }}
    </form>
  </div>
</div>
