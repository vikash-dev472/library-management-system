<?php
   
   session_start();
	$connection = mysqli_connect("localhost","root","vikash123");
	$db = mysqli_select_db($connection,"project2");
	$book_name = "";
	$author = "";
	$book_no = "";
	$query = "select book_name,book_author,book_no from issuee_books where student_id = $_SESSION[id] and status = 1";
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
	.dropdown-menu{
		border: none;
		background-color: transparent;
		padding-left: 15px;
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

	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
		<div class="container-fluid">
			
		    <ul class="nav navbar-nav navbar-center">
		      <li class="nav-item">
		        <a class="nav-link" href="admin_dashboard.php">Dashboard</a>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Books </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="">Add New Book</a>
	        		<a class="dropdown-item" href="">Manage Books</a>
	        	</div>
		      </li>

		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Category </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="">Add New Category</a>
	        		<a class="dropdown-item" href="">Manage Category</a>
	        	</div>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Authors</a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="">Add New Author</a>
	        		<a class="dropdown-item" href="">Manage Author</a>
	        	</div>
		      </li>
	          <li class="nav-item">
		        <a class="nav-link" href="issue_book.php">Issue Book</a>
		      </li>    

           </ul>
       </div>
     </nav>
	<span>This is library mangement system. Library opens at 8:00 AM and close at 8:00 PM</span><br><br>
	   <center><h4>Registered Users Detail</h4><br></center>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form>
					<table class="table-bordered" width="900px" style="text-align: center">
						<tr>
							<th>Book Name:</th>
							<th>Book Author:</th>
							<th>Book Number:</th>
							
						</tr>
				
					<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							$book_name = $row['book_name'];
							$author = $row['book_author'];
							$book_no = $row['book_no'];
							
					   ?>
						<tr>
							
							<td><?php echo $book_name;?></td>
							<td><?php echo $author;?></td>
							<td><?php echo $book_no;?></td>
                      
                   </tr>
					<?php
						}
					?>	
				</table>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>


	  

</body>
</html>
