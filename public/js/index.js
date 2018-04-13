$(document).ready(function(){
  $(window).scroll(function() {
    var scrollen = $(document).scrollTop();
    if (scrollen >= 50) {
      $('#header').css({
        'background-color': '#142C34',
        'opacity': '0.8'
      });
      $('.logo img').css('width', '70px');
      $('.navigation a').css('line-height', '70px');
    }
    else {
      $('#header').css({
        'background-color': 'transparent',
        'opacity': '1'
      });
      $('.logo img').css('width', '90px');
      $('.navigation a').css('line-height', '90px');
    }
  });
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
