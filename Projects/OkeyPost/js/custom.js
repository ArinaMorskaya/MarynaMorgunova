
jQuery.noConflict();
jQuery(document).ready(function () {
    'use strict';

    
	// PRODUCT CATEGORIES SLIDER
    let carousel = jQuery('#productCategories');
	carousel.owlCarousel({  
		items: 6,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		smartSpeed: 1500,
		dotsSpeed: 1000,
		loop: true,
		nav: true,
		// navText: ['<i class="fa fa-arrow-left fa-1x" aria-hidden="true"></i>',
		// '<i class="fa fa-arrow-right fa-1x" aria-hidden="true"></i>'],
		dots: false,
		dotsEach: true,
		mouseDrag: true,
		margin: 0,
		stagePadding: 0,
		autoWidth: false,
		responsiveClass: true,
		responsive:{
			0:{
				items: 1,
				nav: true,
				smartSpeed: 1000
			},
			479:{
				items: 2,
				smartSpeed: 1000
			},
			576:{
				items: 3,
				smartSpeed: 1000
			},
			
			767:{
				items: 4,
				smartSpeed: 1000
			},
			991:{
				items: 6,
				smartSpeed: 1000
			},
			1199:{
				items: 6,
                nav: true
			}
		}
    });
});

'use strict';

// ACCORDION
const accordions = document.querySelectorAll('.accordion_item');

for(item of accordions) {
	item.addEventListener('click', function(){
		if(this.classList.contains('active')) {
			this.classList.remove('active');
		} else {
			for (elem of accordions) {
				elem.classList.remove('active');
			};
			this.classList.add('active');
		};
	});
};

 // RESPONSIVE MENU
function showMenu() {
    document.getElementById("mainMenu").classList.toggle("showMenu");
    document.getElementById("responsiveMenu").classList.toggle("active");
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
