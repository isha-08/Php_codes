<!DOCTYPE html>
<html>
<body>
	<script type = "text/javascript">  
		function validate()
		{  
			var name=document.Membership.name.value;  
			var password=document.Membership.password.value;        
			if (name==null || name=="")
			{  
				alert("Name column must be filled");  
				return false;  
			}
			else
				alert("SUCCESSFULLY REGISTERED"); 
		}  
	</script>  
<body="container">
	<center><h3>Membership Form</h3>  
	<form name="Membership" method="post" action="" onsubmit="return validate()">  
		Name: <input type="text" name="name"><br><br>
		Password: <input type="password" name="password" pattern="[A-Za-z]{8}"><br><br>  
		<input type="submit" value="Register">  
	</form></center> 
</body>
</html>
