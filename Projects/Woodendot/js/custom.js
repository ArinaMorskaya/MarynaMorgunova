jQuery.noConflict();
jQuery(document).ready(function () {
    'use strict';

    jQuery(".fancybox").fancybox();
    
	// OUR PRODUCTS
    let carousel = jQuery('#slider_ourProducts');
	carousel.owlCarousel({  
		items: 3,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		smartSpeed: 1500,
		dotsSpeed: 1000,
		loop: true,
		nav: false,
		navText: [''],
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
			1199:{
				items: 3,
				dots: true,
                nav: true,
				mouseDrag: true
			}
		}
    });

	// REWIEWS
    let carousel_rewiews = jQuery('#slider_reviews');
	carousel_rewiews.owlCarousel({  
		items: 1,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		smartSpeed: 1500,
		dotsSpeed: 1000,
		loop: true,
		nav: false,
		navText: [''],
		dots: true,
		dotsEach: true,
		mouseDrag: true,
		margin: 10,
		stagePadding: 0,
		autoWidth: false,
		responsiveClass: false
    });
});

'use strict';

 // RESPONSIVE MENU
function showMenu() {
    document.getElementById("mainMenu").classList.toggle("showMenu");
    document.getElementById("responsiveMenu").classList.toggle("active");
}

