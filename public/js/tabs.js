$(document).ready(function() {
  var tab = $('.nav-tabs .tab');
  var tabContent = $('.tab-content .tab-pane');

  tab.each(function() {
    $(this).on('click', function(e) {
      e.preventDefault();
      var tabContentId = $(this).find('a').attr('href');
      tab.each(function() {
        $(this).removeClass('active');
      })
      $(this).addClass('active');
      tabContent.each(function() {
        $(this).addClass('hidden');
        if ($(this).is(tabContentId)) {
          $(this).removeClass('hidden');
        }
      });
    });
  });
})
