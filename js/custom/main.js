(function ($) {

    "use strict";

    /* ================ Dynamic content height. ================ */
    $(document).ready(function () {

        var winH = $(window).height(),
            headH = $('#headWrapper').outerHeight(),
            footH = $('#footWrapper').outerHeight(),
            H = winH - (headH + footH);
        $('#contentWrapper').css('min-height', H);
        $(".loader-in").append('<div class="status"><span class="spin"></span><span></span></div>');

    });

    /* ================ Check for Mobile. ================ */
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        $('html').addClass('touch');
    } else {
        $('html').addClass('no-touch');
    }

    /* ================ Show Login box. ================ */
    $(document).ready(function () {
        $('.login-btn').prepend('<b class="tri hidden"></b>');
        $('.login-btn').click(function (e) {
            e.preventDefault();
            $('.login-box').slideToggle();
            $('.login-btn').find('.tri').toggleClass('visible');
            $('.close-login').click(function (e) {
                e.preventDefault();
                $('.login-box').slideUp();
                $('.login-btn').find('.tri').removeClass('visible');

            });
        });
        $('a.zoom').prettyPhoto({
            social_tools: false
        });
    });


    /* ================ Responsive Navigation menu ============ */
    var men = $('.top-nav > ul').html();

    $('<a href="#" class="menuBtn"><i class="fa fa-bars"></i></a><div class="responsive-nav"></div>').prependTo('body');
    $('.responsive-nav').html('<h3>Menu Navigation</h3><ul>' + men + '</ul>');
    $('.menuBtn').click(function (e) {
        e.preventDefault();
        $('.pageWrapper').toggleClass('colBody');
        $('.menuBtn').toggleClass('menuBtn-selected');
        $('.pageWrapper').click(function () {
            $(this).removeClass('colBody');
            $('.menuBtn').removeClass('menuBtn-selected');
        });
    });

    var men = $('.responsive-nav ul'),
        menItems = men.find('li');
    menItems.each(function () {
        var uls = $(this).find('ul'),
            divs = $(this).find('.div-mega');
        if (uls.length) {
            $(this).click(function () {
                uls.slideToggle(500);
                $('.responsive-nav > ul > li').removeClass('selected');
                $(this).addClass('selected');
            });
        }
        if (divs.length) {
            $(this).click(function () {
                divs.slideToggle(500);
                $('.responsive-nav .div-mega').removeClass('selected');
                $(this).addClass('selected');
            });
        }
    });
    $(document).ready(function () {
        $('.head-style3.menu #plazart-mainnav ').addClass(' container');
    });
    /* ================ Top navigation menu. ================ */
    $(document).ready(function () {
        var menu = $('.top-nav .plazart-megamenu > ul'),
            menuW = menu.width(),
            items = menu.find('li'),
            sel = menu.find('li.selected').index(),
            ulW, winW, menOff, m, totalOff;
        items.each(function () {
            var ul = $(this).find('ul:first');
            if (ul.length) {
                var delay = 0;
                var delay1 = 0;
                $(this).find('ul.level2 > li').each(function () {
                    $(this).css({transitionDelay: delay + 'ms'});
                    delay += 50;
                });
                $(this).find('ul.level1 > li').each(function () {
                    $(this).css({transitionDelay: delay1 + 'ms'});
                    delay1 += 50;
                });
//                if ($(this).find('ul li ul').length) {
//                    var thisUL = $(this).find('ul ul');
//                    ulW = thisUL.outerWidth(),
//                        winW = $(window).width(),
//                        menOff = thisUL.offset(),
//                        m = menOff.left,
//                        totalOff = winW - m;
//                    if (totalOff < ulW) {
//                        thisUL.css({left: 'auto', right: '100%'});
//                    }
//                }
            }
        });
    });

    if ($('.mega-menu').length > 0) {
        var offL = $('.top-nav').offset().left;
        $('.top-nav > ul > li').each(function () {
            var itemOff = $(this).offset().left + 40,
                thisW = $(this).outerWidth(),
                offT = itemOff - offL,
                len = $(this).find('.div-mega-section').length,
                w;
            if (len > 4) {
                w = ($('.div-mega-section').outerWidth() + 20) * 4;
            } else {
                w = ($('.div-mega-section').outerWidth() + 20) * len;
            }
            $(this).find('.div-mega').css({left: -offT + 'px', width: w + 20 + 'px'});
        });
        $('.top-nav > ul > li').hover(function () {
            $(this).find('.div-mega').fadeIn(800);
            return false;
        }, function () {
            $(this).find('.div-mega').fadeOut(500);
            return false;
        })
    }

    /* ================ Sticky nav. ================ */


    /* ================ Show Hide Search box. ================ */
    $(document).ready(function () {
        $('.top-search a').click(function () {
            if ($(this).parent().find('.search-box').is(':visible')) {
                $('.search-box').fadeOut(300);
                $(this).parent().removeClass('selected');
                return false;
            } else {
                $('.search-box').fadeIn(300);
                $(this).parent().addClass('selected');
                return false;
            }
        });
        $(document).mouseup(function (e) {
            if ($('.search-box').is(':visible')) {
                var targ = $(".search-box");
                if (!targ.is(e.target) && targ.has(e.target).length === 0) {
                    $('.search-box').fadeOut(300);
                    $('.top-search').removeClass('selected');
                }
            }
        });
    });


    /* ================ Waypoints: on scroll down animations. ================ */

    jQuery(document).ready(function () {
        $('.touch .fx').addClass('animated');

//        $('.no-touch .portfolio-items > div:odd').each(function () {
//            $(this).addClass('fx').attr('data-animate', 'fadeInUp');
//        });
//        $('.no-touch .portfolio-items > div:even').each(function () {
//            $(this).addClass('fx').attr('data-animate', 'fadeInDown');
//        });
        $('.no-touch .fx').waypoint(function () {
            var anim = $(this).attr('data-animate'),
                del = $(this).attr('data-animation-delay');
            $(this).addClass('animated ' + anim).css({animationDelay: del + 'ms'});
        }, {offset: '90%', triggerOnce: true});
    });


    /* ================ Level Numbers increment Animation. ================ */
    $('.no-touch .level-out').waypoint(function () {
        $('.level-out').each(function () {
            var num = $(this).find('.level-in').attr('data-percent'),
                percent = $.animateNumber.numberStepFactories.append(' %');
            $(this).find('span').animateNumber({number: num, numberStep: percent}, num * 20);
            $(this).find('.level-in').css('left', -num + '%').css('width', num + '%');
            $(this).find('.level-in').animate({'left': '0%'}, num * 20);
        });
    }, {offset: '90%', triggerOnce: true});

    $('.touch .level-out').each(function () {
        var num = $(this).find('.level-in').attr('data-percent'),
            percent = $.animateNumber.numberStepFactories.append(' %');
        $(this).find('span').animateNumber({number: num, numberStep: percent}, num * 20);
        $(this).find('.level-in').css('left', -num + '%').css('width', num + '%');
        $(this).find('.level-in').animate({'left': '0%'}, num * 20);
    });

    $('.no-touch .levels-2').waypoint(function () {
        $('.chart').easyPieChart({
            size: 140,
            scaleLength: 0,
            lineWidth: 3,
            barColor: '#888',
            trackColor: '#e4e4e4',
            animate: ({ duration: 2000, enabled: true }),
            onStep: function (from, to, percent) {
                $(this.el).find('.percent').text(Math.round(percent));
            }
        });
    }, {offset: '90%', triggerOnce: true});

    $('.touch .chart').easyPieChart({
        size: 140,
        scaleLength: 0,
        lineWidth: 3,
        barColor: '#888',
        trackColor: '#e4e4e4',
        animate: ({ duration: 2000, enabled: true }),
        onStep: function (from, to, percent) {
            $(this.el).find('.percent').text(Math.round(percent));
        }
    });

    /* ================ FUN STAFF Numbers increment Animation. ================ */
    $(document).ready(function () {
        $('.touch .fun-number').each(function () {
            var thisNo = $(this).text();
            $(this).animateNumber({number: thisNo}, 4000);
        });

        $('.no-touch .staff-1,.no-touch .staff-2,.no-touch .staff-3').waypoint(function () {
            $(this).find('.fun-number').each(function () {
                var thisNo = $(this).text();
                $(this).animateNumber({number: thisNo}, 4000);
            });
        }, {offset: '90%', triggerOnce: true});

    });

    /* ================ PORTFOLIO boxes Hover effect. ================ */
    $('.slick-slide,.portfolio-items > div').each(function () {
        var $this = $(this),
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

    /* ================ Portfolio Filterable. ================ */
    $('ul#filters li a').click(function (e) {
        e.preventDefault();
        $('ul#filters .active').removeClass('active');
        $(this).parent().addClass('active');
        var filter = $(this).attr('data-filter').toLowerCase();
        $('.portfolio-items > div:visible').each(function (i) {
            $(this).fadeOut(200, function () {
                show(filter);
            });
        });
        return false;
    });

    function show(filter) {
        if (filter == '*') {
            $('.portfolio-items > div').fadeIn(200);
        } else {
            $('.portfolio-items > div').each(function () {
                if ($(this).attr('data-filter') == filter) {
                    $(this).fadeIn(200);
                }
            });
        }
    }


    /* ================ Information boxes. ================ */
    $('.box').each(function () {
        $(this).find('a.close-box').click(function (e) {
            var parentBox = $(this).parent();
            e.preventDefault();
            parentBox.fadeOut('slow', function () {
                parentBox.remove();
            });
        });
    });


    /* ================ Tabs. ================ */
    $.fn.tabs = function (options) {
        var defaults = {
            direction: ''
        };
        var options = $.extend({}, defaults, options);
        if (options.direction == "vertical") {
            $(this).addClass('tabs-vertical');
        }
        var tabsUl = $(this).find(' > ul'),
            activeTab = tabsUl.find('li.active').index(),
            tabsPane = $(this).find('.tabs-pane');
        tabsPane.find('.tab-panel').fadeOut();
        tabsPane.find('.tab-panel').eq(activeTab).fadeIn();
        tabsUl.find('li').find('a').click(function (e) {
            if (!$(this).parent().hasClass('active')) {
                e.preventDefault();
                var ind = $(this).parent().index();
                tabsUl.find('li').removeClass('active');
                $(this).parent().addClass('active');
                tabsPane.find('.tab-panel').fadeOut(0).removeClass('active');
                tabsPane.find('.tab-panel').eq(ind).fadeIn(350).addClass('active');
                return false;
            } else {
                return false;
            }
        });
    }

    /* ================ Accordions. ================ */
    $.fn.accordion = function (options) {
        var defaults = {
            direction: 'vertical'
        };
        var options = $.extend({}, defaults, options),
            accItem = $(this).find('li'),
            activeItem = accItem.eq(0),
            accLink = accItem.find('h3'),
            accPane = accItem.find('.accordion-panel');
        $(activeItem).addClass('active');
        if (options.direction == "vertical") {
            accPane.slideUp();
            accPane.eq(0).slideDown();
            accLink.prepend('<u/>');
        } else if (options.direction == "horizontal") {
            $(this).addClass('accordion-horizontal');
        }
        accItem.find('h3').click(function (e) {
            if (!$(this).parent().hasClass('active')) {
                e.preventDefault();
                accItem.removeClass('active');
                $(this).parent().addClass('active');
                if (options.direction == "vertical") {
                    accPane.slideUp(350);
                    $(this).next().slideDown(350);
                } else {
                    accItem.animate({width: "40px"}, {duration: 350, queue: false});
                    $(this).parent().animate({width: "80%"}, {duration: 350, queue: false});
                }
            } else {
                if (options.direction == "vertical") {
                    e.preventDefault();
                    accItem.removeClass('active');
                    if (options.direction == "vertical") {
                        accPane.slideUp(350);
                    }
                }
                return false;
            }
        });
    }

/* ================ Social share blog buttons plugin. ================ */
    $(document).ready(function () {

        $('#shareme').sharrre({
            share: {
                twitter: true,
                facebook: true,
                googlePlus: true
            },
            template: '<ul><li><a href="#" class="facebook main-bg"><i class="fa fa-facebook"></i></a></li><li><a href="#" class="twitter main-bg"><i class="fa fa-twitter"></i></a></li><li><a href="#" class="googleplus main-bg"><i class="fa fa-google-plus"></i></a></li><li><a class="alter-bg">{total}</a></li></ul>',
            enableHover: false,
            enableTracking: true,
            url: document.location.href,
            render: function (api, options) {
                $(api.element).on('click', '.twitter', function () {
                    api.openPopup('twitter');
                });
                $(api.element).on('click', '.facebook', function () {
                    api.openPopup('facebook');
                });
                $(api.element).on('click', '.googleplus', function () {
                    api.openPopup('googlePlus');
                });
            }
        });
        /* ================ Tooltips. ================ */
        $.fn.tooltip = function () {
            $(this).hover(function () {
                var thisTitle = $(this).attr('data-title'),
                    pos = $(this).attr('data-position'),
                    tp = $(this).offset().top - $(window).scrollTop(),
                    l = $(this).offset().left - $(window).scrollLeft();

                $('body').append('<div class="tooltip">' + thisTitle + '</div>');
                var tipH = $('.tooltip').outerHeight() + 5,
                    tipW = $('.tooltip').outerWidth() + 5,
                    bot = $(window).height() - (tp + $(this).outerHeight() + tipH),
                    r = $(window).width() - (l + $(this).outerWidth() + tipW);
                if (pos == "right") {
                    $('.tooltip').addClass('rit-tip animated fadeInRight').css({'top': tp - (($(this).outerHeight() / 2) - (tipH - 5 / 2)) + "px", 'right': r + "px"});
                } else if (pos == "bottom") {
                    $('.tooltip').addClass('bot-tip animated fadeInUp').css({'bottom': bot + "px", 'left': l + (($(this).outerWidth() / 2) - ((tipW - 5) / 2)) + "px"});
                } else if (pos == "left") {
                    $('.tooltip').addClass('lft-tip animated fadeInLeft').css({'top': tp - (($(this).outerHeight() / 2) - (tipH - 5 / 2)) + "px", 'left': l - tipW + "px"});
                } else {
                    $('.tooltip').addClass('animated fadeInDown').css({'top': tp - tipH + "px", 'left': l + (($(this).outerWidth() / 2) - ((tipW - 5) / 2)) + "px"});
                }
            }, function () {
                $('.tooltip').remove();
            });
        }
        $("[data-tooltip^='true']").tooltip();
    });

    // make height equals parent height.
    var planH = $('.our-plan').height();
    $('.plan-title').css('height', planH);


    /* ================= Grid - List view =============== */
    $('.list-btn').click(function () {
        $('.grid-list').addClass('list');
        $('.grid-btn').removeClass('selected');
        $(this).addClass('selected');
        return false;
    });
    $('.grid-btn').click(function () {
        $('.grid-list').removeClass('list');
        $('.list-btn').removeClass('selected');
        $(this).addClass('selected');
        return false;
    });

    /* ================= Product images zoom =============== */
    if ($("#img_01").length) {
        $("#img_01").elevateZoom({gallery: 'gal1', cursor: 'pointer', galleryActiveClass: 'active', responsive: true, loadingIcon: 'images/ajax-loader.gif'});
        $('.thumbs ul li:first a').addClass('active');
    }

    /* ================= increase decrease items textbox =============== */
    var num = $('#items-num').val();
    $('.add-items i.fa-plus').click(function (e) {
        e.preventDefault();
        num++;
        $('#items-num').attr('value', num);
    });
    $('.add-items i.fa-minus').click(function (e) {
        e.preventDefault();
        if (num > 1) {
            num--;
            $('#items-num').attr('value', num);
        }
    });

    /* ================= Remove items from cart =============== */
    $('.remove-item').click(function () {
        $(this).parent().parent().remove();
    });

    /* ================= top shopping cart box =============== */
    $('.cart-heading').click(function () {
        $(this).parent().find('.cart-popup').show();
    });
    $('.cart-icon').mouseleave(function () {
        $(this).find('.cart-popup').hide();
    });
    if ($('.cart-icon').length > 0) {
        $('.add-cart').each(function () {
            $(this).click(function () {
                var num = $('#cart-count b').text();
                num++;
                $('#cart-count b').text(num);
                $('.cart-popup .mini-cart').show();
                $('.cart-popup .empty').hide();
                $('html, body').animate({scrollTop: '0px'}, 1000);
                $('.success-box.hidden').fadeIn().delay(2000).fadeOut();
            });
        });

        if ($('#cart-count b').text() == "0") {
            $('.cart-popup .empty').show();
            $('.cart-popup .mini-cart').hide();
        } else {
            $('.cart-popup .mini-cart').show();
            $('.cart-popup .empty').hide();
        }
    }


    $('#tabs').tabs();
    $('#tabs2').tabs();
    $('#tabs3').tabs({direction: 'vertical'});
    $('#tabs4').tabs({direction: 'vertical'});
    $('#accordion').accordion();
    $('#accordion2').accordion();
//    $('a.zoom').prettyPhoto({social_tools: false});

//    $('input, textarea').placeholder();

    /* ================ hide site tools after 3 seconds. ================ */
    var toolLeft = $('.tools').css('right'),
        thisLink = $('#skinCSS').attr('href');

    $('.show-tools').click(function (e) {
        e.preventDefault();
        if ($(this).parent().css('right') == toolLeft) {
            $(this).parent().animate({right: '0px'});
        } else if ($(this).parent().css('right') == '0px') {
            $(this).parent().animate({right: toolLeft});
        }
    });
    $('.colors li:first a').addClass('selected');

    $('.colors a').each(function () {
        $(this).click(function (e) {
            e.preventDefault();
            thisLink = $(this).attr('data-link');
            $('.colors a').removeClass('selected');
            $(this).addClass('selected');
            $('#skinCSS').attr('href', thisLink);
        });
    });
    $('.patterns li:first a').addClass('selected');
    $('.patterns li').each(function () {
        var thisClass = $(this).find('a').attr('class');
        $(this).find('a').css('background', 'url("images/patterns/' + thisClass + '.jpg")');
        $(this).find('a').click(function (e) {
            e.preventDefault();
            $('.patterns li a').removeClass('selected');
            $(this).addClass('selected');
            $('body').removeAttr('class').addClass(thisClass);
        });
    });


    /* ================ fullscreen sticky nav. ================ */
    if ($('#wrap').length > 0) {
        $(window).scroll(function () {
            var scrollHeight = $(document).scrollTop(),
                tp = $('#headWrapper').offset();
            if ($(this).scrollTop() > tp.top) {
                $('.top-head').addClass('sticky');
            } else {
                $('.top-head').removeClass('sticky');
            }
        });
    }
    $(document).ready(function () {
        if ($('#vertical-ticker').length > 0) {
            $('#vertical-ticker').totemticker({
                row_height: '110px',
                mousestop: true,
                speed: 500
            });

        }
    });


    /* ================ one page functions. ================ */


    $(window).load(function () {
        /* ================ Preloader. ================ */
        $(".load ").fadeOut();
        $(".page-loader").fadeOut();
        $(".loader-in").delay(350).fadeOut("slow");
        $('body').delay(350).removeAttr("style");
        $('.loading').css('display', 'none');

    });
    $(document).ready(function () {
        $('.fix-width > div').removeClass();
        $('.fix-width > div').addClass('container');
    });

})(jQuery);