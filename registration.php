<?php

require_once("class/classes.php");
$q=" select * from registration order by r_id";
$regres=$db->get($q);
?>

<html>
	<head>
	<link rel="stylesheet" type="text/css" href="css/custom.css" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	
	<link rel="stylesheet" type="text/css" href="css/w3.css" "/>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




	</head>
	<title> New Project</title>
	
	<script type="text/javascript">
		function validate()
		{
			var name=document.myform.nm;
			var address=document.myform.add;
			var city=document.myform.cty;
			var mobile=document.myform.mob;
			var image=document.myform.img1;
			
			
			if (name.value == "")
			{
				window.alert("Please enter your name.");
				name.focus();
				return false;
			}
			if (address.value == "")
			{
				window.alert("Please enter your Address.");
				address.focus();
				return false;
			}
			if (city.value == "")
			{
				alert("Please enter your city.");
				city.focus();
				return false;
			}
			if(isNaN(mobile.value == ""))
			{
				alert("only numeric value");
				mobile.focus();
				return false;
			}
			if ((mobile.value).length < 10)
			{
				alert("Please enter your mobile 10 digit.");
				mobile.focus();
				return false;
			}
			if (image.value == "")
			{
				alert("Please select image.");
				image.focus();
				return false;
			}
			
			//return true;
		}
	</script>
	
	<body>
	

	<div class="header">
		<img class="logo" src="image/8.jpg"/>
		<ul class="menu">
		
			<li><a href="">Contact</a></li>
					<li><a href="">Service</a></li>
					<li><a href="">About</a></li>
					<li><a href="">Home</a></li>
					

		</ul> 
	</div>
				
				<div class="main">
				<div class="category">
					<h3 style="background:#77699d;padding:10px;color:white;">Category</h3>
					<ul class="boxstyle">
					<li><a href="">FeedBack</a></li>
					<li><a href="">History</a></li>
					<li><a href="">Profile</a></li>
					<li><a href="">Information</a></li>
					<li><a href="">Registration</a></li>
					</ul>
				</div>
					
				<div class="main2">
			<div class="fleft">
				<h2 style="color:#77699d;"><b>Registration</b></h2>
					<form  method="POST" action="process_reg.php" enctype="multipart/form-data" name="myform" onsubmit="return validate(); ">
					<label><i class="fa fa-user" aria-hidden="true"></i>Name:</label><br/>
					<input type="text" name="nm"/><br/>
					
					<label><i class="fa fa-location-arrow" aria-hidden="true"></i>Address:</label><br/>
					<input type="text" name="add"/><br/>
					
					<label><i class="fa fa-home" aria-hidden="true"></i>City:</label><br/>
					<input type="text" name="cty"/><br/><br>	
		</div>
		<div class="fright">
					<label><i class="fa fa-mobile" aria-hidden="true"></i>Mobile:</label><br/>
					<input type="text" name="mob"/><br/>
					<label><i class="fa fa-picture-o" aria-hidden="true"></i>Image:</label><br/>
					<input type="file" name="img1" /><br/><br>
					<input type="submit" name="submit" class="submit_btn" align="left">
					</div>
					</div>
		</form>
		</div>
		
		
		<table border="0" align="center" width="70%">
				
				<tr class="dis" align="center">
					<th>Name</th>
					<th>Address</th>
					<th>City</th>
					<th>Mobile</th>
					<th>Image</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php
				while($rrow=mysqli_fetch_assoc($regres))
				{
					echo '
					
						<tr class="dbdis" align="center">
						<td data-title="Name">'.$rrow["r_nm"].'</td>
						<td data-title="Address">'.$rrow["r_add"].'</td>
						<td data-title="City">'.$rrow["r_cty"].'</td>
						<td data-title="Mobile">'.$rrow["r_mob"].'</td>
						<td data-title="Image"><img src="uploads/'.$rrow["r_img1"].'" width="60" height="60"/></td>
						<td data-title="Edit"><a href="process_r_update.php?rid='.$rrow["r_id"].'">Edit</td>
						<td data-title="Delete"><a href="proces_r_delete.php?rid='.$rrow["r_id"].'">Delete</td>
						</tr>
						'
						;
				}
						?>
		</table>
		
		<div class="footer">
		<div class="foot" >
			<p><b>Contact:</b><br>
				<i class="fa fa-map-marker" aria-hidden="true">
				"krishna" sundarvan society adarsh nagar<br>
					garbi chowk joshipara</i><br>
					
				<span class="logcontact"><i class="fa fa-mobile" aria-hidden="true"></i>
8401836615<span>
			</p>
			</div>
			<div class="social">
			<a href="www.facebook.com"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
				<a href="www.youtube.com"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
				<a href="www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			</div>
			<span class="create">
				Create By Vishal
			</span>
			
		</div>
		
	</body>
</html>
