<!DOCTYPE html>
<?php include 'config.php' ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .navbar 
        {
            overflow: hidden;
            background-color: #333;
            position: fixed; /* Set the navbar to fixed position */
            top: 0; /* Position the navbar at the top of the page */
            width: 100%; /* Full width */
        }
        h1,p
        {
            color:#fff;
        }
        .jobs
        {
            border:1px solid black;
            box-shadow:5px 5px 5px 5px grey;
            margin:10px;
            padding:10px;
        }
        .jumbotron
        {
            height:300px;
            background-image:
            url('https://images.pexels.com/photos/5325056/pexels-photo-5325056.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            background-size:100% 450px;

        }
    </style>
</head>
<body style="padding:0; margin:0;">
<div class="row mr-0">
    <div class="col-12 container-fluid">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Job Portal</h1>
                <p class="lead">Best Jobs Available Matching Your Skills</p>
            </div>        
        </div>
    </div>
</div>
<div class="row m-0">
    <?php 
	
    $sql="SELECT cname,position,Jdesc,CTC,skills FROM jobs";
    $result=mysqli_query($conn,$sql);
    if($result->num_rows>0)
    {
        while($rows=$result->fetch_assoc())
        {
            echo'
            <div class="col-md-4">
                <div class="jobs">
                    <h3 style="text-align:center;">'.$rows["position"].'</h3>
                    <h4 style="text-align:center;">'.$rows["cname"].'</h4>
                    <p style="color:black; text-align:justify;">'.$rows["Jdesc"].'</p>
                    <p style="color:black;"><b>Skills Required: </b>'.$rows["skills"].'</p>
                    <p style="color:black;"><b>CTC: </b>'.$rows["CTC"].'</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" 
                    data-bs-whatever="@fat">Apply Now</button>
                </div>
            </div>';
        }
    }
    else
    {
        echo "";
    }
    ?>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">  
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<h5 class="modal-title" id="exampleModalLabel">Apply for Jobs</h5>
    				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    			</div>
    			<div class="modal-body">
    				<form method="POST">
    					<div class="mb-3">
    						<label for="recipient-name" class="col-form-label">Name:</label>
    						<input type="text" class="form-control" name="name">
    					</div>
    					<div class="mb-3">
    						<label for="message-text" class="col-form-label">Applying For:</label>
    						<input type="text" class="form-control" name="apply">
    					</div>
    					<div class="mb-3">
    						<label for="recipient-name" class="col-form-label">Qualification:</label>
    						<input type="text" class="form-control" name="qual">
    					</div>
    					<div class="mb-3">
    						<label for="recipient-name" class="col-form-label">Year Passout:</label>
    						<input type="text" class="form-control" name="year">
    					</div>
    					<div class="modal-footer">
    						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    						<button type="submit" name="submit"class="btn btn-primary">Apply</button>
						</div>
    				</form>
    			</div>
    		</div>
    	</div>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>