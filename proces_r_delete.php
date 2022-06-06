<?php

require_once("class/classes.php");


$q=" select * from registration where r_id='".$_GET["rid"]."'";
$file=$db->get($q);
$prow=mysqli_fetch_array($file);
unlink("uploads/".$prow["r_img1"]);

$del="delete from registration where r_id='".$_GET["rid"]."'";
$db->dml($del);

header("location:registration.php");
?>