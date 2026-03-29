<!DOCTYPE html>
<html>
<head>
	<title>LMS</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
	#main_content{
		padding: 30px;
		
		padding: 30px;
		border-radius: 10px;
		box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
		margin-top: 40px;


	}
	#side_bar{
		
		padding: 50px;
		width: 200px;
		height: 450px;
	}
	body{
		background-image: url("lib4.jpg");
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center;

	}
	h3{
		font-size: 22px;
		font-weight: 600;
	   color: white;
		margin-bottom: 15px;
		margin-right: 700px;
		transition: 0.3s;
		
		
	}

	.form-control{
     width: 250px;
     padding: 15px;
     border: 2px solid #ccc;
     transition: 0.3s;
     border-radius: 6px;
     font-size: 14px;
     height: 45px;
  

	}
	.form-control:focus{
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.4);

	}
	.btn-primary:hover{
		background: #0056b3;
	}
	.btn-primary:hover{
		width: 25%;
		padding: 12px;
		border-radius: 6px;
		font-size: 16px;
		font-weight: 500;
		background: #007bff;
		color: black;
		border: none;
		transition: 0.3s;
	}
	textarea.form-control{
		height: auto;
	}
	marquee{
		color: darkblue;
	}
</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Library Management System (LMS)
				</a>
			</div>
	         <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item">
		          <a class="nav-link" href="index.php">Admin Login</a>
		      </li>

		      <li class="nav-item">
		        <a class="nav-link" href="index.php">User Login</a>
		      </li>

		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Register</a>
		      </li>
		    </ul>
		</div>
   </nav><br>
  <span><marquee>This is library mangement system. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
      <div class="row">
		  <div class="col-md-4" id="side_bar">
			<h5>Library Timing</h5>
			<ul>
				<li>Opening: 8:00 AM</li>
				<li>Closing: 8:00 PM</li>
				<li>(Sunday Off)</li>
			</ul>
			<h5>What We provide ?</h5>
			<ul>
				<li>Full furniture</li>
				<li>Free Wi-fi</li>
				<li>News Papers</li>
				<li>Discussion Room</li>
				<li>RO Water</li>
				<li>Peacefull Environment</li>
			</ul>
		  </div>
		  <div class="col-md-8" id="main_content">
			<center><h3>Registration Form</h3></center>
			<form action="register.php" method="post">

				<div class="form-group">
					<label for="name">Full Name:</label>
					<input type="text" name="name" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="name">Email:</label>
					<input type="text" name="email" class="form-control"required>
				</div>

				<div class="form-group">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control"required>
				</div>

				<div class="form-group">
					<label for="name">Mobile Number:</label>
					<input type="text" name="mobile" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="name">Address:</label>
					<textarea rows="3" cols="40" class="form-control" name="address"></textarea>
					</div> 
					<button type="submit" class="btn btn-primary">Register</button>
				
              </form>
		</div>
     </div>
	  


   </body>
 </html> 