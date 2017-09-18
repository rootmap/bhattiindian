
<?php
header("Content-type: application/json");
include('../class/auth.php');

$magrition = $obj->FlyQuery("SELECT 
                            cr.id,
                            p.name as product_id,
                            cr.date
                            FROM chef_recommended as cr
                            LEFT JOIN product as p ON p.id = cr.product_id");
//echo $magrition;
$var=array("data"=>$magrition);
echo json_encode($var);
?>