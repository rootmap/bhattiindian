<?php $table = "sub_category"; ?>
<?php
header("Content-type: application/json");
include('../class/auth.php');

$magrition = $obj->FlyQuery("SELECT 
                                sc.id,
                                c.name as category_id,
                                sc.name,
                                sc.photo,
                                sc.page_link,
                                sc.date
                                FROM sub_category as sc
                                LEFT JOIN category as c ON c.id = sc.category_id");
//echo $magrition;
$var=array("data"=>$magrition);
echo json_encode($var);
?>