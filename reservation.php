<?php
session_start();
include'include/config.php';
$obj = new db_class();
$site_basic_info = $obj->FlyQuery("select * from site_basic_info order by id desc limit 1");
include("cms-admin/plugin/plugin.php");
$plugin=new cmsPlugin();
$table="reservation"; ?>
        <?php 
        if(isset($_POST['create'])){
            extract($_POST);
            if(!empty($reservation_date) && !empty($reservation_time) && !empty($guest_number) && !empty($name) && !empty($phone) && !empty($email))
            {  $insert=array('reservation_date'=>$reservation_date,'reservation_time'=>$reservation_time,'guest_number'=>$guest_number,'name'=>$name,'phone'=>$phone,'email'=>$email,'date'=>date('Y-m-d'),'status'=>1);
                if($obj->insert($table,$insert)==1)
                {
                    $plugin->Success("Thank You! Your reservation request has been sent. We will contact you soon for confirmation.",$obj->filename());
                }
                else 
                {
                    $plugin->Error("Failed",$obj->filename());
                }
            }
            else 
            {
                $plugin->Error("Fields is Empty",$obj->filename());
            }   
        }
		
		
?>
<!DOCTYPE html>
<html lang="en-US">

    <head>
    <a href="cms-admin/plugin/plugin.php"></a>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
        <title>Reservation </title>
        <?php $seo = $obj->SelectAll("seo_");?>
    <meta name='robots' content='noindex,follow'>
    <meta name="Description" content="<?= $seo[0]->meta_descriptions; ?>">
<meta name="Keywords" content="<?= $seo[0]->meta_keywords; ?>">
        <meta name='robots' content='noindex,follow'>
        <link rel='dns-prefetch' href='//fonts.googleapis.com'>
        <link rel='dns-prefetch' href='//s.w.org'>
        <link rel="alternate" type="application/rss+xml" title="Cristiano &raquo; Feed" href="feed\index.htm">
        <link rel="alternate" type="application/rss+xml" title="Cristiano &raquo; Comments Feed" href="comments\feed\index.htm">
        
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
        <link rel='https://api.w.org/' href='wp-json\index.htm'>
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php?rsd">
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes\wlwmanifest.xml">
        <meta name="generator" content="WordPress 4.7.3">
        <meta name="generator" content="WooCommerce 2.6.14">
        <link rel="canonical" href="index.htm">
        <link rel="alternate" type="application/json+oembed" href="wp-json\oembed\1.0\embed-14?url=http%3A%2F%2Fcristiano.ukrdevs.com%2Freservation%2F">
        <link rel="alternate" type="text/xml+oembed" href="wp-json\oembed\1.0\embed-15?url=http%3A%2F%2Fcristiano.ukrdevs.com%2Freservation%2F&#038;format=xml">

        <style type="text/css">
            .recentcomments a {
                display: inline !important;
                padding: 0 !important;
                margin: 0 !important;
            }
        </style>
    </head>

    <body class="page-template-default page page-id-37">

        <header class="header-wrap header-v1">
<?php include'include/header.php'; ?>
        </header>
        <div id="page-slider">
            <div class="swiper-wrapper">
                <?php
                $slider = $obj->FLyQuery("SELECT * FROM `reservation_slider` ");
                if (!empty($slider)) {
                    foreach ($slider as $image) {
                        ?>
                        <div class="swiper-slide" style='background-image: url("cms-admin/upload/<?= $image->photo; ?>")'>
                            <div class="center">
                                <div class="table-cell">
                                    <div class="info">
                                        <h2><?= $image->title; ?></h2>
                                        <div class="description">
                                            <p><?= html_entity_decode($image->details); ?></p>
                                        </div>
                                        <a class="more" href="<?= $image->button_link; ?>"><?= $image->button_name; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <div class="slider-button-prev fa fa-caret-left"></div>
            <div class="slider-button-next fa fa-caret-right"></div>
            <div class="swiper-pagination"></div>
        </div>
        <div id="layout" class="wide">
            <div id="container">
                <div id="content" class="center">
                    <div class="post-37 page type-page status-publish hentry">

                        <section id="reservation">
                            <div class="section-title">

                                <p class="subtitle">Book a Table</p>
                                <h3 class="pr-font">Reservation</h3>
                            </div>
                            <?php echo $plugin->ShowMsg(); ?>
                            <div class="center">
                                <form id="" method="post" action="">
                                    <div id="reservation-form-messages"></div>
                                    <div class="cols-3 margin-large">
                                        <div class="form-item">
                                            <label for="date">Date</label>
                                            <input type="text" autocomplete="off" name="reservation_date" id="date" class="required datepicker">
                                        </div>
                                        <div class="form-item">
                                            <label for="time">Time</label>
                                            <select id="time" name="reservation_time" class="required">
                                                <option value="8:00am">8:00 am
                                                <option value="8:30am">8:30 am
                                                <option value="9:00am">9:00 am
                                                <option value="9:30am">9:30 am
                                                <option value="10:00am">10:00 am
                                                <option value="10:30am">10:30 am
                                                <option value="11:00am">11:00 am
                                                <option value="11:30am">11:30 am
                                                <option value="12:00pm">12:00 pm
                                                <option value="12:30pm">12:30 pm
                                                <option value="1:00pm">1:00 pm
                                                <option value="1:30pm">1:30 pm
                                                <option value="2:00pm">2:00 pm
                                                <option value="2:30pm">2:30 pm
                                                <option value="3:00pm">3:00 pm
                                                <option value="3:30pm">3:30 pm
                                                <option value="4:00pm">4:00 pm
                                                <option value="4:30pm">4:30 pm
                                                <option value="5:00pm">5:00 pm
                                                <option value="5:30pm">5:30 pm
                                                <option value="6:00pm">6:00 pm
                                                <option value="6:30pm">6:30 pm
                                                <option value="7:00pm" selected="selected">7:00 pm
                                                <option value="7:30pm">7:30 pm
                                                <option value="8:00pm">8:00 pm
                                                <option value="8:30pm">8:30 pm
                                                <option value="9:00pm">9:00 pm
                                                <option value="9:30pm">9:30 pm
                                                <option value="10:00pm">10:00 pm
                                                <option value="10:30pm">10:30 pm
                                                <option value="11:00pm">11:00 pm
                                                <option value="11:30pm">11:30 pm

                                            </select>
                                        </div>
                                        <div class="form-item">
                                            <label for="number">Guest Number</label>
                                            <select id="number" name="guest_number" class="required">
                                                <option value="1">1 Person
                                                <option value="2" selected="selected">2 People
                                                <option value="3">3 People
                                                <option value="4">4 People
                                                <option value="5">5 People
                                                <option value="6">6 People
                                                <option value="7">7 People
                                                <option value="8">8 People
                                                <option value="9">9 People
                                                <option value="10">10 People
                                            </select>
                                        </div>
                                        <div class="form-item">
                                            <label for="name">Name</label>
                                            <input type="text" class="required" name="name" id="name">
                                        </div>
                                        <div class="form-item">
                                            <label for="phone">Phone</label>
                                            <input type="text" maxlength="15" class="required" name="phone" id="phone">
                                        </div>
                                        <div class="form-item">
                                            <label for="email">Email</label>
                                            <input type="text" class="required" name="email" id="email">
                                        </div>
                                    </div>
                                    <div class="align-center">
                                        <input id="reservation-submit" type="submit" name="create" value="Book a Table">
                                    </div>
                                </form>
                            </div>
                        </section>
                        <script>
            jQuery(document).ready(function ($) {
                jQuery('#reservation-form').on('submit', function (e) {
                    e.preventDefault();
                    var formMessages = $('#reservation-form-messages');
                    var form = jQuery(this);

                    function validate() {
                        form.find('[name]').each(function (index, value) {
                            var that = $(this),
                                    value = that.val(),
                                    name = that.attr('name');

                            if (that.hasClass('required')) {
                                if (value == '' || value.length < 3 && value.length > 50) {
                                    that.addClass('error');
                                } else {
                                    that.removeClass('error');
                                }
                                if (name == 'email') {
                                    if (!value.match(/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i)) {
                                        that.addClass('error');
                                    }
                                }
                                if (name == 'phone') {
                                    if (!value.match(/([0-9]{9})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})/)) {
                                        that.addClass('error');
                                    }
                                }
                            }
                        });
                        if (form.find('.required').hasClass('error')) {
                            return false;
                        }
                        return true;
                    }
                    if (validate()) {

                        var data = {
                            action: 'reservation_submit',
                            form_data: form.serialize()
                        };

                        var test = jQuery.post(form.attr('action'), data, function (response) {
                            // Make sure that the formMessages div has the 'success' class.
                            $(formMessages).removeClass('error');
                            $(formMessages).addClass('success');

                            // Set the message text.
                            $(formMessages).text(response);

                            form[0].reset();
                            //$('#reservation-submit').prop("disabled", true);
                        });
                    }
                });
            });
                        </script>

                        
                        
                      
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <section id="contact-details" class="reset">
                            <div class="center">
                                <div class="section-title">
                                    <p class="subtitle">Visit Us</p>
                                    <h3 class="pr-font">Our Location</h3>
                                </div>
                                <div class="cols-3 margin-large">
                                    <div>
                                        <div class="box phones">
                                            <h3 class="pr-font">
                                                Phones						</h3>
                                            <ul>
                                                <li><?php echo $site_basic_info[0]->phone_number; ?></li>
                                            </ul>
                                            <span class="fa fa-phone"></span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="box address">
                                            <h3 class="pr-font">
                                                Address						</h3>
                                            <ul>
                                                <li><?php echo $site_basic_info[0]->address; ?></li>
                                            </ul>
                                            <span class="fa fa-map-marker"></span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="box email">
                                            <h3 class="pr-font">
                                                Working Hours						</h3>

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

                    </div>
                </div>
            </div>
        </div>








        
        <div id="map"></div>
        <script>
            iconUrl = 'http://cristiano.ukrdevs.com/wp-content/themes/cristiano/images/marker.png';
            cristianoGZoom = 12; //Default Google Map Zoom value
            cristianoGZoom = '12';
            cristianoGeolocation = '23.2520763, 91.1855364'.split(','); //New Yourk By Default

            cristianoGeolocationString = '23.2520763, 91.1855364';
            cristianoGeolocation = cristianoGeolocationString.split(',');
        </script>

        <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?callback=initMap&key=AIzaSyDb7BsNszVyIPHQ-iH-5lTQE5rxJMIc5wY"></script>
        <footer id="footer">
<?php include'./include/footer.php' ?>
        </footer>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var wc_add_to_cart_params = {
                "ajax_url": "\/wp-admin\/admin-ajax.php",
                "wc_ajax_url": "\/reservation\/?wc-ajax=%%endpoint%%",
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
                "wc_ajax_url": "\/reservation\/?wc-ajax=%%endpoint%%"
            };
            /* ]]> */
        </script>
        <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\frontend\woocommerce.min.js?ver=2.6.14'></script>
        <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\jquery-cookie\jquery.cookie.min.js?ver=1.4.1'></script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var wc_cart_fragments_params = {
                "ajax_url": "\/wp-admin\/admin-ajax.php",
                "wc_ajax_url": "\/reservation\/?wc-ajax=%%endpoint%%",
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
            });        </script>
        <script type='text/javascript' src='wp-includes\js\comment-reply.min.js?ver=4.7.3'></script>
        <script type='text/javascript' src='wp-includes\js\wp-embed.min.js?ver=4.7.3'></script>
    </body>

</html>