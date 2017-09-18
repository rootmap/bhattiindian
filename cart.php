<?php
    include'include/config.php';
    $obj = new db_class();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>Cart &#8211; Cristiano</title>
	<?php $seo = $obj->SelectAll("seo_");?>
    <meta name='robots' content='noindex,follow'>
    <meta name="Description" content="<?= $seo[0]->meta_descriptions; ?>">
<meta name="Keywords" content="<?= $seo[0]->meta_keywords; ?>">
<meta name='robots' content='noindex,follow' />
<link rel='dns-prefetch' href='https://fonts.googleapis.com' />
<link rel='dns-prefetch' href='https://s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Cristiano &raquo; Feed" href="feed/" />
<link rel="alternate" type="application/rss+xml" title="Cristiano &raquo; Comments Feed" href="comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/cristiano.ukrdevs.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.7.3"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),!(j.toDataURL().length<3e3)&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,65039,8205,55356,57096),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,55356,57096),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55357,56425,55356,57341,8205,55357,56507),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55357,56425,55356,57341,55357,56507),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
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
<link rel='stylesheet' id='cristiano-body-font-css'  href='https://fonts.googleapis.com/css?family=Lora%3A300%2C300i%2C400%2C400i%2C700&#038;ver=4.7.3' type='text/css' media='all' />
<link rel='stylesheet' id='cristiano-headings-font-css'  href='https://fonts.googleapis.com/css?family=Cinzel%3Aregular&#038;ver=4.7.3' type='text/css' media='all' />
<link rel='stylesheet' id='cristiano-fontawesome-css'  href='wp-content/themes/cristiano/css/font-awesome.css?ver=4.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='magnific-popup-css'  href='wp-content/themes/cristiano/css/magnific-popup.css?ver=1.1.0' type='text/css' media='all' />
<link rel='stylesheet' id='swiper-css'  href='wp-content/themes/cristiano/css/swiper.min.css?ver=3.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='cristiano-grid-css'  href='wp-content/themes/cristiano/css/grid.css?ver=1.9.2' type='text/css' media='all' />
<link rel='stylesheet' id='cristiano-style-css'  href='wp-content/themes/cristiano/style.css?ver=1.9.2' type='text/css' media='all' />
<link rel='stylesheet' id='cristiano-wc-style-css'  href='wp-content/themes/cristiano/css/woocommerce.css?ver=1.9.2' type='text/css' media='all' />
<link rel='stylesheet' id='cristiano-rwd-css'  href='wp-content/themes/cristiano/css/rwd.css?ver=1.9.2' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='wp-content/plugins/ukrdevs-restaurant-core/contact-form/ajax.js?ver=4.7.3'></script>
<script type='text/javascript' src='wp-content/themes/cristiano/js/jquery.magnific-popup.min.js?ver=1.1.0'></script>
<script type='text/javascript' src='wp-content/themes/cristiano/js/swiper.min.js?ver=3.4.2'></script>
<script type='text/javascript' src='wp-content/themes/cristiano/js/google-map.js?ver=4.7.3'></script>
<script type='text/javascript' src='wp-content/themes/cristiano/js/script.js?ver=1.9.2'></script>
	<style>
		body{
			font-family: Lora;
			font-weight: 300;
		}
		h1,
		h2,
		.pr-font,
		.price,
		.btn-cart,
		.btn-plate {
			font-family: Cinzel;
			font-weight: regular;
		}		
	</style>
			
		
		
	
			
		
	
		
		
	
		
			
			<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		</head>
<body class="page-template-default page page-id-10 woocommerce-cart woocommerce-page">
	<header class="header-wrap header-v1">
        <?php include './include/header.php';?>
    </header>			<div id="page-title">
	<div class="center">
		<h1>Cart</h1>
	</div>
</div>			<div id="layout" class="wide">
		<div id="container" >
			<div id="content" class="center">
				<div class="post-10 page type-page status-publish hentry">
											<div class="woocommerce">
	<div class="woocommerce-message">&ldquo;Apple Strudel&rdquo; removed. <a href="cart/?undo_item=6364d3f0f495b6ab9dcf8d3b5c6e0b01&#038;_wpnonce=1ba3655341">Undo?</a></div>
	<div class="woocommerce-message">&ldquo;Caeser Salad&rdquo; removed. <a href="cart/?undo_item=b6d767d2f8ed5d21a44b0e5886680cb9&#038;_wpnonce=1ba3655341">Undo?</a></div>

<p class="cart-empty">
	Your cart is currently empty.</p>


	<p class="return-to-shop">
		<a class="button wc-backward" href="shop/">
			Return to shop		</a>
	</p>
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
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/cart\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/cristiano.ukrdevs.com\/cart\/","is_cart":"1","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.0.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_country_select_params = {"countries":"{\"US\":{\"AL\":\"Alabama\",\"AK\":\"Alaska\",\"AZ\":\"Arizona\",\"AR\":\"Arkansas\",\"CA\":\"California\",\"CO\":\"Colorado\",\"CT\":\"Connecticut\",\"DE\":\"Delaware\",\"DC\":\"District Of Columbia\",\"FL\":\"Florida\",\"GA\":\"Georgia\",\"HI\":\"Hawaii\",\"ID\":\"Idaho\",\"IL\":\"Illinois\",\"IN\":\"Indiana\",\"IA\":\"Iowa\",\"KS\":\"Kansas\",\"KY\":\"Kentucky\",\"LA\":\"Louisiana\",\"ME\":\"Maine\",\"MD\":\"Maryland\",\"MA\":\"Massachusetts\",\"MI\":\"Michigan\",\"MN\":\"Minnesota\",\"MS\":\"Mississippi\",\"MO\":\"Missouri\",\"MT\":\"Montana\",\"NE\":\"Nebraska\",\"NV\":\"Nevada\",\"NH\":\"New Hampshire\",\"NJ\":\"New Jersey\",\"NM\":\"New Mexico\",\"NY\":\"New York\",\"NC\":\"North Carolina\",\"ND\":\"North Dakota\",\"OH\":\"Ohio\",\"OK\":\"Oklahoma\",\"OR\":\"Oregon\",\"PA\":\"Pennsylvania\",\"RI\":\"Rhode Island\",\"SC\":\"South Carolina\",\"SD\":\"South Dakota\",\"TN\":\"Tennessee\",\"TX\":\"Texas\",\"UT\":\"Utah\",\"VT\":\"Vermont\",\"VA\":\"Virginia\",\"WA\":\"Washington\",\"WV\":\"West Virginia\",\"WI\":\"Wisconsin\",\"WY\":\"Wyoming\",\"AA\":\"Armed Forces (AA)\",\"AE\":\"Armed Forces (AE)\",\"AP\":\"Armed Forces (AP)\"}}","i18n_select_state_text":"Select an option\u2026","i18n_no_matches":"No matches found","i18n_ajax_error":"Loading failed","i18n_input_too_short_1":"Please enter 1 or more characters","i18n_input_too_short_n":"Please enter %qty% or more characters","i18n_input_too_long_1":"Please delete 1 character","i18n_input_too_long_n":"Please delete %qty% characters","i18n_selection_too_long_1":"You can only select 1 item","i18n_selection_too_long_n":"You can only select %qty% items","i18n_load_more":"Loading more results\u2026","i18n_searching":"Searching\u2026"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/country-select.min.js?ver=3.0.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_address_i18n_params = {"locale":"{\"US\":{\"postcode\":{\"label\":\"ZIP\"},\"state\":{\"label\":\"State\"}},\"default\":{\"first_name\":{\"label\":\"First name\",\"required\":true,\"class\":[\"form-row-first\"],\"autocomplete\":\"given-name\",\"autofocus\":true,\"priority\":10},\"last_name\":{\"label\":\"Last name\",\"required\":true,\"class\":[\"form-row-last\"],\"autocomplete\":\"family-name\",\"priority\":20},\"company\":{\"label\":\"Company name\",\"class\":[\"form-row-wide\"],\"autocomplete\":\"organization\",\"priority\":30},\"country\":{\"type\":\"country\",\"label\":\"Country\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\",\"update_totals_on_change\"],\"autocomplete\":\"country\",\"priority\":40},\"address_1\":{\"label\":\"Address\",\"placeholder\":\"Street address\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-line1\",\"priority\":50},\"address_2\":{\"placeholder\":\"Apartment, suite, unit etc. (optional)\",\"class\":[\"form-row-wide\",\"address-field\"],\"required\":false,\"autocomplete\":\"address-line2\",\"priority\":60},\"city\":{\"label\":\"Town \\\/ City\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-level2\",\"priority\":70},\"state\":{\"type\":\"state\",\"label\":\"State \\\/ County\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"validate\":[\"state\"],\"autocomplete\":\"address-level1\",\"priority\":80},\"postcode\":{\"label\":\"Postcode \\\/ ZIP\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"validate\":[\"postcode\"],\"autocomplete\":\"postal-code\",\"priority\":90}}}","locale_fields":"{\"address_1\":\"#billing_address_1_field, #shipping_address_1_field\",\"address_2\":\"#billing_address_2_field, #shipping_address_2_field\",\"state\":\"#billing_state_field, #shipping_state_field, #calc_shipping_state_field\",\"postcode\":\"#billing_postcode_field, #shipping_postcode_field, #calc_shipping_postcode_field\",\"city\":\"#billing_city_field, #shipping_city_field, #calc_shipping_city_field\"}","i18n_required_text":"required"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/address-i18n.min.js?ver=3.0.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/cart\/?wc-ajax=%%endpoint%%","update_shipping_method_nonce":"7f852baa09","apply_coupon_nonce":"31ccf9922c","remove_coupon_nonce":"3c37581d98"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/cart.min.js?ver=3.0.1'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/cart\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.0.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/cart\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.0.1'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/datepicker.min.js?ver=1.11.4'></script>
<script type='text/javascript'>
jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/tabs.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='wp-includes/js/comment-reply.min.js?ver=4.7.3'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min.js?ver=4.7.3'></script>
<script type="text/javascript" src=""></script>
</body>
</html>