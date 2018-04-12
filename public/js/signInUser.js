$(document).ready(function() {
  var $signInButton = $('#signInButton');
  var $signInForm = $('#signInForm');
  var $errorMessage = $('.sign-in .error-message');

  function checkExistingUser() {
    var msg = $signInForm.serialize();
    $.ajax({
      type: 'POST',
      url: 'http://5acb5a4b5ee1f30014898ce4.mockapi.io/api/login',
      data: msg,
      success: function(data) {
        if (!data.success) {
          if (data.message) {
            $errorMessage.removeClass('hidden');
          }
        }
        else {
          $errorMessage.addClass('hidden');
          window.location.href = data.redirectTo;
        }
      },
      error: function(xhr, str) {
        alert('Error:', xhr.responceCode);
      }
    });
  }

  $signInButton.on('click', function() {
    var elementsList = $('#signInForm').find('.form-element');
    var isFormValide = true;
    elementsList.each(function() {
      if($(this).hasClass('incorrect-field')) {
        isFormValide = false;
      }
    });
    if (isFormValide) {
      checkExistingUser();
    }
  });
});
