jQuery.noConflict();
jQuery(document).ready(function () {
    'use strict';
    
    let carousel = jQuery('#slider_WeCanHelp');
		
	carousel.owlCarousel({  
		items: 4,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		smartSpeed: 1500,
		dotsSpeed: 1000,
		loop: true,
		nav: false,
		navText: [''],
		dots: true,
		mouseDrag: true,
		margin: 0,
		stagePadding: 0,
		autoWidth: false,
		responsiveClass: true,
		responsive:{
			0:{
				items: 1,
				dots: true,
				nav: true,
				mouseDrag: true,
				autoplay: true,
				smartSpeed: 1000
			},
			479:{
				items: 1,
				dots: true,
				mouseDrag: true,
				autoplay: true,
				smartSpeed: 1000
			},
			576:{
				items: 2,
				dots: true,
				mouseDrag: true,
				autoplay: true,
				smartSpeed: 1000
			},
			
			767:{
				items: 2,
				dots: true,
				mouseDrag: true,
				autoplay: true,
				smartSpeed: 1000
			},
			991:{
				items: 3,
				dots: true,
				mouseDrag: true,
				autoplay: true,
				smartSpeed: 1000
			},
			1099:{
				items: 3,
				dots: true,
				mouseDrag: true,
				autoplay: true,
				smartSpeed: 1000
			},
			1199:{
				items: 4,
				dots: true,
                nav: true,
				mouseDrag: true
			}
		}
	
    });
});

'use strict';

 // RESPONSIVE MENU
function showMenu() {
    document.getElementById("mainMenu").classList.toggle("showMenu");
    document.getElementById("responsiveMenuIcon").classList.toggle("active");
}

