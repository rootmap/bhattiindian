"use strict";
jQuery(document).ready(function($) {

	
	function cristianoStickyHeader(){
		var top_level_height = $('.top-level').outerHeight();	
		if ($(window).scrollTop() > top_level_height){  
		    $('.header-wrap').addClass("sticky");
		}
		else{
			$('.header-wrap').removeClass("sticky");
		}		
	}
	cristianoStickyHeader();
	$(window).scroll(cristianoStickyHeader);
	
		
	$( ".icon-menu" ).click(function() {
		$('.primary-menu').toggleClass('active');
		$('body').toggleClass('hidden');
	});
	$('.datepicker').datepicker({
		minDate: 0
	});
	$('.datepicker').datepicker( "setDate", "getDate" );
	
	// RWD Navigation
	function initMainNavigation( container ) {
		// Add dropdown toggle that display child menu items.
		container.find( '.menu-item-has-children > a' ).after( '<button class="dropdown-toggle">'  + '</button>' );
	
		// Toggle buttons and submenu items with active children menu items.
		container.find( '.current-menu-ancestor > button' ).addClass( 'toggle-on' );
		container.find( '.current-menu-ancestor > .sub-menu' ).addClass( 'toggled-on' );
	
		container.find( '.dropdown-toggle' ).click( function( e ) {
			var _this = $( this );
			e.preventDefault();
			_this.toggleClass( 'toggle-on' );
			_this.next( '.children, .sub-menu' ).toggleClass( 'toggled-on' );
		} );
	}
	initMainNavigation( $( '#nav' ) );

	//Magnific Popup
	$('.images').magnificPopup({
		delegate: 'a',
		type: 'image',
	});		
	$('.gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		gallery:{
			enabled:true
		}
	});	
	
	//Swiper Promo Slider	
    var swiper = new Swiper('#promo-slider',{
		pagination: '.swiper-pagination',
		nextButton: '.slider-button-next',
		prevButton: '.slider-button-prev', 		
        paginationClickable: true,
        cleanupStyles: true,
        autoplay: 6000,
    });
    
    var swiper = new Swiper('#page-slider',{
        cleanupStyles: true,
        paginationClickable: true, 
        autoplay: 6000,		       
        loop: true,	                      
		pagination: '.swiper-pagination', 
		nextButton: '.slider-button-next',
		prevButton: '.slider-button-prev', 
    });
    
    //Swiper Product Categories
    var swiper = new Swiper('.swiper',{
	    slidesPerView: 4,
	    spaceBetween: 30,
	    pagination: '.swiper-pagination',    
        paginationClickable: true,	    
	    slideClass: 'item',
		breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 30
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            600: {
                slidesPerView: 2,
                spaceBetween: 15
            },
            270: {
                slidesPerView: 1,
                spaceBetween: 1
            }
        }	    
    });
});



// Presentation Slider
window.onload = function(){
	(function(){
		if(document.getElementById('slider')) {
			var slider = document.getElementById('slider').getElementsByClassName('item');
			if( slider.length != 0 ) {
				var sliderLength = slider.length;			
				var count = 0;
				bg_switch();
				setInterval(bg_switch, 7000);
			}
		}
		function bg_switch(){
			slider[count].classList.add('active');
			slider[count].style.zIndex = 1;
			var scount = count;
			
			if(scount === 0) {
				slider[sliderLength - 1].style.removeProperty('z-index');
				setTimeout(function(){
					slider[sliderLength - 1].classList.remove('active');
				},3000);
			} else {
				slider[scount - 1].style.removeProperty('z-index');
				setTimeout(function(){
					slider[scount - 1].classList.remove('active');
				},3000);
			}
			(sliderLength === count + 1) ? count = 0 : count++;
		}
	}());
}