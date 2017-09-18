
<?php
    include'include/config.php';
    $obj = new db_class();
    $site_basic_info = $obj->FlyQuery("select * from site_basic_info order by id desc limit 1");
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title><?= $site_basic_info[0]->site_name; ?></title>
    <?php $seo = $obj->SelectAll("seo_");?>
    <meta name='robots' content='noindex,follow'>
    <meta name="Description" content="<?= $seo[0]->meta_descriptions; ?>">
<meta name="Keywords" content="<?= $seo[0]->meta_keywords; ?>">

    
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


    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <link rel="stylesheet" href="main.css">
      </head>
<body class="home page-template-default page page-id-41 header-opacity">
    
    



<header id='header' class="header-wrap header-v1">
        <?php include './include/header.php';?>
    </header>
    <section id="slider">
        <?php
            $slider_image = $obj->FLyQuery("select * from slider order by id desc");
            
            if(!empty($slider_image)){
                foreach ($slider_image as $slider):
        ?>
        <div class="item" style="background-image: url(cms-admin/upload/<?php echo $slider->photo; ?>)"></div>
        <div class="description">
            <div class="cell">
                <div class="center">
                    <h1 class="title"><?php echo $slider->slider_title; ?></h1>
                    <p class="title"><?php echo $slider->slider_sub_title; ?></p>
                </div>
            </div>
        </div>
       <!--  <span class="dim"></span>
        <span class="scroll">
                <span class="wheel"></span>
        </span> -->
        <?php 
        endforeach;
    }
        ?>
    </section>
    <div id="layout" class="front wide">
        <div id="container">
            <div id="content">
            <style type="text/css">
                
.box {
    background-color: #fff;
    border-radius: 5px;
    border-top: 15px solid #FFD700;
    box-shadow: 3px 3px 18px rgba(134, 134, 134, 0.3), -3px -3px 18px rgba(134, 134, 134, 0.3);
    list-style-type: none;
    margin: 0 auto;
    padding: 0.5rem 1.2rem;
    position: relative;
    transition: all 0.5s ease 0s;
    width: 100%;
    text-align: justify;
    margin-bottom: 20px;
}
.box:hover{
     box-shadow: 4px 4px 15px rgba(134, 134, 134, 0.65), -4px -4px 15px rgba(134, 134, 134, 0.65);
}
.titlee{width: 700px; margin: 0px auto; margin-top: 5px; text-align: justify;}

            </style>
                <section id="most-popular">
                    <div class="center">
                        <div class="section-title">
                            <!-- <p class="subtitle"><?= $recommended[0]->sub_title?></p> -->
                            <?php
                            $welcome_title = $obj->FlyQuery("SELECT * FROM welcome_title ORDER BY id desc LIMIT 1")
                            ?>
                            <h3 class="pr-font"><?= $welcome_title[0]->title; ?></h3>
                            <div class="titlee">
                            <p><?= html_entity_decode($welcome_title[0]->short_details); ?></p>
                            </div>
                        </div>
                        <ul class="cols-3 margin-large" style="list-style: none;">
                            <?php
                            $welcome_content = $obj->FLyQuery("SELECT * FROM welcome_content ORDER BY id DESC LIMIT 3");
                            if(!empty($welcome_content)){
                                foreach ($welcome_content as $wel) {
                            ?>
                            <li>
                                <div class="box effect2">
                                    
                                    <span><?= html_entity_decode($wel->details);?></span>
                                    
                                </div>
                            </li>

                        <?php
                            }
                           } 
                        ?>
                            
                        </ul>
                    </div>
                </section>
                <div style="margin: 0px; padding: 0px; clear: both; display: block;"></div>
        <section id="promo-slider">
            <div class="swiper-wrapper">
             <?php 
                            $promo_action = $obj->FLyQuery("SELECT * FROM `promo_action` order by id desc");
                            if(!empty($promo_action)){
                                foreach ($promo_action as $promo) {
                        ?>
             <div class="swiper-slide item" style="background-image: url(cms-admin/upload/<?php echo $promo->photo; ?>)">
                <div class="center">
                <div class="table-cell">
                <div class="details">
                 <h2 class="title"><?php echo $promo->title; ?></h2>
                                        <div class="content">
                                            <p><?php echo html_entity_decode($promo->details); ?></p>
                                        </div>
            </div>
        </div>
            </div>
</div>    <?php
                    }
                }
                        ?> 
                        </div>
            <div class="slider-button-prev fa fa-caret-left"></div>
            <div class="slider-button-next fa fa-caret-right"></div>            
            <div class="swiper-pagination"></div>   
        </section>
            
                
                <section class="short-info" style="margin-top: 5%;">
                    <div class="center">
                        <h2 class="pr-font">Call Us: <?php echo $site_basic_info[0]->phone_number; ?></h2>
                    </div>
                </section>
<?php
            $recommended = $obj->FlyQuery("SELECT * FROM chef_recommended ORDER BY id DESC LIMIT 1");
            ?>
                <section id="most-popular">
                    <div class="center">
                        <div class="section-title">
                            

                            <h3 class="pr-font"><?= $recommended[0]->name?></h3>
                        </div>
                        <ul id="product-list" class="cols-3 margin-large">
                            <?php
                                $chef_recommended_content = $obj->FLyQuery("SELECT * FROM chef_recommended_content ORDER BY id DESC LIMIT 3");
                                if (!empty($chef_recommended_content)) {
                                    foreach ($chef_recommended_content as $pro) {
                            ?>
                            <li>
                                <div class="post-22 product type-product status-publish has-post-thumbnail product_cat-pizza first instock featured shipping-taxable purchasable product-type-simple">
                                    <a class="image" href="">
                                        <img width="370" height="200" src="cms-admin/upload/<?php echo $pro->photo; ?>" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="Greek Salad" title="Greek Salad">

                                        
                                    </a>
                                    <div class="description">
                                        <h2 class="title">
                                                <a href=""><?php echo $pro->name; ?></a>
                                            </h2>
                                        <p><?php echo html_entity_decode($pro->short_details); ?></p>

                                        <!-- <a rel="nofollow" href="index.php?add-to-cart=<?php //echo $pro->id;?>" data-quantity="1" data-product_id="22" data-product_sku="" class="btn-cart button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>  -->
                                        </div>
                                </div>
                            </li>
                            <?php 
                        }
                            }
                            ?>
                            
                        </ul>
                    </div>
                </section>

            </div>
        </div>
    </div>

    <footer id="footer">
        <?php include'./include/footer.php'; ?>
    </footer>





<!-- popup -->
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
                                    order by id desc limit 6
                                    ");
 ?>
<!-- <div id="boxes">
  <div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window"> <h1>Latest Product</h1><hr>
    <div id="lorem">
      

      	<h2>Product Name : <?= $product[0]->name; ?></h2>
      	<img src="cms-admin/upload/<?= $product[0]->photo;  ?>">
      	<p>Price: $ <?= $product[0]->new_price; ?></p>



    </div>
    <div id="popupfoot"> <a href="#" class="close agree">Close</a> 
    | <a class="agree"style="color:red;" href="our-menu.php?filters=<?=  '#menubar'. $product[0]->id;	?>">View</a> 
    </div>
  </div>
  <div style="width: 1478px; font-size: 32pt; color:white; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
</div> -->
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
<script type='text/javascript' src='./wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.1.1'></script>
<script type='text/javascript' src='./wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
<script type='text/javascript' src='./wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>

<script type='text/javascript' src='./wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.1.1'></script>

<script type='text/javascript' src='./wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.1.1'></script>
<script type='text/javascript' src='./wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='./wp-includes/js/jquery/ui/datepicker.min.js?ver=1.11.4'></script>
<script type='text/javascript'>
jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
<script type='text/javascript' src='./wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='./wp-includes/js/jquery/ui/tabs.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='./wp-includes/js/comment-reply.min.js?ver=4.8.1'></script>
<script type='text/javascript' src='./wp-includes/js/wp-embed.min.js?ver=4.8.1'></script>
</body>
</html>