<?php
$table="product"; ?><?php 
include('class/auth.php');
include('plugin/plugin.php');
$plugin=new cmsPlugin(); 
if (isset($_GET['del'])) {
    // print_r($_GET['del']);
    // exit();
    $delarray = array("id" => $_GET['del']);
    $photolink = $obj->SelectAllByVal($table, 'id', $_GET['id'], 'photo');
    @unlink("upload/" . $photolink);
    if ($obj->delete($table, $delarray) == 1) {
        $plugin->Success("Successfully Delete", $obj->filename());
    } else {
        $plugin->Error("Failed", $obj->filename());
    }
}
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
        	<h1 class="content-heading bg-white border-bottom">Product Data</h1>
            <div class="innerAll bg-white border-bottom">
                <ul class="menubar">
                    <li><a href="product.php">Create New Product</a></li>
                    <li class="active"><a href="#">Product Data List</a></li>
                </ul>
            </div>
          <div class="innerAll spacing-x2">
                <!-- <div class="col-sm-12" id="product_31"></div> -->
<?php echo $plugin->ShowMsg(); ?>
<style type="text/css" media="screen">
 #DataTables_Table_0_wrapper{width: 100%} 
</style>
<table  class="display nowrap example" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>#</th>
              <th>Category Name</th>
              <th>Sub Category Name</th>
              <th>Sub Category Items</th>
              <th>Name</th>
              <th>Photo</th>
              <th>New Price</th>
              <th>Old Price</th>
              <th>Quantity</th>
              <th>Date</th>
              <!-- <th>Position</th> -->
              <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                            $product = $obj->FlyQuery("SELECT 
                                                        p.id,
                                                        c.name as category_id,
                                                        sc.name as sub_category_id,
                                                        p.name,
                                                        p.photo,
                                                        p.short_details,
                                                        p.long_details,
                                                        p.new_price,
                                                        p.old_price,
                                                        p.quantity,
                                                        p.date,
                                                        scm.name as sub_category_menu_name
                                                        FROM product as p
                                                        LEFT JOIN category as c ON c.id = p.category_id
                                                        LEFT JOIN sub_category as sc ON sc.id = p.sub_category_id 
                                                        LEFT JOIN sub_category_menu as scm ON scm.id = p.`sub_category_menu_id`
                                                        ORDER BY p.priority ASC");

                            if(!empty($product)){
                                foreach ($product as $pro) {
                          ?>
                        <tr id="pr_<?=$pro->id?>">
                        
                          <td><?= $pro->id;?></td>
                          <td><?= $pro->category_id;?></td>
                          <td><?= $pro->sub_category_id;?></td>
                          <td><?= $pro->sub_category_menu_name?></td>
                          <td><?= $pro->name;?></td>
                          <td style="max-width:70px !important; overflow: hidden;"><?= $pro->photo;?></td>
                          <td align="center"><?= $pro->new_price;?></td>
                          <td align="center"><?= $pro->old_price;?></td>
                          <td align="center"><?= $pro->quantity;?></td>
                          <td><?= $pro->date;?></td>
                          <!-- <td>
                              <a class="up k-button k-button-icontext k-grid-edit"><span class="Up k-icon k-edit"></span>Move Up</a>
                              <a class="down k-button k-button-icontext k-grid-delete"  ><span class="k-icon k-delete"></span>Move Down</a>
                            
                          </td> -->
                          <td>
                             <a class="k-button k-button-icontext k-grid-edit" href="product.php?edit=<?= $pro->id; ?>"><span class="k-icon k-edit"></span>Edit</a>
                              <a class="k-button k-button-icontext k-grid-delete" href="product_data.php?del=<?= $pro->id; ?>" ><span class="k-icon k-delete"></span>Delete</a>
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
    th,td{
          max-width:110px !important;
word-wrap: break-word
          }
          tr{
            cursor: move;
          }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
    $('.example').DataTable( {
        "scrollX": true,
        "order":false,
        "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
    "pageLength": 25
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
                 url: 'ajax/update_drag_table.php'
                 });
            }
        });
    });

});


</script>


            </div>
        </div>
        <!-- // Product END -->

        <div class="clearfix"></div>
        <!-- // Sidebar menu & Product wrapper END -->
        
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