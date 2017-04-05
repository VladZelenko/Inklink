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
//fixed menu
	var h_hght = 100; // отступ шапки от верха
		var h_mrg = 0;	  // отступ когда шапка уже не видна
		$(function(){
			var elem = $('#menu');
			var top = $(this).scrollTop();
			if(top > h_hght){
				elem.css('top', h_mrg);
			}
			$(window).scroll(function(){
				top = $(this).scrollTop();
				if (top+h_mrg < h_hght) {
					elem.css('top', (h_hght-top));
				} else {
					elem.css('top', h_mrg);
				}
			});
		});
	});