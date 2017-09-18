<?php

include('class/migrate_Class.php');
$db = new migrate_class();
extract($_POST);

$upload_image = false;
$upload_file = false;
$validation_edit_flag = false;

$table_name = $db->createFieldItem($table);
$count_field = count($field);
$countf = 0;
$fieldsf = "";
$fieldsf3 = "";
if ($count_field != 0) {
    $con = $obj->open();

    foreach ($field as $col => $val) {

        $col = mysqli_real_escape_string($con, $_POST['field_type'][$col]);
        $val = mysqli_real_escape_string($con, $val);

        if ($col == 0) {
            $fval = "varchar(255)";
            $validation[] = '!empty($' . $db->createFieldItem($val) . ')';
            $validation_edit[] = '!empty($' . $db->createFieldItem($val) . ')';
            $validation_edit_flag = true;
        } elseif ($col == 1) {
            $fval = "text";
            $validation[] = '!empty($' . $db->createFieldItem($val) . ')';
            $validation_edit[] = '!empty($' . $db->createFieldItem($val) . ')';
            $validation_edit_flag = true;
        } elseif ($col == 2) {
            $fval = "int(20)";
            $validation[] = '!empty($' . $db->createFieldItem($val) . ')';
            $validation_edit[] = '!empty($' . $db->createFieldItem($val) . ')';
            $validation_edit_flag = true;
        } elseif ($col == 3) {
            if ($upload_image) {
                $fval = "text";
                $upload_image = true;
                $upload_image2 = true;
                $upload_image_field = $db->createFieldItem($val);
                $validation[] = '!empty($_FILES[&#8216;' . $db->createFieldItem($val) . '&#8216;][&#8216;name&#8216;])';
            } else {
                $fval = "text";
                $upload_image = true;
                $upload_image_field = $db->createFieldItem($val);
                $validation[] = '!empty($_FILES[&#8216;' . $db->createFieldItem($val) . '&#8216;][&#8216;name&#8216;])';
            }
        } elseif ($col == 4) {
            $fval = "text";
            $upload_file = true;
            $upload_file_field = $db->createFieldItem($val);
            $validation[] = '!empty($_FILES[&#8216;' . $db->createFieldItem($val) . '&#8216;][&#8216;name&#8216;])';
        }

        $fieldsf[] = $db->createFieldItem($val);
        $fieldsf2[] = $fval;
        $fieldsf3 .='&#8216;' . $db->createFieldItem($val) . '&#8216;=>$' . $db->createFieldItem($val) . ',';
    }

    //echo print_r($validation);
    $countvali = 0;
    $validate_concat = "";
    foreach ($validation as $cvali):
        if ($countvali++ != 0)
            $validate_concat .= ' && ';
        $validate_concat .= "$cvali";
    endforeach;

    if ($validation_edit_flag) {
        $countvali_edit = 0;
        $validate_concat_edit = "";
        foreach ($validation_edit as $cvali_edit):
            if ($countvali_edit++ != 0)
                $validate_concat_edit .= ' && ';
            $validate_concat_edit .= "$cvali_edit";
        endforeach;
    }

    //echo $validate_concat;
}
else {
    echo "0 Field Name Found";
}

//echo $fieldsf3;


$db_field_array_first = array("id" => "int(20) auto_increment primary key");
$db_field_array_last = array("date" => "date", "status" => "int(2)");
$db_field_array_middle = array_combine($fieldsf, $fieldsf2);
$db_merge_array = array_merge($db_field_array_first, $db_field_array_middle, $db_field_array_last);

//echo $db->CreateTable($table_name,$db_merge_array);

if ($db->CreateTable($table_name, $db_merge_array) == 1) {

    $filename = $table_name . ".php";
    $filename_data = $table_name . "_data.php";
    $exists = $obj->exists_multiple("page_info", array("name" => $table_name));
    if ($exists == 0) {
        $obj->insert("page_info", array("name" => $table_name, "page_name" => $filename, "menu_name" => $table, "date" => date('Y-m-d'), "status" => 1));
        $table_id = $obj->SelectAllByVal("page_info", "name", $table_name, "id");
        foreach ($fieldsf as $cf):
            $obj->insert("custom_table_field", array("table_id" => $table_id, "name" => $cf, "date" => date('Y-m-d'), "status" => 1));
        endforeach;
    }
    else {
        $obj->update("page_info", array("name" => $table_name, "page_name" => $filename, "menu_name" => $table, "date" => date('Y-m-d'), "status" => 1));
    }
    @$content = '<?php 
		include("class/auth.php");
		include("plugin/plugin.php");
		$plugin=new cmsPlugin();
		$table="' . $table_name . '"; ?>';

    @$content .='
		<?php 
		if(isset($_POST[&#8216;create&#8216;])){
			extract($_POST);
			if(' . $validate_concat . ')
			{ ';

    if ($upload_image == true && $upload_file == true) {
        @$content .='include(&#8216;class/uploadImage_Class.php&#8216;); $imgclassget=new image_class(); ';

        @$content .='
			$' . $upload_image_field . '=$imgclassget->upload_fiximage("upload","' . $upload_image_field . '","' . $upload_image_field . '_upload_".$table_name."_".time()); ';

        @$content .='$' . $upload_file_field . '=$imgclassget->fileUpload("' . $upload_file_field . '","' . $upload_file_field . '_upload_".$table_name."_".time(),"upload"); ';
    } elseif ($upload_image) {
        @$content .='include(&#8216;class/uploadImage_Class.php&#8216;); $imgclassget=new image_class(); ';

        @$content .='
			$' . $upload_image_field . '=$imgclassget->upload_fiximage("upload","' . $upload_image_field . '","' . $upload_image_field . '_upload_".$table_name."_".time()); ';
    } elseif ($upload_image) {
        @$content .='
			include(&#8216;class/uploadImage_Class.php&#8216;); 
			$imgclassget=new image_class(); ';

        @$content .='
			$' . $upload_image_field . '=$imgclassget->upload_fiximage("upload","' . $upload_image_field . '","' . $upload_image_field . '_upload_".$table_name."_".time()); ';

        if ($upload_image2) {
            @$content .='
				$' . $upload_image_field . '=$imgclassget->upload_fiximage("upload","' . $upload_image_field . '","' . $upload_image_field . '_upload_".$table_name."_".time()); ';
        }
    } elseif ($upload_file) {
        @$content .='
			include(&#8216;class/uploadImage_Class.php&#8216;); 
			$imgclassget=new image_class(); ';

        @$content .='
			$' . $upload_file_field . '=$imgclassget->fileUpload("' . $upload_file_field . '","' . $upload_file_field . '_upload_".$table_name."_".time(),"upload"); ';
    }



    @$content .=' $insert=array(' . $fieldsf3 . '&#8216;date&#8216;=>date(&#8216;Y-m-d&#8216;),&#8216;status&#8216;=>1);
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
		elseif(isset($_POST[&#8216;update&#8216;])) 
		{
			extract($_POST);';

    if ($validation_edit_flag) {

        @$content .='if(' . $validate_concat_edit . ')
			{';
    }
    @$content .='$updatearray=array("id"=>$id);';

    if ($upload_image == true && $upload_file == true) {
        @$content .='include(&#8216;class/uploadImage_Class.php&#8216;); $imgclassget=new image_class(); ';

        @$content .='if(!empty($_FILES[&#8216;' . $upload_image_field . '&#8216;][&#8216;name&#8216;]))
					{ 
						$' . $upload_image_field . '_1=$imgclassget->upload_fiximage("upload","' . $upload_image_field . '","' . $upload_image_field . '_upload_".$table_name."_".time()); 
						$' . $upload_image_field . '=$' . $upload_image_field . '_1;
					}
					else
					{ 
						$' . $upload_image_field . '=$ex_' . $upload_image_field . '; 
					}';

        @$content .='if(!empty($_FILES[&#8216;' . $upload_file_field . '&#8216;][&#8216;name&#8216;]))
					{
						$' . $upload_file_field . '_1=$imgclassget->fileUpload("' . $upload_file_field . '","' . $upload_file_field . '_upload_".$table_name."_".time(),"upload");
						$' . $upload_file_field . '=$' . $upload_file_field . '_1; 
					}
					else
					{
						$' . $upload_file_field . '=$ex_' . $upload_file_field . ';
					}';
    } elseif ($upload_image) {
        @$content .='if(!empty($_FILES[&#8216;' . $upload_image_field . '&#8216;][&#8216;name&#8216;]))
					{
						include(&#8216;class/uploadImage_Class.php&#8216;); $imgclassget=new image_class(); ';

        @$content .='$' . $upload_image_field . '_1=$imgclassget->upload_fiximage("upload","' . $upload_image_field . '","' . $upload_image_field . '_upload_".$table_name."_".time());
						$' . $upload_image_field . '=$' . $upload_image_field . '_1;
						@unlink("upload/".$ex_' . $upload_image_field . ');
					}else{
						$' . $upload_image_field . '=$ex_' . $upload_image_field . ';
					}';
    } elseif ($upload_file) {
        @$content .='if(!empty($_FILES[&#8216;' . $upload_file_field . '&#8216;][&#8216;name&#8216;]))
					{
						include(&#8216;class/uploadImage_Class.php&#8216;); $imgclassget=new image_class(); ';

        @$content .=' $' . $upload_file_field . '_1=$imgclassget->fileUpload("' . $upload_file_field . '","' . $upload_file_field . '_upload_".$table_name."_".time(),"upload"); 
						$' . $upload_file_field . '=$' . $upload_file_field . '_1;
						@unlink("upload/".$ex_' . $upload_file_field . ');
					}else{
						$' . $upload_file_field . '=$ex_' . $upload_file_field . ';
					}';
    }


    $content .='$upd2=array(' . $fieldsf3 . '&#8216;date&#8216;=>date(&#8216;Y-m-d&#8216;),&#8216;status&#8216;=>1);
						$update_merge_array=array_merge($updatearray,$upd2);
						if($obj->update($table,$update_merge_array)==1)
						{ 
							$plugin->Success("Successfully Updated",$obj->filename());
						} 
						else 
						{ 
							$plugin->Error("Failed",$obj->filename()); 
						}';
    if ($validation_edit_flag) {

        $content .='}';
    }

    $content .='}
		elseif(isset($_GET[&#8216;del&#8216;])=="delete") 
		{
			$delarray=array("id"=>$_GET[&#8216;id&#8216;]);';

    if ($upload_image) {
        $content .='$photolink=$obj->SelectAllByVal($table,&#8216;id&#8216;,$_GET[&#8216;id&#8216;],&#8216;' . $upload_image_field . '&#8216;); @unlink("upload/".$photolink);';
    } elseif ($upload_file) {
        $content .='$photolink=$obj->SelectAllByVal($table,&#8216;id&#8216;,$_GET[&#8216;id&#8216;],&#8216;' . $upload_file_field . '&#8216;);  @unlink("upload/".$photolink);';
    }

    $content .='if($obj->delete($table,$delarray)==1)
			{ 
				$plugin->Success("Successfully Delete",$obj->filename());  
			} 
			else 
			{ 
				$plugin->Error("Failed",$obj->filename()); 
			}
		}
		?>';

    @$content .='<!doctype html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
    <head>
		<?php 
		echo $plugin->softwareTitle();
		echo $plugin->TableCss(); ?>
    </head>
    <body class="">
		<?php include(&#8216;include/topnav.php&#8216;); include(&#8216;include/mainnav.php&#8216;); ?>
        




        <div id="content">
        	<h1 class="content-heading bg-white border-bottom">' . $table . '</h1>
            <div class="innerAll bg-white border-bottom">
                <ul class="menubar">
                    <li class="active"><a href="#">Create New ' . $table . '</a></li>
                    <li><a href="' . $filename_data . '">' . $table . ' List</a></li>
                </ul>
            </div>
          <div class="innerAll spacing-x2">
				<?php echo $plugin->ShowMsg(); ?>
                <!-- Widget -->

                        <!-- Widget -->
                        <div class="widget widget-inverse" >
							<?php 
							if(isset($_GET[&#8216;edit&#8216;]))
							{
							?>
                            <!-- Widget heading -->
                            <div class="widget-head">
                                <h4 class="heading">Update/Change - ' . $table . '</h4>
                            </div>
                            <!-- // Widget heading END -->
							
                            <div class="widget-body">';

    if ($upload_image) {
        $content .='<form enctype=&#8216;multipart/form-data&#8216;';
    } elseif ($upload_file) {
        $content .='<form enctype=&#8216;multipart/form-data&#8216;';
    } else {
        $content .='<form ';
    }
    @$content .=' class="form-horizontal" method="post" action="" role="form">
								<input type="hidden" name="id" value="<?php echo $_GET[&#8216;edit&#8216;]; ?>">';

    $input_file = false;
    foreach ($field as $col => $val) {

        $col = mysqli_real_escape_string($con, $_POST['field_type'][$col]);
        $val = mysqli_real_escape_string($con, $val);
        $cval_edit = '$obj->SelectAllByVal($table,"id",$_GET[&#8216;edit&#8216;],"' . $db->createFieldItem($val) . '")';
        if ($col == 0) {

            $fval = "<input type=&#8216;text&#8216; id=&#8216;form-field-1&#8216; name=&#8216;" . $db->createFieldItem($val) . "&#8216; value=&#8216;<?php echo " . $cval_edit . "; ?>&#8216; placeholder=&#8216;" . $val . "&#8216; class=&#8216;form-control&#8216; />";
            $area_space = "9";
        } elseif ($col == 1) {
            $fval = "<textarea id=&#8216;form-field-1&#8216; name=&#8216;" . $db->createFieldItem($val) . "&#8216; placeholder=&#8216;" . $val . "&#8216; class=&#8216;form-control&#8216;><?php echo " . $cval_edit . "; ?></textarea>";
            $area_space = "9";
        } elseif ($col == 2) {
            $fval = "<input type=&#8216;text&#8216; id=&#8216;form-field-1&#8216; name=&#8216;" . $db->createFieldItem($val) . "&#8216; placeholder=&#8216;" . $val . "&#8216;  value=&#8216;<?php echo " . $cval_edit . "; ?>&#8216;  class=&#8216;form-control&#8216; />";
            $area_space = "6";
        } elseif ($col == 3) {
            $input_file = true;
            $fval = "<input type=&#8216;file&#8216; id=&#8216;id-input-file-1&#8216; name=&#8216;" . $db->createFieldItem($val) . "&#8216; placeholder=&#8216;" . $val . "&#8216; class=&#8216;form-control&#8216; />";
            $area_space = "3";
        } elseif ($col == 4) {
            $input_file = true;
            $fval = "<input type=&#8216;file&#8216; id=&#8216;id-input-file-2&#8216; name=&#8216;" . $db->createFieldItem($val) . "&#8216; placeholder=&#8216;" . $val . "&#8216; class=&#8216;form-control&#8216; />";
            $area_space = "3";
        }

        @$content .='<div class=&#8216;form-group&#8216;>
											<label  for="inputEmail3" class="col-sm-2 control-label"> ' . $val . ' </label>
		
											<div class=&#8216;col-sm-' . $area_space . '&#8216;>
												' . $fval . '
											</div>
										</div>';
    }



    @$content .='<div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button  onclick="javascript:return confirm(&#8216;Do You Want change/update These Record?&#8216;)"  type="submit" name="update" class="btn btn-primary">Save Change</button>
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
							<?php }else{ ?>
                            <!-- Widget heading -->
                            <div class="widget-head">
                                <h4 class="heading">Create New ' . $table . '</h4>
                            </div>
                            <!-- // Widget heading END -->
							
                            <div class="widget-body">';

    if ($upload_image) {
        $content .='<form enctype=&#8216;multipart/form-data&#8216;';
    } elseif ($upload_file) {
        $content .='<form enctype=&#8216;multipart/form-data&#8216;';
    } else {
        $content .='<form ';
    }

    @$content .=' class="form-horizontal" method="post" action="" role="form">';

    $input_file = false;
    foreach ($field as $col => $val) {

        $col = mysqli_real_escape_string($con, $_POST['field_type'][$col]);
        $val = mysqli_real_escape_string($con, $val);

        if ($col == 0) {
            $fval = "<input type=&#8216;text&#8216; id=&#8216;form-field-1&#8216; name=&#8216;" . $db->createFieldItem($val) . "&#8216; placeholder=&#8216;" . $val . "&#8216; class=&#8216;form-control&#8216; />";
            $area_space = "9";
        } elseif ($col == 1) {
            $fval = "<textarea id=&#8216;form-field-1&#8216; name=&#8216;" . $db->createFieldItem($val) . "&#8216; placeholder=&#8216;" . $val . "&#8216; class=&#8216;form-control&#8216;></textarea>";
            $area_space = "9";
        } elseif ($col == 2) {
            $fval = "<input type=&#8216;text&#8216; id=&#8216;form-field-1&#8216; name=&#8216;" . $db->createFieldItem($val) . "&#8216; placeholder=&#8216;" . $val . "&#8216; class=&#8216;form-control&#8216; />";
            $area_space = "6";
        } elseif ($col == 3) {
            $input_file = true;
            $fval = "<input type=&#8216;file&#8216; id=&#8216;id-input-file-1&#8216; name=&#8216;" . $db->createFieldItem($val) . "&#8216; placeholder=&#8216;" . $val . "&#8216; class=&#8216;form-control&#8216; />";
            $area_space = "3";
        } elseif ($col == 4) {
            $input_file = true;
            $fval = "<input type=&#8216;file&#8216; id=&#8216;id-input-file-2&#8216; name=&#8216;" . $db->createFieldItem($val) . "&#8216; placeholder=&#8216;" . $val . "&#8216; class=&#8216;form-control&#8216; />";
            $area_space = "3";
        }

        @$content .='<div class=&#8216;form-group&#8216;>
											<label  for="inputEmail3" class="col-sm-2 control-label"> ' . $val . ' </label>
		
											<div class=&#8216;col-sm-' . $area_space . '&#8216;>
												' . $fval . '
											</div>
										</div>';
    }



    @$content .='<div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit"   onclick="javascript:return confirm(&#8216;Do You Want Create/save These Record?&#8216;)"  name="create" class="btn btn-info">Save</button>
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
        <?php include(&#8216;include/footer.php&#8216;); ?>
        <!-- // Footer END -->
    </div>
    <!-- // Main Container Fluid END -->
    <!-- Global -->
    
    <?php echo $plugin->TableJs(); ?>';

    if ($input_file) {

        @$content .='<script type=&#8216;text/javascript&#8216;>
				jQuery(function($) {
					  $(&#8216;#id-input-file-1, #id-input-file-2&#8216;).ace_file_input({
								no_file:&#8216;No File ...&#8216;,
								btn_choose:&#8216;Choose&#8216;,
								btn_change:&#8216;Change&#8216;,
								droppable:false,
								onchange:null,
								thumbnail:false //| true | large
						});
	
				})
			</script>';
    }


    @$content .='</body>
</html>';

    @$content_view = '<?php
$table="' . $table_name . '"; ?>';

    @$content_view .='<?php 
include(&#8216;class/auth.php&#8216;);
include(&#8216;plugin/plugin.php&#8216;);
$plugin=new cmsPlugin(); 
?>
<!doctype html>
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
		 ?>
    </head>
    <body class="">
		<?php 
		include(&#8216;include/topnav.php&#8216;); 
		include(&#8216;include/mainnav.php&#8216;); 
		?>
        <div id="content">
        	<h1 class="content-heading bg-white border-bottom">' . $table . ' Data</h1>
            <div class="innerAll bg-white border-bottom">
                <ul class="menubar">
                    <li><a href="' . $filename . '">Create New ' . $table . '</a></li>
                    <li class="active"><a href="#">' . $table . ' Data List</a></li>
                </ul>
            </div>
          <div class="innerAll spacing-x2">
                <div class="col-sm-12" id="' . $table_name . '_' . $table_id . '"></div>
            </div>
        </div>
        <!-- // ' . $table . ' END -->

        <div class="clearfix"></div>
        <!-- // Sidebar menu & ' . $table . ' wrapper END -->
        
        <?php include(&#8216;include/footer.php&#8216;); ?>
        <!-- // Footer END -->
    </div>
    <!-- // Main Container Fluid END -->
    <!-- Global -->
    <script id="edit_' . $table_name . '" type="text/x-kendo-template">
             <a class="k-button k-button-icontext k-grid-edit" href="' . $filename . '?edit=#= id#"><span class="k-icon k-edit"></span>Edit</a>
            </script>
    <script id="delete_' . $table_name . '" type="text/x-kendo-template">
                    <a class="k-button k-button-icontext k-grid-delete" onclick="javascript:deleteClick(#= id #);" ><span class="k-icon k-delete"></span>Delete</a>
            </script>        
    <script type="text/javascript">
                function deleteClick(' . $table_name . '_id) {
                    var c = confirm("Do you want to delete?");
                    if (c === true) {
                        $.ajax({
                            type: "POST",
                            dataType: "json",
                            url: "./json_data/banner_list.php",
                            data: {id: ' . $table_name . '_id,table:"' . $table_name . '",acst:3},
                            success: function (result) {
							if(result==1)
							{
								location.reload();
							}
							else
							{
								$(".k-i-refresh").click();
							}
                            }
                        });
                    }
                }

            </script>
            <script type="text/javascript">
                jQuery(document).ready(function () {
					var postarray={"id":1};
                    var dataSource = new kendo.data.DataSource({
                        pageSize: 5,
                        transport: {
                            read: {
                                url: "./json_data/banner_list.php",
                                type: "POST",
								data:
								{
									"acst":1, //action status sending to json file
									"table":"' . $table_name . '_view",
									"cond":0,
									"multi":postarray
									
								}
                            }
                        },
                        autoSync: false,
                        schema: {
                            data: "data",
                            total: "data.length",
                            model: {
                                id: "id",
                                fields: {
                                    id: {nullable: true},';

    foreach ($field as $col => $val) {

        $col = mysqli_real_escape_string($con, $_POST['field_type'][$col]);
        $val = mysqli_real_escape_string($con, $val);
        if ($db->createFieldItem($val) != 'id' || $db->createFieldItem($val) != 'date' || $db->createFieldItem($val) != 'status') {
            @$content_view .=$db->createFieldItem($val) . ': {type: "string"},';
        }
    }



    @$content_view .='
									date: {type: "string"}
                                }
                            }
                        }
                    });
                    jQuery("#' . $table_name . '_' . $table_id . '").kendoGrid({
                        dataSource: dataSource,
                        filterable: true,
                        pageable: {
                            refresh: true,
                            input: true,
                            numeric: false,
                            pageSizes: true,
                            pageSizes: [5, 10, 20, 50],
                        },
                        sortable: true,
                        groupable: true,
                        columns: [';

    foreach ($field as $col => $val) {

        $col = mysqli_real_escape_string($con, $_POST['field_type'][$col]);
        $val = mysqli_real_escape_string($con, $val);
        if ($db->createFieldItem($val) != 'id' || $db->createFieldItem($val) != 'date' || $db->createFieldItem($val) != 'status') {
            @$content_view .='{field: "' . $db->createFieldItem($val) . '", title: "' . $val . '"},';
        }
    }

    @$content_view .='
							{field: "date", title: "Record Added", width: "150px"},
							{
                                title: "Edit",
                                template: kendo.template($("#edit_' . $table_name . '").html())
                            },
							{
                                title: "Delete",
                                template: kendo.template($("#delete_' . $table_name . '").html())
                            }
                        ]
                    });
                });

            </script>    
    <?php 
	echo $plugin->TableJs(); 
	echo $plugin->KendoJS(); 
	?>
    
</body>
</html>';

    $db->CreatePhpFile($filename, $content); //create file
    $db->CreatePhpFile($filename_data, $content_view); //view file
    $plugin->Success("Your Table Information Has Been Generated Successfully", $obj->filename());
} else {
    $plugin->Error("Failed To Create Table, Please FIx & Try Again.", $obj->filename());
}