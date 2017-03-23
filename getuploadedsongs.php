<?php
$dir    = './music';
$files1 = scandir($dir);
//print_r($files1);
$files1=array_splice($files1,2,count($files1)-2);
//print_r($files1);
echo json_encode($files1);
?>
