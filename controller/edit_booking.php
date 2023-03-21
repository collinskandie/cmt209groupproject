<?php
// Check if the id parameter exists in the GET request
// Get the id parameter value
$id = $_POST['booking_id'];
$endDate = $_POST['return_date'];

// import connection string 
include('../controller/connection.php');

// Construct the SQL query to delete the booking record with the specified id
$sql = "UPDATE hires SET end_date = '$endDate' WHERE id = $id";


// Execute the SQL query
if ($conn->query($sql) === TRUE) {
    session_start();
  $_SESSION['update_success'] = true;
  header("Location: ../pages/bookinglist.php");
  exit();
} else {
  // If the query failed, display an error message
  echo "Error deleting record: " . $conn->error;
}

// Close the database connection
$conn->close();

?>