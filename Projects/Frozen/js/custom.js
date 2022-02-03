jQuery.noConflict();
jQuery(document).ready(function () {
    'use strict';
    
	// REWIEWS
    let carousel = jQuery('#slider');
	carousel.owlCarousel({  
		items: 1,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		// animateOut: 'slideOutUp',
		// animateIn: 'slideInUp',
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
			},
			479:{
				items: 1,
			},
			576:{
				items: 1,
			},
			
			767:{
				items: 1,
			},
			991:{
				items: 1,
			}
		}
    });
});

'use strict';

// MESSAGE

let letters = document.getElementsByClassName('letter');
let interval = 0;
for (let letter of letters) {
	letter.style.animationDelay = interval +"s";
	interval += 0.1;
}

// TIMER
let deadline = new Date('February 17, 2022');

let timer_days = document.querySelector('.timer-days');
let timer_hours = document.querySelector('.timer-hours');
let timer_minutes = document.querySelector('.timer-minutes');
let timer_seconds = document.querySelector('.timer-seconds');

let timer_days_2 = document.querySelector('.timer-days-2');
let timer_hours_2 = document.querySelector('.timer-hours-2');
let timer_minutes_2 = document.querySelector('.timer-minutes-2');
let timer_seconds_2= document.querySelector('.timer-seconds-2');

function countdownTimer () {
	let timerOff = deadline - new Date();
	if (timerOff <= 0) {
		clearInterval(step);
	}

	let days = timerOff > 0 ? Math.floor(timerOff / 1000 / 60 / 60 / 24) : 0;
	let hours = timerOff > 0 ? Math.floor(timerOff / 1000 / 60 / 60) % 24 : 0;
	let min = timerOff > 0 ? Math.floor(timerOff / 1000 / 60) % 60 : 0;
	let sec = timerOff > 0 ? Math.floor(timerOff / 1000) % 60: 0;

	days < 10 ? (timer_days.innerHTML = '0' + days) && (timer_days_2.innerHTML = '0' + days) : (timer_days.innerHTML = days) && (timer_days_2.innerHTML = days);
	hours < 10 ? (timer_hours.innerHTML = '0' + hours) && (timer_hours_2.innerHTML = '0' + hours): (timer_hours.innerHTML = hours) && (timer_hours_2.innerHTML = hours);
	min < 10 ? (timer_minutes.innerHTML = '0' + min) && (timer_minutes_2.innerHTML = '0' + min) : (timer_minutes.innerHTML = min) && (timer_minutes_2.innerHTML = min);
	sec < 10 ? (timer_seconds.innerHTML = '0' + sec) && (timer_seconds_2.innerHTML = '0' + sec) : (timer_seconds.innerHTML = sec) && (timer_seconds_2.innerHTML = sec);
}

countdownTimer ()
let step = setInterval(countdownTimer, 1000); 


 // RESPONSIVE MENU
function showMenu() {
    document.getElementById("mainMenu").classList.toggle("showMenu");
    document.getElementById("responsiveMenuIcon").classList.toggle("active");
}


