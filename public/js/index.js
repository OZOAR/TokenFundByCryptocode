$(document).ready(function(){
var $header = $('#headerHome'),
    $logo = $header.find('.logo img'),
    $navLinks = $header.find('.navigation a');

  $(window).scroll(function() {
    var scrollen = $(document).scrollTop();
    if (scrollen >= 50) {
      $header.css({
        'background-color': '#142C34',
        'opacity': '0.8'
      });
      $logo.css('width', '70px');
      $navLinks.css('line-height', '50px');
    }
    else {
      $header.css({
        'background-color': 'transparent',
        'opacity': '1'
      });
      $logo.css('width', '90px');
      $navLinks.css('line-height', '70px');
    }
  });
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
