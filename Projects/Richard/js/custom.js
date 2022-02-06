jQuery.noConflict();
jQuery(document).ready(function () {
    'use strict';
    
	// BLOG
    let carousel = jQuery('#blog');
	carousel.owlCarousel({  
		items: 2,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		smartSpeed: 1500,
		dotsSpeed: 1000,
		loop: true,
		nav: false,
		navText: ['', ''],
		dots: true,
		dotsEach: true,
		mouseDrag: true,
		margin: 10,
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
				items: 1,
				dots: true,
				mouseDrag: true,
				autoplay: true,
				smartSpeed: 1000
			},
			
			700:{
				items: 1,
				dots: true,
				mouseDrag: true,
				autoplay: true,
				smartSpeed: 1000
			},
			991:{
				items: 1,
				dots: true,
				mouseDrag: true,
				autoplay: true,
				smartSpeed: 1000
			},
			1199:{
				items: 1,
				dots: true,
                nav: true,
				mouseDrag: true
			}
		}
    });

	// SOFTWARE
    let carousel_2 = jQuery('#software');
	carousel_2.owlCarousel({  
		items: 5,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		smartSpeed: 1500,
		dotsSpeed: 1000,
		loop: true,
		nav: false,
		navText: ['', ''],
		dots: false,
		mouseDrag: true,
		margin: 10,
		stagePadding: 0,
		autoWidth: false,
		responsiveClass: true,
		responsive:{
			0:{
				items: 1,
				mouseDrag: true,
				autoplay: true
			},
			479:{
				items: 2,
				mouseDrag: true,
				autoplay: true
			},
			576:{
				items: 2,
				mouseDrag: true,
				autoplay: true
			},
			767:{
				items: 3,
				mouseDrag: true,
				autoplay: true
			},
			991:{
				items: 4,
				autoplay: true,
				mouseDrag: true
			},
			1199:{
				items: 5,
				mouseDrag: false,
				autoplay: false
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

