<?php
$conn = mysqli_connect("localhost", "root", "vikash123", "project2");


$search = "";
if(isset($_GET['search'])){
    $search = $_GET['search'];
    $query = "SELECT * FROM books 
              WHERE book_name LIKE '%$search%' 
              OR author_id LIKE '%$search%'";
} else {
    $query = "SELECT * FROM books";
}

$result = mysqli_query($conn, $query);
?>


<a class="navbar-brand" href="user_dashboard.php">Books List </a>

<form method="GET">
    <input type="text" name="search" placeholder="Search by book or author" value="<?php echo $search; ?>">
    <input type="submit" value="Search">
</form>

<br>

<table border="1">
<tr>
    <th>Book ID</th>
    <th>Book Name</th>
    <th>Author_ID</th>
    <th>Book_No</th>
    <th>Quantity</th>
    
</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
?>
<tr>
    <td><?php echo $row['book_id']; ?></td>
    <td><?php echo $row['book_name']; ?></td>
    <td><?php echo $row['author_id']; ?></td>
     <td><?php echo $row['book_no']; ?></td>
    <td><?php echo $row['quantity']; ?></td>

   
    <td>
        <?php
        if($row['quantity'] > 0){
            echo "Available";
        } else {
            echo "Not Available";
        }
        ?>
    </td>
</tr>
<?php } ?>
</table>