<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Library Report</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .container {
            width: 90%;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .download-btn {
            display: inline-block;
            margin-bottom: 15px;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .download-btn:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #007bff;
            color: white;
            padding: 12px;
        }

        td {
            padding: 10px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Library Book Issue Report</h2>

    <a href="download_report.php" class="download-btn">Download Report</a>

    <table>
        <tr>
            <th>Student ID</th>
            <th>Book Name</th>
            <th>Book Author</th>
            <th>Book No</th>
            <th>Issue Date</th>
        </tr>

        <?php
        $query = "SELECT * FROM issuee_books";
        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['student_id']}</td>
                    <td>{$row['book_name']}</td>
                    <td>{$row['book_author']}</td>
                    <td>{$row['book_no']}</td>
                    <td>{$row['issue_date']}</td>
                  </tr>";
        }
        ?>
    </table>
</div>

</body>
</html>