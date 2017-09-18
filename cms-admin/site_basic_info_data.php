<?php
$table="site_basic_info"; ?><?php 
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
    </head>
    <body class="">
		<?php 
		include('include/topnav.php'); 
		include('include/mainnav.php'); 
		?>
        <div id="content">
        	<h1 class="content-heading bg-white border-bottom">Site Basic Info Data</h1>
            <div class="innerAll bg-white border-bottom">
                <ul class="menubar">
                    <li><a href="site_basic_info.php">Create New Site Basic Info</a></li>
                    <li class="active"><a href="#">Site Basic Info Data List</a></li>
                </ul>
            </div>
          <div class="innerAll spacing-x2">
                <div class="col-sm-12" id="site_basic_info_25"></div>
            </div>
        </div>
        <!-- // Site Basic Info END -->

        <div class="clearfix"></div>
        <!-- // Sidebar menu & Site Basic Info wrapper END -->
        
        <?php include('include/footer.php'); ?>
        <!-- // Footer END -->
    </div>
    <!-- // Main Container Fluid END -->
    <!-- Global -->
    <script id="edit_site_basic_info" type="text/x-kendo-template">
             <a class="k-button k-button-icontext k-grid-edit" href="site_basic_info.php?edit=#= id#"><span class="k-icon k-edit"></span>Edit</a>
            </script>
    <script id="delete_site_basic_info" type="text/x-kendo-template">
                    <a class="k-button k-button-icontext k-grid-delete" onclick="javascript:deleteClick(#= id #);" ><span class="k-icon k-delete"></span>Delete</a>
            </script>        
    <script type="text/javascript">
                function deleteClick(site_basic_info_id) {
                    var c = confirm("Do you want to delete?");
                    if (c === true) {
                        $.ajax({
                            type: "POST",
                            dataType: "json",
                            url: "./json_data/banner_list.php",
                            data: {id: site_basic_info_id,table:"site_basic_info",acst:3},
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
									"table":"site_basic_info_view",
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
                                    id: {nullable: true},site_name: {type: "string"},photo: {type: "string"},address: {type: "string"},phone_number: {type: "string"},restaurant_open_1: {type: "string"},restaurant_open_2: {type: "string"},facebook_link: {type: "string"},twitter_link: {type: "string"},tripadvisor_link: {type: "string"},yelp_link: {type: "string"},
									date: {type: "string"}
                                }
                            }
                        }
                    });
                    jQuery("#site_basic_info_25").kendoGrid({
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
                        columns: [{field: "site_name", title: "Site Name", width: "150px"},
                        {field: "photo", title: "Photo", width: "150px"},
                        {field: "address", title: "Address", width: "150px"},
                        {field: "phone_number", title: "Phone Number", width: "150px"},
                        {field: "restaurant_open_1", title: "Restaurant Open 1", width: "150px"},
                        {field: "restaurant_open_2", title: "Restaurant Open 2", width: "150px"},
                        {field: "facebook_link", title: "Facebook Link", width: "150px"},
                        {field: "twitter_link", title: "Twitter Link", width: "150px"},
                        {field: "tripadvisor_link", title: "Tripadvisor Link", width: "150px"},
                        {field: "yelp_link", title: "Yelp Link", width: "150px"},
							{field: "date", title: "Record Added", width: "150px"},
							{
                                title: "Edit", width: "150px",
                                template: kendo.template($("#edit_site_basic_info").html())
                            },
							{
                                title: "Delete", width: "150px",
                                template: kendo.template($("#delete_site_basic_info").html())
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
</html>