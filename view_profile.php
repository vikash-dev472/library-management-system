<?php
session_start();
 
	#fetch data from database
	$connection = mysqli_connect("localhost","root","vikash123");
	$db = mysqli_select_db($connection,"project2");
	$name = "";
	$email = "";
	$mobile = "";
	$address = "";
	$query = "select * from sys8 where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$email = $row['email'];
		$mobile = $row['mobile'];
		$address = $row['address'];
	}



?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>

<style type="text/css">
	
	#side_bar{
		background-color: whitesmoke;
		padding: 50px;
		width: 300px;
		height: 450px;
	}
	
     .navbar{
     	display: flex;
     	flex-wrap: wrap;
     	justify-content: space-between;
        padding: 10px;
     }
     .navbar .navbar-brand{
     	font-size: 18px;
     }

     .row{
     	display: flex;
     	flex-wrap: wrap;
     }
     .col-md-4{
     	flex: 1 1 300px;
     	padding: 10px;
     }

   marquee {
      font-size: 14px;
   }
   @media (max-width: 768px) {
   	marquee {
   		font-size: 12px	;
   	}
   }

</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="user_dashboard.php">Library Management System (LMS)
				</a>
			</div>
	        <font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
	        <font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></span></font>

		    <ul class="nav navbar-nav navbar-right">
		       <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile
	        	 </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="view_profile.php">View Profile</a>
	        
	        		<a class="dropdown-item" href="change_password.php">Change Password</a>
	        	</div>
		      </li>
		      <li class="nav-item">
		    <a class="nav-link" href="logout.php">Logout</a>
		      </li>

		    </ul>
		</div>
	</nav><br>
	<span>This is library mangement system. Library opens at 8:00 AM and close at 8:00 PM</span><br><br>
	   
	   <center><h4>Student Profile Detail</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form>
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control" value="<?php echo $name;?>" disabled>
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="text"  class="form-control" value="<?php echo $email;?>" disabled>
					</div>
					<div class="form-group">
						<label for="mobile">Mobile:</label>
						<input type="text" class="form-control" value="<?php echo $mobile;?>" disabled>
					</div>
					<div class="form-group">
						<label for="address">Address:</label>
						<textarea rows="3" cols="40" disabled="" class="form-control"><?php echo $address;?></textarea>
					</div>
				</form>
			</div>
         </div>
</body>
</html>