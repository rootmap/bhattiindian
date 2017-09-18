/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* ================ Back to top button. ================ */
jQuery(document).ready(function () {
    var winScroll = jQuery(window).scrollTop();
    if (winScroll > 1) {
        jQuery('#to-top').css({bottom: "10px"});
    } else {
        jQuery('#to-top').css({bottom: "-100px"});
    }
    jQuery(window).on("scroll", function () {
        winScroll = jQuery(window).scrollTop();

        // PARALLAX background Animation.
        var y = parseInt(jQuery('.parallax').css('background-position-y'));
        var newY = -(winScroll * 0.05) + 'px';
        jQuery('.parallax').css("background-position-y", newY);


        //  Show Hide back to top button.
        if (winScroll > 1) {
            jQuery('#to-top').css({opacity: 1, bottom: "10px"});
        } else {
            jQuery('#to-top').css({opacity: 0, bottom: "-100px"});
        }
    });
    jQuery(document).ready(function () {
        jQuery('#to-top').click(function () {
            jQuery('html, body').animate({scrollTop: '0px'}, 800);
            return false;
        });
    });

    jQuery(document).on("click", "#checkout", function () {
        jQuery(".cart_details_wrap").hide();
    });
});

