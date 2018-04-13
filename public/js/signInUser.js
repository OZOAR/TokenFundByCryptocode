$(document).ready(function() {
  var $signInButton = $('#signInButton');
  var $signInForm = $('#signInForm');
  var $errorMessage = $('.sign-in .error-message');
  var $errorMessageServer = $('.sign-in .error-message-server');

  function checkExistingUser() {
    var msg = $signInForm.serialize();
    $.ajax({
      type: 'POST',
      url: '/login',
      data: msg,
      success: function(data) {
        $errorMessageServer.find('p').html('');
        $errorMessageServer.addClass('hidden');
        window.location.href = data.redirectTo;
      },
      error: function(xhr, str) {
        var data = xhr.responseJSON;
        $errorMessageServer.find('p').html('');
        $errorMessageServer.removeClass('hidden');
        if (data.errors) {
          for(key in data.errors) {
            $errorMessageServer.find('p').html($errorMessageServer.find('p').html() + data.errors[key] + '<br />');
          }
        }
        else {
          $errorMessageServer.find('p').html(data.message);
        }
      }
    });
  }

  $signInButton.on('click', function(e) {
    var elementsList = $('#signInForm').find('.form-element');
    var isFormValide = true;

    $errorMessage.addClass('hidden');
    $errorMessageServer.addClass('hidden');

    elementsList.each(function() {
      if($(this).hasClass('incorrect-field')) {
        isFormValide = false;
      }
    });
    if (isFormValide) {
      checkExistingUser();
    }
    else {
      e.preventDefault();
      $errorMessage.removeClass('hidden');
    }
  });
});
