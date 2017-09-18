<?php
include './include/config.php';
$obj = new db_class();
?>

<!DOCTYPE html>
<html lang="en-gb">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="generator" content="Model Restaurant">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="HandheldFriendly" content="true">
        <meta name="apple-mobile-web-app-capable" content="YES">
<?php //$seo = $obj->SelectAll("seo_");?>
    <meta name='robots' content='noindex,follow'>
    <meta name="Description" content="<?= $seo[0]->meta_descriptions; ?>">
<meta name="Keywords" content="<?= $seo[0]->meta_keywords; ?>">
        <link rel="stylesheet" type="text/css" href="assets\32310b71\jui\css\base\jquery-ui.css">
<script type="text/javascript" src="assets\32310b71\jquery.min.js"></script>
<script type="text/javascript" src="assets\32310b71\jquery.yiiactiveform.js"></script>
<title>Reservation</title>

            <link rel="shortcut icon" href="/favicon.ico">
        <link type="text/css" href="css\lib\jquery.bxslider.css" rel="stylesheet">
        <link href="assets\vendor\alert\jquery.alerts.css" rel="stylesheet">
        <!--<link type="text/css" href="/css/lib/jquery-ui.min.css" rel="stylesheet" />-->
        <link type="text/css" href="css\lib\bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css\lib\dataTables.bootstrap.min.css">
        <!--<link type="text/css" href="/css/lib/datepicker.css" rel="stylesheet" />-->
        <link type="text/css" href="css\lib\font-awesome.min.css" rel="stylesheet">
        <link type="text/css" href="css\lib\template.css" rel="stylesheet">
        <link type="text/css" href="css\lib\off-canvas.css" rel="stylesheet">
        <link type="text/css" href="css\custom\style.css" rel="stylesheet">
        <link type="text/css" href="css\custom\custom.css" rel="stylesheet">
        <link type="text/css" href="css\custom\bs_leftnavi.css" rel="stylesheet">
        <!--<link type="text/css" href="/css/lib/colorbox.css" rel="stylesheet" />-->
        <link href="assets\css\shoppting-sites.css" rel="stylesheet">
        <!--START Google FOnts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans|Podkova|Rosario|Abel|PT+Sans|Source+Sans+Pro:400,600,300|Roboto' rel='stylesheet' type='text/css'>
        <!--END Google FOnts-->

        <!--UIKIT-->
        <link href="assets\vendor\uikit\css\uikit.almost-flat.min.css" rel="stylesheet">
        <link href="assets\vendor\uikit\css\addons\uikit.addons.min.css" rel="stylesheet">
        <link href="assets\vendor\uikit\css\addons\uikit.gradient.addons.min.css" rel="stylesheet">
        <!--UIKIT-->
        <link href="assets\vendor\fancybox\source\jquery.fancybox.css" rel="stylesheet">
        
                <!--<script src="/js/lib/jquery.min.js" type="text/javascript"></script>-->
        <script type="text/javascript" src="js\lib\jquery-migrate-1.0.0.js"></script>
        <!--old-->
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
        <style>

.err
{
	font-family : Verdana, Helvetica, sans-serif;
	font-size : 12px;
	color: red;
}
.heads-up {
  transform: translateY(-6rem);
  transform: translate3d(0,-6rem,0);
}
 @media only screen and (max-width: 768px){
   #header{position:fixed !important; top:0px;width: 100%}
 }
</style>
    </head>
    <body class="page-template-default page page-id-37">

        <header class="header-wrap header-v1">
<?php include'./include/header.php'; ?>
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

                                                    <form class="form" id="reservation-form" action="" method="post">
                                                        <?php //echo $plugin->ShowMsg(); ?>
                                                        <?php
                        //if "email" variable is filled out, send email
                          if (isset($_REQUEST['email']))  {
                          
                          //Email information   sayfur.imli@gmail.com
                          $admin_email = "shaiful1408@gmail.com";
                          $email = $_REQUEST['email'];
                          $subject = $_REQUEST['name'];
                          $comment = $_REQUEST['reservation_message'];
                          $phone = $_REQUEST['phone'];
                          $guest_number = $_REQUEST['guest_number'];
                          $reservation_date = $_REQUEST['reservation_date'];
                          $reservation_time = $_REQUEST['reservation_time'];
                          
                        $html='';
                        // $html='From: '.$email_from."\r\n";
                        $html .='Subject: '.$subject."\r\n";
                        $html .='Email: '.$email."\r\n";
                        $html .='Phone: '.$phone."\r\n";
                        $html .='Number of Person: '.$guest_number."\r\n";
                        $html .='Reservation Date: '.$reservation_date."\r\n";
                        $html .='Reservation Time: '.$reservation_time."\r\n";
                        $html .='Message: '.$comment."\r\n";

                          //send email
                          if(mail($admin_email, "$subject", $html, "From:" . $email))
                          {
                            echo "<h4 class='btn btn-success'>Your Booking order has been sent successfully. We will get back to you soon. Thank you</h4>";
                          }else{
                            echo "<h4 class='btn btn-warning'>Mail was not sent. Please try again later.</h4>";
                          }
                          
                          }
                        ?>
                                                        <div class="form-group required">
                                                            <label class="control-label required" for="ReservationForm_name">Name <span class="required">*</span></label>                    
                                                            <input maxlength="60" class="form-control" name="name" id="ReservationForm_name" type="text" required>                    
                                                            <div class="errorMessage" id="ReservationForm_name_em_" style="display:none"></div>                </div>

                                                        <div class="form-group required">
                                                            <label class="control-label required" for="ReservationForm_email">Email <span class="required">*</span></label>                    
                                                            <input class="form-control" name="email" id="ReservationForm_email" type="text" required>                    
                                                            <div class="errorMessage" id="ReservationForm_email_em_" style="display:none"></div>                </div>

                                                        <div class="form-group required">
                                                            <label class="control-label required" for="ReservationForm_phone">Phone <span class="required">*</span></label>                    
                                                            <input class="form-control" name="phone" id="ReservationForm_phone" type="text" required>                    
                                                            <div class="errorMessage" id="ReservationForm_phone_em_" style="display:none"></div>                </div>

                                                        <div class="form-group required">
                                                            <label class="control-label required" for="ReservationForm_number_of_person">Number Of Person <span class="required">*</span></label>                    
                                                            <!--<input maxlength="28" class="form-control" name="guest_number" id="ReservationForm_number_of_person" type="text">-->                    
                                                            <select id="number" name="guest_number" class="required" required>
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
                                                            <div class="errorMessage" id="ReservationForm_number_of_person_em_" style="display:none"></div>                </div>

                                                        <div class="form-group required">
                                                            <label class="control-label required" for="ReservationForm_reservation_date">Reservation Date <span class="required">*</span></label>                    
                                                            <input maxlength="28" class="j_date2 form-control" readonly="" name="reservation_date" id="ReservationForm_reservation_date" type="text" required>                    
                                                            <div class="errorMessage" id="ReservationForm_reservation_date_em_" style="display:none"></div>                </div>

                                                        <div class="form-group required">
                                                            <label class="control-label required" for="ReservationForm_reservation_time">Reservation Time <span class="required">*</span></label>                    
                                                            <input maxlength="28" class="timepick form-control" readonly="" name="reservation_time" id="ReservationForm_reservation_time" type="text" required>                    
                                                            <div class="errorMessage" id="ReservationForm_reservation_time_em_" style="display:none"></div>                </div>

                                                        <div class="form-group required">
                                                            <label class="control-label" for="ReservationForm_message">Message</label>                    
                                                            <textarea rows="6" cols="50" class="form-control" name="reservation_message" id="ReservationForm_message" required></textarea>                    
                                                            <div class="errorMessage" id="ReservationForm_message_em_" style="display:none"></div>                </div>

                                                        

                                                        <div class="form-group">
                                                            <input class="btn_submit btn btn-info" type="submit" name="create" value="Submit">                </div>

                                                    </form>
                                                </div>


                                            </div>
                                        </div>            </div>
                                </div> 
                            </div> 
                        </div> 

                    </div>
                </div>
            </div>
        </section>

         <footer id="footer">
<?php include'./include/footer.php' ?>
        </footer>

        <script src="js\lib\jquery.bxslider.js" type="text/javascript"></script>

    
    <script type="text/javascript">
        var ajax_url = '';
        var sites_url = '';
        var js_lang ={"WishList":"WishList","RMitem":"Remove this item","InvalidQuantity":"Invalid Quantity","cookingRef":"Please select your cooking Preference","itemSize":"Please Select item variant","cartEmpty":"Your cart is empty","areYouSure":"Are you sure want to delete","wishistEmpty":"Your Wishlist is empty","rmItemWishList":"Remove this item in your wishlist?","addToCart":"Add to cart","processing":"processing","errorMsg1":"ERROR: Something went wrong.","addRecentOrder":"Add your recent order to cart","loginOk":"Login Successful.","minOrderMsg":"Sorry the minimum order amount is","voucherCodeRequired":"Invalid Discount Code","removeVoucher":"Are you sure want to delete?","multiError":"Sorry but you can only select ","Hour":"Hour","Minute":"Minute"};
        var myLanguage ={"requiredFields":"You have not answered all required fields","groupCheckedTooFewStart":"Please choose at least","badEmail":"You have not given a correct e-mail address"};
    </script>
    <script src="assets\vendor\JQV\form-validator\jquery.form-validator.min.js" type="text/javascript"></script>
    <script src="js\lib\bootstrap.min.js" type="text/javascript"></script>
    <!--<script src="/js/lib/bootstrap-datepicker.js" type="text/javascript"></script>-->
    <script src="js\lib\off-canvas.min.js" type="text/javascript"></script>
    <script src="js\lib\menu.js" type="text/javascript"></script>
    <!--<script src="/js/lib/jquery.datetimepicker.min.js" type="text/javascript"></script>-->
    <script src="assets\vendor\alert\jquery.alerts.js" type="text/javascript"></script>
    <script src="assets\vendor\directional\modernizr.custom.97074.js"></script>
    <script src="js\custom\back.to.top.js" type="text/javascript"></script>
    <script src="assets\js\sites.js" type="text/javascript"></script>
    <script src="assets\vendor\jquery.ui.timepicker.0.3.3.js" type="text/javascript"></script> 
        <script src="js\custom\bs_leftnavi.js" type="text/javascript"></script>
        <script src="js\custom\custom_shop.js" type="text/javascript"></script>

        <script type="text/javascript" language="javascript" src="js\lib\jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="js\lib\dataTables.bootstrap.js"></script>

        <!--UIKIT-->
        <script src="assets\vendor\uikit\js\uikit.js"></script>
        <script src="assets\vendor\uikit\js\addons\notify.min.js"></script>                    
        <script src="assets\vendor\image.preview.js"></script>
        <script src="assets\vendor\fancybox\source\jquery.fancybox.js"></script>
        <script src="assets\vendor\jquery.printElement.min.js"></script>
        <div id="fb-root"></div>

            <script type="text/javascript" src="assets\32310b71\jui\js\jquery-ui.min.js"></script>

    </body>
</html>