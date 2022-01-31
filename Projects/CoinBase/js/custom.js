jQuery.noConflict();
jQuery(document).ready(function () {
    'use strict';

    
	// IPHONE
    let carousel = jQuery('#slider');
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
		dots: false,
		dotsEach: true,
		mouseDrag: true,
		margin: 10,
		stagePadding: 0,
		autoWidth: false,
		responsiveClass: true,
		responsive:{
			0:{
				items: 1,
				// dots: true,
				nav: true,
				mouseDrag: true,
				autoplay: true,
				smartSpeed: 1000
			},
			479:{
				items: 1,
				// dots: true,
				mouseDrag: true,
				autoplay: true,
				smartSpeed: 1000
			},
			576:{
				items: 1,
				// dots: true,
				mouseDrag: true,
				autoplay: true,
				smartSpeed: 1000
			},
			
			700:{
				items: 1,
				// dots: true,
				mouseDrag: true,
				autoplay: true,
				smartSpeed: 1000
			},
			991:{
				items: 1,
				// dots: true,
				mouseDrag: true,
				autoplay: true,
				smartSpeed: 1000
			},
			1199:{
				items: 1,
				// dots: true,
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
    document.getElementById("responsiveMenu").classList.toggle("active");
}

 // DROPDOWN MENU
function showDropdownLink() {
    document.getElementById("dropdown-menu").classList.toggle("showLink");
}

 // STATISTICS
 let statisticsList = document.getElementsByClassName("statisticsHeader");
 let statisticsTables = document.getElementsByClassName("table");
 function showStatistics(indx) {
	 for (let i = 0; i< statisticsTables.length; i++) {
		 statisticsTables[i].style.display = "none";
		 statisticsList[i].style.opacity = "0.5";
	 }
	 statisticsTables[indx].style.display = "block";
	 statisticsList[indx].style.opacity = "1";
}

// NAVIGATION BLOG
function changeArticle(id) {
	let articleList = document.getElementsByClassName("article");
	let activeArticle = document.getElementById(id);
	for (i = 0; i < articleList.length; i++) {
		if (articleList[i].classList.contains("active")) {
			articleList[i].classList.remove("active");
		} 
	}
	activeArticle.classList.add("active");
}

// REWIEWS
let balls = document.getElementsByClassName("ball");
function showMessage(cls){
	for (let i in balls) {
	if (balls[i].classList.contains(cls)) {
		balls[i].childNodes[1].style.display = "block";
		} else {   
		balls[i].childNodes[1].style.display = "none";
		}
	}
}
