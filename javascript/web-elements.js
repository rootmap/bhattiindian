/* Web Elements by TrueThemes */


(function($) {

/* ------------------------------------------------------------------------
Fire up Functions on Page Load
* ------------------------------------------------------------------------- */
jQuery(document).ready(function () {
	scrollTop();
	buttonHover();
	doTabsType1();
	doTabsType2();
	doAccordion();
	
});




/* ------------------------------------------------------------------------
Scroll to Top
* ------------------------------------------------------------------------- */
function scrollTop(){
	jQuery('a.scrollToTop').click(function(){ 
	jQuery('html, body').animate({scrollTop:0}, 'slow');
	return false; 
	});
}





/* ------------------------------------------------------------------------
Button Hover
* ------------------------------------------------------------------------- */
function buttonHover(){

jQuery(".button_style_1").hover(function () {
	jQuery(this).stop().animate({
		opacity: 0.7
	}, 250)
}, function () {
	jQuery(this).stop().animate({
		opacity: 1.0
	}, 250)
})

}





/* ------------------------------------------------------------------------
Tabs - Type 1
* ------------------------------------------------------------------------- */
function doTabsType1(){
	var tabs = jQuery('.tabs_type_1');
	if(tabs.length < 1){
		return;
	}
	tabs.append("<span class='tabs_type_1_arrow'></span>");
	tabs.each(function(){
		var handlers = jQuery(this).children('dt');
		var tabContentBlocks = jQuery(this).children('dd');
		var currentTab = jQuery(this).find('dd.current');
		var arrow = jQuery(this).children('span').eq(0);
		var handlersWidth = handlers.eq(0).outerWidth();
		var minus = currentTab.prev().index() == 0 ? 18 : currentTab.prev().outerHeight()/2 + 18;
		var firstHandlerY = currentTab.prev().position().top + currentTab.prev().outerHeight() - minus;
		arrow.css({'left': handlersWidth-18 + 'px', 'top': firstHandlerY + 'px'});

		maybeGrowShrinkTab(currentTab.eq(0).prev());

		handlers.click(function(){
			if(jQuery(this).hasClass('current')) return
			currentTab.prev().removeClass('current');
			currentTab.fadeOut('fast');
			arrow.fadeOut('fast');
			var that = this;
			maybeGrowShrinkTab(this, function(){
				currentTab = jQuery(that).next();
				var minus = jQuery(that).index() == 0 ? 18 : jQuery(that).outerHeight()/2 + 18;
				arrowY = jQuery(that).position().top + jQuery(that).outerHeight() - minus;
				arrow.fadeIn('fast');
				arrow.animate({'top':arrowY + 'px'});
				currentTab.fadeIn('slow');
				jQuery(that).addClass('current');
			});
		});
	});
}

function maybeGrowShrinkTab(tab, callback, add){
	var jTab = (tab.nodeName) ? jQuery(tab) :  tab 
	var tabCont = jTab.next();
	var tabsContainer = jTab.parent();
	var handlers = tabsContainer.children('dt');
	var plus = add || 0;//tabs type 2 need a little added height because the handlers are placed on top.

	tabCont.css('height', 'auto');

	var tabContHeight = tabCont.outerHeight();
	tabContHeight += plus;
	var tabsContainerHeight = tabsContainer.outerHeight();
	var totalHandlersHeight = 0;

	handlers.each(function(){
		totalHandlersHeight += jQuery(this).outerHeight();
	});

	if(tabContHeight != tabsContainerHeight){
		if(tabContHeight > totalHandlersHeight){
			tabsContainer.animate({'height': tabContHeight + 'px'}, function(){
				if(typeof callback != 'undefined') callback()
			});
		}else{
			totalHandlersHeight += 60; //Just give it a lil space so it doesn't look too tight
			tabCont.css('height', totalHandlersHeight + 'px');
			tabsContainer.animate({'height': totalHandlersHeight + 'px'}, function(){
				if(typeof callback != 'undefined') callback()
			});
		}
	}else{
		if(typeof callback != 'undefined') callback()
	}
}










/* ------------------------------------------------------------------------
Tabs - Type 2
* ------------------------------------------------------------------------- */
function doTabsType2(){
	var tabs = jQuery('.tabs_type_2');
	if(tabs.length <  1){
		return;
	}
	tabs.append("<span class='tabs_type_2_arrow'></span>");
	tabs.each(function(){
		var handlers = jQuery(this).children('dt');
		var tabContentBlocks = jQuery(this).children('dd');
		//var currentTab = tabContentBlocks.eq(0);
		var currentTab = jQuery(this).find('dd.current');
		var arrow = jQuery(this).children('span').eq(0);
		var handlersWidth = handlers.eq(0).outerWidth();
		var firstHandlerY = handlers.eq(0).position().top + handlers.eq(0).outerHeight() - 18;
		var firstHandlerX = currentTab.prev().position().left + (currentTab.prev().outerWidth() /2) - 2;
		arrow.css({'left': firstHandlerX + 'px'});

		maybeGrowShrinkTab(currentTab.eq(0).prev(), undefined, 70);

		handlers.click(function(){
			currentTab.prev().removeClass('current');
			currentTab.fadeOut('fast');
			arrow.fadeOut('fast');
			var that = this;
			maybeGrowShrinkTab(this, function(){
				currentTab = jQuery(that).next();
				arrowY = jQuery(that).position().left + (jQuery(that).outerWidth() /2) - 2;
				arrow.fadeIn('fast');
				arrow.animate({'left':arrowY + 'px'});
				currentTab.fadeIn('slow');
				jQuery(that).addClass('current');
			}, 70);
		});
	});
}





/* ------------------------------------------------------------------------
Accordions
* ------------------------------------------------------------------------- */
function doAccordion(){
	var accordions = jQuery('.accordion');
	if(accordions.length < 1){
		return;
	}
	accordions.each(function(){
		var self = jQuery(this);
		var handlers = self.children('dt');
		handlers.click(function(){
			var self = jQuery(this);
			self.children('dt.current').removeClass('current').next().slideUp();
			self.toggleClass('current');
			self.next('dd').slideToggle();
		});
	});
}

}(jQuery));