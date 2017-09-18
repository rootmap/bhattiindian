<?php
header("Content-type: application/json");
include('../class/auth.php');

$magrition = $obj->FlyQuery("SELECT * FROM offer ");
//echo $magrition;
$var=array("data"=>$magrition);
echo json_encode($var);
?>