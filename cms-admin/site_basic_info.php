<?php
include("class/auth.php");
include("plugin/plugin.php");
$plugin = new cmsPlugin();
$table = "site_basic_info";
?>
<?php
if (isset($_POST['create'])) {
    extract($_POST);
    if (!empty($site_name) && !empty($_FILES['photo']['name']) && !empty($address) && !empty($phone_number) && !empty($restaurant_open_1) && !empty($restaurant_open_2) && !empty($facebook_link) && !empty($twitter_link) && !empty($tripadvisor_link) && !empty($yelp_link)) {
        include('class/uploadImage_Class.php');
        $imgclassget = new image_class();
        $photo = $imgclassget->upload_fiximage("upload", "photo", "photo_upload_" . $table_name . "_" . time());
        $insert = array('site_name' => $site_name, 'photo' => $photo, 'address' => $address, 'phone_number' => $phone_number, 
            'restaurant_open_1' => $restaurant_open_1, 'restaurant_open_2' => $restaurant_open_2, 
            'facebook_link' => $facebook_link, 'twitter_link' => $twitter_link, 
            'tripadvisor_link' => $tripadvisor_link, 'yelp_link' => $yelp_link,'map' => $map, 'date' => date('Y-m-d'), 'status' => 1);
        if ($obj->insert($table, $insert) == 1) {
            $plugin->Success("Successfully Saved", $obj->filename());
        } else {
            $plugin->Error("Failed", $obj->filename());
        }
    } else {
        $plugin->Error("Fields is Empty", $obj->filename());
    }
} elseif (isset($_POST['update'])) {
    extract($_POST);
    if (!empty($site_name) && !empty($address) && !empty($phone_number) && !empty($restaurant_open_1) && !empty($restaurant_open_2) && !empty($facebook_link) && !empty($twitter_link) && !empty($tripadvisor_link) && !empty($yelp_link)) {
        $updatearray = array("id" => $id);
        if (!empty($_FILES['photo']['name'])) {
            include('class/uploadImage_Class.php');
            $imgclassget = new image_class();
            $photo_1 = $imgclassget->upload_fiximage("upload", "photo", "photo_upload_" . $table_name . "_" . time());
            $photo = $photo_1;
            @unlink("upload/" . $ex_photo);
        } else {
            $photo = $ex_photo;
        }$upd2 = array('site_name' => $site_name, 'photo' => $photo, 'address' => $address, 'phone_number' => $phone_number, 'restaurant_open_1' => $restaurant_open_1, 'restaurant_open_2' => $restaurant_open_2, 'facebook_link' => $facebook_link, 'twitter_link' => $twitter_link, 'tripadvisor_link' => $tripadvisor_link, 'yelp_link' => $yelp_link,'map' => $map, 'date' => date('Y-m-d'), 'status' => 1);
        $update_merge_array = array_merge($updatearray, $upd2);
        if ($obj->update($table, $update_merge_array) == 1) {
            $plugin->Success("Successfully Updated", $obj->filename());
        } else {
            $plugin->Error("Failed", $obj->filename());
        }
    }
} elseif (isset($_GET['del']) == "delete") {
    $delarray = array("id" => $_GET['id']);
    $photolink = $obj->SelectAllByVal($table, 'id', $_GET['id'], 'photo');
    @unlink("upload/" . $photolink);
    if ($obj->delete($table, $delarray) == 1) {
        $plugin->Success("Successfully Delete", $obj->filename());
    } else {
        $plugin->Error("Failed", $obj->filename());
    }
}
?><!doctype html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
    <head>
        <?php
        echo $plugin->softwareTitle();
        echo $plugin->TableCss();
        echo $plugin->KendoCss();
        echo $plugin->FileUploadCss();
        ?>
    </head>
    <body class="">
        <?php include('include/topnav.php');
        include('include/mainnav.php');
        ?>





        <div id="content">
            <h1 class="content-heading bg-white border-bottom">Site Basic Info</h1>
            <div class="innerAll bg-white border-bottom">
                <ul class="menubar">
                    <li class="active"><a href="#">Create New Site Basic Info</a></li>
                    <li><a href="site_basic_info_data.php">Site Basic Info List</a></li>
                </ul>
            </div>
            <div class="innerAll spacing-x2">
<?php echo $plugin->ShowMsg(); ?>
                <!-- Widget -->

                <!-- Widget -->
                <div class="widget widget-inverse" >
                    <?php
                    if (isset($_GET['edit'])) {
                        ?>
                        <!-- Widget heading -->
                        <div class="widget-head">
                            <h4 class="heading">Update/Change - Site Basic Info</h4>
                        </div>
                        <!-- // Widget heading END -->

                        <div class="widget-body"><form enctype='multipart/form-data' class="form-horizontal" method="post" action="" role="form">
                                <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>"><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Site Name </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='site_name' value='<?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "site_name"); ?>' placeholder='Site Name' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Photo </label>

                                    <div class='col-sm-3'>
                                            <!--<input type='file' id='id-input-file-1' name='photo' placeholder='Photo' class='form-control' />-->
                                        <?php
                                        $photo = $obj->SelectAllByVal($table, "id", $_GET['edit'], "photo");
                                        echo $plugin->FileUploadBox("1", $photo, "photo");
                                        ?>
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Address </label>

                                    <div class='col-sm-9'>
                                        <textarea id='editor' name='address' placeholder='Address' class='form-control'><?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "address"); ?></textarea>
                                        <script>
                                            $(document).ready(function () {
                                                // create Editor from textarea HTML element with default set of tools
                                                $("#editor").kendoEditor({resizable: {
                                                        content: true,
                                                        toolbar: true
                                                    }});
                                            });
                                        </script>
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Phone Number </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='phone_number' value='<?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "phone_number"); ?>' placeholder='Phone Number' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Restaurant Open 1 </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='restaurant_open_1' value='<?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "restaurant_open_1"); ?>' placeholder='Restaurant Open 1' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Restaurant Open 2 </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='restaurant_open_2' value='<?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "restaurant_open_2"); ?>' placeholder='Restaurant Open 2' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Facebook Link </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='facebook_link' value='<?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "facebook_link"); ?>' placeholder='Facebook Link' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Twitter Link </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='twitter_link' value='<?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "twitter_link"); ?>' placeholder='Twitter Link' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Tripadvisor Link </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='tripadvisor_link' value='<?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "tripadvisor_link"); ?>' placeholder='Tripadvisor Link' class='form-control' />
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Yelp Link </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='yelp_link' value='<?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "yelp_link"); ?>' placeholder='Yelp Link' class='form-control' />
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Map </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='map' value='<?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "map"); ?>' placeholder='Map' class='form-control' />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button  onclick="javascript:return confirm('Do You Want change/update These Record?')"  type="submit" name="update" class="btn btn-primary">Save Change</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
<?php } else { ?>
                        <!-- Widget heading -->
                        <div class="widget-head">
                            <h4 class="heading">Create New Site Basic Info</h4>
                        </div>
                        <!-- // Widget heading END -->

                        <div class="widget-body"><form enctype='multipart/form-data' class="form-horizontal" method="post" action="" role="form"><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Site Name </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='site_name' placeholder='Site Name' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Photo </label>

                                    <div class='col-sm-3'>
                                            <!--<input type='file' id='id-input-file-1' name='photo' placeholder='Photo' class='form-control' />-->
                                        <?php
                                        echo $plugin->FileUploadBox("0", "", "photo");
                                        ?>
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Address </label>

                                    <div class='col-sm-9'>
                                        <textarea id='editor' name='address' placeholder='Address' class='form-control'></textarea>
                                        <script>
                                            $(document).ready(function () {
                                                // create Editor from textarea HTML element with default set of tools
                                                $("#editor").kendoEditor({resizable: {
                                                        content: true,
                                                        toolbar: true
                                                    }});
                                            });
                                        </script>
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Phone Number </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='phone_number' placeholder='Phone Number' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Restaurant Open 1 </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='restaurant_open_1' placeholder='Restaurant Open 1' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Restaurant Open 2 </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='restaurant_open_2' placeholder='Restaurant Open 2' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Facebook Link </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='facebook_link' placeholder='Facebook Link' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Twitter Link </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='twitter_link' placeholder='Twitter Link' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Tripadvisor Link </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='tripadvisor_link' placeholder='Tripadvisor Link' class='form-control' />
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Yelp Link </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='yelp_link' placeholder='Yelp Link' class='form-control' />
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Map </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='map' placeholder='Map' class='form-control' />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit"   onclick="javascript:return confirm('Do You Want Create/save These Record?')"  name="create" class="btn btn-info">Save</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
<?php } ?>
                </div>
                <!-- // Widget END -->




                <!-- // Widget END -->
            </div>
        </div>
        <!-- // Content END -->

        <div class="clearfix"></div>
        <!-- // Sidebar menu & content wrapper END -->
<?php include('include/footer.php'); ?>
        <!-- // Footer END -->
    </div>
    <!-- // Main Container Fluid END -->
    <!-- Global -->

    <?php
    echo $plugin->TableJs();
    echo $plugin->KendoJS();
    echo $plugin->FileUploadJS();
    ?>
</body>
</html>