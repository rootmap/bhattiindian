
<?php
header("Content-type: application/json");
include('../class/auth.php');

$magrition = $obj->FlyQuery("SELECT 
                            p.id,
                            c.name as category_id,
                            sc.name as sub_category_id,
                            p.name,
                            p.photo,
                            p.short_details,
                            p.long_details,
                            p.new_price,
                            p.old_price,
                            p.quantity,p.date
                            FROM product as p
                            LEFT JOIN category as c ON c.id = p.category_id
                            LEFT JOIN sub_category as sc ON sc.id = p.sub_category_id");
//echo $magrition;
$var=array("data"=>$magrition);
echo json_encode($var);
?>