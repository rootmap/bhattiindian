<?php 
		include("class/auth.php");
		include("plugin/plugin.php");
		$plugin=new cmsPlugin();
		$table="sub_category"; ?>
		<?php 
		if(isset($_POST['create'])){
			extract($_POST);
			if(!empty($category_id) && !empty($name) && !empty($is_active) && !empty($page_link))
			{ 
				if (!empty($_FILES['photo']['name'])) {
				include('class/uploadImage_Class.php');
				 $imgclassget=new image_class(); 
			$photo=$imgclassget->upload_fiximage("upload","photo","photo_upload_".$table_name."_".time());  
			}else
    {
         $photo = '';
    }
    $sqlpr=$obj->FlyQuery("SELECT MAX(priority) as pr FROM `".$table."`");
        $pr=$sqlpr[0]->pr+1;
			$insert=array('category_id'=>$category_id,'name'=>$name,'photo'=>$photo,'description'=>$description,'is_active'=>$is_active,'page_link'=>$page_link,'priority'=>$pr,'date'=>date('Y-m-d'),'status'=>1);
				if($obj->insert($table,$insert)==1)
				{
					$plugin->Success("Successfully Saved",$obj->filename());
				}
				else 
				{
					$plugin->Error("Failed",$obj->filename());
				}
			}
			else 
			{
				$plugin->Error("Fields is Empty",$obj->filename());
			}   
		}
		elseif(isset($_POST['update'])) 
		{
			extract($_POST);
			if(!empty($category_id) && !empty($name))
			{
				$updatearray=array("id"=>$id);if(!empty($_FILES['photo']['name']))
					{
						include('class/uploadImage_Class.php'); $imgclassget=new image_class(); $photo_1=$imgclassget->upload_fiximage("upload","photo","photo_upload_".$table_name."_".time());
						$photo=$photo_1;
						@unlink("upload/".$ex_photo);
					}else{
						$photo=$ex_photo;
					}
					$upd2=array('category_id'=>$category_id,'name'=>$name,'photo'=>$photo,'description'=>$description,'is_active'=>$is_active,'page_link'=>$page_link,'date'=>date('Y-m-d'),'status'=>1);
					
						$update_merge_array=array_merge($updatearray,$upd2);
						if($obj->update($table,$update_merge_array)==1)
						{ 
							$plugin->Success("Successfully Updated",$obj->filename());
						} 
						else 
						{ 
							$plugin->Error("Failed",$obj->filename()); 
						}}}
		elseif(isset($_GET['del'])=="delete") 
		{
			$delarray=array("id"=>$_GET['del']);$photolink=$obj->SelectAllByVal($table,'id',$_GET['id'],'photo'); @unlink("upload/".$photolink);if($obj->delete($table,$delarray)==1)
			{ 
				$plugin->Success("Successfully Delete",$obj->filename());  
			} 
			else 
			{ 
				$plugin->Error("Failed",$obj->filename()); 
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
		<?php include('include/topnav.php'); include('include/mainnav.php'); ?>
        




        <div id="content">
        	<h1 class="content-heading bg-white border-bottom">Sub Category</h1>
            <div class="innerAll bg-white border-bottom">
                <ul class="menubar">
                    <li class="active"><a href="#">Create New Sub Category</a></li>
                    <li><a href="sub_category_data.php">Sub Category List</a></li>
                </ul>
            </div>
          <div class="innerAll spacing-x2">
				<?php echo $plugin->ShowMsg(); ?>
                <!-- Widget -->

                        <!-- Widget -->
                        <div class="widget widget-inverse" >
							<?php 
							if(isset($_GET['edit']))
							{
							?>
                            <!-- Widget heading -->
                            <div class="widget-head">
                                <h4 class="heading">Update/Change - Sub Category</h4>
                            </div>
                            <!-- // Widget heading END -->
							
                            <div class="widget-body"><form enctype='multipart/form-data' class="form-horizontal" method="post" action="" role="form">
								<input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>"><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Category ID </label>
		
											<div class='col-sm-3'>
												<!-- <input type='text' id='form-field-1' name='category_id' value='<?php //echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"category_id"); ?>' placeholder='Category ID' class='form-control' /> -->
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
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Name </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='name' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"name"); ?>' placeholder='Name' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Photo </label>
		
											<div class='col-sm-3'>
												<!-- <input type='file' id='id-input-file-1' name='photo' placeholder='Photo' class='form-control' /> -->
												<?php
                                        $photo = $obj->SelectAllByVal($table, "id", $_GET['edit'], "photo");
                                        echo $plugin->FileUploadBox("1", $photo, "photo");
                                        ?>
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Description </label>
		
											<div class='col-sm-9'>
												<textarea id='editor' name='description' placeholder='Description' class='form-control'><?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"description"); ?></textarea>
												<script>
                                            $(document).ready(function() {
                                                // create Editor from textarea HTML element with default set of tools
                                                $("#editor").kendoEditor({ resizable: {
                                                    content: true,
                                                    toolbar: true
                                                }});
                                            });
                                        </script>
											</div>
										</div>
										<div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Page Link </label>
		
											<div class='col-sm-3'>
											<?php
                                                    $page_link = $obj->SelectAllByVal($table,"id",$_GET['edit'],"page_link");
                                                ?>
												<select name="page_link" class='form-control' >
												<?php
                                                        if($page_link==1){
                                                    ?>
                                                    <option value="our menu">Our Menu</option>
                                                    <option value="menu">Menu</option>
                                                    <?php
                                                        }
                                                        else{
                                                    ?>
                                                    <option value="menu">Menu</option>
                                                    <option value="our menu">Our Menu</option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
											</div>
										</div>
										<div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Is Active </label>
		
											<div class='col-sm-3'>
												<!-- <input type='text' id='form-field-1' name='is_active' value='<?php //echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"is_active"); ?>' placeholder='Is Active' class='form-control' /> -->
												<?php
                                                    $active = $obj->SelectAllByVal($table,"id",$_GET['edit'],"is_active");
                                                ?>
                                                <select name="is_active" class='form-control' >
                                                    <?php
                                                        if($active==1){
                                                    ?>
                                                    <option value="1">Active</option>
                                                    <option value="2">Inactive</option>
                                                    <?php
                                                        }
                                                        else{
                                                    ?>
                                                    <option value="2">Inactive</option>
                                                    <option value="1">Active</option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
											</div>
										</div><div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button  onclick="javascript:return confirm('Do You Want change/update These Record?')"  type="submit" name="update" class="btn btn-primary">Save Change</button>
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
							<?php }else{ ?>
                            <!-- Widget heading -->
                            <div class="widget-head">
                                <h4 class="heading">Create New Sub Category</h4>
                            </div>
                            <!-- // Widget heading END -->
							
                            <div class="widget-body"><form enctype='multipart/form-data' class="form-horizontal" method="post" action="" role="form"><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Category ID </label>
		
											<div class='col-sm-3'>
												<!-- <input type='text' id='form-field-1' name='category_id' placeholder='Category ID' class='form-control' /> -->
												<select name='category_id' class='form-control' >
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
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Name </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='name' placeholder='Name' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Photo </label>
		
											<div class='col-sm-3'>
												<!-- <input type='file' id='id-input-file-1' name='photo' placeholder='Photo' class='form-control' /> -->
												<?php
                                                echo $plugin->FileUploadBox("0", "", "photo");
                                            ?>
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Description </label>
		
											<div class='col-sm-9'>
												<textarea id='editor' name='description' placeholder='Description' class='form-control'></textarea>
												<script>
                                            $(document).ready(function() {
                                                // create Editor from textarea HTML element with default set of tools
                                                $("#editor").kendoEditor({ resizable: {
                                                    content: true,
                                                    toolbar: true
                                                }});
                                            });
                                        </script>
											</div>
										</div>
										<div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Page Link </label>
		
											<div class='col-sm-3'>
												<select name="page_link" class='form-control' >
                                                    <option>Select A Page Name</option>
                                                    <option value="our menu">Our Menu</option>
                                                    <option value="menu">Menu</option>
                                                    
                                                </select>
											</div>
										</div>
										<div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Is Active </label>
		
											<div class='col-sm-3'>
												<!-- <input type='text' id='form-field-1' name='is_active' placeholder='Is Active' class='form-control' /> -->
												<select name="is_active" class='form-control' >
                                                    
                                                    <option value="1">Active</option>
                                                    <option value="2">Inactive</option>
                                                    
                                                </select>
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

    <?php
    echo $plugin->TableJs();
    echo $plugin->KendoJS();
    echo $plugin->FileUploadJS();
    ?>
</body>
</html>