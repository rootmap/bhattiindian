<div id="menu" class="hidden-print hidden-xs">
    <div class="sidebar sidebar-inverse">
        <div class="sidebarMenuWrapper" style="top:0px !important;">
            <ul class="list-unstyled">
                <li><a href="index.php"><i class=" icon-projector-screen-line"></i><span>Dashboard</span></a></li>
<!--                <li class="hasSubmenu">
                    <a href="#" data-target="#menu-style" data-toggle="collapse"><i class="icon-compose"></i><span>Menu &amp; Navbar</span></a>
                    <ul class="collapse" id="menu-style">
                        <li><a href=""><span class="pull-right badge badge-primary"><i class="fa fa-check"></i></span>Sidebar Menu Dark</a></li>
                        <li><a href="">Sidebar Menu Light</a></li>
                        <li><a href="">Top Menu Dark</a></li>
                        <li><a href="">Top Menu Light</a></li>
                        <li><a href=""><span class="pull-right badge badge-primary"><i class="fa fa-check"></i></span>Top Menu Primary</a></li>
                    </ul>
                </li>-->

                 <!-- <li><a href="setting.php"><i class="icon-cogs"></i><span> Setting</span></a></li>  -->

                <?php
                // $sqlpage=$obj->FlyQuery("SELECT * FROM page_info ORDER BY page_name ASC");
                // if (!empty($sqlpage))
                //     foreach ($sqlpage as $page):
                //         ?>
                         <!-- <li><a href="<?php //echo $page->page_name; ?>"><i class="fa fa-folder-o"></i><span> <?php //echo $page->menu_name; ?></span></a></li> -->
                                     <?php
                //                 endforeach;
                            ?>

                <li><a href="seo_.php"><i class="icon-settings-wheel-fill"></i><span>Seo Settings</span></a></li>
                <li><a href="site_basic_info.php"><i class="icon-settings-wheel-fill"></i><span>Site Settings</span></a></li>
                <li><a href="extra_page.php"><i class="fa fa-check-square-o"></i><span>Other Page Content</span></a></li>
                <li class="hasSubmenu">
                    <a href="#" data-target="#Menu" data-toggle="collapse"><i class="icon-compose"></i><span>Add Menu </span></a>
                    <ul class="collapse " id="Menu">
                        <li><a href="category.php"><i class="fa fa-check-square-o"></i><span>Add Category</span></a></li>
                        <li><a href="sub_category.php"><i class="fa fa-check-square-o"></i><span>Add Sub Category</span></a></li>
                        <li><a href="sub_category_menu.php"><i class="fa fa-check-square-o"></i><span>Add Sub Category Items</span></a></li>
                    </ul>
                </li>
                <!-- <li><a href="product.php"><i class=" fa fa-check-square-o"></i><span>Add New Products</span></a></li> -->
                <li class="hasSubmenu">
                    <a href="#" data-target="#product" data-toggle="collapse"><i class="icon-compose"></i><span>Product</span></a>
                    <ul class="collapse " id="product">
                        <li><a href="product.php"><i class="fa fa-check-square-o"></i><span>Add New Product</span></a></li>
                        <li><a href="product_data.php"><i class="fa fa-check-square-o"></i><span>Product List</span></a></li>
                       
                    </ul>
                </li>
                <li><a href="slider.php"><i class=" fa fa-check-square-o"></i><span>Add Slider Photo</span></a></li>
                <li class="hasSubmenu">
                    <a href="#" data-target="#reservation" data-toggle="collapse"><i class="icon-compose"></i><span>Add Reservation </span></a>
                    <ul class="collapse " id="reservation">
                        <li><a href="reservation.php"><i class="fa fa-check-square-o"></i><span>Add New Reservation</span></a></li>
                        <li><a href="reservation_data.php"><i class="fa fa-check-square-o"></i><span>Reservation List</span></a></li>
                    </ul>
                </li>
                <li><a href="gallery.php"><i class=" fa fa-check-square-o"></i><span>Add Gallery Photo</span></a></li>
                <!-- <li><a href="blog.php"><i class=" fa fa-check-square-o"></i><span>Add Blog Data</span></a></li> -->
                <li class="hasSubmenu">
                    <a href="#" data-target="#promo" data-toggle="collapse"><i class="icon-compose"></i><span>Home Page </span></a>
                    <ul class="collapse " id="promo">
                        <li><a href="welcome_title.php"><i class="fa fa-check-square-o"></i><span>Add Welcome Title</span></a></li>
                        <li><a href="welcome_content.php"><i class="fa fa-check-square-o"></i><span>Add Welcome Content</span></a></li>
                        <li><a href="promo_action.php"><i class="fa fa-check-square-o"></i><span>Add Promo Action data</span></a></li>
                        <li><a href="chef_recommended.php"><i class="fa fa-check-square-o"></i><span>Add Chef Recommended Name</span></a></li>
                        <li><a href="chef_recommended_content.php"><i class="fa fa-check-square-o"></i><span>Add Chef Recommended Product</span></a></li>
                    </ul>
                </li>
                <li><a href="blog.php"><i class=" fa fa-check-square-o"></i><span>Add Event Data</span></a></li>
                <li><a href="offer.php"><i class=" fa fa-check-square-o"></i><span>Add Today's Offer</span></a></li>
                <li><a href="page_cover_photo.php"><i class=" fa fa-check-square-o"></i><span>Add Page Cover Photo</span></a></li>
                <li><a href="faq.php"><i class=" fa fa-check-square-o"></i><span>Add Faq </span></a></li>
                <li><a href="team_and_condition.php"><i class=" fa fa-check-square-o"></i><span>Add Terms and Condition</span></a></li>
                
            </ul>
        </div>
    </div>
</div>