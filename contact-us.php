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
    <title>Contact Us - <?= $site_basic_info[0]->site_name; ?></title>
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
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body class="page-template-default page page-id-34">

    <header id='header' class="header-wrap header-v1">
        <?php include'include/header.php';?>
    </header>
    <!-- <div id="page-header" style="background-image: url(wp-content/uploads/2016/10/header-bg.jpg)">
        <div class="center">
            <h1>Contact Us</h1>
        </div>
    </div> -->
    <div id="layout" class="wide">
        <div id="container">
            <div id="content" class="center">
                <div class="post-34 page type-page status-publish hentry">

                    <section id="contact-details" class="reset">
                        <div class="center">
                            <div class="section-title">
                                <p class="subtitle">Visit Us</p>
                                <h3 class="pr-font">Our Location</h3>
                            </div>
                            <div class="cols-3 margin-large">
                                <div>
                                    <div class="box phones">
                                        <h3 class="pr-font">Phones</h3>
                                        <ul>
                                            <li><?php echo $site_basic_info[0]->phone_number; ?></li>
                                        </ul>
                                        <span class="fa fa-phone"></span>
                                    </div>
                                </div>
                                <div>
                                    <div class="box address">
                                        <h3 class="pr-font">Address	</h3>
                                        <ul>
                                            <li>
                                                <?php echo $site_basic_info[0]->address; ?></li>
                                        </ul>
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                </div>
                                <div>
                                    <div class="box email">
                                        <h3 class="pr-font">Working Hours</h3>

                                        <ul>
                                            <li><?php echo $site_basic_info[0]->restaurant_open_1; ?></li>
                                            <li><?php echo $site_basic_info[0]->restaurant_open_2; ?></li>
                                            
                                        </ul>
                                        <span class="fa fa-clock-o"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section>
                        <div class="center">
                            <div class="section-title">

                                <p class="subtitle">Send Us Message</p>
                                <h3 class="pr-font">Contact Form</h3>
                            </div>
                            <?php
                        //if "email" variable is filled out, send email
                          if (isset($_REQUEST['email']))  {
                          
                          //Email information   sayfur.imli@gmail.com
                          $admin_email = "shaiful1408@gmail.com";
                          $email = $_REQUEST['email'];
                          $subject = $_REQUEST['name'];
                          $comment = $_REQUEST['message'];
                          $phone = $_REQUEST['phone'];
                          
                        $html='';
                        // $html='From: '.$email_from."\r\n";
                        $html .='Contact Us'."\r\n";
                        $html .='Subject: '.$subject."\r\n";
                        $html .='Email: '.$email."\r\n";
                        $html .='Phone: '.$phone."\r\n";
                        $html .='Message: '.$comment."\r\n";

                          //send email
                          if(mail($admin_email, "$subject", $html, "From:" . $email))
                          {
                            echo "<h4 class='btn btn-success'>Your message has been sent successfully. We will get back to you soon. Thank you</h4>";
                          }else{
                            echo "<h4 class='btn btn-warning'>Mail was not sent. Please try again later.</h4>";
                          }
                          
                          }
                        ?>
                            <form action="" method="post">
                                <div id="form-messages"></div>
                                <div class="cols-3 margin-large">
                                    <div class="form-item">
                                        <label for="input-name">Your Name *</label>
                                        <input type="text"  name="name" class="required" required>
                                    </div>
                                    <div class="form-item">
                                        <label for="input-email">Your Email *</label>
                                        <input type="email" name="email" class="required" required>
                                    </div>
                                    <div class="form-item">
                                        <label for="input-phone">Your Phone</label>
                                        <input type="tel"  name="phone" required>
                                    </div>
                                </div>
                                <div class="form-item">
                                    <label for="textarea-message">Message *</label>
                                    <textarea name="message" class="required" required></textarea>
                                </div>
                                <div class="g-recaptcha" data-sitekey="6LelRi4UAAAAAMtkOBvrK1DlPcBicZ_OyQKgecin" required></div>
                                <br/>

                                <button type="submit" class="btn-form g-recaptcha" data-sitekey="6LelRi4UAAAAAMtkOBvrK1DlPcBicZ_OyQKgecin" data-callback="YourOnSubmitFn">Submit</button>
                            </form>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>

    <?php echo $site_basic_info[0]->map ; ?>
    <!-- <div id="map"></div>
    <script>
        iconUrl = 'http://cristiano.ukrdevs.com/wp-content/themes/cristiano/images/marker.png';
        cristianoGZoom = 12; //Default Google Map Zoom value
        cristianoGZoom = '12';
        cristianoGeolocation = '23.2520763, 91.1855364'.split(','); //New Yourk By Default

        cristianoGeolocationString = '23.2520763, 91.1855364';
        cristianoGeolocation = cristianoGeolocationString.split(',');
    </script> -->

    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?callback=initMap&key=AIzaSyDb7BsNszVyIPHQ-iH-5lTQE5rxJMIc5wY"></script>
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