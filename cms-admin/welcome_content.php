<?php 
		include("class/auth.php");
		include("plugin/plugin.php");
		$plugin=new cmsPlugin();
		$table="welcome_content"; ?>
		<?php 
		if(isset($_POST['create'])){
			extract($_POST);
			if(!empty($details))
			{  $insert=array('details'=>$details,'date'=>date('Y-m-d'),'status'=>1);
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
			extract($_POST);if(!empty($details))
			{$updatearray=array("id"=>$id);$upd2=array('details'=>$details,'date'=>date('Y-m-d'),'status'=>1);
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
		echo $plugin->TableCss(); ?>
		<script type='text/javascript' src='./editor/textboxio-all/textboxio/textboxio.js'></script>


		<!-- live reload script for the theme builder -->
		<!-- <script type='text/javascript' src='http://localhost:37469/livereload.js'></script> -->
		<style>
			body {
				font-family: sans-serif;
				overflow-y: scroll;
			}
			a.mono {
				font-family: monospace;
			}
			span.code {
				font: normal 1.1em monospace;
				background-color: rgba(0,0,0,0.1);
				border: 1px solid rgba(0,0,0,0.2);
			}
			span.status {
				padding: 1em;
				color: white;
				position: fixed;
				right:2%;
				top:2em;
			}
			span.status-off {
				background: red;
			}
			span.status-off::after {
				content: 'Off';
			}
			span.status-off {
				background: red;
			}
			span.status-on::after {
				content: 'On';
			}
			span.status-on {
				background: green;
			}
			.accordion {
				padding: 0.5em;
				background-color: rgba(0, 0, 0, 0.2);
				border: 1px solid transparent;
			}
			.accordion:hover {
				cursor: pointer;
				border-color: black;
				background-color: rgba(0, 0, 0, 0.1);
			}
			.accordion:before {
				content: '\025B6';
				font-size: 12px;
				margin: 5px;
				display: inline-block;
				transition: transform 0.1s linear 0.2s;
				transform: rotate(0deg);
			}
			.accordion.active:before {
				transition: transform 0.1s linear;
				transform: rotate(90deg);
			}
			.panel {
				transition: opacity 0.3s ease, max-height 0.2s linear 0.1s;
				max-height: 0px;
				opacity: 0;
				overflow: hidden;
			}
			.panel.show {
				max-height: 37469px;
				opacity: 1;
			}
		</style>
		<script>
			var Textbox = function () {


        // load textbox.io with default settings twice, so one of them is in the more drawer
        textboxio.replaceAll('textarea', {
        	ui: {
        		toolbar: {
        			items: [
        			'undo', 'insert', 'style', 'emphasis', 'align', 'listindent', 'format', 'tools',
        			'undo', 'insert', 'style', 'emphasis', 'align', 'listindent', 'format', 'tools'
        			]
        		}
        	}
        });
    };
</script>
    </head>
    <body class="">
		<?php include('include/topnav.php'); include('include/mainnav.php'); ?>
        




        <div id="content">
        	<h1 class="content-heading bg-white border-bottom">Welcome Content</h1>
            <div class="innerAll bg-white border-bottom">
                <ul class="menubar">
                    <li class="active"><a href="#">Create New Welcome Content</a></li>
                    <li><a href="welcome_content_data.php">Welcome Content List</a></li>
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
                                <h4 class="heading">Update/Change - Welcome Content</h4>
                            </div>
                            <!-- // Widget heading END -->
							
                            <div class="widget-body"><form  class="form-horizontal" method="post" action="" role="form">
								<input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>"><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Details </label>
		
											<div class='col-sm-9'>
												<textarea id='details'  style="height: 300px;" name='details' placeholder='Details' class='form-control'><?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"details"); ?></textarea>
											</div>
										</div><div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button  onclick="javascript:return confirm('Do You Want change/update These Record?')"  type="submit" id="submit" name="update" class="btn btn-primary">Save Change</button>
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
							<?php }else{ ?>
                            <!-- Widget heading -->
                            <div class="widget-head">
                                <h4 class="heading">Create New Welcome Content</h4>
                            </div>
                            <!-- // Widget heading END -->
							
                            <div class="widget-body"><form  class="form-horizontal" method="post" action="" role="form"><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Details </label>
		
											<div class='col-sm-9'>
												<textarea id='details'  style="height: 300px;" name='details' placeholder='Details' class='form-control'></textarea>
											</div>
										</div><div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit"   onclick="javascript:return confirm('Do You Want Create/save These Record?')" id="submit" name="create" class="btn btn-info">Save</button>
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
    
<?php echo $plugin->TableJs(); ?>
<script>
	$(document).ready(function(){
		$("#submit").click(function(){
			var name = $("#title").val();
			var email = $(".short_details").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'title='+ title + '&short_details='+ short_details;
if(name==''||short_details=='')
{
	alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
	type: "POST",
	url: "ajax/wlcome_con.php",
	data: dataString,
	cache: false,
	success: function(result){
		alert(result);
	}
});
}
return false;
});
	});
});
</script>
<script>
	$(document).ready(function(){
		Textbox();
	});
</script>

</body>
</html>