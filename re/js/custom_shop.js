$(document).ready(function () {
    $('#datePicker')
            .datepicker({
                format: 'mm/dd/yyyy'
            });
    //datepicker = $.fn.datepicker.noConflict();

    //$(".date-picker").datepicker();
  
});

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

});
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

$(document).ready(function () {
    if ($(window).width() > 767) {
        $(window).bind('scroll', function () {
            var navHeight = $(window).height() - 70;
            if ($(window).scrollTop() > navHeight) {
                $('.tab_right_sidebar').addClass('position-fixed');
            }
            else {
                $('.tab_right_sidebar').removeClass('position-fixed');
            }
        });
    }
});
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
        if (jQuery(window).width() <= 768) {
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
        } else {
            jQuery('#plazart-mainnav').css({
                position: "relative",
                top: 0,
                width: "100%"
            });
        }
    });

    jQuery(window).on('resize', function () {
        if (jQuery(window).width() < 768) {
            var height2 = 0;
        } else {
            var height2 = jQuery('#plazart-mainnav').height();
        }
        if (jQuery(window).width() <= 768) {

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
        } else {
            jQuery('#plazart-mainnav').css({
                position: "relative",
                top: 0,
                width: "100%"
            });
        }
    });

    $(".date-picker").datepicker({
        dateFormat: 'yy-mm-dd'
    });

    $(".date-picker").on("change", function () {
        var id = $(this).attr("id");
        var val = $("label[for='" + id + "']").text();
        $("#msg").text(val + " changed");
    });

});
