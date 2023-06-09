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
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../style/index.css">
</head>

<body>
    <div class="header">
        <h1>Car Details</h1>
        <?php include('../controller/connection.php');
        include('../components/pagesnav.php');
        ?>
    </div>

    <?php
    if (isset($_GET['id'])) {
        $vehicle_id = $_GET['id'];
    } else {
        // If no ID is provided, redirect to the main page
        header('Location: index.php');
        exit;
    }

    // Select the vehicle record with the given ID
    $sql = 'SELECT * FROM vehicles WHERE id = ' . $vehicle_id;
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Display the vehicle details
        echo '<div style="align-items: center">';
        echo '<h1>' . $row['make'] . ' ' . $row['model'] . '</h1>';
        echo '<img src="data:image/jpeg;base64,' . base64_encode($row['picture']) . '" width="300" height="300" />';
        echo '<p>Year: ' . $row['year'] . '</p>';
        echo '<p>Price per day: ' . $row['price_per_day'] . '</p>';
        // echo '<p>Description: ' . $row['description'] . '</p>';
        echo '<button onclick="window.location.href=\'../components/bookingform.php?id=' . $row['id'] . '\'">Book </button>';
    } else {
        // If no vehicle record is found with the given ID, display an error message
        echo '<p>Vehicle not found.</p>';
        echo '</div>';    }

    // Close the MySQL connection
    mysqli_close($conn);
    ?>

</body>

</html>