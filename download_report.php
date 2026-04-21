<?php
include 'db.php';

// Excel download headers
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=report.xls");

echo "Student ID\tBook Name\tBook Author\tIssue Date\n";

$query = mysqli_query($conn, "SELECT * FROM issuee_books");

while($row = mysqli_fetch_assoc($query)) {
    echo $row['student_id']."\t".
         $row['book_name']."\t".
         $row['book_author']."\t".
         $row['issue_date']."\n";
}
?>