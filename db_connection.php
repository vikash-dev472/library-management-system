<?php

if(isset($_POST['return']))
{
$student_id=$_POST['student_id'];
$book_id=$_POST['book_id'];

$conn=mysqli_connect("localhost","root","vikash123","project2");

$query="select * from issuee_books
where student_id='$student_id' 
and book_id='$book_id' 
and status='Issued'";

$result=mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0)
{

$update="update issuee_books 
set status='Returned', return_date=CURDATE() 
where student_id='$student_id' and book_id='$book_id'";

mysqli_query($conn,$update);

$books="update books set available_qty=available_qty+1 
where book_id='$book_id'";

mysqli_query($conn,$books);

echo "Book Returned Successfully";

}
else
{
echo "Record not found";
}

}

?>