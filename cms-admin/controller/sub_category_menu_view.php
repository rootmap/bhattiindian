<?php $table = "sub_category"; ?>
<?php
header("Content-type: application/json");
include('../class/auth.php');

$magrition = $obj->FlyQuery("SELECT 
							scm.id,
							c.name as category_id,
							sc.name as sub_category_id,
							scm.name,
							scm.`details`,
							CASE scm.is_active
							when 1 then 'Active'
							else 'Inactive'
							end as is_active,
							scm.`date`
							FROM `sub_category_menu` as scm
							LEFT JOIN category as c on c.id = scm.`category_id`
							LEFT JOIN sub_category as sc on sc.id = scm.`sub_category_id`

							");
//echo $magrition;
$var=array("data"=>$magrition);
echo json_encode($var);
?>