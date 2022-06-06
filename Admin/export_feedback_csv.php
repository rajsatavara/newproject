<?php session_start();
if(!isset($_SESSION["adid"]))
{
	header("location:login.php");
	exit;
}
require_once("classes/dbo.class.php");
$fbq="select *,date_format(fb_date,'%d-%m-%y') as fb_date_formatted from feedback order by fb_id";
$fbres=$db->get($fbq);

$st="Id,Name,Phone,Email,Date,Subject,Desc\r\n";

while($fbrow=mysqli_fetch_assoc($fbres))
{
	$fbrow["fb_id"]=str_replace("\r\n","",str_replace(",","-",$fbrow["fb_id"]));
	$fbrow["fb_nm"]=str_replace("\r\n","",str_replace(",","-",$fbrow["fb_nm"]));
	$fbrow["fb_phone"]=str_replace("\r\n","",str_replace(",","-",$fbrow["fb_phone"]));
	$fbrow["fb_email"]=str_replace("\r\n","",str_replace(",","-",$fbrow["fb_email"]));
	$fbrow["fb_date_formatted"]=str_replace("\r\n","",str_replace(",","-",$fbrow["fb_date_formatted"]));
	$fbrow["fb_sub"]=str_replace("\r\n","",str_replace(",","-",$fbrow["fb_sub"]));
	$fbrow["fb_msg"]=str_replace("\r\n","",str_replace(",","-",$fbrow["fb_msg"]));
	
	$st.=$fbrow["fb_id"].",";
	$st.=$fbrow["fb_nm"].",";
	$st.=$fbrow["fb_phone"].",";
	$st.=$fbrow["fb_email"].",";
	$st.=$fbrow["fb_date_formatted"].",";
	$st.=$fbrow["fb_sub"].",";
	$st.=$fbrow["fb_msg"];
	$st.="\r\n";
}
header("Content-type:text/csv");
header("Content-Disposition:attachment;filename=feedbacks_".date("d_m_Y").".csv");
header("Pragma:no-cache");
header("Expire:0");

echo $st;

?>