
$(document).ready(function($) {

		var slideHeight = $(window).height()-74;
			
	
	
	//Scroll Menu
	$(window).scroll( function(){
		if( $(window).scrollTop()>slideHeight ){
			$('.main-nav').addClass('navbar-fixed-top');
			$('.hidden-block').css("display","block");

		} else {
			$('.main-nav').removeClass('navbar-fixed-top');
			$('.hidden-block').css("display","none");
		}
	});
	
	// // Navigation Scroll
	// $(window).scroll(function(event) {
	// 	Scroll();
	// });

	// $('.navbar-collapse ul li a').on('click', function() {  
	// 	$('html, body').animate({scrollTop: $(this.hash).offset().top - 5}, 1000);
	// 	return false;
	// });

	// // User define function
	// function Scroll() {
	// 	var contentTop      =   [];
	// 	var contentBottom   =   [];
	// 	var winTop      =   $(window).scrollTop();
	// 	var rangeTop    =   200;
	// 	var rangeBottom =   500;
	// 	$('.navbar-collapse').find('.scroll a').each(function(){
	// 		contentTop.push( $( $(this).attr('href') ).offset().top);
	// 		contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height() );
	// 	})
	// 	$.each( contentTop, function(i){
	// 		if ( winTop > contentTop[i] - rangeTop ){
	// 			$('.navbar-collapse li.scroll')
	// 			.removeClass('active')
	// 			.eq(i).addClass('active');			
	// 		}
	// 	})
	// };

	// });
});