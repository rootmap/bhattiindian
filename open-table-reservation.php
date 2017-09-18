<?php
    include'include/config.php';
    $obj = new db_class();
	$filter =$_GET['filters'];
	$sqlcover = $obj->FlyQuery("SELECT 
								p.id,
								c.name as category_id,
								sc.name as sub_category_id,
								p.photo,
								p.date
								FROM page_cover_photo as p
								LEFT JOIN category as c ON c.id = p.category_id
								LEFT Join sub_category as sc On sc.id = p.sub_category_id
								WHERE p.sub_category_id = '".$filter."'");
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>Open Table Reservation </title>
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
    <link rel='shortlink' href='http://cristiano.ukrdevs.com/?p=283'>
    <link rel="alternate" type="application/json+oembed" href="wp-json\oembed\1.0\embed-16?url=http%3A%2F%2Fcristiano.ukrdevs.com%2Fopen-table-reservation%2F">
    <link rel="alternate" type="text/xml+oembed" href="wp-json\oembed\1.0\embed-17?url=http%3A%2F%2Fcristiano.ukrdevs.com%2Fopen-table-reservation%2F&#038;format=xml">

    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
</head>

<body class="page-template-default page page-id-283">
    <header class="header-wrap header-v1">
       <?php include'include/header.php';?>
    </header>
    <div id="page-header" style="background-image: url(cms-admin/upload/<?= $sqlcover[0]->photo?>)">
        <div class="center">
            <h1>Open Table Reservation</h1>
        </div>
    </div>
    <div id="layout" class="wide">
        <div id="container">
            <div id="content" class="center">
                <div class="post-283 page type-page status-publish hentry">

                    <section id="open-table-reservation">
                        <div class="section-title">

                            <p class="subtitle">Open Table</p>
                            <h3 class="pr-font">Book a Table</h3>
                        </div>
                        <div class="center">
                            <form method="get" class="otw-widget-form" action="https://www.opentable.com/restaurant-search.aspx" target="_blank">

                                <div class="cols-3 margin-large">
                                    <div class="form-item">
                                        <label for="date">Date</label>
                                        <input id="date" name="startDate" class="otw-reservation-date datepicker" type="text" value="" autocomplete="off">
                                    </div>
                                    <div class="form-item">
                                        <label for="time">Time</label>
                                        <select id="time" name="ResTime" class="otw-reservation-time otw-selectpicker">
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
                                        <label for="party">Guest Number</label>
                                        <select id="party" name="partySize" class="otw-party-size-select selectpicker">
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
                                </div>
                                <div class="align-center">
                                    <input type="submit" class="find-table-btn" value="Find a Table">
                                </div>
                                <input type="hidden" name="RestaurantID" class="RestaurantID" value="64861">
                                <input type="hidden" name="rid" class="rid" value="64861">
                                <input type="hidden" name="GeoID" class="GeoID" value="15">
                                <input type="hidden" name="txtDateFormat" class="txtDateFormat" value="MM/dd/yyyy">
                                <input type="hidden" name="RestaurantReferralID" class="RestaurantReferralID" value="64861">
                            </form>
                        </div>
                    </section>

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
                                            <li></li>
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
    <footer id="footer">
        <?php include'include/footer.php';?>
    </footer>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/open-table-reservation\/?wc-ajax=%%endpoint%%",
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
            "wc_ajax_url": "\/open-table-reservation\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\frontend\woocommerce.min.js?ver=2.6.14'></script>
    <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\jquery-cookie\jquery.cookie.min.js?ver=1.4.1'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/open-table-reservation\/?wc-ajax=%%endpoint%%",
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
        });
    </script>
    <script type='text/javascript' src='wp-includes\js\comment-reply.min.js?ver=4.7.3'></script>
    <script type='text/javascript' src='wp-includes\js\wp-embed.min.js?ver=4.7.3'></script>
</body>

</html>