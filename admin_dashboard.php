<?php
 require('functions.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>

  	<style type="text/css">
	#side_bar{
	
		padding: 50px;
		width: 300px;
		height: 450px;

	}
	body{
		background-color: black;
		
		
	}
	.card-header{
		color: black;
		background-color: blueviolet;

	}
	.card-body{
		color: pink;
		background-color: green;
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

	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
		<div class="container-fluid">
			
		    <ul class="nav navbar-nav navbar-center">
		      <li class="nav-item">
		        <a class="nav-link" href="admin_dashboard.php">Dashboard</a>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Books </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_book.php">Add New Book</a>
	        		<a class="dropdown-item" href="manage_book.php">Manage Books</a>
	        	</div>
		      </li>

		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Category </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_cat.php">Add New Category</a>
	        		<a class="dropdown-item" href="manage_cat.php">Manage Category</a>
	        	</div>
		      </li>
                
                


		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Authors</a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_author.php">Add New Author</a>
	        		<a class="dropdown-item" href="manage_author.php">Manage Author</a>
	        	</div>
		      </li>
	          <li class="nav-item">
		        <a class="nav-link" href="issue_book.php">Issue Book</a>
		      </li>    

           </ul>
       </div>
     </nav>
	<span><marquee>This is library mangement system. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	   <div class="row">
		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Registered User</div>
				<div class="card-body">
					<p class="card-text">No of total Users:<?php echo get_user_count();?></p>
					<a href="regusers.php"class="btn btn-danger"  target="_blank">View Registered Users</a>
				</div>
			</div>
		</div>
		<div class="col-md-3" >
			<div class="card bg-light" style="width: 300px" >
				<div class="card-header">Registered Book Available </div>
				<div class="card-body">
					<p class="card-text">No. of available  books : <?php echo get_book_count();?></p>
					<a href="regbooks.php" class="btn btn-primary" target="_blank">View Registered Books Available</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Registered Categories</div>
				<div class="card-body">
					<p class="card-text">No of Book's Categories: <?php echo get_category_count();?></p>
					<a href="regcat.php"class="btn btn-warning"  target="_blank">View Categories</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Registered Authors</div>
				<div class="card-body">
					<p class="card-text">No of availbale Authors: <?php echo get_author_count();?> </p>
					<a href="regauth.php"  class="btn btn-primary" target="_blank">View Authors</a>
				</div>
			</div>
		</div>
	</div><br><br>
	<div class="row">
		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Book Issued</div>
				<div class="card-body">
					<p class="card-text">No of book issued: <?php echo get_issue_book_count();?></p>
					<a href="view_issued_book.php" class="btn btn-success"  target="_blank">View Issued Books</a>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
	</div>

	  

</body>
</html>
