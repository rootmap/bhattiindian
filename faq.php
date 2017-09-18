<?php
include'include/config.php';
$obj = new db_class();
$filter = $_GET['filters'];
//echo $filter;
$site_basic_info = $obj->FlyQuery("select * from site_basic_info order by id desc limit 1");
$sqlcover = $obj->FlyQuery("SELECT 
								p.id,
								c.name as category_id,
								sc.name as sub_category_id,
								p.photo,
								p.date
								FROM page_cover_photo as p
								LEFT JOIN category as c ON c.id = p.category_id
								LEFT Join sub_category as sc On sc.id = p.sub_category_id
								WHERE p.category_id = '" . $filter . "' order by p.id desc");
?>
<!DOCTYPE html>
<html lang="en-US">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
        <title>Faq - <?= $site_basic_info[0]->site_name; ?></title>
        <?php $seo = $obj->SelectAll("seo_");?>
    <meta name='robots' content='noindex,follow'>
    <meta name="Description" content="<?= $seo[0]->meta_descriptions; ?>">
<meta name="Keywords" content="<?= $seo[0]->meta_keywords; ?>">
        <meta name='robots' content='noindex,follow'>
        <link rel='dns-prefetch' href='//fonts.googleapis.com'>
        <link rel='dns-prefetch' href='//s.w.org'>
        <link rel="alternate" type="application/rss+xml" title="Cristiano &raquo; Feed" href="feed\index.htm">
        <link rel="alternate" type="application/rss+xml" title="Cristiano &raquo; Comments Feed" href="comments\feed\index.htm">

        <link rel='stylesheet' id='cristiano-google-fonts-css' href='https://fonts.googleapis.com/css?family=Cinzel%7CLora%3A400%2C400i%2C700&#038;ver=4.7.3' type='text/css' media='all'>
        <link rel='stylesheet' id='cristiano-fontawesome-css' href='wp-content\themes\cristiano\css\font-awesome.css?ver=4.7.3' type='text/css' media='all'>
        <link rel='stylesheet' id='magnific-popup-css' href='wp-content\themes\cristiano\css\magnific-popup.css?ver=4.7.3' type='text/css' media='all'>
        <link rel='stylesheet' id='swiper-css' href='wp-content\themes\cristiano\css\swiper.min.css?ver=4.7.3' type='text/css' media='all'>
        <link rel='stylesheet' id='cristiano-grid-css' href='wp-content\themes\cristiano\css\grid.css?ver=4.7.3' type='text/css' media='all'>
        <link rel='stylesheet' id='cristiano-style-css' href='wp-content\themes\cristiano\style.css?ver=4.7.3' type='text/css' media='all'>
        <link rel='stylesheet' id='cristiano_wc_style-css' href='wp-content\themes\cristiano\css\woocommerce.css?ver=4.7.3' type='text/css' media='all'>
        <link rel='stylesheet' id='cristiano-rwd-css' href='wp-content\themes\cristiano\css\rwd.css?ver=4.7.3' type='text/css' media='all'>
        <script type='text/javascript' src='wp-includes\js\jquery\jquery.js?ver=1.12.4'></script>
        <script type='text/javascript' src='wp-includes\js\jquery\jquery-migrate.min.js?ver=1.4.1'></script>
        <script type='text/javascript' src='wp-content\plugins\ukrdevs-restaurant-core\contact-form\ajax.js?ver=4.7.3'></script>
        <script type='text/javascript' src='wp-content\themes\cristiano\js\jquery.magnific-popup.min.js?ver=4.7.3'></script>
        <script type='text/javascript' src='wp-content\themes\cristiano\js\swiper.min.js?ver=4.7.3'></script>
        <script type='text/javascript' src='wp-content\themes\cristiano\js\google-map.js?ver=4.7.3'></script>
        <script type='text/javascript' src='wp-content\themes\cristiano\js\script.js?ver=4.7.3'></script>

        <link rel="stylesheet" href="css/modern-accordion.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/modern-accordion.js"></script> 
        <style type="text/css">
            .heads-up {
  transform: translateY(-6rem);
  transform: translate3d(0,-6rem,0);
}
 @media only screen and (max-width: 768px){
  #header{position:fixed !important; top:0px;width: 100%;}
 }
        </style>  
    </head>

    <body class="page-template-default page page-id-116">
        <header id='header' class="header-wrap header-v1">
            <?php include'include/header.php'; ?>
        </header>
        <div id="page-header" style="background-image: url(cms-admin/upload/<?= $sqlcover[0]->photo ?>)">
            <div class="center">
                <h1>Faq</h1>
            </div>
        </div>
        <div id="layout" class="wide">
            <div id="container">
                <div id="content" class="center">
                    <ul class="mdn-accordion single-level-accordion purple-accordion-theme">
                        <?php
                        $faq = $obj->FlyQuery("SELECT * FROM `faq` ");
                        if (!empty($faq)) {
                            $i=0;
                            foreach ($faq as $fa):
                                ?>
                                <li class="sub-level">
                                    <input class="accordion-toggle" type="checkbox" name="accordion-panel-<?php echo $i;?>" id="accordion-panel-<?php echo $i;?>">
                                    <label class="accordion-title" for="accordion-panel-<?php echo $i;?>" data-accordion-ripple-color="#000000">
                                        <i class="fa fa-file-text"></i> <?php echo $fa->name; ?> 
                                    </label>
                                    <ul>
                                        <li>
                                            <div class="mdn-container">
                                                <p><?php echo html_entity_decode($fa->details); ?></p>
                                            </div>
                                        </li>
                                    </ul>
                                </li><!-- end accordion panel -->

                                <?php
                                $i++;
                            endforeach;
                        }
                        ?>                        
                    </ul><!-- mdn-accordion -->
                </div>
            </div>
        </div>
        
        <footer id="footer">
            <?php include'include/footer.php'; ?>
        </footer>
        <script type="text/javascript">
    /*
    * HeadsUp 1.5.6
    * @author Kyle Foster (@hkfoster)
    * @license MIT
    */
    ;(function( window, document, undefined ) {

      'use strict';

      // Extend function
      function extend( a, b ) {
        for( var key in b ) {
          if( b.hasOwnProperty( key ) ) {
            a[ key ] = b[ key ];
          }
        }
        return a;
      }

      // Throttle function (https://bit.ly/1eJxOqL)
      function throttle( fn, threshhold, scope ) {
        threshhold || ( threshhold = 250 );
        var previous, deferTimer;
        return function () {
          var context = scope || this,
              current = Date.now(),
              args    = arguments;
          if ( previous && current < previous + threshhold ) {
            clearTimeout( deferTimer );
            deferTimer = setTimeout( function () {
            previous   = current;
            fn.apply( context, args );
            }, threshhold );
          } else {
            previous = current;
            fn.apply( context, args );
          }
        };
      }

      // Class management functions
      function classReg( className ) {
        return new RegExp( '(^|\\s+)' + className + '(\\s+|$)' );
      }

      function hasClass( el, cl ) {
        return classReg( cl ).test( el.className );
      }

      function addClass( el, cl ) {
        if ( !hasClass( el, cl ) ) {
          el.className = el.className + ' ' + cl;
        }
      }

      function removeClass( el, cl ) {
        el.className = el.className.replace( classReg( cl ), ' ' );
      }

      // Main function definition
      function headsUp( selector, options ) {
        this.selector = document.querySelector( selector );
        this.options  = extend( this.defaults, options );
        this.init();
      }

      // Overridable defaults
      headsUp.prototype = {
        defaults : {
          delay       : 300,
          sensitivity : 20
        },

        // Init function
        init : function( selector ) {

          var self         = this,
              options      = self.options,
              selector     = self.selector,
              oldScrollY   = 0, 
              winHeight;

          // Resize handler function
          function resizeHandler() {
            winHeight = window.innerHeight;
            return winHeight;
          }

          // Scroll handler function
          function scrollHandler() {

            // Scoped variables
            var newScrollY = window.pageYOffset,
                docHeight  = document.body.scrollHeight,
                pastDelay  = newScrollY > options.delay,
                goingDown  = newScrollY > oldScrollY,
                fastEnough = newScrollY < oldScrollY - options.sensitivity,
                rockBottom = newScrollY < 0 || newScrollY + winHeight >= docHeight;

            // Where the magic happens
            if ( pastDelay && goingDown ) {
              addClass( selector, 'heads-up' );
            } else if ( !goingDown && fastEnough && !rockBottom || !pastDelay ) {
              removeClass( selector, 'heads-up' );
            }

            // Keep on keeping on
            oldScrollY = newScrollY;
          }

          // Attach listeners
          if ( selector ) {
            
            // Trigger initial resize
            resizeHandler();

            // Resize function listener
            window.addEventListener( 'resize', throttle( resizeHandler ), false );

            // Scroll function listener
            window.addEventListener( 'scroll', throttle( scrollHandler, 100 ), false );
          }
        }
      };

      window.headsUp = headsUp;

    })( window, document );

    // Instantiate HeadsUp
    new headsUp( '.header-wrap' );
    </script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var wc_add_to_cart_params = {
                "ajax_url": "\/wp-admin\/admin-ajax.php",
                "wc_ajax_url": "\/gallery\/?wc-ajax=%%endpoint%%",
                "i18n_view_cart": "View Cart",
                "cart_url": "http:\/\/cristiano.ukrdevs.com\/cart\/",
                "is_cart": "",
                "cart_redirect_after_add": "no"
            };
            /* ]]> */
        </script>
        <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\frontend\add-to-cart.min.js?ver=2.6.14'></script>
        <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\jquery-blockui\jquery.blockUI.min.js?ver=2.70'></script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var woocommerce_params = {
                "ajax_url": "\/wp-admin\/admin-ajax.php",
                "wc_ajax_url": "\/gallery\/?wc-ajax=%%endpoint%%"
            };
            /* ]]> */
        </script>
        <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\frontend\woocommerce.min.js?ver=2.6.14'></script>
        <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\jquery-cookie\jquery.cookie.min.js?ver=1.4.1'></script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var wc_cart_fragments_params = {
                "ajax_url": "\/wp-admin\/admin-ajax.php",
                "wc_ajax_url": "\/gallery\/?wc-ajax=%%endpoint%%",
                "fragment_name": "wc_fragments"
            };
            /* ]]> */
        </script>
        <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\frontend\cart-fragments.min.js?ver=2.6.14'></script>
        <script type='text/javascript' src='wp-includes\js\jquery\ui\core.min.js?ver=1.11.4'></script>
        <script type='text/javascript' src='wp-includes\js\jquery\ui\datepicker.min.js?ver=1.11.4'></script>
        <script type='text/javascript'>
            jQuery(document).ready(function(jQuery) {
            jQuery.datepicker.setDefaults({
            "closeText": "Close",
                    "currentText": "Today",
                    "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                    "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    "nextText": "Next",
                    "prevText": "Previous",
                    "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                    "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                    "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                    "dateFormat": "MM d, yy",
                    "firstDay": 1,
                    "isRTL": false
            });
            });    </script>
        <script type='text/javascript' src='wp-includes\js\comment-reply.min.js?ver=4.7.3'></script>
        <script type='text/javascript' src='wp-includes\js\wp-embed.min.js?ver=4.7.3'></script>
    </body>

</html>