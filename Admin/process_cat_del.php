<?php session_start();
if(!isset($_GET["cid"])|| !ctype_digit($_GET["cid"]))
{
	header("location:categories.php");
	exit;
}

require_once("classes/dbo.class.php");
$q="delete from category where cat_id='".$_GET["cid"]."'";
$db->dml($q);

header("location:categories.php");
?>