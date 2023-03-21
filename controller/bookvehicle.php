<?php
// import connection string 
include('../controller/connection.php');
// $user_id = $_SESSION['user_id'];
$user_id = 1;
// echo '<p>The code reached here</p>';
if (isset($_GET['vehicle_id'])) {
    $vehicle_id = $_GET['vehicle_id'];
} else {
    // If no ID is provided, redirect to the main page
    echo '<p>Error: Vehicle ID not specified</p>';
    exit;
}

// Check if the vehicle ID exists in the vehicles table
$sql = "SELECT * FROM vehicles WHERE id = $vehicle_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    // Redirect to an error page or display an error message
    die("Error: Vehicle not found");
}

// Get the vehicle details
$row = mysqli_fetch_assoc($result);
$make = $row['make'];
$model = $row['model'];
$year = $row['year'];
$price = $row['price_per_day'] * 2;

// If the form is submitted, save the hire details to the hire table
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    // Prepare the SQL statement
    $stmt = mysqli_prepare($conn, "INSERT INTO hires (user_id, vehicle_id, start_date, end_date, total_price) VALUES (?, ?, ?, ?, ?)");

    // Bind the parameters and execute the statement
    mysqli_stmt_bind_param($stmt, "iissi", $user_id, $vehicle_id, $start_date, $end_date, $price);

    if (mysqli_stmt_execute($stmt)) {
        // Redirect to a success page or display a success message
        header("Location: ../pages/bookinglist.php?success=1");
        // echo '<p>Success</p>';
        // header("Location: success.php");
        exit();
    } else {
        header("Location: ../pages/bookinglist.php?error=1");
        die("Error inserting hire details: " . mysqli_error($conn));
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}
// Close the database connection
mysqli_close($conn);
// Close the MySQL connection
mysqli_close($conn);
