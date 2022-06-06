<?php session_start();
require_once("classes/dbo.class.php");
$fbq="select *,date_format(fb_date,'%d-%m-%y') as fb_date_formatted from feedback order by fb_id";
$fbres=$db->get($fbq);


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Electronix Store</title>
<?php require_once("inc/head.php")?>
<script type="text/javascript">
$(document).ready(function() {

		$('#example').DataTable();
		
		 $('#example tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('selected');
    } );
		
	});
</script>

</head>
<body>
<div id="main_container">
    <!-- end of oferte_content-->
  <div id="main_content">
	<h1>Admin</h1>
    <div id="menu_tab">
      <div class="left_menu_corner"></div>
	  <?php require_once("inc/menu.php")?>
      <div class="right_menu_corner"></div>
    </div>
    <!-- end of menu tab -->
    <div class="crumb_navigation"> Navigation: <span class="current">Home</span> </div>
          <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar"><h1><span class="reg_logo">FeedBack</span></h1></div>
	  <hr color="#e1e1e1" size="1"/>
		<a href="export_feedback_csv.php">Export to csv</a>
      <div class="prod_box">
			
		<table width="100%" class="display" id="example" >
		
		<thead>
			<tr>
				<th></th>
				<th></th>
				<th width="50%"><b>info</b></th>
				<th width="50%"><b>Desc</b></th>
			</tr>
			</thead>
			
			<tbody>
			<?php
			while($fbrow=mysqli_fetch_assoc($fbres))
			{
				echo'
				<tr>
				
					<td valign="top"><a href="process_feedback_del.php?fbid='.$fbrow["fb_id"].'"><img src="images/cross.png"/></a></td>
					<td valign="top"></td>
					<td valign="top">'.$fbrow["fb_nm"].'&bull;
					'.$fbrow["fb_phone"].'&bull;<br/>
					'.$fbrow["fb_email"].'&bull;'.$fbrow["fb_sub"].'
					<br/>&bull;'.$fbrow["fb_date_formatted"].'
					</td>
					
					<td  valign="top">'.$fbrow["fb_msg"].'</td>
				</tr>
				
				
				';
				}
			?>
			</tbody>
		</table>	
		
        
        </div>
            
    </div>
    <!-- end of center content -->
  </div>
  
  <!-- end of main content -->
  
  <div class="footer">
  <hr/>
    <?php  require_once("inc/footer.php"); ?>
</div>
<!-- end of main_container -->
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
