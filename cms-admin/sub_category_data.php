<?php
$table="sub_category"; ?><?php 
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
            <h1 class="content-heading bg-white border-bottom">sub category Data</h1>
            <div class="innerAll bg-white border-bottom">
                <ul class="menubar">
                    <li><a href="sub_category.php">Create New sub category</a></li>
                    <li class="active"><a href="#">sub category Data List</a></li>
                </ul>
            </div>
          <div class="innerAll spacing-x2">
                <table  class="display nowrap example" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>#</th>
              <th>Category Name</th>
              <th>Sub Category Name</th>
              <th>Page Link</th>
              <th>Active / Inactive</th>
              
              <th>Date</th>
              <!-- <th>Position</th> -->
              <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                            $subcategory = $obj->FlyQuery("SELECT 
                                sc.id,
                                c.name as category_id,
                                sc.name,
                                sc.photo,
                                sc.page_link,
                                sc.is_active,
                                sc.date
                                FROM sub_category as sc
                                LEFT JOIN category as c ON c.id = sc.category_id ORDER BY sc.priority ASC");

                            if(!empty($subcategory)){
                                foreach ($subcategory as $subcat) {
                          ?>
                        <tr id="pr_<?=$subcat->id?>">
                        
                          <td><?= $subcat->id;?></td>
                          <td><?= $subcat->category_id;?></td>
                          <td><?= $subcat->name;?></td>
                          <td><?= $subcat->page_link;?></td>
                          <td>
                              <?php
                                if($subcat->is_active==1){
                                    ?>
                                    Active
                                    <?php
                                    }else{
                                        echo 'Inactive';
                                    }
                                
                              ?>
                          </td>
                          <td><?= $subcat->date;?></td>
                          <!-- <td>
                              <a class="up k-button k-button-icontext k-grid-edit"><span class="Up k-icon k-edit"></span>Move Up</a>
                              <a class="down k-button k-button-icontext k-grid-delete"  ><span class="k-icon k-delete"></span>Move Down</a>
                            
                          </td> -->
                          <td>
                             <a class="k-button k-button-icontext k-grid-edit" href="sub_category.php?edit=<?= $subcat->id; ?>"><span class="k-icon k-edit"></span>Edit</a>
                              <a class="k-button k-button-icontext k-grid-delete" href="sub_category.php?del=<?= $subcat->id; ?>" ><span class="k-icon k-delete"></span>Delete</a>
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
                 url: 'ajax/update_drag_subcategory_table.php'
                 });
            }
        });
    });

});


</script>
            </div>
        </div>
        <!-- // sub category END -->

        <div class="clearfix"></div>
        <!-- // Sidebar menu & sub category wrapper END -->
        
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