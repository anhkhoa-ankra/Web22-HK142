$('#nav').affix({
	offset: {
		top: $('#nav').offset().top
	}
});

$('nav').on('affix.bs.affix', function() {
	$(this).addClass('navbar-fixed-top');
	$('>div', this).addClass('container');
});

$('nav').on('affix-top.bs.affix', function() {
	$(this).removeClass('navbar-fixed-top');
	$('>div', this).removeClass('container');
});