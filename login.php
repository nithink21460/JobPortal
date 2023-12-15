<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<title>Login</title>
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
        	margin-top: 15em;
        	margin-left:15em;
        	margin-right:20em;
        	padding:20px;
        	box-shadow: 0px 0px 16px #DA70D6;
		}
    </style>
</head>

<body>
    <div class="container">
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="Login">Submit</button>
            <p style="text-align:center";>New User?<br>Create Account <a href="register.php">Sign Up</a></p>
        </form>
    </div>
</body>
</html>