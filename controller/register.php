<?php
include("../controller/connection.php");
//  echo "code inafika hapa";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $user = $_POST['username'];
    $passcode = $_POST['password'];
    $email = $_POST['email'];
    $fullname = $_POST['fname'];
    // echo "code inafika hapa";
    echo "$user";

    // Hash password
    $hashed_password = password_hash($passcode, PASSWORD_DEFAULT);

    // Insert user into database

    $query = "INSERT INTO user_logins (username,full_name, password, email) VALUES ('$user', '$fullname','$hashed_password', '$email')";
    mysqli_query($conn, $query);
    mysqli_close($conn);

    // Redirect to login page
    header('Location: ../pages/login.php');
    exit();
}
?>
