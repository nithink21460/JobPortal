<?php
$server="localhost";
$username="root";
$password="";
$database="nithin";

$conn=mysqli_connect($server,$username,$password,$database);

if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
echo"";
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$number=$_POST['phone_no'];
	$password=$_POST['password'];

	$sql="INSERT INTO user(name,email,password,number) VALUES('$name','$email','$password','$number')";
	if(mysqli_query($conn,$sql))
	{
		echo "Records inserted successully";
	}
	else
	{
		echo "ERROR:could not able to execute $sql.".mysqli_error($conn);
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<title>Register</title>
    <style>
    	body
		{
        	background-image:
			url("https://images.pexels.com/photos/5668854/pexels-photo-5668854.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
        	background-size:cover;
      	}
      	form 
		{
        	background-color:#fff;
        	margin-top: 2em;
        	margin-left:15em;
        	margin-right:20em;
        	padding:20px;
        	box-shadow: 0px 0px 16px #DA70D6;
		}
    </style>
</head>
<body>
	<div class="container">
		<form onsubmit ="return validateForm()" method="POST">
			<div class="mb-3">
				<label for="exampleInputName" class="form-label">Full Name</label>
				<input type="text" class="form-control" id="exampleInputName" name="name" required>
			</div>
			<div class="mb-3">
				<label for="exampleInputEmail" class="form-label">Email Address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			<div class="mb-3">
				<label for="exampleInputNumber" class="form-label">Phone Number</label>
				<input type="number" class="form-control" id="exampleInputNumber" name="phone_no" required>
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Password</label>
				<input type="password" class="form-control" id="pswd1" name="password" required>
				<span id = "message1" style="color:red"> </span>
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword2" class="form-label">Confirm Password</label>
				<input type="password" class="form-control" id="pswd2" required>
				<span id = "message2" style="color:red"> </span>
			</div>
			<input type="submit" class="btn btn-primary" name="submit">
			<p style="text-align:center";>Already Registered? <a href="login.php">Login</a></p>
		</form>
	</div>

	<script>
		function validateForm() 
		{  
    		//collect form data in JavaScript variables  
    		var pw1 = document.getElementById("pswd1").value;  
    		var pw2 = document.getElementById("pswd2").value; 
			//check empty password field  
			if(pw1 == "") 
			{  
        		document.getElementById("message1").innerHTML = "**Fill the password please!";  
    			return false;  
    		}  
    
    		//check empty confirm password field  
    		if(pw2 == "") 
			{  
      			document.getElementById("message2").innerHTML = "**Enter the password please!";  
      			return false;  
    		}   
     
    		//minimum password length validation  
    		if(pw1.length < 8) 
			{  
      			document.getElementById("message1").innerHTML = "**Password length must be atleast 8 characters";  
      			return false;  
    		}  
  
    		//maximum length of password validation  
    		if(pw1.length > 15) 
			{  
      			document.getElementById("message1").innerHTML = "**Password length must not exceed 15 characters";  
      			return false;  
    		}  
    
    		if(pw1 != pw2) 
			{  
      			document.getElementById("message2").innerHTML = "**Passwords are not same";  
      			return false;  
    		} 
			else 
			{  
      			form("Registration Successful!!!");  
    		}  
 		}   
	</script>
</body>
</html>