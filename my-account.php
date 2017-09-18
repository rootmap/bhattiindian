<?php
    include'include/config.php';
    $obj = new db_class();
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>My Account &#8211; Cristiano</title>
    <?php $seo = $obj->SelectAll("seo_");?>
    <meta name='robots' content='noindex,follow'>
    <meta name="Description" content="<?= $seo[0]->meta_descriptions; ?>">
<meta name="Keywords" content="<?= $seo[0]->meta_keywords; ?>">
    <meta name='robots' content='noindex,follow'>
    <link rel='dns-prefetch' href='//fonts.googleapis.com'>
    <link rel='dns-prefetch' href='//s.w.org'>
    <link rel="alternate" type="application/rss+xml" title="Cristiano &raquo; Feed" href="feed\index.htm">
    <link rel="alternate" type="application/rss+xml" title="Cristiano &raquo; Comments Feed" href="comments\feed\index.htm">
    
    <link rel='stylesheet' id='select2-css' href='wp-content\plugins\woocommerce\assets\css\select2.css?ver=2.6.14' type='text/css' media='all'>
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
    <script type='text/javascript'>
        /* <![CDATA[ */
        var _zxcvbnSettings = {
            "src": "http:\/\/cristiano.ukrdevs.com\/wp-includes\/js\/zxcvbn.min.js"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-includes\js\zxcvbn-async.min.js?ver=1.0'></script>
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
    <link rel='shortlink' href='http://cristiano.ukrdevs.com/?p=12'>
    <link rel="alternate" type="application/json+oembed" href="wp-json\oembed\1.0\embed-2?url=http%3A%2F%2Fcristiano.ukrdevs.com%2Fmy-account%2F">
    <link rel="alternate" type="text/xml+oembed" href="wp-json\oembed\1.0\embed-3?url=http%3A%2F%2Fcristiano.ukrdevs.com%2Fmy-account%2F&#038;format=xml">

    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
</head>

<body class="page-template-default page page-id-12 woocommerce-account woocommerce-page">
    
    <header class="header-wrap header-v1">
        <?php include'include/header.php';?>
    </header>
    <div id="page-title">
        <div class="center">
            <h1>My Account</h1>
        </div>
    </div>
    <div id="layout" class="wide">
        <div id="container">
            <div id="content" class="center">
                <div class="post-12 page type-page status-publish hentry">
                    <div class="woocommerce">

                        <div class="u-columns col2-set" id="customer_login">

                            <div class="u-column1 col-1">

                                <h2>Login</h2>

                                <form method="post" class="login">

                                    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                        <label for="username">Username or email address <span class="required">*</span></label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" value="">
                                    </p>
                                    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                        <label for="password">Password <span class="required">*</span></label>
                                        <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password">
                                    </p>

                                    <p class="form-row">
                                        <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="7754a54926">
                                        <input type="hidden" name="_wp_http_referer" value="/my-account/">
                                        <input type="submit" class="woocommerce-Button button" name="login" value="Login">
                                        <label for="rememberme" class="inline">
                                            <input class="woocommerce-Input woocommerce-Input--checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember me </label>
                                    </p>
                                    <p class="woocommerce-LostPassword lost_password">
                                        <a href="lost-password.php">Lost your password?</a>
                                    </p>

                                </form>

                            </div>

                            <div class="u-column2 col-2">

                                <h2>Register</h2>

                                <form method="post" class="register">

                                    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                        <label for="reg_email">Email address <span class="required">*</span></label>
                                        <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" value="">
                                    </p>

                                    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                        <label for="reg_password">Password <span class="required">*</span></label>
                                        <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password">
                                    </p>

                                    <!-- Spam Trap -->
                                    <div style="left: -999em; position: absolute;">
                                        <label for="trap">Anti-spam</label>
                                        <input type="text" name="email_2" id="trap" tabindex="-1" autocomplete="off">
                                    </div>

                                    <p class="woocomerce-FormRow form-row">
                                        <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="3051212189">
                                        <input type="hidden" name="_wp_http_referer" value="/my-account/">
                                        <input type="submit" class="woocommerce-Button button" name="register" value="Register">
                                    </p>

                                </form>

                            </div>

                        </div>

                    </div>
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
            "wc_ajax_url": "\/my-account\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View Cart",
            "cart_url": "http:\/\/cristiano.ukrdevs.com\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\frontend\add-to-cart.min.js?ver=2.6.14'></script>
    <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\select2\select2.min.js?ver=3.5.4'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var pwsL10n = {
            "unknown": "Password strength unknown",
            "short": "Very weak",
            "bad": "Weak",
            "good": "Medium",
            "strong": "Strong",
            "mismatch": "Mismatch"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-admin\js\password-strength-meter.min.js?ver=4.7.3'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_password_strength_meter_params = {
            "min_password_strength": "3",
            "i18n_password_error": "Please enter a stronger password.",
            "i18n_password_hint": "The password should be at least seven characters long. To make it stronger, use upper and lower case letters, numbers and symbols like ! \" ? $ % ^ & )."
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\frontend\password-strength-meter.min.js?ver=2.6.14'></script>
    <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\jquery-blockui\jquery.blockUI.min.js?ver=2.70'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/my-account\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\frontend\woocommerce.min.js?ver=2.6.14'></script>
    <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\jquery-cookie\jquery.cookie.min.js?ver=1.4.1'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/my-account\/?wc-ajax=%%endpoint%%",
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