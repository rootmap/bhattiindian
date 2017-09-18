<?php
    include'include/config.php';
    $obj = new db_class();

    $filters = $_GET['filters'];
   //echo $filters;
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
                                    WHERE p.sub_category_id = '".$filters."'
                                   order by p.id asc ");
   if(!empty($product_list)){

?>
    <!DOCTYPE html>
    <html lang="en-US">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
        <title>
            <?php echo $product_list[0]->sub_cat_name; ?>
        </title>
        <?php $seo = $obj->SelectAll("seo_");?>
    <meta name='robots' content='noindex,follow'>
    <meta name="Description" content="<?= $seo[0]->meta_descriptions; ?>">
<meta name="Keywords" content="<?= $seo[0]->meta_keywords; ?>">
        <script type="text/javascript">
            window._wpemojiSettings = {
                "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/",
                "ext": ".png",
                "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/",
                "svgExt": ".svg",
                "source": {
                    "concatemoji": "http:\/\/cristiano.ukrdevs.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.7.3"
                }
            };
            ! function(a, b, c) {
                function d(a) {
                    var b, c, d, e, f = String.fromCharCode;
                    if (!k || !k.fillText) return !1;
                    switch (k.clearRect(0, 0, j.width, j.height), k.textBaseline = "top", k.font = "600 32px Arial", a) {
                        case "flag":
                            return k.fillText(f(55356, 56826, 55356, 56819), 0, 0), !(j.toDataURL().length < 3e3) && (k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57331, 65039, 8205, 55356, 57096), 0, 0), b = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57331, 55356, 57096), 0, 0), c = j.toDataURL(), b !== c);
                        case "emoji4":
                            return k.fillText(f(55357, 56425, 55356, 57341, 8205, 55357, 56507), 0, 0), d = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55357, 56425, 55356, 57341, 55357, 56507), 0, 0), e = j.toDataURL(), d !== e
                    }
                    return !1
                }

                function e(a) {
                    var c = b.createElement("script");
                    c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
                }
                var f, g, h, i, j = b.createElement("canvas"),
                    k = j.getContext && j.getContext("2d");
                for (i = Array("flag", "emoji4"), c.supports = {
                        everything: !0,
                        everythingExceptFlag: !0
                    }, h = 0; h < i.length; h++) c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]);
                c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function() {
                    c.DOMReady = !0
                }, c.supports.everything || (g = function() {
                    c.readyCallback()
                }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function() {
                    "complete" === b.readyState && c.readyCallback()
                })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
            }(window, document, window._wpemojiSettings);
        </script>
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
        </style>
    </head>

    <body class="post-template-default single single-post postid-166 single-format-standard">
        <header class="header-wrap header-v1">
            <?php include'include/header.php';?>
        </header>
        <div id="layout" class="wide">
            <div id="container">
                <div id="content" class="center">
                    <div id="single-post" class="has-sidebar">
                        <main id="main">
                            <article class="post-166 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized tag-ipsum tag-lorem tag-text">
                                <!--<img width="585" height="390" src="cms-admin/upload/<?php //$sqlcover[0]->photo?>" class="attachment-width-830 size-width-830 wp-post-image" alt="">-->
                                <h1 class="title"><?php echo $product_list[0]->sub_cat_name; ?></h1>

                                
                                 <h2 class="title">Name : <?php echo $product_list[0]->name; ?></h2>
                                <div class="content">
                                    <p>
                                        <?php echo html_entity_decode($product_list[0]->long_details); ?>
                                    </p>
                                    <p>
                                        Price : <?php echo html_entity_decode($product_list[0]->new_price); ?>
                                    </p>
                                </div>

                            
                        </main>

                        <aside id="right-sidebar" class="sidebar widget-area" role="complementary">
                            <div id="search-2" class="widget widget_search">
                                <form role="search" method="get" class="search-form" action="search.php">
                                    <input type="search" class="search-field" placeholder="Search..." value="" name="content">
                                    <button type="submit" class="search-submit"></button>
                                </form>
                            </div>
                            <div id="recent-posts-2" class="widget widget_recent_entries">
                                <h3 class="title">Sub Menu</h3>
                                <ul>
                                     <?php
                                      $sub_category = $obj->FlyQuery("SELECT * FROM `sub_category` WHERE `category_id`='3'");   
                                        if(!empty($sub_category)){
                                            foreach ($sub_category as $sub_cat):
                                    ?>
                                        <li><a href="menu2.php?filters=<?php echo $sub_cat->id; ?>"><?php echo $sub_cat->name; ?></a></li>
                                        <?php
				endforeach;
			}
					?>
                                </ul>
                            </div>
                            
                        </aside>

                    </div>
                </div>
            </div>
        </div>
        <footer id="footer">
            <?php include'include/footer.php';?>
        </footer>

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
    <?php
}else{
    echo '<script>alert("Data Not Found"); window.location.href = "index.php";</script>';
    //header("location:index.php");
    }
    ?>
