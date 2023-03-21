<?php
// Check if the id parameter exists in the GET request
if (!isset($_GET['id'])) {
  // If the id parameter is not set, redirect the user to the booking page
  header("Location: ../pages/bookinglist.php");
  exit();
}

// Get the id parameter value
$id = $_GET['id'];

// import connection string 
include('../controller/connection.php');

// Construct the SQL query to delete the booking record with the specified id
$sql = "DELETE FROM hires WHERE id = $id";

// Execute the SQL query
if ($conn->query($sql) === TRUE) {
    session_start();
  $_SESSION['delete_success'] = true;
  header("Location: ../pages/bookinglist.php");
  exit();
} else {
  // If the query failed, display an error message
  echo "Error deleting record: " . $conn->error;
}

// Close the database connection
$conn->close();

?>
