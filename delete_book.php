<?php
	$connection = mysqli_connect("localhost","root","vikash123");
	$db = mysqli_select_db($connection,"project2");
	$query = "delete from books where book_no = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Book Deleted successfully...");
	window.location.href = "manage_book.php";
</script>