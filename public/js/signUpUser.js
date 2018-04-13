$(document).ready(function() {
  var $signUpButton = $('#signUpButton');
  var $signUpForm = $('#signUpForm');
  var $errorMessage = $('.sign-up .error-message');
  var $infoMessage = $('.sign-up .info-message');
  var $successMessage = $('.sign-up .success-message');

  function createNewUser() {
    $errorMessage.addClass('hidden');
    $infoMessage.addClass('hidden');
    $signUpForm.addClass('hidden');
    $successMessage.removeClass('hidden');

    var msg = $signUpForm.serialize();

    // $.ajax({
    //   type: 'POST',
    //   url: '/bla',
    //   data: msg,
    //   success: function(data) {
    //     if (data === 'Login') {
    //       $errorMessage.addClass('hidden');
    //       $signUpForm.addClass('hidden');
    //       $successMessage.removeClass('hidden');
    //     }
    //     else {
    //       $errorMessage.removeClass('hidden');
    //     }
    //   }
    //   error: function(xhr, str) {
    //     alert('Error:' xhr.responceCode);
    //   }
    // });
  }

  $signUpButton.on('click', function() {
    var elementsList = $('#signUpForm').find('.form-element');
    var isFormValide = true;
    elementsList.each(function() {
      if($(this).hasClass('incorrect-field')) {
        isFormValide = false;
      }
    });
    if (isFormValide) {
      createNewUser();
    }
  });
});
