<?php
    include './cms-admin/class/db_Class.php';
    $obj = new db_class();
	
    if (isset($_GET['content'])) {
if (preg_match("/^[  a-zA-Z]+/", $_GET['content'])) {
    $content = $_GET['content'];
   // echo $content;
    $sqlresult = $obj->FlyQuery("SELECT 
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
                                    WHERE 
                                    sc.name LIKE '%".$content."%' OR p.name LIKE '%".$content."%'");

    // print_r($sqlresult);
    // exit();
   
}
    }
    ?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo $sqlresult[0]->name ?> &#8211; Cristiano</title>
    <?php $seo = $obj->SelectAll("seo_");?>
    <meta name='robots' content='noindex,follow'>
    <meta name="Description" content="<?= $seo[0]->meta_descriptions; ?>">
<meta name="Keywords" content="<?= $seo[0]->meta_keywords; ?>">
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
.heads-up {
  transform: translateY(-6rem);
  transform: translate3d(0,-6rem,0);
}
 @media only screen and (max-width: 768px){
   #header{position:fixed !important; top:0px;width: 100%}
 }
</style>
</head>

<body class="page-template page-template-page-full-width page-template-page-full-width-php page page-id-8">

    <header id='header' class="header-wrap header-v1">
        <?php include'include/header.php';?>
    </header>
    <div id="page-title">
		<div class="center">
			<h1>Search Results for: <?php echo $sqlresult[0]->name ?></h1>
		</div>
	</div>	
	<div class="center">
            <article id="post-28" class="article cols-2 no-margin even post-28 product type-product status-publish has-post-thumbnail product_cat-pizza first instock shipping-taxable purchasable product-type-variable has-default-attributes has-children">
<!--                            <div class="image">
                            <a href="http://cristiano.ukrdevs.com/shop/pizza/pizza-margherita/">
                                    <img width="585" height="390" src="http://cristiano.ukrdevs.com/wp-content/uploads/2016/07/pizza-9-585x390.jpg" class="attachment-medium size-medium wp-post-image" alt="" />		</a>
                    </div>	
                            <div class="details">	
                            <time class="date pr-font" datetime="2016-07-21">July 21, 2016</time>	
                            <h2>
                                    <a href="http://cristiano.ukrdevs.com/shop/pizza/pizza-margherita/">
                                            Pizza Margherita			</a>
                            </h2>
                            <div class="content">
                                    <p>Mushrooms, Pepperoni,  Mozzarella, Tomato, Salami, Olive</p>
                            </div>
                            <a class="btn-plate" href="http://cristiano.ukrdevs.com/shop/pizza/pizza-margherita/">Read More</a>
                    </div>-->
<?php
                                                
           
                                                       $stringhighlight='<span style="color:#f00;">'.$content.'</span>';
                                                        //echo $sqlresult;
                                                        if (!empty($sqlresult)) {
                                                            foreach ($sqlresult as $result):
                                                                ?>
                                                                <div id="circle-shape-example">
                  <!--<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/kiwifruit-on-a-plate.jpg" alt="" class="curve">-->
                                                                    <h1><?php echo html_entity_decode(str_replace($content, $stringhighlight, $result->name)) ?></h1>

                                                                    <p><?php echo html_entity_decode(str_replace($content, $stringhighlight, $result->short_details)) ?></p>
                                                                </div>
                                                                <?php
                                                            endforeach;
                                                        }
                                                        else {
                                                            ?>
<div class="no-results">
				<p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
				<form role="search" method="get" class="search-form" action="search.php">
		<input type="search" class="search-field" placeholder="Search..." value="" name="content" />
	<button type="submit" class="search-submit"></button>
</form>	
						</div>
<?php
                                                        }
                                                  
                                                
                                                ?>
            </article>				
					
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
</body>

</html>