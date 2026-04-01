<?php
include "db_connection.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Return Book</title>
</head>

<body>

<h2>Return Book</h2>

<form method="post">
Student ID :
<input type="text" name="student_id" required><br><br>

Book ID :
<input type="text" name="book_id" required><br><br>

<input type="submit" name="return" value="Return Book">
</form>

</body>
</html>