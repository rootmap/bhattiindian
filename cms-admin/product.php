<?php
include("class/auth.php");
include("plugin/plugin.php");
$plugin = new cmsPlugin();
$table = "product";
?>
<?php
if (isset($_POST['create'])) {
    extract($_POST);
    if (!empty($category_id) && !empty($sub_category_id) && !empty($name)  && !empty($new_price)) {
        if (!empty($_FILES['photo']['name'])) {
            include('class/uploadImage_Class.php');
        $imgclassget = new image_class();
        $photo = $imgclassget->upload_fiximage("upload", "photo", "photo_upload_" . $table_name . "_" . time());
        }
 else {
     $photo = '';
 }


 $sqlpr=$obj->FlyQuery("SELECT MAX(priority) as pr FROM `".$table."`");
        $pr=$sqlpr[0]->pr+1;

        $insert = array('category_id' => $category_id, 'sub_category_id' => $sub_category_id, 'sub_category_menu_id'=>$sub_category_menu_id, 'name' => $name, 'photo' => $photo, 'short_details' => $short_details, 'long_details' => $long_details, 'new_price' => $new_price, 'old_price' => $old_price, 'quantity' => $quantity,'priority'=>$pr, 'date' => date('Y-m-d'), 'status' => 1);



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
    if (!empty($category_id) && !empty($sub_category_id) && !empty($name) && !empty($new_price)) {
        $updatearray = array("id" => $id);
        if (!empty($_FILES['photo']['name'])) {
            include('class/uploadImage_Class.php');
            $imgclassget = new image_class();
            $photo_1 = $imgclassget->upload_fiximage("upload", "photo", "photo_upload_" . $table_name . "_" . time());
            $photo = $photo_1;
            @unlink("upload/" . $ex_photo);
        } else {
            $photo = $ex_photo;
        }$upd2 = array('category_id' => $category_id, 'sub_category_id' => $sub_category_id, 'sub_category_menu_id'=>$sub_category_menu_id,'name' => $name, 'photo' => $photo, 'short_details' => $short_details, 'long_details' => $long_details, 'new_price' => $new_price, 'old_price' => $old_price, 'quantity' => $quantity, 'date' => date('Y-m-d'), 'status' => 1);
        $update_merge_array = array_merge($updatearray, $upd2);
        if ($obj->update($table, $update_merge_array) == 1) {
            $plugin->Success("Successfully Updated", $obj->filename());
        } else {
            $plugin->Error("Failed", $obj->filename());
        }
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
        <?php
        include('include/topnav.php');
        include('include/mainnav.php');
        ?>





        <div id="content">
            <h1 class="content-heading bg-white border-bottom">Product</h1>
            <div class="innerAll bg-white border-bottom">
                <ul class="menubar">
                    <li class="active"><a href="#">Create New Product</a></li>
                    <li><a href="product_data.php">Product List</a></li>
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
                            <h4 class="heading">Update/Change - Product</h4>
                        </div>
                        <!-- // Widget heading END -->

                        <div class="widget-body"><form enctype='multipart/form-data' class="form-horizontal" method="post" action="" role="form">
                                <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>"><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Category ID </label>

                                    <div class='col-sm-6'>
                                            <!--<input type='text' id='form-field-1' name='category_id' placeholder='Category ID'  value='<?php //echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"category_id");     ?>'  class='form-control' />-->
                                        <select name='category_id' class='form-control' >
                                            <option>Select A Category Name</option>
                                            <?php
                                            $category_id = $obj->SelectAllByVal($table, "id", $_GET['edit'], "category_id");
                                            $category = $obj->SelectAll("category");
                                            if (!empty($category)) {
                                                foreach ($category as $cat):
                                                    ?>
                                                    <option <?php if ($category_id == $cat->id) { ?>selected="selected"<?php } ?> value="<?= $cat->id; ?>"><?= $cat->name; ?></option>
                                                    <?php
                                                endforeach;
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Sub Category ID </label>

                                    <div class='col-sm-6'>
                                            <!--<input type='text' id='form-field-1' name='sub_category_id' placeholder='Sub Category ID'  value='<?php //echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"sub_category_id");     ?>'  class='form-control' />-->
                                        <select name='sub_category_id' class='form-control' >
                                            <option>Select A Category Name</option>
                                            <?php
                                            $sub_category_id = $obj->SelectAllByVal($table, "id", $_GET['edit'], "sub_category_id");
                                            $sub_category = $obj->SelectAll("sub_category");
                                            if (!empty($sub_category)) {
                                                foreach ($sub_category as $sub_cat):
                                                    ?>
                                                    <option <?php if ($sub_category_id == $sub_cat->id) { ?>selected="selected"<?php } ?> value="<?= $sub_cat->id; ?>"><?= $sub_cat->name; ?></option>
                                                    <?php
                                                endforeach;
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Sub Category Menu Name </label>

                                    <div class='col-sm-6'>
                                            <!--<input type='text' id='form-field-1' name='sub_category_id' placeholder='Sub Category ID'  value='<?php //echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"sub_category_id");     ?>'  class='form-control' />-->
                                        <select name='sub_category_menu_id' class='form-control' >
                                            <option>Select A Category Name</option>
                                            <?php
                                            $sub_category_menu_id = $obj->SelectAllByVal($table, "id", $_GET['edit'], "sub_category_menu_id");
                                            $sub_category_menu = $obj->SelectAll("sub_category_menu");
                                            if (!empty($sub_category_menu)) {
                                                foreach ($sub_category_menu as $sub_catmenu):
                                                    ?>
                                                    <option <?php if ($sub_category_menu_id == $sub_catmenu->id) { ?>selected="selected"<?php } ?> value="<?= $sub_catmenu->id; ?>"><?= $sub_catmenu->name; ?></option>
                                                    <?php
                                                endforeach;
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Name </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='name' value='<?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "name"); ?>' placeholder='Name' class='form-control' />
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
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Short Details </label>

                                    <div class='col-sm-9'>
                                        <textarea id='editor' name='short_details' placeholder='Short Details' class='form-control'><?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "short_details"); ?></textarea>
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
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Long Details </label>

                                    <div class='col-sm-9'>
                                        <textarea id='editor1' name='long_details' placeholder='Long Details' class='form-control'><?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "long_details"); ?></textarea>
                                        <script>
                                            $(document).ready(function () {
                                                // create Editor from textarea HTML element with default set of tools
                                                $("#editor1").kendoEditor({resizable: {
                                                        content: true,
                                                        toolbar: true
                                                    }});
                                            });
                                        </script>
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> New Price </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='new_price' value='<?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "new_price"); ?>' placeholder='New Price' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Old Price </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='old_price' value='<?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "old_price"); ?>' placeholder='Old Price' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Quantity </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='quantity' value='<?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "quantity"); ?>' placeholder='Quantity' class='form-control' />
                                    </div>
                                </div><div class="form-group">
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
                            <h4 class="heading">Create New Product</h4>
                        </div>
                        <!-- // Widget heading END -->

                        <div class="widget-body"><form enctype='multipart/form-data' class="form-horizontal" method="post" action="" role="form"><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Category Name </label>

                                    <div class='col-sm-6'>
                                            <!--<input type='text' id='form-field-1' name='category_id' placeholder='Category ID' class='form-control' />-->
                                        <select name='category_id' id="category" class='form-control' >
                                            <option>Select A Category Name</option>
                                            <?php
                                            $category = $obj->SelectAll("category");
                                            if (!empty($category)) {
                                                foreach ($category as $cat):
                                                    ?>
                                                    <option value="<?= $cat->id; ?>"><?= $cat->name; ?></option>
                                                    <?php
                                                endforeach;
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Sub Category Name </label>

                                    <div class='col-sm-6'>
                                            <!--<input type='text' id='form-field-1' name='sub_category_id' placeholder='Sub Category ID' class='form-control' />-->
                                        <select name='sub_category_id' id="subcategory" class='form-control' >
                                            <option>Select A Category Name</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Sub Category Menu Name </label>

                                    <div class='col-sm-6'>
                                            <!--<input type='text' id='form-field-1' name='sub_category_id' placeholder='Sub Category ID' class='form-control' />-->
                                        <select name='sub_category_menu_id' id="subcategorymenu" class='form-control' >
                                            <option>Select A Sub Category Name</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Name </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='name' placeholder='Name' class='form-control' />
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
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Short Details </label>

                                    <div class='col-sm-9'>
                                        <textarea id='editor' name='short_details' placeholder='Short Details' class='form-control'></textarea>
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
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Long Details </label>

                                    <div class='col-sm-9'>
                                        <textarea id='editor1' name='long_details' placeholder='Long Details' class='form-control'></textarea>
                                        <script>
                                            $(document).ready(function () {
                                                // create Editor from textarea HTML element with default set of tools
                                                $("#editor1").kendoEditor({resizable: {
                                                        content: true,
                                                        toolbar: true
                                                    }});
                                            });
                                        </script>
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> New Price </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='new_price' placeholder='New Price' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Old Price </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='old_price' placeholder='Old Price' class='form-control' />
                                    </div>
                                </div><div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Quantity </label>

                                    <div class='col-sm-9'>
                                        <input type='text' id='form-field-1' name='quantity' placeholder='Quantity' class='form-control' />
                                    </div>
                                </div><div class="form-group">
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
    <script>
        $(document).ready(function () {
            $('#category').change(function () {
                var cid = $(this).val();
                $.post("ajax/subcategory_data.php", {cid: cid}, function (cat) {
                    $("#subcategory").html(cat);
                });
            });

            $('#subcategory').change(function () {
                var cid = $(this).val();
                $.post("ajax/subcategorymenu_data.php", {scid: cid}, function (data) {
                    
                    $("#subcategorymenu").html(data);
                });
            });
        });


    </script>
    <?php 
        echo $plugin->TableJs(); 
        echo $plugin->KendoJS();
        echo $plugin->FileUploadJS();
    ?>
</body>
</html>