$(document).ready(function(){

	/********************************************
	 * Initialize stellar.js on window
	 ********************************************/
	$.stellar({
		horizontalScrolling: false,
		verticalOffset: 40
	});

	/********************************************
	 * Change nav bar on scroll
	 ********************************************/
	$(window).on('scroll', function() {

		// if the scroll position is greater than 100px
		if($(window).scrollTop() > 100) {
			$('.navbar').css({boxShadow: '0 0 50px rgba(0,0,0,0.8)'});
		} else {
			$('.navbar').css({boxShadow: 'none'});
		}
	});

});