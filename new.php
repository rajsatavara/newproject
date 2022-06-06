<html>
	<head>
		<title></title>
		<script type="text/javascript">
			function validate()
			{
				var name=document.myform.Name;
				var address=document.myform.Address;
				var email=document.myform.Email;
				var telephone=document.myform.Telephone;
				var price=document.myform.Price;
				
				if(name.value == "")
				{
					window.alert("please enter name");
					name.focus();
					return false;
				}
				if(address.value == "")
				{
					window.alert("please enter address");
					address.focus();
					return false;
				}
				if(email.value == "")
				{
					alert("please enter email");
					email.focus();
					return false;
				}
				if(email.value.indexOf("@",0) < 0)
				{
					alert("please enter valid email");
					email.focus();
					return false;
				}
				if(email.value.indexOf(".",0) < 0)
				{
					window.alert("please enter email in . symboll");
					email.focus();
					return false;
				}
				if(isNaN(telephone.value == ""))
				{
					alert("please enter phone number is numeric");
					telephone.focus();
					return false;
				}
				if((telephone.value).length < 10)
				{
					alert("please enter 10 number");
					telephone.focus();
					return false;
				}
				if(price.value == "")
				{
					window.alert("please enter price");
					price.focus();
					return false;
				}
				if(isNaN(price.value))
				{
					window.alert("please enter Numeric value");
					price.focus();
					return false;
				}
			}
		</script>
	</head>
	<body>
		<form method="POST" name="myform" onsubmit="return validate();">
			Name:<br/><input type="text" name="Name"><br/>
			Address:<br/><textarea name="Address"></textarea><br/>
			E-mail:<br/><input type="text" name="Email"><br/>
			Telephone:<br/><input type="text" name="Telephone"><br/>
			Price:<br/><input type="text" name="Price"><br/><br/>
			<input type="submit" name="submit">
		</form>
	</body>
</html>