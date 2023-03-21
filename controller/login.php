<?php
include('../controller/connection.php'); 

// Get username and password from form
$username = $_POST['username'];
$password = $_POST['password'];

// Hash password using bcrypt
//$options = array('cost' => 12);
//$hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);

// Check if username and password match database
$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if (($password == $row['password'])) {
        echo "Authentication successful!";
        session_start();
        //Store user ID in session variable
        $_SESSION['user_id'] = $row['id'];        
        // Redirect to home page
        header("Location: ../index.php");
    } else {
        echo "Authentication failed: wrong password.";
    }
} else {
    echo "Authentication failed: user not found.";
}
// Close database connection
mysqli_close($conn);
