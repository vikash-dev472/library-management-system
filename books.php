<?php
session_start();
include("db.php");

$user_id = $_SESSION['user_id'];

$query = "SELECT * FROM books";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)){

    $book_id = $row['id'];

    $check = mysqli_query($conn,"SELECT * FROM book_request 
    WHERE user_id='$user_id' AND book_id='$book_id'");

    $req = mysqli_fetch_assoc($check);
?>

<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['author']; ?></td>

    <td>
    <?php if($req){ ?>
        <button disabled><?php echo $req['status']; ?></button>
    <?php } else { ?>
        <a href="request_book.php?book_id=<?php echo $book_id; ?>">
            <button>Request Book</button>
        </a>
    <?php } ?>
    </td>
</tr>

<?php } ?>