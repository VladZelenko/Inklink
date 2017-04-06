//header navmenu
$(document).ready(function(){
	var touch = $('#touch-menu');
	var menu = $('.nav');

	$(touch).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
	});
	$(window).resize(function(){
		var wid = $(window).width();
		if(wid > 760 && menu.is(':hidden')) {
			menu.removeAttr('style');
		}
	});
});
//top slider
$('.top-slider').slick({
	infinite: true,
	speed: 1500,
	slidesToShow: 1,
	slidesToScroll: 1,
	autoplay: true,
  autoplaySpeed: 1500,
  'arrows': true,
});

