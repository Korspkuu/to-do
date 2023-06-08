$(document).ready(function() {
    $(window).scroll(function() {
      var scrollTop = $(this).scrollTop();
      $('.image-back img').css('transform', 'translateY(' + scrollTop / 2 + 'px)');
      if (scrollTop >= $('.image-back').height()) {
        $('.image-back img').addClass('hidden');
      } else {
        $('.image-back img').removeClass('hidden');
      }
    });
  });


