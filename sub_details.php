<?php
include'include/config.php';
$obj = new db_class();

$filter = $_GET['filters'];
//echo $filter;
$product_list = $obj->FlyQuery("SELECT 
                                    p.id,
                                    c.name as cat_name,
                                    sc.name as sub_cat_name,
                                    p.name,
                                    p.photo,
                                    p.short_details,
                                    p.long_details,
                                    p.new_price,
                                    p.old_price,
                                    p.quantity
                                    FROM product as p
                                    LEFT JOIN category as c ON c.id = p.category_id
                                    LEFT Join sub_category as sc On sc.id = p.sub_category_id
                                    WHERE p.id = '" . $filter . "'");
//print_r($product_list);
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
        <title><?php echo $product_list[0]->cat_name; ?> &#8211; <?php echo $product_list[0]->sub_cat_name; ?></title>
        <?php $seo = $obj->SelectAll("seo_");?>
    <meta name='robots' content='noindex,follow'>
    <meta name="Description" content="<?= $seo[0]->meta_descriptions; ?>">
<meta name="Keywords" content="<?= $seo[0]->meta_keywords; ?>">
        <meta name='robots' content='noindex,follow'>
        <link rel='dns-prefetch' href='//fonts.googleapis.com'>
        <link rel='dns-prefetch' href='//s.w.org'>
        <link rel="alternate" type="application/rss+xml" title="Cristiano &raquo; Feed" href="feed\index.htm">
        <link rel="alternate" type="application/rss+xml" title="Cristiano &raquo; Comments Feed" href="comments\feed\index.htm">
        <link rel="alternate" type="application/rss+xml" title="Cristiano &raquo; Greek Salad Comments Feed" href="feed\index.htm">
         <style type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
            .heads-up {
  transform: translateY(-6rem);
  transform: translate3d(0,-6rem,0);
}
 @media only screen and (max-width: 768px){
   #header{position:fixed !important; top:0px;width: 100%;}
 }
        </style>
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
        <link rel='https://api.w.org/' href='wp-json\index.htm'>
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php?rsd">
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes\wlwmanifest.xml"> 
        <link rel='prev' title='Caeser Salad' href='..\caeser\index.htm'>
        <link rel='next' title='Fish Parmentier' href='..\..\salads\fish-parmentier\index.htm'>
        <meta name="generator" content="WordPress 4.7.3">
        <meta name="generator" content="WooCommerce 2.6.14">
        <link rel="canonical" href="index.htm">
        <link rel='shortlink' href='http://cristiano.ukrdevs.com/?p=24'>
        <link rel="alternate" type="application/json+oembed" href="wp-json\oembed\1.0\embed-40?url=http%3A%2F%2Fcristiano.ukrdevs.com%2Fshop%2Fpizza%2Fgreek%2F">
        <link rel="alternate" type="text/xml+oembed" href="wp-json\oembed\1.0\embed-41?url=http%3A%2F%2Fcristiano.ukrdevs.com%2Fshop%2Fpizza%2Fgreek%2F&#038;format=xml">








        <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
    </head>	
    <body class="product-template-default single single-product postid-24 woocommerce woocommerce-page">
        <header class="header-wrap header-v1">
            <?php include'include/header.php'; ?>		
        </header>
        <div id="layout" class="wide">
            <div id="container">
                <div id="content" class="center">



                    <div class="blur" style="background-image: url(wp-content/uploads/2016/08/product-1-110x110.jpg)"></div> 
                    <div itemscope="" itemtype="http://schema.org/Product" id="product-24" class="post-24 product type-product status-publish has-post-thumbnail product_cat-pizza first instock shipping-taxable purchasable product-type-simple">		
                        <div id="product-single-wrap">
                            <div id="product-single" class="cols-2 like-table">
                                <div class="image">
                                    <div class="images">
                                        <a href="cms-admin/upload/<?php echo $product_list[0]->photo; ?>" itemprop="image" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto"><img width="585" height="390" src="cms-admin/upload/<?php echo $product_list[0]->photo; ?>" class="attachment-shop_single size-shop_single wp-post-image" alt="<?php echo $product_list[0]->name; ?>" title="<?php echo $product_list[0]->name; ?>"></a></div>
                                </div>
                                <div class="details">

                                    <div class="woocommerce-product-rating" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                                        <div class="star-rating" title="Rated 5 out of 5">
                                            <span style="width:100%">
                                                <strong itemprop="ratingValue" class="rating">5</strong> out of <span itemprop="bestRating">5</span>				based on <span itemprop="ratingCount" class="rating">1</span> customer rating			</span>
                                        </div>
                                        <a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span itemprop="reviewCount" class="count">1</span> customer review)</a>	</div>

                                    <h1><?php echo $product_list[0]->name; ?></h1>
                                    <div class="product_meta">



                                        <span class="posted_in">Category: <a href="" rel="tag"><?php echo $product_list[0]->sub_cat_name; ?></a></span>


                                    </div>
                                    <p><?php echo html_entity_decode($product_list[0]->long_details); ?></p>
                                    <div class="ing">
                                        <p><?php echo html_entity_decode($product_list[0]->short_details); ?></p>
                                    </div>
                                    <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

                                        <p class="single-price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo $product_list[0]->new_price; ?></span></p>

                                        <meta itemprop="price" content="25">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <link itemprop="availability" href="http://schema.org/InStock">

                                    </div>




                                    


                                </div>
                            </div>	
                                                    <!-- <a class="product-nav next-product" href=""><i class="fa fa-caret-right"></i></a> -->
                                    <!-- <a class="product-nav prev-product" href=""><i class="fa fa-caret-left"></i></a> -->

                        </div>



                        


                        <div class="related products">
                            <div class="section-title">
                                <h3 class="pr-font">Related Products</h3>
                            </div>


                            <ul id="product-list" class="cols-3 margin-large">
                                <?php
                                $product = $obj->FlyQuery("SELECT 
                                    p.id,
                                    c.name as cat_name,
                                    sc.name as sub_cat_name,
                                    p.name,
                                    p.photo,
                                    p.short_details,
                                    p.long_details,
                                    p.new_price,
                                    p.old_price,
                                    p.quantity
                                    FROM product as p
                                    LEFT JOIN category as c ON c.id = p.category_id
                                    LEFT Join sub_category as sc On sc.id = p.sub_category_id
                                    order by id desc limit 3
                                    ");
                                if (!empty($product)) {
                                    foreach ($product as $pro) {
                                        ?>
                                        <li>
                                            <div class="post-28 product type-product status-publish has-post-thumbnail product_cat-pizza first instock shipping-taxable purchasable product-type-variable has-default-attributes has-children">
                                                <a class="image" href="sub_details.php?filters=<?php echo $pro->id; ?>">
                                                    <img width="370" height="247" src="cms-admin/upload/<?php echo $pro->photo; ?>" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="Pizza" title="Pizza">

                                                    <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo $pro->old_price; ?></span>&ndash;

                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo $pro->new_price; ?></span></span>



                                                </a>
                                                <div class="description">
                                                    <h2 class="title">
                                                        <a href="sub_details.php?filters=<?php echo $pro->id; ?>"><?php echo $pro->name; ?></a>
                                                    </h2>
                                                    <p><?php echo html_entity_decode($pro->short_details); ?></p>


                                                    <a rel="nofollow" href="sub_details.php?filters=<?php echo $pro->id; ?>" data-quantity="1" data-product_id="28" data-product_sku="" class="btn-cart button product_type_variable add_to_cart_button">Select options</a>		</div>
                                            </div>
                                        </li>

                                        <?php
                                    }
                                }
                                ?>		



                            </ul>		
                        </div>
                    </div>


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
                                    var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php", "wc_ajax_url":"\/shop\/pizza\/greek\/?wc-ajax=%%endpoint%%", "i18n_view_cart":"View Cart", "cart_url":"http:\/\/cristiano.ukrdevs.com\/cart\/", "is_cart":"", "cart_redirect_after_add":"no"};
                                    /* ]]> */
        </script>
        <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\frontend\add-to-cart.min.js?ver=2.6.14'></script>
        <script type='text/javascript'>
                                    /* <![CDATA[ */
                                    var wc_single_product_params = {"i18n_required_rating_text":"Please select a rating", "review_rating_required":"yes"};
                                    /* ]]> */
        </script>
        <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\frontend\single-product.min.js?ver=2.6.14'></script>
        <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\jquery-blockui\jquery.blockUI.min.js?ver=2.70'></script>
        <script type='text/javascript'>
                                    /* <![CDATA[ */
                                    var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php", "wc_ajax_url":"\/shop\/pizza\/greek\/?wc-ajax=%%endpoint%%"};
                                    /* ]]> */
        </script>
        <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\frontend\woocommerce.min.js?ver=2.6.14'></script>
        <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\jquery-cookie\jquery.cookie.min.js?ver=1.4.1'></script>
        <script type='text/javascript'>
                                    /* <![CDATA[ */
                                    var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php", "wc_ajax_url":"\/shop\/pizza\/greek\/?wc-ajax=%%endpoint%%", "fragment_name":"wc_fragments"};
                                    /* ]]> */
        </script>
        <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\frontend\cart-fragments.min.js?ver=2.6.14'></script>
        <script type='text/javascript' src='wp-includes\js\jquery\ui\core.min.js?ver=1.11.4'></script>
        <script type='text/javascript' src='wp-includes\js\jquery\ui\datepicker.min.js?ver=1.11.4'></script>
        <script type='text/javascript'>
                            jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close", "currentText":"Today", "monthNames":["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], "monthNamesShort":["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], "nextText":"Next", "prevText":"Previous", "dayNames":["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], "dayNamesShort":["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"], "dayNamesMin":["S", "M", "T", "W", "T", "F", "S"], "dateFormat":"MM d, yy", "firstDay":1, "isRTL":false}); });</script>
        <script type='text/javascript' src='wp-includes\js\comment-reply.min.js?ver=4.7.3'></script>
        <script type='text/javascript' src='wp-includes\js\wp-embed.min.js?ver=4.7.3'></script>
    </body>
</html>