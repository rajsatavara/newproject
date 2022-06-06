<?php


$img1=time().rand(1000,9999)."_".$_FILES["img1"]["name"];
move_uploaded_file($_FILES["img1"]["tmp_name"],"uploads/".$img1);


require_once("class/classes.php");
$q="insert into registration(r_nm,r_add,r_cty,r_mob,r_img1)values('".$_POST["nm"]."','".$_POST["add"]."','".$_POST["cty"]."','".$_POST["mob"]."','".$img1."')";
$db->dml($q);

header ("location:registration.php");
?>