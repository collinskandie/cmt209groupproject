<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: ../pages/login.php');
    exit();
}
$user_id = $_SESSION['user_id'];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/index.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Booking list</title>

    <style>
        .booking-table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
        }

        .booking-table th,
        .booking-table td {
            text-align: left;
            padding: 8px;
        }

        .booking-table th {
            background-color: #f2f2f2;
            color: #333;
        }

        .booking-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .booking-table tr:hover {
            background-color: #ddd;
        }

        .action-button {
            display: inline-block;
            padding: 8px 16px;
            border: none;
            background-color: #4CAF50;
            color: #fff;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin-right: 8px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .issue-button:hover {
            background-color: #2E8B57;
        }

        .delete-button:hover {
            background-color: #8B0000;
        }
    </style>

</head>

<body>
    <div class="header">
        <h1>Booking List</h1>
        <?php include('../components/pagesnav.php'); ?>
    </div>
    <div class="section">
        <?php


        if (isset($_GET['success'])) {
            echo '<p>Success</p>';
        } else if (isset($_GET['error'])) {
            echo '<p class="w3-panel w3-pale-red w3-border">Error: Booking Failed</p>';
        }
        session_start();
        if (isset($_SESSION['delete_success'])) {
            echo '<p class="w3-panel w3-pale-red w3-border">Booking record deleted successfully!</p>';
            unset($_SESSION['delete_success']);
        } else if (isset($_SESSION['update_success'])) {
            echo '<p class="w3-panel w3-pale-red w3-border">Booking record edited successfully!</p>';
            unset($_SESSION['update_success']);
        }
        include('../controller/connection.php');

        $sql = "SELECT hires.*, users.username, vehicles.model
        FROM hires
        INNER JOIN users ON hires.user_id = users.id
        INNER JOIN vehicles ON hires.vehicle_id = vehicles.id";
        $result = mysqli_query($conn, $sql);

        // Display the list of booked vehicles
        echo "<h1>Booking List</h1>";
        echo "<table class='booking-table'>";
        echo "<tr><th>Ref</th><th>Customer</th><th>Vehicle</th><th>From</th><th>To</th><th>Total Price</th><th>Action</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["model"] . "</td>";
            echo "<td>" . $row["start_date"] . "</td>";
            echo "<td>" . $row["end_date"] . "</td>";
            echo "<td>" . $row["total_price"] . "</td>";
            echo "<td><a href='../components/edit_booking.php?id=" . $row["id"] . "'>Edit</a> | <a href='../controller/delete_booking.php?id=" . $row["id"] . "'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";

        // Close the database connection
        mysqli_close($conn);

        ?>
    </div>
</body>

</html>