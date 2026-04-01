<?php
	$connection = mysqli_connect("localhost","root","vikash123");
	$db = mysqli_select_db($connection,"project2");
	$query = "delete from category where cat_id = $_GET[cid]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Category Deleted successfully...");
	window.location.href = "manage_cat.php";
</script>