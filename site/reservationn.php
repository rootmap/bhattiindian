<?php
session_start();
include'../cms-admin/class/db_Class.php';
$obj = new db_class();
$site_basic_info = $obj->FlyQuery("select * from site_basic_info order by id desc limit 1");
include("../cms-admin/plugin/plugin.php");
$plugin = new cmsPlugin();
$table = "reservation";
?>
<?php
if (isset($_POST['create'])) {
    extract($_POST);
    if (!empty($reservation_date) && !empty($reservation_time) && !empty($guest_number) && !empty($name) && !empty($phone) && !empty($email)) {
        $insert = array('reservation_date' => $reservation_date, 'reservation_time' => $reservation_time, 'guest_number' => $guest_number, 'name' => $name, 'phone' => $phone, 'email' => $email, 'date' => date('Y-m-d'), 'status' => 1);
        if ($obj->insert($table, $insert) == 1) {
            $plugin->Success("Thank You! Your reservation request has been sent. We will contact you soon for confirmation.", $obj->filename());
        } else {
            $plugin->Error("Failed", $obj->filename());
        }
    } else {
        $plugin->Error("Fields is Empty", $obj->filename());
    }
}
?>
<!DOCTYPE html>
<html lang="en-gb">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="generator" content="Model Restaurant">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="HandheldFriendly" content="true">
        <meta name="apple-mobile-web-app-capable" content="YES">

        <link rel="stylesheet" type="text/css" href="..\assets\32310b71\jui\css\base\jquery-ui.css">
        <script type="text/javascript" src="..\assets\32310b71\jquery.min.js"></script>
        <script type="text/javascript" src="..\assets\32310b71\jquery.yiiactiveform.js"></script>
        <title>Reservation</title>

        <link rel="shortcut icon" href="/favicon.ico">
        <link type="text/css" href="..\css\lib\jquery.bxslider.css" rel="stylesheet">
        <link href="..\assets\vendor\alert\jquery.alerts.css" rel="stylesheet">
        <!--<link type="text/css" href="/css/lib/jquery-ui.min.css" rel="stylesheet" />-->
        <link type="text/css" href="..\css\lib\bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="..\css\lib\dataTables.bootstrap.min.css">
        <!--<link type="text/css" href="/css/lib/datepicker.css" rel="stylesheet" />-->
        <link type="text/css" href="..\css\lib\font-awesome.min.css" rel="stylesheet">
        <link type="text/css" href="..\css\lib\template.css" rel="stylesheet">
        <link type="text/css" href="..\css\lib\off-canvas.css" rel="stylesheet">
        <link type="text/css" href="..\css\custom\style.css" rel="stylesheet">
        <link type="text/css" href="..\css\custom\custom.css" rel="stylesheet">
        <link type="text/css" href="..\css\custom\bs_leftnavi.css" rel="stylesheet">
        <!--<link type="text/css" href="/css/lib/colorbox.css" rel="stylesheet" />-->
        <link href="..\assets\css\shoppting-sites.css" rel="stylesheet">
        <!--START Google FOnts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans|Podkova|Rosario|Abel|PT+Sans|Source+Sans+Pro:400,600,300|Roboto' rel='stylesheet' type='text/css'>
        <!--END Google FOnts-->

        <!--UIKIT-->
        <link href="..\assets\vendor\uikit\css\uikit.almost-flat.min.css" rel="stylesheet">
        <link href="..\assets\vendor\uikit\css\addons\uikit.addons.min.css" rel="stylesheet">
        <link href="..\assets\vendor\uikit\css\addons\uikit.gradient.addons.min.css" rel="stylesheet">
        <!--UIKIT-->
        <link href="..\assets\vendor\fancybox\source\jquery.fancybox.css" rel="stylesheet">

        <!--<script src="/js/lib/jquery.min.js" type="text/javascript"></script>-->
        <script type="text/javascript" src="..\js\lib\jquery-migrate-1.0.0.js"></script>
        <!--old-->
        <link rel='stylesheet' id='cristiano-google-fonts-css' href='https://fonts.googleapis.com/css?family=Cinzel%7CLora%3A400%2C400i%2C700&#038;ver=4.7.3' type='text/css' media='all'>
        <link rel='stylesheet' id='cristiano-fontawesome-css' href='../wp-content\themes\cristiano\css\font-awesome.css?ver=4.7.3' type='text/css' media='all'>
        <link rel='stylesheet' id='magnific-popup-css' href='../wp-content\themes\cristiano\css\magnific-popup.css?ver=4.7.3' type='text/css' media='all'>
        <link rel='stylesheet' id='swiper-css' href='../wp-content\themes\cristiano\css\swiper.min.css?ver=4.7.3' type='text/css' media='all'>
        <link rel='stylesheet' id='cristiano-grid-css' href='../wp-content\themes\cristiano\css\grid.css?ver=4.7.3' type='text/css' media='all'>
        <link rel='stylesheet' id='cristiano-style-css' href='../wp-content\themes\cristiano\style.css?ver=4.7.3' type='text/css' media='all'>
        <link rel='stylesheet' id='cristiano_wc_style-css' href='../wp-content\themes\cristiano\css\woocommerce.css?ver=4.7.3' type='text/css' media='all'>
        <link rel='stylesheet' id='cristiano-rwd-css' href='../wp-content\themes\cristiano\css\rwd.css?ver=4.7.3' type='text/css' media='all'>
        <script type='text/javascript' src='../wp-includes\js\jquery\jquery.js?ver=1.12.4'></script>
        <script type='text/javascript' src='../wp-includes\js\jquery\jquery-migrate.min.js?ver=1.4.1'></script>
        <script type='text/javascript' src='../wp-content\plugins\ukrdevs-restaurant-core\contact-form\ajax.js?ver=4.7.3'></script>
        <script type='text/javascript' src='../wp-content\themes\cristiano\js\jquery.magnific-popup.min.js?ver=4.7.3'></script>
        <script type='text/javascript' src='../wp-content\themes\cristiano\js\swiper.min.js?ver=4.7.3'></script>
        <script type='text/javascript' src='../wp-content\themes\cristiano\js\google-map.js?ver=4.7.3'></script>
        <script type='text/javascript' src='../wp-content\themes\cristiano\js\script.js?ver=4.7.3'></script>
    </head>
    <body class="page-template-default page page-id-37">

        <header class="header-wrap header-v1">
<?php include'../include/header.php'; ?>
        </header>






        <section id="tz-position1-wrapper" class="slide pad-bottom-100">
            <div class="container">
                <!--                <div class="bread_crumb">
                <div class="breadcrumbs">
<a href="/home">Home</a> &raquo; <span>Menu</span></div>                                </div> END bread_crumb-->
                <div class="row marg-top-30" id="position1">
                    <div id="tz-product-1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                   
                        <div id="tz-position-1" class="col-sm-3 column left-cat-product">
                            <div class="tz-module module " id="Mod145">
                                <div class="module-inner">

                                </div>
                            </div>
                        </div>
                        <div id="tz-position-2" class="col-sm-7 column">
                            <div class="tz-module module " id="Mod145">
                                <div class="module-inner">
                                    <div class="module-ct">

                                        <div class="col-lg-12">
                                            <div class="panel panel-default contactus">
                                                <div class="panel-heading clearfix">
                                                    <h3 class="panel-title">Reservation</h3>
                                                </div>

                                                <div class="panel-body">

                                                    <form class="form" id="reservation-form" action="/site/reservation" method="post">

                                                        <div class="form-group required">
                                                            <label class="control-label required" for="ReservationForm_name">Name <span class="required">*</span></label>                    <input maxlength="60" class="form-control" name="ReservationForm[name]" id="ReservationForm_name" type="text">                    <div class="errorMessage" id="ReservationForm_name_em_" style="display:none"></div>                </div>

                                                        <div class="form-group required">
                                                            <label class="control-label required" for="ReservationForm_email">Email <span class="required">*</span></label>                    <input class="form-control" name="ReservationForm[email]" id="ReservationForm_email" type="text">                    <div class="errorMessage" id="ReservationForm_email_em_" style="display:none"></div>                </div>

                                                        <div class="form-group required">
                                                            <label class="control-label required" for="ReservationForm_phone">Phone <span class="required">*</span></label>                    <input class="form-control" name="ReservationForm[phone]" id="ReservationForm_phone" type="text">                    <div class="errorMessage" id="ReservationForm_phone_em_" style="display:none"></div>                </div>

                                                        <div class="form-group required">
                                                            <label class="control-label required" for="ReservationForm_number_of_person">Number Of Person <span class="required">*</span></label>                    <input maxlength="28" class="form-control" name="ReservationForm[number_of_person]" id="ReservationForm_number_of_person" type="text">                    <div class="errorMessage" id="ReservationForm_number_of_person_em_" style="display:none"></div>                </div>

                                                        <div class="form-group required">
                                                            <label class="control-label required" for="ReservationForm_reservation_date">Reservation Date <span class="required">*</span></label>                    <input maxlength="28" class="j_date2 form-control" readonly="readonly" name="ReservationForm[reservation_date]" id="ReservationForm_reservation_date" type="text">                    <div class="errorMessage" id="ReservationForm_reservation_date_em_" style="display:none"></div>                </div>

                                                        <div class="form-group required">
                                                            <label class="control-label required" for="ReservationForm_reservation_time">Reservation Time <span class="required">*</span></label>                    <input maxlength="28" class="timepick form-control" readonly="readonly" name="ReservationForm[reservation_time]" id="ReservationForm_reservation_time" type="text">                    <div class="errorMessage" id="ReservationForm_reservation_time_em_" style="display:none"></div>                </div>

                                                        <div class="form-group required">
                                                            <label class="control-label" for="ReservationForm_message">Message</label>                    <textarea rows="6" cols="50" class="form-control" name="ReservationForm[message]" id="ReservationForm_message"></textarea>                    <div class="errorMessage" id="ReservationForm_message_em_" style="display:none"></div>                </div>

                                                        <div class="form-group required">
                                                            <label class="control-label" for="ReservationForm_verifyCode">Verification Code</label>                        <div>
                                                                <img id="yw0" src="captcha.png?v=58f26b5af2843" alt="">                            <input class="form-control" name="ReservationForm[verifyCode]" id="ReservationForm_verifyCode" type="text">                        </div>
                                                            <div class="errorMessage" id="ReservationForm_verifyCode_em_" style="display:none"></div>                    </div>

                                                        <div class="form-group">
                                                            <input class="btn_submit btn btn-info" type="submit" name="yt0" value="Submit">                </div>

                                                    </form>
                                                </div><!-- form -->


                                            </div>
                                        </div>            </div>
                                </div> 
                            </div> <!--- main_column3_content --->
                        </div> <!--- main_column3_content --->

                    </div>
                </div>
            </div>
        </section>

         <footer id="footer">
<?php include'../include/footer.php' ?>
        </footer>
        <!--********************************************
           END MODE OF PAYMENT
        ********************************************-->
        <div id="product-view-dialog">
            <div id="product-view"></div>
        </div><div id="searchName" class="hidden"></div>
        <script src="..\js\lib\jquery.bxslider.js" type="text/javascript"></script>


        <script type="text/javascript">
                        var ajax_url = '/store/ajax';
                        var sites_url = '';
                        var js_lang = {"WishList": "WishList", "RMitem": "Remove this item", "InvalidQuantity": "Invalid Quantity", "cookingRef": "Please select your cooking Preference", "itemSize": "Please Select item variant", "cartEmpty": "Your cart is empty", "areYouSure": "Are you sure want to delete", "wishistEmpty": "Your Wishlist is empty", "rmItemWishList": "Remove this item in your wishlist?", "addToCart": "Add to cart", "processing": "processing", "errorMsg1": "ERROR: Something went wrong.", "addRecentOrder": "Add your recent order to cart", "loginOk": "Login Successful.", "minOrderMsg": "Sorry the minimum order amount is", "voucherCodeRequired": "Invalid Discount Code", "removeVoucher": "Are you sure want to delete?", "multiError": "Sorry but you can only select ", "Hour": "Hour", "Minute": "Minute"};
                        var myLanguage = {"requiredFields": "You have not answered all required fields", "groupCheckedTooFewStart": "Please choose at least", "badEmail": "You have not given a correct e-mail address"};
        </script>
        <script src="..\assets\vendor\JQV\form-validator\jquery.form-validator.min.js" type="text/javascript"></script>
        <script src="..\js\lib\bootstrap.min.js" type="text/javascript"></script>
        <!--<script src="/js/lib/bootstrap-datepicker.js" type="text/javascript"></script>-->
        <script src="..\js\lib\off-canvas.min.js" type="text/javascript"></script>
        <script src="..\js\lib\menu.js" type="text/javascript"></script>
        <!--<script src="/js/lib/jquery.datetimepicker.min.js" type="text/javascript"></script>-->
        <script src="..\assets\vendor\alert\jquery.alerts.js" type="text/javascript"></script>
        <script src="..\assets\vendor\directional\modernizr.custom.97074.js"></script>
        <script src="..\js\custom\back.to.top.js" type="text/javascript"></script>
        <script src="..\assets\js\sites.js" type="text/javascript"></script>
        <script src="..\assets\vendor\jquery.ui.timepicker.0.3.3.js" type="text/javascript"></script>
        <!--<script src="/js/lib/jquery.colorbox-min.js" type="text/javascript"></script>-->



        <div id="fb-root"></div>
       <!-- <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=43266555693123";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>-->

<!--<script>
window.fbAsyncInit = function() {
FB.init({
appId      : '432665556931230',
xfbml      : true,
version    : 'v2.5'
});
};

(function(d, s, id){
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) {return;}
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>-->



                                                                                                                                                                                                        <!--<script src="/js/lib/jquery-ui.min.js"></script>-->
        <script src="..\js\custom\bs_leftnavi.js" type="text/javascript"></script>
        <script src="..\js\custom\custom_shop.js" type="text/javascript"></script>

        <script type="text/javascript" language="javascript" src="..\js\lib\jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="..\js\lib\dataTables.bootstrap.js"></script>

        <!--UIKIT-->
        <script src="..\assets\vendor\uikit\js\uikit.js"></script>
        <script src="..\assets\vendor\uikit\js\addons\notify.min.js"></script>
        <!--<script src="/assets/vendor/uikit/js/addons/sticky.min.js"></script>-->
        <!--UIKIT-->

        <!--NICE SCROLL-->
        <!--<script src="/assets/vendor/jquery.nicescroll.min.js"></script>-->
        <!--NICE SCROLL-->

        <!--DIRECTIONAL EFFECT-->
        <!--<script src="/assets/vendor/directional/jquery.hoverdir.js"></script>-->
        <!--END DIRECTIONAL EFFECT-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--<script src="/assets/vendor/jquery.printElement.min.js"></script>-->
        <script src="..\assets\vendor\image.preview.js"></script>

        <script src="..\assets\vendor\fancybox\source\jquery.fancybox.js"></script>
        <script src="..\assets\vendor\jquery.printElement.min.js"></script>
        <div id="fb-root"></div>

        <script type="text/javascript" src="..\assets\32310b71\jui\js\jquery-ui.min.js"></script>
        <script type="text/javascript">
                            /*<![CDATA[*/
                            jQuery(function($) {
                            jQuery('#yw0').after("<a id=\"yw0_button\" href=\"\/site\/captcha?refresh=1\">Get a new code<\/a>");
                                    jQuery('#yw0_button').live('click', function(){
                            jQuery.ajax({
                            url: "\/site\/captcha?refresh=1",
                                    dataType: 'json',
                                    cache: false,
                                    success: function(data) {
                                    jQuery('#yw0').attr('src', data['url']);
                                            jQuery('body').data('captcha.hash', [data['hash1'], data['hash2']]);
                                    }
                            });
                                    return false;
                                    });
                                    $('#reservation-form').yiiactiveform({'validateOnSubmit':true, 'attributes':[{'id':'ReservationForm_name', 'inputID':'ReservationForm_name', 'errorID':'ReservationForm_name_em_', 'model':'ReservationForm', 'name':'name', 'enableAjaxValidation':false, 'clientValidation':function(value, messages, attribute) {

                            if ($.trim(value) == '') {
                            messages.push("Name cannot be blank.");
                                    }

                            }}, {'id':'ReservationForm_email', 'inputID':'ReservationForm_email', 'errorID':'ReservationForm_email_em_', 'model':'ReservationForm', 'name':'email', 'enableAjaxValidation':false, 'clientValidation':function(value, messages, attribute) {

                            if ($.trim(value) == '') {
                            messages.push("Email cannot be blank.");
                                    }


                            if ($.trim(value) != '' && !value.match(/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/)) {
                            messages.push("Email is not a valid email address.");
                                    }

                            }}, {'id':'ReservationForm_phone', 'inputID':'ReservationForm_phone', 'errorID':'ReservationForm_phone_em_', 'model':'ReservationForm', 'name':'phone', 'enableAjaxValidation':false, 'clientValidation':function(value, messages, attribute) {

                            if ($.trim(value) == '') {
                            messages.push("Phone cannot be blank.");
                                    }

                            }}, {'id':'ReservationForm_number_of_person', 'inputID':'ReservationForm_number_of_person', 'errorID':'ReservationForm_number_of_person_em_', 'model':'ReservationForm', 'name':'number_of_person', 'enableAjaxValidation':false, 'clientValidation':function(value, messages, attribute) {

                            if ($.trim(value) == '') {
                            messages.push("Number Of Person cannot be blank.");
                                    }

                            }}, {'id':'ReservationForm_reservation_date', 'inputID':'ReservationForm_reservation_date', 'errorID':'ReservationForm_reservation_date_em_', 'model':'ReservationForm', 'name':'reservation_date', 'enableAjaxValidation':false, 'clientValidation':function(value, messages, attribute) {

                            if ($.trim(value) == '') {
                            messages.push("Reservation Date cannot be blank.");
                                    }

                            }}, {'id':'ReservationForm_reservation_time', 'inputID':'ReservationForm_reservation_time', 'errorID':'ReservationForm_reservation_time_em_', 'model':'ReservationForm', 'name':'reservation_time', 'enableAjaxValidation':false, 'clientValidation':function(value, messages, attribute) {

                            if ($.trim(value) == '') {
                            messages.push("Reservation Time cannot be blank.");
                                    }

                            }}, {'id':'ReservationForm_message', 'inputID':'ReservationForm_message', 'errorID':'ReservationForm_message_em_', 'model':'ReservationForm', 'name':'message', 'enableAjaxValidation':false, 'clientValidation':function(value, messages, attribute) {

                            if ($.trim(value) != '') {

                            if (value.length > 300) {
                            messages.push("Message is too long (maximum is 300 characters).");
                                    }

                            }

                            }}, {'id':'ReservationForm_verifyCode', 'inputID':'ReservationForm_verifyCode', 'errorID':'ReservationForm_verifyCode_em_', 'model':'ReservationForm', 'name':'verifyCode', 'enableAjaxValidation':false, 'clientValidation':function(value, messages, attribute) {

                            var hash = $('body').data('captcha.hash');
                                    if (hash == null)
                                    hash = 652;
                                    else
                                    hash = hash[1];
                                    for (var i = value.length - 1, h = 0; i >= 0; --i) h += value.toLowerCase().charCodeAt(i);
                                    if (h != hash) {
                            messages.push("The verification code is incorrect.");
                                    }

                            }}]});
                                    jQuery('#product-view-dialog').dialog({'title':'Product Display', 'autoOpen':false, 'modal':true, 'width':500, 'responsive':true, 'maxWidth':600, 'height':'auto', 'fluid':true});
                                    });
                                    /*]]>*/
        </script>
    </body>
</html>