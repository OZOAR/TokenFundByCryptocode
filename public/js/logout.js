$(document).ready(function(){
  var $popupBg = $('#popupBg');
  var $closeIcon = $('#closeLoginForm');
  var $logoutPopup = $('.logout-popup');
  var $logoutCta = $('.logoutCta');
  var $logoutConfirmButton = $logoutPopup.find('.logout-confirm');
  var $logoutCancelButton = $logoutPopup.find('.logout-cancel');

  function showLogoutPopup() {
    $popupBg.removeClass('hidden');
    $logoutPopup.removeClass('hidden');
  }
  function hideLogoutPopup() {
    $logoutPopup.addClass('hidden');
    $popupBg.addClass('hidden');
  }

  $logoutCta.on('click', function(e) {
    e.preventDefault();
    showLogoutPopup();
  });

  $popupBg.on('click', hideLogoutPopup);
  $closeIcon.on('click', hideLogoutPopup);
  $logoutCancelButton.on('click', hideLogoutPopup);

  $logoutConfirmButton.on('click', function(e) {
      e.preventDefault();
      $('#logout-form').submit();
  });
});
