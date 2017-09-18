<?php
$table="category"; ?><?php 
include('class/auth.php');
include('plugin/plugin.php');
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
         <link rel="stylesheet" href="editor/draw-table/tablednd.css" type="text/css"/>
    </head>
    <body class="">
		<?php 
		include('include/topnav.php'); 
		include('include/mainnav.php'); 
		?>
        <div id="content">
        	<h1 class="content-heading bg-white border-bottom">Category Data</h1>
            <div class="innerAll bg-white border-bottom">
                <ul class="menubar">
                    <li><a href="category.php">Create New Category</a></li>
                    <li class="active"><a href="#">Category Data List</a></li>
                </ul>
            </div>
          <div class="innerAll spacing-x2">
                <!-- <div class="col-sm-12" id="category_26"></div> -->
                <table  class="display nowrap example" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>#</th>
              <th>Category Name</th>
              <th>Active / Inactive</th>
              
              <th>Date</th>
              <!-- <th>Position</th> -->
              <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                            $category = $obj->FlyQuery("SELECT * FROM `category` ORDER BY priority ASC");

                            if(!empty($category)){
                                foreach ($category as $cat) {
                          ?>
                        <tr id="pr_<?=$cat->id?>">
                        
                          <td><?= $cat->id;?></td>
                          <td><?= $cat->name;?></td>
                          <td>
                              <?php
                                if($cat->is_active==1){
                                    ?>
                                    Active
                                    <?php
                                    }else{
                                        echo 'Inactive';
                                    }
                                
                              ?>
                          </td>
                          <td><?= $cat->date;?></td>
                          <!-- <td>
                              <a class="up k-button k-button-icontext k-grid-edit"><span class="Up k-icon k-edit"></span>Move Up</a>
                              <a class="down k-button k-button-icontext k-grid-delete"  ><span class="k-icon k-delete"></span>Move Down</a>
                            
                          </td> -->
                          <td>
                             <a class="k-button k-button-icontext k-grid-edit" href="category.php?edit=<?= $cat->id; ?>"><span class="k-icon k-edit"></span>Edit</a>
                              <a class="k-button k-button-icontext k-grid-delete" href="category.php?del=<?= $cat->id; ?>" ><span class="k-icon k-delete"></span>Delete</a>
                          </td>
                          
                        </tr>
                        <?php
                                }
                            }    
                          ?>
            
        </tbody>
    </table>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <style type="text/css">
        tr{

        }
        div.dataTables_wrapper {
        width: 1000px;
        margin: 0 auto;
    }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
    $('.example').DataTable( {
        "scrollX": true,
        "order":false
    } );
} );
    </script>
<script src='https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js' type="text/javascript"></script>

<script language = "Javascript">
$(document).ready(function(){

    $(function() {

        $('table').sortable({
            items: 'tr',
            opacity: 0.6,
            axis: 'y',
            stop: function (event, ui) {
                var data = $(this).sortable('serialize');
                //alert(data);
                $.ajax({
                 data: data,
                 type: 'POST',
                 url: 'ajax/update_drag_category_table.php'
                 });
            }
        });
    });

});


</script>
            </div>
        </div>
        <!-- // Category END -->

        <div class="clearfix"></div>
        <!-- // Sidebar menu & Category wrapper END -->
        
        <?php include('include/footer.php'); ?>
        <!-- // Footer END -->
    </div>
    <!-- // Main Container Fluid END -->
    <!-- Global -->
      
    <?php 
	echo $plugin->TableJs(); 
	echo $plugin->KendoJS(); 
	?>
    
   <script src="editor/draw-table/js/jquery.tablednd.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
    $('#example').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false
    } );
} );
    </script>

</body>
</html>