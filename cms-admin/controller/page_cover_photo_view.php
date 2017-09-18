<?php
header("Content-type: application/json");
include('../class/auth.php');

$magrition = $obj->FlyQuery("SELECT 
							pcp.id,
							c.name as category_id,
							sc.name as sub_category_id,
							pcp.photo
							FROM page_cover_photo as pcp
							LEFT JOIN category as c ON c.id = pcp.category_id
							LEFT Join sub_category as sc On sc.id = pcp.sub_category_id");
//echo $magrition;
$var=array("data"=>$magrition);
echo json_encode($var);
?>