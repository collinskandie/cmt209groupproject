<?php
    // Connect to the MySQL database
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'cmt209';

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    ?>