<?php 
		include("class/auth.php");
		include("plugin/plugin.php");
		$plugin=new cmsPlugin();
		$table="reservation"; ?>
		<?php 
		if(isset($_POST['create'])){
			extract($_POST);
			if(!empty($reservation_date) && !empty($reservation_time) && !empty($guest_number) && !empty($name) && !empty($phone) && !empty($email))
			{  $insert=array('reservation_date'=>$reservation_date,'reservation_time'=>$reservation_time,'guest_number'=>$guest_number,'name'=>$name,'phone'=>$phone,'email'=>$email,'date'=>date('Y-m-d'),'status'=>1);
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
			extract($_POST);if(!empty($reservation_date) && !empty($reservation_time) && !empty($guest_number) && !empty($name) && !empty($phone) && !empty($email) && !empty($reservation_message))
			{$updatearray=array("id"=>$id);$upd2=array('reservation_date'=>$reservation_date,'reservation_time'=>$reservation_time,'guest_number'=>$guest_number,'name'=>$name,'phone'=>$phone,'email'=>$email,'reservation_message'=>$reservation_message,'date'=>date('Y-m-d'),'status'=>1);
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
			$delarray=array("id"=>$_GET['id']);if($obj->delete($table,$delarray)==1)
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
		?>
    </head>
    <body class="">
		<?php include('include/topnav.php'); include('include/mainnav.php'); ?>
        




        <div id="content">
        	<h1 class="content-heading bg-white border-bottom">Reservation</h1>
            <div class="innerAll bg-white border-bottom">
                <ul class="menubar">
                    <li class="active"><a href="#">Create New Reservation</a></li>
                    <li><a href="reservation_data.php">Reservation List</a></li>
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
                                <h4 class="heading">Update/Change - Reservation</h4>
                            </div>
                            <!-- // Widget heading END -->
							
                            <div class="widget-body"><form  class="form-horizontal" method="post" action="" role="form">
								<input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>"><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Reservation Date </label>
		
											<div class='col-sm-9'>
												<input type='text' id='datepicker' name='reservation_date' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"reservation_date"); ?>' placeholder='Reservation Date' class='form-control' />
												<script>
                                            $(document).ready(function () {
                                                // create DatePicker from input HTML element
                                                $("#datepicker").kendoDatePicker({
                                                    format: "yyyy-MM-dd"
                                                });
                                            });
                                        </script>
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Reservation Time </label>
		
											<div class='col-sm-9'>
												<input type='text' id='timepicker' name='reservation_time' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"reservation_time"); ?>' placeholder='Reservation Time' class='form-control' />
												<script>
								                $(document).ready(function() {
								                    // create TimePicker from input HTML element
								                    $("#timepicker").kendoTimePicker();
								                });
								            </script>
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Guest Number </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='guest_number' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"guest_number"); ?>' placeholder='Guest Number' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Name </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='name' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"name"); ?>' placeholder='Name' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Phone </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='phone' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"phone"); ?>' placeholder='Phone' class='form-control' />
											</div>
										</div>
                                                                <div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Email </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='email' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"email"); ?>' placeholder='Email' class='form-control' />
											</div>
										</div>
                                                                <div class='form-group'>
                                    <label  for="inputEmail3" class="col-sm-2 control-label"> Reservation Message </label>

                                    <div class='col-sm-9'>
                                        <textarea id='editor' name='reservation_message' placeholder='Reservation Message' class='form-control'><?php echo $obj->SelectAllByVal($table, "id", $_GET['edit'], "reservation_message"); ?></textarea>
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
                                </div>
                                                                <div class="form-group">
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
                                <h4 class="heading">Create New Reservation</h4>
                            </div>
                            <!-- // Widget heading END -->
							
                            <div class="widget-body"><form  class="form-horizontal" method="post" action="" role="form"><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Reservation Date </label>
		
											<div class='col-sm-9'>
												<input type='text' id='datepicker' name='reservation_date' placeholder='Reservation Date' class='form-control' />
												<script>
                                            $(document).ready(function () {
                                                // create DatePicker from input HTML element
                                                $("#datepicker").kendoDatePicker({
                                                    format: "yyyy-MM-dd"
                                                });
                                            });
                                        </script>
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Reservation Time </label>
		
											<div class='col-sm-9'>
												<input type='text' id='timepicker' name='reservation_time' placeholder='Reservation Time' class='form-control' />
												<script>
								                $(document).ready(function() {
								                    // create TimePicker from input HTML element
								                    $("#timepicker").kendoTimePicker();
								                });
								            </script>
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Guest Number </label>
		
											<div class='col-sm-5'>
												<!-- <input type='text' id='form-field-1' name='guest_number' placeholder='Guest Number' class='form-control' /> -->
												<select id='form-field-1' name='guest_number' placeholder='Guest Number' class='form-control' >
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
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Name </label>
		
											<div class='col-sm-5'>
												<input type='text' id='form-field-1' name='name' placeholder='Name' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Phone </label>
		
											<div class='col-sm-5'>
												<input type='text' id='form-field-1' name='phone' placeholder='Phone' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Email </label>
		
											<div class='col-sm-5'>
												<input type='text' id='form-field-1' name='email' placeholder='Email' class='form-control' />
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
    
    <?php echo $plugin->TableJs(); echo $plugin->KendoJs();?></body>
</html>