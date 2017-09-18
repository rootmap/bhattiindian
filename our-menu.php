<?php
include'include/config.php';
$obj = new db_class();
$filter =$_GET['filtersMenu'];
if(isset($_GET['filters']))
{
  $filterM =$_GET['filters'];
}
 // print_r($filter);
 // exit();
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
  WHERE p.category_id = '".$filter."' order by p.id desc");

  ?>
  <!DOCTYPE html>
  <html lang="en-US">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>Our Menu - <?= $site_basic_info[0]->site_name; ?></title>
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
      .heads-up {
        transform: translateY(-6rem);
        transform: translate3d(0,-6rem,0);
      }
      @media only screen and (max-width: 768px){
       #header{position:fixed !important; top:0px;width: 100%;}
     }
   </style>

 </head>

 <body class="page-template page-template-page-full-width page-template-page-full-width-php page page-id-8">

  <header id='header' class="header-wrap header-v1">
    <?php include'include/header.php';?>
  </header>
  <div id="page-header" style="background-image: url(cms-admin/upload/<?= $sqlcover[0]->photo?>)">
    <div class="center">
      <h1>Our Menu</h1>
    </div>
  </div>
  <div id="layout" class="wide">
    <div id="container">
      <div id="content">
        <?php 
        $sqloffer = $obj->FlyQuery("SELECT * FROM offer");
        ?>
        <div class="post-8 page type-page status-publish hentry">
          <section id="top-dishes">
            <div class="section-title">
              <p class="subtitle"><?= $sqloffer[0]->subtitle; ?></p>
              <h3 class="pr-font"><?= $sqloffer[0]->title; ?></h3>
            </div>
            <div class="center">
              <div style="text-align: center;"><?= html_entity_decode($sqloffer[0]->details); ?></div>

            </div>

          </section>

          <div id="dishes-menu">
            <?php
            $sqlcover = $obj->FlyQuery("SELECT * FROM `sub_category` WHERE `category_id` ='".$_GET['filtersMenu']."'");
            if(!empty($sqlcover)){
              foreach ($sqlcover as $cover):

                ?>
              <a name="menubar<?php echo $cover->id;?>">	
                <div class="section-title has-bg" style='background-image: url(cms-admin/upload/<?= $cover->photo?>)'>
                  <div class="center">
                    <div class="table-cell">
                      <div class="info">
                        <h3 class="pr-font"><?= $cover->name?></h3>
                        <div class="description">
                          <p><?php echo html_entity_decode($cover->description); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>




            </div>

            <style type="text/css" media="screen">
              .subMenu{
                font-family: 'Cinzel', serif;
                font-weight: normal;
              } .subMenu p{
                font: 400 14px/1 'Lora', sans-serif;
                color: #333;
                cursor: default;
                background-position: 50% 0;
                background-attachment: fixed;
              }  
            </style>

            <?php
            $sqlSubMenu=$obj->FlyQuery("SELECT * FROM sub_category_menu WHERE sub_category_id='".$cover->id."'");
            if(!empty($sqlSubMenu))
            {

              foreach ($sqlSubMenu as $subMenu){
                ?>

                <div class="center">

                  <div class="subMenu">

                    <h4><?= $subMenu->name; ?></h4>
                    <p><?= html_entity_decode($subMenu->details); ?></p>
                  </div>

                  <?php
                  $product_list = $obj->FlyQuery("SELECT 
                    p.id,
                    c.name as cat_name,
                    p.sub_category_id,
                    sc.name as sub_cat_name,
                    sc.description,
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

                    WHERE p.sub_category_id='".$cover->id."' AND sub_category_menu_id='".$subMenu->id."'

                    ORDER BY p.priority ASC 

                    ");
                  if(!empty($product_list)){

                    ?>
                    <ul class="dishes-menu margin-large large-imgs drop-style cols-2">
                      <?php
                      foreach($product_list as $pro){
                        ?>  

                        <li class="menu-item post-74 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads dishes_categories-soups">


                          <div>

                          </div>  			
                          <div class="description">
                           <span class="pr-font dm-price"><span class="currency"></span><?= $pro->new_price?></span>
                           <h2><span class="title" style="font: 400 14px/1 'Lora', sans-serif;font-weight: normal;"><?= $pro->name?></span></h2>
                           <div class="dots">

                            <p><?= html_entity_decode($pro->short_details); ?></p>
                          </div>
                        </div>

                      </li>
                      <?php
                    }
                    ?>
                  </ul>

                  <?php
                }




                ?>

              </div>
              <?php 
            }


              ?>
              <div class="center">
              <?php
                  /*oter Item which is not added on sm */

            
                  $product_list = $obj->FlyQuery("SELECT 
                    p.id,
                    c.name as cat_name,
                    p.sub_category_id,
                    sc.name as sub_cat_name,
                    sc.description,
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

                    WHERE p.sub_category_id='".$cover->id."' AND sub_category_menu_id='0'

                    ORDER BY p.priority ASC 

                    ");
                  if(!empty($product_list)){

                    ?>
                    <ul class="dishes-menu margin-large large-imgs drop-style cols-2">
                      <?php
                      foreach($product_list as $pro){
                        ?>  

                        <li class="menu-item post-74 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads dishes_categories-soups">


                          <div>

                          </div>        
                          <div class="description">
                           <span class="pr-font dm-price"><span class="currency"></span><?= $pro->new_price?></span>
                           <h2><span class="title" style="font: 400 14px/1 'Lora', sans-serif;font-weight: normal;"><?= $pro->name?></span></h2>
                           <div class="dots">

                            <p><?= html_entity_decode($pro->short_details); ?></p>
                          </div>
                        </div>

                      </li>
                      <?php
                    }
                    ?>
                  </ul>

                  <?php
                }
                
                /*oter Item which is not added on sm */

                ?>
                </div>
                <?php


          }
          else
          {

            ?>
            <div class="center">


              <?php
              $product_list = $obj->FlyQuery("SELECT 
                p.id,
                c.name as cat_name,
                p.sub_category_id,
                sc.name as sub_cat_name,
                sc.description,
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

               WHERE p.sub_category_id='".$cover->id."' AND sub_category_menu_id='0'

                ORDER BY p.priority ASC 

                ");
              if(!empty($product_list)){

                ?>
                <ul class="dishes-menu margin-large large-imgs drop-style cols-2">
                  <?php
                  foreach($product_list as $pro){
                    ?>  

                    <li class="menu-item post-74 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads dishes_categories-soups">


                      <div>

                      </div>        
                      <div class="description">
                       <span class="pr-font dm-price"><span class="currency"></span><?= $pro->new_price?></span>
                       <h2><span class="title" style="font: 400 14px/1 'Lora', sans-serif;font-weight: normal;"><?= $pro->name?></span></h2>
                       <div class="dots">

                        <p><?= html_entity_decode($pro->short_details); ?></p>
                      </div>
                    </div>

                  </li>
                  <?php
                }
                ?>
              </ul>

              <?php
            }
            ?>

          </div>
          <?php
        }

        ?>


        <?php
        endforeach;
      }

      ?>



          <!--                        <div class="thumbnail">
                          <img width="105" height="105" src="cms-admin/upload/<?= $pro->photo?>" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Apple Strudel"> 
                        </div>-->

                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <footer id="footer">
                <?php include'include/footer.php';?>
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
  <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\frontend\add-to-cart.min.js?ver=2.6.14'></script>
  <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\jquery-blockui\jquery.blockUI.min.js?ver=2.70'></script>

  <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\frontend\woocommerce.min.js?ver=2.6.14'></script>
  <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\jquery-cookie\jquery.cookie.min.js?ver=1.4.1'></script>

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
    });
  </script>
  <script type='text/javascript' src='wp-includes\js\comment-reply.min.js?ver=4.7.3'></script>
  <script type='text/javascript' src='wp-includes\js\wp-embed.min.js?ver=4.7.3'></script>
  <?php 
  if(isset($filterM))
  {
   ?>
   <script>
     jQuery(document).ready(function(jQuery) {
          //alert("<?=$filterM?>");
          window.location.href="#menubar<?=$filterM?>";
        });

      </script>
      <?php
    }
    ?>
  </body>

  </html>

<!--                        <div class="thumbnail">
                          <img width="105" height="105" src="cms-admin/upload/<?= $pro->photo?>" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Apple Strudel"> 
                        </div>-->