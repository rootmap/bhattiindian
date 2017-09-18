<?php 
    $site_basic_info = $obj->FlyQuery("select * from site_basic_info order by id desc limit 1");
    $color = $obj->FlyQuery("SELECT * FROM color ORDER BY id DESC");
?>
<style type="text/css">
    
.bottom-level,
.home .sticky .bottom-level {
    background-color: <?= $color[0]->header; ?>;
}
</style>
            <div id="top-bar" class="top-level">
                <div class="center">
                    <div class="social">
                        <a class="fa fa-facebook" href="<?= $site_basic_info[0]->facebook_link;?>" target="blank"></a>
                        <a class="fa fa-twitter" href="<?= $site_basic_info[0]->twitter_link;?>" target="blank"></a>
                        <a class="fa fa-tripadvisor" href="<?= $site_basic_info[0]->tripadvisor_link;?>" target="blank"></a>
                        <a class="fa fa-yelp" href="<?= $site_basic_info[0]->yelp_link;?>" target="blank"></a>
                    </div>				
                    <ul id="menu-top-nav" class="additional-links">
                        <!--<li id="menu-item-240" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-240"><a href="my-account.php">My Account</a></li>-->
                        <!-- <li id="menu-item-241" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-241"><a href="shop.php">Delivery</a></li> -->
                        <li id="menu-item-242" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-242"><a href="contact-us.php">Contact Us</a></li>
                    </ul>	
                    <ul class="header-info">
                        <li><i class="fa fa-map-marker"></i><?php echo html_entity_decode($site_basic_info[0]->address);?></li>					
                        <li><i class="fa fa-phone"></i><?php echo $site_basic_info[0]->phone_number; ?></li>
                    </ul>
                </div>
            </div>
            <div class="bottom-level">
                <div class="center clearfix">
                    <div class="logo">
                        <div class="text-logo">
                            <a href="index.php">
                                <!-- <p>Restaurant</p>					
                                <h2 class="title">Cristiano</h2> -->
                                <img src="cms-admin/upload/<?php echo $site_basic_info[0]->photo; ?>">
                                <!-- <img src="LOGO1.png"> -->
                            </a>
                        </div>
                    </div>

                    <span class="icon-menu fa fa-bars"></span>
                    <nav id="nav">
                        <!-- <div id="cart">
                            <a class="cart-contents" href="cart.php">
                                <i class="fa fa-shopping-bag"></i>
                                <span class="count">0</span>
                            </a>
                            <div class="widget woocommerce widget_shopping_cart"><div class="widget_shopping_cart_content"></div></div>				
                        </div> -->

                        <ul id="menu-navigation" class="primary-menu">
                        <li id="menu-item-42" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-41 current_page_item menu-item-42"><a href="index.php">Home</a></li>
                           <?php
                                $category = $obj->FlyQuery("SELECT * FROM `category` WHERE `is_active`=1 order by priority asc");
                                if(!empty($category)){
                                    foreach ($category as $cat):
                                        $category_id= $cat->id;
                                    $sub_category = $obj->FlyQuery("SELECT * FROM `sub_category` WHERE `category_id`='".$category_id."' ORDER BY priority ASC");
                                    
                                    if(!empty($sub_category)){
                                        $dd= 'class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-21"';
                                    }else{
                                        $dd= 'class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"';
                                    }
                                    if(trim($cat->name)=="Menu"){
                                        $page = "our-menu.php?filtersMenu=" . $cat->id;
                                    }elseif ($cat->name=="Gallery"){
                                        $page = "gallery.php?filters=" . $cat->id;
                                    }elseif ($cat->name=="Event"){
                                        $page = "blog.php?filters=" . $cat->id;
                                    }elseif ($cat->name=="Menu 2"){
                                        $page = "#=" . $cat->id;
                                    }elseif ($cat->name=="Reservation"){
                                        $page = "reservationn.php?filters=" . $cat->id;
                                    }elseif ($cat->name=="T & C"){
                                        $page = "faq.php?filters=" . $cat->id;
                                    }else{
                                        $page = "extra_page.php?filters=" . $cat->id;
                                    }
                            
                            if($obj->filename()=="our-menu.php")
                            {
                                /* submenu data start*/
                                ?>
                                <li id="menu-item-21" <?php echo $dd; ?> ><a href="<?php echo $page; ?>"><?php echo $cat->name;?></a>

                                    <ul class="sub-menu">
                                        <?php
                                                    // print_r($sub_category);
                                                    // exit();
                                            if(!empty($sub_category)){
                                                //print_r($sub_category);
                                                foreach ($sub_category as $sub):

                                                $active = $sub->is_active;
                                                if($active==1){
                                                        if($sub->name=="Open Table Reservation")
                                                        {
                                                            $page_sub = "open-table-reservation.php?filters=" . $sub->id;
                                                        }
                                                        elseif ($sub->page_link=='our menu')
                                                        {
                                                            $page_sub = "#menubar". $sub->id;
                                                        }
                                                        elseif ($sub->page_link=='menu')
                                                        {
                                                            $page_sub = "menu2.php?filters=" . $sub->id;
                                                        }
                                                        ?>
                                                        <li id="menu-item-156" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-156"><a href="<?= $page_sub;?>"><?php echo $sub->name; ?></a></li>
                                                        <?php
                                                }
                                                
                                                endforeach;
                                    }

                                ?>
                                    </ul>
                                </li>
                                <?php
                                /* submenu data end*/
                            }
                            else
                            {

                            /* submenu data start*/
                            ?>
                            <li id="menu-item-21" <?php echo $dd; ?> ><a href="<?php echo $page; ?>"><?php echo $cat->name;?></a>

                                <ul class="sub-menu">
                                    <?php
                                        
                                        if(!empty($sub_category)){
                                            foreach ($sub_category as $sub_cat):
                                                $active = $sub_cat->is_active;
                                        if($active==1){
                                                if($sub_cat->name=="Open Table Reservation"){
                                                    $page = "open-table-reservation.php?filters=" . $sub_cat->id;
                                                }
                                                elseif ($sub_cat->page_link=='our menu'){
                                                    $page = "our-menu.php?filtersMenu=" . $cat->id."&filters=".$sub_cat->id;
                                                }elseif ($sub_cat->page_link=='menu'){
                                                    $page = "menu2.php?filters=" . $sub_cat->id;
                                                }
                                    ?>
                                    <li id="menu-item-156" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-156"><a href="<?= $page;?>"><?php echo $sub_cat->name; ?></a></li>
                                    <?php
                                }
                                endforeach;
                                }

                            ?>
                                </ul>
                            </li>
                            <?php
                            /* submenu data end*/
                            }

                            
                                endforeach;
                                }
                            ?>
                            <li id="menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-36"><a href="contact-us.php">Contact Us</a></li>
                        </ul>				
                    </nav>
                </div>
            </div>
            <div class="helper"></div>	
            <?php
    $page = $obj->filename();
    $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

    //echo $page;

    @$gfurl=$_GET['filters'];
?>
<script>
    jQuery(document).ready(function(jQuery) {
        jQuery("li a[href='<?php echo $page; ?>']").parent("li").attr("class", "current-menu-item");
        jQuery("li a[href='<?php echo $page; ?>?filters=<?=$gfurl?>']").parent("li").attr("class", "current-menu-item");
        //jQuery("li a[href='<?php echo $page; ?>?filtersMenu=<?=$gfurl?>']").parent("li").attr("class", "current-menu-item");
        //var kd=jQuery("li a[href='?filtersMenu=<?=$gfurl?>']").parent("ul").html();
        //console.log(kd);

    });
</script>
