<?php
session_start();


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Electronix Store</title>
<?php require_once("inc/head.php");?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#login").slideDown("slow",function(){
		
		$("input[type=text]:first").focus();
		
		});
		
	});
	</script>
</head>
<body>
<div id="main_container">
  <div class="top_bar">
    <div class="top_search">
      <div class="search_text"><a href="http://all-free-download.com/free-website-templates/">Advanced Search</a></div>
      <input type="text" class="search_input" name="search" />
      <input type="image" src="images/search.gif" class="search_bt"/>
    </div>
    <div class="languages">
      <div class="lang_text">Languages:</div>
      <a href="http://all-free-download.com/free-website-templates/" class="lang"><img src="images/tiranga.png" width="20"  height="20"alt="" border="0" /></a> <a href="http://all-free-download.com/free-website-templates/" class="lang"></a> </div>
  </div>
  <div id="header">
    <?php  require_once("inc/logo.php");?>
    </div>
    <!-- end of oferte_content-->
  </div>

    
      
           
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar"><span class="login_logo">ForgotPassword</span></div>
      <div>
			<div id="login" style="width:300px;padding:30px;margin:0 auto;">
              <form   action="process_forgot_password.php" method="post">
				
				Email:<br/><br/>
				<input type="text" name="unm" id="unm" style=" padding:5px;"/><br/><br/>
				
				
				
				<input type="submit" value="Next &rarr;" style="width:70px; height:30px;  border:1px solid #a1a1a1;" />
				<input type="button" value="reset" style="width:70px; height:30px;  border:1px solid #a1a1a1;"/><br/><br/>
				
				
              </form>
			  
			</div>
		</div>
		 <div>
			<div id="login" style="width:300px;padding:30px;margin:0 auto;">
              <form   action="process_login.php" method="post">
				
			<b>Answer Follwing Qustion:</b><br/><br/>
				<input type="text" name="unm" id="unm" style=" padding:5px;"/><br/><br/>
				
				
				
				<input type="submit" value="Next &rarr;" style="width:70px; height:30px;  border:1px solid #a1a1a1;" />
				<input type="button" value="reset" style="width:70px; height:30px;  border:1px solid #a1a1a1;"/><br/><br/>
				
				
              </form>
			  
			</div>
		</div>


    <!-- end of center content -->
  </div>
  <!-- end of main content -->
  <div class="footer">
    <?php  require_once("inc/footer.php"); ?>
</div>
</div>
<!-- end of main_container -->
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
