$(document).ready(function() {
  var $signInButton = $('#signInButton');
  var $signInForm = $('#signInForm');
  var $errorMessage = $('.sign-in .error-message');

  function checkExistingUser() {
    var email = $signInForm.find('.email input').val();
    var password = $signInForm.find('.password input').val();

    if(email === 'admin@gmail.com' && password ==="admin") {
      $errorMessage.addClass('hidden');
      window.location.href = '/user.html';
    }
    else {
      $errorMessage.removeClass('hidden');
    }
    // var msg = $signInForm.serialize();
    // $.ajax({
    //   type: 'POST',
    //   url: '/bla',
    //   data: msg,
    //   success: function(data) {
    //     if (data === 'Login') {
    //       $errorMessage.addClass('hidden');
    //       window.location.href = '/user.html';
    //     }
    //     else {
    //       $errorMessage.removeClass('hidden');
    //     }
    //   },
    //   error: function(xhr, str) {
    //     alert('Error:' xhr.responceCode);
    //   }
    // });
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
