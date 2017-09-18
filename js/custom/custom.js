/*jQuery(window).on('load', function() {
 new JCaption('img.caption');
 });
 jQuery(function() {
 var videoW = 640,
 videoH = 360;
 
 jQuery(window).bind("load resize", function() {
 var imgsize = resizeImage(videoW, videoH, jQuery(".tz-video-exception").outerWidth(), jQuery(".tz-video-exception").outerHeight());
 jQuery(".TzStatistic").find("video").css({
 width: imgsize.width,
 height: imgsize.height,
 top: imgsize.top,
 left: imgsize.left
 });
 });
 });
 
 jQuery(function($) {
 SqueezeBox.initialize({});
 SqueezeBox.assign($('a.modal').get(), {
 parse: 'rel'
 });
 });
 
 /*  
 function hikashopModifyQuantity(id, obj, add, form, type, moduleid) {
 var d = document, cart_type = "cart", addStr = "", qty = 1, e = null;
 if (type)
 cart_type = type;
 if (add)
 addStr = "&add=1";
 
 if (moduleid === undefined)
 moduleid = 0;
 
 if (obj) {
 qty = parseInt(obj.value);
 } else if (document.getElementById("hikashop_product_quantity_field_" + id) && document.getElementById("hikashop_product_quantity_field_" + id).value) {
 qty = document.getElementById("hikashop_product_quantity_field_" + id).value;
 }
 if (form && document[form]) {
 var varform = document[form];
 e = d.getElementById("hikashop_cart_type_" + id + "_" + moduleid);
 
 if (!e)
 e = d.getElementById("hikashop_cart_type_" + id);
 if (cart_type == "wishlist") {
 if (e)
 e.value = "wishlist";
 if (varform.cid)
 varform.cid.value = id;
 f = d.getElementById("type");
 if (f)
 f.value = "wishlist";
 } else {
 if (e)
 e.value = "cart";
 if (varform.cid)
 varform.cid.value = id;
 }
 if (varform.task) {
 varform.task.value = "updatecart";
 }
 
 var input = document.createElement("input");
 input.type = "hidden";
 input.name = "from_form";
 input.value = "true";
 varform.appendChild(input);
 
 varform.submit();
 } else {
 if (qty) {
 
 }
 var url = "/exception-light/index.php/component/hikashop/product/updatecart/tmpl-component?from=module&product_id=" + id + "&cart_type=" + cart_type + "&hikashop_ajax=1&quantity=" + qty + addStr + "&return_url=L2V4Y2VwdGlvbi1saWdodC9pbmRleC5waHAvY29tcG9uZW50L2hpa2FzaG9wL2NoZWNrb3V0";
 var completeFct = function(result) {
 var hikaModule = false;
 var checkmodule = false;
 if (result == "notLogged") { // if the customer is not logged and use add to wishlist, display a popup for the notice
 SqueezeBox.fromElement("hikashop_notice_wishlist_box_trigger_link", {parse: "rel"});
 } else if (result.indexOf("URL|") != "-1") { // id the option is set to redirect, do the redirection
 result = result.replace("URL|", "");
 window.location = result;
 return false;
 } else if (result != "") { // if the result is not empty check for the module
 checkmodule = true;
 }
 if (checkmodule) {
 if (cart_type != "wishlist") {
 hikaModule = window.document.getElementById("hikashop_cart_module");
 } else {
 hikaModule = window.document.getElementById("hikashop_wishlist_module");
 }
 }
 if (hikaModule)
 hikaModule.innerHTML = result;
 if (window.jQuery && typeof(jQuery.noConflict) == "function" && !window.hkjQuery) {
 window.hkjQuery = jQuery.noConflict();
 }
 hkjQuery(".tochosen:not(.chzn-done)").removeClass('chzn-done').removeClass('tochosen').chosen();
 };
 try {
 new Ajax(url, {method: "get", onComplete: completeFct}).request();
 } catch (err) {
 new Request({url: url, method: "get", onComplete: completeFct}).send();
 }
 }
 return false;
 }
 
 //-->
 
 window.setInterval(function() {
 var r;
 try {
 r = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP")
 } catch (e) {
 }
 if (r) {
 r.open("GET", "./", true);
 r.send(null)
 }
 }, 840000);
 jQuery(document).ready(function() {
 jQuery('.hasTooltip').tooltip({"html": true, "container": "body"});
 });
 */
jQuery(document).ready(function () {
    if (jQuery('.top-nav').attr('data-sticky') == "true") {
        jQuery(window).on("scroll", function () {
            var Scrl = jQuery(window).scrollTop();
            if (Scrl > 1) {
                jQuery('.top-head').addClass('sticky');
            } else {
                jQuery('.top-head').removeClass('sticky');
            }
        });
        jQuery('document').ready(function () {
            var Scrl = jQuery(window).scrollTop();
            if (Scrl > 1) {
                jQuery('.top-head').addClass('sticky');
            } else {
                jQuery('.top-head').removeClass('sticky');
            }
        });
    }
});

jQuery(document).ready(function () {
    jQuery(window).on('load ', function () {
        if (jQuery(window).width() <= 800) {
            if (jQuery('.top-head').prev().css('display') != 'none') {
                var height1 = jQuery('.top-head').prev().height();
            } else {
                var height1 = 0;
            }
            var height = jQuery('.top-head ').height() + height1 - jQuery('#plazart-mainnav').height() + 2;
            jQuery('#plazart-mainnav').css({
                position: "absolute",
                top: -height,
                margin: "0",
                width: "auto"

            });
        } else if (jQuery(window).width() >= 980 && jQuery(window).width() <= 1024) {
            jQuery('#plazart-mainnav').css({
                position: "relative",
                top: 0,
                width: "85%"
            });
        } else {
            jQuery('#plazart-mainnav').css({
                position: "relative",
                top: 0,
                width: "100%"
            });
        }
    });

    jQuery(window).on('resize', function () {
        if (jQuery(window).width() < 800) {
            var height2 = 0;
        } else {
            var height2 = jQuery('#plazart-mainnav').height();
        }
        if (jQuery(window).width() <= 800) {

            if (jQuery('.top-head').prev().css('display') != 'none') {
                var height1 = jQuery('.top-head').prev().height();
            } else {
                var height1 = 0;
            }
            var height = jQuery('.top-head ').height() + height1 + 2 - height2;
            jQuery('#plazart-mainnav').css({
                position: "absolute",
                top: -height,
                margin: "0",
                width: "auto"
            });
        } else if (jQuery(window).width() >= 980 && jQuery(window).width() <= 1024) {
            jQuery('#plazart-mainnav').css({
                position: "relative",
                top: 0,
                width: "85%"
            });
        } else {
            jQuery('#plazart-mainnav').css({
                position: "relative",
                top: 0,
                width: "100%"
            });
        }
    });
});


/*
 /******************************************
 -	PREPARE PLACEHOLDER FOR SLIDER	-
 ******************************************/

/*
 var setREVStartSize = function() {
 var tpopt = new Object();
 tpopt.startwidth = 960;
 tpopt.startheight = 510;
 tpopt.container = jQuery('#rev_slider_1_1');
 tpopt.fullScreen = "off";
 tpopt.forceFullWidth = "on";
 
 tpopt.container.closest(".rev_slider_wrapper").css({height: tpopt.container.height()});
 tpopt.width = parseInt(tpopt.container.width(), 0);
 tpopt.height = parseInt(tpopt.container.height(), 0);
 tpopt.bw = tpopt.width / tpopt.startwidth;
 tpopt.bh = tpopt.height / tpopt.startheight;
 if (tpopt.bh > tpopt.bw)
 tpopt.bh = tpopt.bw;
 if (tpopt.bh < tpopt.bw)
 tpopt.bw = tpopt.bh;
 if (tpopt.bw < tpopt.bh)
 tpopt.bh = tpopt.bw;
 if (tpopt.bh > 1) {
 tpopt.bw = 1;
 tpopt.bh = 1
 }
 if (tpopt.bw > 1) {
 tpopt.bw = 1;
 tpopt.bh = 1
 }
 tpopt.height = Math.round(tpopt.startheight * (tpopt.width / tpopt.startwidth));
 if (tpopt.height > tpopt.startheight && tpopt.autoHeight != "on")
 tpopt.height = tpopt.startheight;
 if (tpopt.fullScreen == "on") {
 tpopt.height = tpopt.bw * tpopt.startheight;
 var cow = tpopt.container.parent().width();
 var coh = jQuery(window).height();
 if (tpopt.fullScreenOffsetContainer != undefined) {
 try {
 var offcontainers = tpopt.fullScreenOffsetContainer.split(",");
 jQuery.each(offcontainers, function(e, t) {
 coh = coh - jQuery(t).outerHeight(true);
 if (coh < tpopt.minFullScreenHeight)
 coh = tpopt.minFullScreenHeight
 })
 } catch (e) {
 }
 }
 tpopt.container.parent().height(coh);
 tpopt.container.height(coh);
 tpopt.container.closest(".rev_slider_wrapper").height(coh);
 tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);
 tpopt.container.css({height: "100%"});
 tpopt.height = coh;
 } else {
 tpopt.container.height(tpopt.height);
 tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);
 tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);
 }
 };
 
 
 setREVStartSize();
 
 
 var tpj = jQuery;
 tpj.noConflict();
 var revapi1;
 
 */
/*
 tpj(document).ready(function() {
 
 
 
 if (tpj('#rev_slider_1_1').revolution == undefined)
 revslider_showDoubleJqueryError('#rev_slider_1_1');
 else
 revapi1 = tpj('#rev_slider_1_1').show().revolution(
 {
 dottedOverlay: "none",
 delay: 14000,
 startwidth: 960,
 startheight: 510,
 hideThumbs: 200,
 thumbWidth: 100,
 thumbHeight: 50,
 thumbAmount: 3,
 navigationType: "none",
 navigationArrows: "solo",
 navigationStyle: "round",
 touchenabled: "on",
 onHoverStop: "on",
 swipe_velocity: 0.7,
 swipe_min_touches: 1,
 swipe_max_touches: 1,
 drag_block_vertical: false,
 keyboardNavigation: "off",
 navigationHAlign: "center",
 navigationVAlign: "bottom",
 navigationHOffset: 0,
 navigationVOffset: 20,
 soloArrowLeftHalign: "left",
 soloArrowLeftValign: "center",
 soloArrowLeftHOffset: 20,
 soloArrowLeftVOffset: 0,
 soloArrowRightHalign: "right",
 soloArrowRightValign: "center",
 soloArrowRightHOffset: 20,
 soloArrowRightVOffset: 0,
 shadow: 0,
 fullWidth: "on",
 fullScreen: "off",
 spinner: "spinner0",
 stopLoop: "off",
 stopAfterLoops: -1,
 stopAtSlide: -1,
 shuffle: "off",
 autoHeight: "off",
 forceFullWidth: "on",
 hideTimerBar: "on",
 hideThumbsOnMobile: "off",
 hideNavDelayOnMobile: 1500,
 hideBulletsOnMobile: "off",
 hideArrowsOnMobile: "off",
 hideThumbsUnderResolution: 0,
 hideSliderAtLimit: 0,
 hideCaptionAtLimit: 0,
 hideAllCaptionAtLilmit: 0,
 startWithSlide: 0,
 isJoomla: true
 });
 
 
 
 
 });	
 


jQuery(document).ready(function () {
    jQuery('.testimonials-1.147').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        touchMove: true,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});
 */
jQuery(document).ready(function () {
    jQuery('.no-touch .level-out').waypoint(function () {
        jQuery('.level-out').each(function () {
            var num = jQuery(this).find('.level-in').attr('data-percent'),
                    percent = jQuery.animateNumber.numberStepFactories.append(' %');
            jQuery(this).find('span').animateNumber({number: num, numberStep: percent}, num * 20);
            jQuery(this).find('.level-in').css('left', -num + '%').css('width', num + '%');
            jQuery(this).find('.level-in').animate({'left': '0%'}, num * 20);
        });
    }, {offset: '90%', triggerOnce: true});
    jQuery('.touch .level-out').each(function () {
        var num = jQuery(this).find('.level-in').attr('data-percent'),
                percent = jQuery.animateNumber.numberStepFactories.append(' %');
        jQuery(this).find('span').animateNumber({number: num, numberStep: percent}, num * 20);
        jQuery(this).find('.level-in').css('left', -num + '%').css('width', num + '%');
        jQuery(this).find('.level-in').animate({'left': '0%'}, num * 20);
    });
});

jQuery('.clients').slick({
    arrows: true,
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 5,
    touchMove: true,
    slidesToScroll: 2,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1}
        },
        {
            breakpoint: 640,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1}
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1}
        },
        {
            breakpoint: 320,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1}
        }]
});


jQuery(document).ready(function () {
    jQuery('.homeGallery').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        touchMove: true,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1}
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1}
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1}
            }]
    });
    jQuery('.slick-slide').each(function () {
        var $this = jQuery(this),
                $index = $this.index(),
                contents = $this.find('.img-over');
        $this.hover(function () {
            contents.fadeIn(400).find('.link').removeClass('animated fadeOutUp').addClass('animated fadeInDown');
            contents.find('.zoom').removeClass('animated fadeOutDown').addClass('animated fadeInUp');
            return false;
        }, function () {
            contents.fadeOut(400).find('.link').removeClass('animated fadeInDown').addClass('animated fadeOutUp');
            contents.find('.zoom').removeClass('animated fadeInUp').addClass('animated fadeOutDown');
            return false;
        });
    });
});

var tz = jQuery.noConflict();
tz(document).ready(function () {
    tz('#tz-flick176').jflickrfeed({
        limit: 8,
        qstrings: {
            id: '36587311@N08'
        },
        itemTemplate: '<li>' +
                '<a data-gal="prettyPhoto[pp_gal]" href="/{image}}" title="/{title}}" class="flickr">' +
                '<img src="/{image_s}}" alt="/{title}}" /><span class="img-overlay"></span>' +
                '</a>' +
                '</li>'
    }, function (data) {
        tz("#tz-flick176 a[data-gal^='prettyPhoto']").prettyPhoto();
    });
});
