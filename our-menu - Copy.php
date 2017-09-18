<?php
    include'include/config.php';
    $obj = new db_class();
	$filter =$_GET['filters'];
	//echo $filter;
	
	$sqlcover = $obj->FlyQuery("SELECT 
								p.id,
								c.name as category_id,
								sc.name as sub_category_id,
								p.photo,
								p.date
								FROM page_cover_photo as p
								LEFT JOIN category as c ON c.id = p.category_id
								LEFT Join sub_category as sc On sc.id = p.sub_category_id
								WHERE p.category_id = '".$filter."'");
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>Our Menu &#8211; Cristiano</title>
    <meta name='robots' content='noindex,follow'>
    <link rel='dns-prefetch' href='//fonts.googleapis.com'>
    <link rel='dns-prefetch' href='//s.w.org'>
    <link rel="alternate" type="application/rss+xml" title="Cristiano &raquo; Feed" href="feed\index.htm">
    <link rel="alternate" type="application/rss+xml" title="Cristiano &raquo; Comments Feed" href="comments\feed\index.htm">
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

<body class="page-template page-template-page-full-width page-template-page-full-width-php page page-id-8">

    <header class="header-wrap header-v1">
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
                <div class="post-8 page type-page status-publish hentry">
                    <section id="top-dishes">
                        <div class="section-title">
                            <p class="subtitle">Don&#039;t Miss</p>
                            <h3 class="pr-font">Today&#039;s Offer</h3>
                        </div>
                        <div class="center">
                            <ul class="dishes-menu cols-2 large-imgs drop margin-large">
                                <?php 
                                    $sqloffer = $obj->FlyQuery("SELECT 
																o.id,
																p.name,
																p.photo,
																p.short_details,
																p.new_price
																FROM offer as o
																LEFT JOIN product as p ON p.id = o.product_id order by id desc limit 4");
									if(!empty($sqloffer)){
										foreach($sqloffer as $offer){
                                ?>
                                <li class="menu-item post-74 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads dishes_categories-soups">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="cms-admin/upload/<?= $offer->photo; ?>" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Apple Strudel"> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span><?= $offer->new_price; ?></span>
                                        <h2><span class="title"><?= $offer->name; ?></span></h2>
                                        <div class="dots">

                                            <p><?= html_entity_decode($offer->short_details); ?></p>
                                        </div>
                                    </div>
                                </li>
								<?php
										}
									}
								?>
                                <!--<li class="menu-item post-151 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-3-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Pizza Margherita"> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>9.50</span>
                                        <h2><span class="title">Tuna Niçoise</span></h2>
                                        <div class="dots">

                                            <p>Chargrilled fresh tuna steak (served medium rare) on classic Niçoise salad with French beans, cherry tomatoes, black olives, peppers, new potatoes, egg, baby gem lettuce and red onion</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item post-75 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-2-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Spinach Soup"> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>10.95</span>
                                        <h2><span class="title">Chicken and Walnut Salad</span><span class="highlight-text">Hot</span></h2>
                                        <div class="dots">

                                            <p>Chargrilled chicken with avocado, baby gem lettuce, baby spinach, shallots, French beans, walnuts, croutons and a mustard dressing</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item post-73 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads dishes_categories-soups">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-7-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Fish Parmentier"> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>13.50</span>
                                        <h2><span class="title">Roasted Pork Belly</span></h2>
                                        <div class="dots">

                                            <p>Pan roasted pork belly with gratin potato, braised Savoy cabbage, apples, thyme and calvados jus</p>
                                        </div>
                                    </div>
                                </li>-->
                            </ul>
                        </div>

                    </section>

                    <div id="dishes-menu">
                        <?php
                                $sqlcover = $obj->FlyQuery("SELECT * FROM `sub_category` WHERE `category_id` ='1'");
                                if(!empty($sqlcover)){
                                    foreach ($sqlcover as $cover):
                                        
                            ?>
						<div class="section-title has-bg" style='background-image: url(cms-admin/upload/<?= $cover->photo?>)'>
                            <div class="center">
                                <div class="table-cell">
                                    <div class="info">
                                        <h3 class="pr-font"><?= $cover->name?></h3>
                                        <div class="description">
                                            <!--<p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php
							endforeach;
								}
						?>
                        <div class="center">
                            <ul class="dishes-menu margin-large large-imgs drop-style cols-2">
                                <?php
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
											order by id desc limit 6
											");
									if(!empty($product_list)){
										foreach($product_list as $pro){
								?>
						<li class="menu-item post-74 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads dishes_categories-soups">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="cms-admin/upload/<?= $pro->photo?>" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Apple Strudel"> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span><?= $pro->new_price?></span>
                                        <h2><span class="title"><?= $pro->name?></span></h2>
                                        <div class="dots">
                                            <p><?= html_entity_decode($pro->short_details); ?></p>
                                        </div>
                                    </div>
                                </li>
								<?php
										}
									}
								?>
                                <!--<li class="menu-item post-151 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-3-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Pizza Margherita"> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>9.50</span>
                                        <h2><span class="title">Tuna Niçoise</span></h2>
                                        <div class="dots">
                                            <p>Chargrilled fresh tuna steak (served medium rare) on classic Niçoise salad with French beans, cherry tomatoes, black olives, peppers, new potatoes, egg, baby gem lettuce and red onion</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item post-75 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-2-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Spinach Soup"> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>10.95</span>
                                        <h2><span class="title">Chicken and Walnut Salad</span><span class="highlight-text">Hot</span></h2>
                                        <div class="dots">

                                            <p>Chargrilled chicken with avocado, baby gem lettuce, baby spinach, shallots, French beans, walnuts, croutons and a mustard dressing</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item post-145 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads dishes_categories-soups">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-8-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt=""> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>12.50</span>
                                        <h2><span class="title">Fish Parmentier</span></h2>
                                        <div class="dots">

                                            <p>Cod, haddock, prawn and salmon in a creamy white wine and leek sauce, topped with mash potato and Gruyère cheese</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item post-76 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads dishes_categories-soups">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-1-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Cherry Pie"> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>13.95</span>
                                        <h2><span class="title">Escalope de Veau</span></h2>
                                        <div class="dots">

                                            <p>Sautéed breaded veal escalope with watercress, lemon and veal jus.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item post-73 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads dishes_categories-soups">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-7-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Fish Parmentier"> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>13.50</span>
                                        <h2><span class="title">Roasted Pork Belly</span></h2>
                                        <div class="dots">

                                            <p>Pan roasted pork belly with gratin potato, braised Savoy cabbage, apples, thyme and calvados jus</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item post-72 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads dishes_categories-soups">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-3-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Pizza Margherita"> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>13.95</span>
                                        <h2><span class="title">Breton Fish Stew</span></h2>
                                        <div class="dots">

                                            <p>Pan roasted haddock fillet wrapped in smoked French bacon with pea purée and tomato and chive vinaigrette</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item post-71 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads dishes_categories-soups">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-2-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Spinach Soup"> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>12.95</span>
                                        <h2><span class="title">Haddock</span></h2>
                                        <div class="dots">

                                            <p>tuna, red onion, caper, mozzarella, tomato sauce</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item post-68 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-4-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Apple Strudel"> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>12</span>
                                        <h2><span class="title">Goats Cheese Salad</span></h2>
                                        <div class="dots">

                                            <p>Warm goats cheese and roasted vegetable salad with black olive tapenade crostini</p>
                                        </div>
                                    </div>
                                </li>-->
                            </ul>
                        </div>
                        <!--<div class="section-title has-bg" style='background-image: url(wp-content/uploads/2017/01/categorty-salads.jpg)'>
                            <div class="center">
                                <div class="table-cell">
                                    <div class="info">
                                        <h3 class="pr-font">
									Salads								</h3>
                                        <div class="description">
                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="center">
                            <ul class="dishes-menu margin-large large-imgs drop-style cols-2">
                                <li class="menu-item post-74 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads dishes_categories-soups">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-4-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Apple Strudel"> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>14.50</span>
                                        <h2><span class="title">Roast Duck Breast</span></h2>
                                        <div class="dots">

                                            <p>Roasted duck breast (served pink) with gratin potato and a griottine cherry sauce</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item post-151 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-3-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Pizza Margherita"> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>9.50</span>
                                        <h2><span class="title">Tuna Niçoise</span></h2>
                                        <div class="dots">

                                            <p>Chargrilled fresh tuna steak (served medium rare) on classic Niçoise salad with French beans, cherry tomatoes, black olives, peppers, new potatoes, egg, baby gem lettuce and red onion</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item post-75 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-2-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Spinach Soup"> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>10.95</span>
                                        <h2><span class="title">Chicken and Walnut Salad</span><span class="highlight-text">Hot</span></h2>
                                        <div class="dots">

                                            <p>Chargrilled chicken with avocado, baby gem lettuce, baby spinach, shallots, French beans, walnuts, croutons and a mustard dressing</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item post-145 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads dishes_categories-soups">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-8-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt=""> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>12.50</span>
                                        <h2><span class="title">Fish Parmentier</span></h2>
                                        <div class="dots">

                                            <p>Cod, haddock, prawn and salmon in a creamy white wine and leek sauce, topped with mash potato and Gruyère cheese</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item post-76 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads dishes_categories-soups">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-1-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Cherry Pie"> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>13.95</span>
                                        <h2><span class="title">Escalope de Veau</span></h2>
                                        <div class="dots">

                                            <p>Sautéed breaded veal escalope with watercress, lemon and veal jus.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item post-73 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads dishes_categories-soups">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-7-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Fish Parmentier"> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>13.50</span>
                                        <h2><span class="title">Roasted Pork Belly</span></h2>
                                        <div class="dots">

                                            <p>Pan roasted pork belly with gratin potato, braised Savoy cabbage, apples, thyme and calvados jus</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item post-72 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads dishes_categories-soups">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-3-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Pizza Margherita"> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>13.95</span>
                                        <h2><span class="title">Breton Fish Stew</span></h2>
                                        <div class="dots">

                                            <p>Pan roasted haddock fillet wrapped in smoked French bacon with pea purée and tomato and chive vinaigrette</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item post-71 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads dishes_categories-soups">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-2-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Spinach Soup"> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>12.95</span>
                                        <h2><span class="title">Haddock</span></h2>
                                        <div class="dots">

                                            <p>tuna, red onion, caper, mozzarella, tomato sauce</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="section-title has-bg" style='background-image: url(wp-content/uploads/2017/01/category-soups.jpg)'>
                            <div class="center">
                                <div class="table-cell">
                                    <div class="info">
                                        <h3 class="pr-font">
									Soups								</h3>
                                        <div class="description">
                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="center">
                            <ul class="dishes-menu margin-large large-imgs drop-style cols-2">
                                <li class="menu-item post-74 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads dishes_categories-soups">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-4-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Apple Strudel"> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>14.50</span>
                                        <h2><span class="title">Roast Duck Breast</span></h2>
                                        <div class="dots">

                                            <p>Roasted duck breast (served pink) with gratin potato and a griottine cherry sauce</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item post-145 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads dishes_categories-soups">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-8-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt=""> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>12.50</span>
                                        <h2><span class="title">Fish Parmentier</span></h2>
                                        <div class="dots">

                                            <p>Cod, haddock, prawn and salmon in a creamy white wine and leek sauce, topped with mash potato and Gruyère cheese</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item post-76 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads dishes_categories-soups">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-1-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Cherry Pie"> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>13.95</span>
                                        <h2><span class="title">Escalope de Veau</span></h2>
                                        <div class="dots">

                                            <p>Sautéed breaded veal escalope with watercress, lemon and veal jus.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item post-73 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads dishes_categories-soups">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-7-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Fish Parmentier"> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>13.50</span>
                                        <h2><span class="title">Roasted Pork Belly</span></h2>
                                        <div class="dots">

                                            <p>Pan roasted pork belly with gratin potato, braised Savoy cabbage, apples, thyme and calvados jus</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item post-72 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads dishes_categories-soups">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-3-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Pizza Margherita"> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>13.95</span>
                                        <h2><span class="title">Breton Fish Stew</span></h2>
                                        <div class="dots">

                                            <p>Pan roasted haddock fillet wrapped in smoked French bacon with pea purée and tomato and chive vinaigrette</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item post-71 dishes_menu type-dishes_menu status-publish has-post-thumbnail hentry dishes_categories-pizza dishes_categories-salads dishes_categories-soups">
                                    <div class="thumbnail">
                                        <img width="105" height="105" src="wp-content\uploads\2016\08\product-2-110x110.jpg" class="attachment-cristiano_small_image size-cristiano_small_image wp-post-image" alt="Spinach Soup"> </div>
                                    <div class="description">
                                        <span class="pr-font dm-price"><span class="currency">$</span>12.95</span>
                                        <h2><span class="title">Haddock</span></h2>
                                        <div class="dots">

                                            <p>tuna, red onion, caper, mozzarella, tomato sauce</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>-->

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
            "wc_ajax_url": "\/our-menu\/?wc-ajax=%%endpoint%%",
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
            "wc_ajax_url": "\/our-menu\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\frontend\woocommerce.min.js?ver=2.6.14'></script>
    <script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\jquery-cookie\jquery.cookie.min.js?ver=1.4.1'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/our-menu\/?wc-ajax=%%endpoint%%",
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