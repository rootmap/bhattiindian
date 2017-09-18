<?php 
    $site_basic_info = $obj->FlyQuery("select * from site_basic_info order by id desc limit 1");
    $color = $obj->FlyQuery("SELECT * FROM color ORDER BY id DESC");
?>
<style type="text/css">
    #footer {
    text-align: center;
    background-color: <?= $color[0]->footer; ?>;
    color: #fff;
    clear: both;
}
</style>
<div class="like-table reset">
            <div class="widget widget_cristiano_contact">
                <h2 class="widgettitle">Contact Us</h2>
                <ul class="contact-info">
                    <li><?= html_entity_decode($site_basic_info[0]->address);?></li>
                    <li><?= $site_basic_info[0]->phone_number;?></li>
                    <li class="hours"><?= $site_basic_info[0]->restaurant_open_1;?></li>
                    <li class="hours"><?= $site_basic_info[0]->restaurant_open_2;?></li>
                </ul>
            </div>
            <div class="widget widget_cristiano_social">
                <h2 class="widgettitle">Follow Us</h2>
                <p>Join us on social networks</p>
                <div class="social">
                    <a class="fa fa-facebook" href="<?= $site_basic_info[0]->facebook_link;?>" target="blank"></a>
                    <a class="fa fa-twitter" href="<?= $site_basic_info[0]->twitter_link;?>" target="blank"></a>
                    <a class="fa fa-tripadvisor" href="<?= $site_basic_info[0]->tripadvisor_link;?>" target="blank"></a>
                    <a class="fa fa-yelp" href="<?= $site_basic_info[0]->yelp_link;?>" target="blank"></a>
                </div>
            </div>
        </div>
        <div id="bottom-bar">
            <div class="center">
                <p>&copy; <?= date("Y")?> <?= $site_basic_info[0]->site_name;?>. All rights reserved</p>
            </div>
        </div>