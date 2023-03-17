
<?php
include('./connection.php');
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Prepare the SQL statement
$stmt = mysqli_prepare($conn, "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");

// Bind the parameters and execute the statement
mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);

if (mysqli_stmt_execute($stmt)) {
    header("Location: ../pages/contactus.php?success=1");
    echo "Form data inserted successfully";
} else {
    echo "Error inserting form data: " . mysqli_error($conn);
}

// Close the statement and database connection
mysqli_stmt_close($stmt);
mysqli_close($conn);

?>