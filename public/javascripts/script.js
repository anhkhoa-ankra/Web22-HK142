$('nav').on('affix.bs.affix', function() {
  $(this).addClass('navbar-fixed-top');
  $('>div', this).addClass('container');
  $('body').addClass('padding-top-50');
});

$('nav').on('affix-top.bs.affix', function() {
  $(this).removeClass('navbar-fixed-top');
  $('>div', this).removeClass('container');
  $('body').removeClass('padding-top-50');
});

$('#nav').affix({
  offset: {
    top: $('#nav').offset().top
  }
});

$("a[href='#top']").click(function() {
  $("html, body").animate({
    scrollTop: 0
  }, "slow");
  return false;
});