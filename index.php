<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: ./pages/login.php');
    exit();
}
$user_id = $_SESSION['user_id'];
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="./style/index.css">
    <style>
        .grid-container {
            display: flexbox;
            grid-template-columns: auto auto auto;
            background-color: #2196F3;
            padding: 10px;
            margin-left: 20px;
        }

        .grid-item {
            border: 1px solid rgba(0, 0, 0, 0.8);

        }

        .section {
            max-height: 100vh;
        }
    </style>

</head>

<body>
    <div class="header">
        <h1>Home</h1>
        <?php include('./components/nav.php'); ?>
        <h2>
            <marquee>Welcome to LECCS Car Hire</marquee>
        </h2>
    </div>
    <div class="section">
        <h2> Hi, Select the car you would like to hire </h2>
        <div class="sec">
            <?php include('./controller/connection.php'); ?>
            <?php

            // Select all vehicle records
            $sql = 'SELECT * FROM vehicles';
            $result = mysqli_query($conn, $sql);

            echo '<div style="display: flex; flex-wrap: wrap;">';

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div style="border: 1px solid #ccc; border-radius: 5px; padding: 10px; margin: 10px; width: 250px; cursor: pointer;" onclick="window.location.href=\'./pages/vehicle_details.php?id=' . $row['id'] . '\'">';

                echo '<img src="data:image/jpeg;base64,' . base64_encode($row['picture']) . '" width="230" height="150" />';
                echo '<h3>' . $row['make'] . ' ' . $row['model'] . '</h3>';
                echo '<p>Year: ' . $row['year'] . '</p>';
                echo '<p>Price per day: ' . $row['price_per_day'] . '</p>';
                echo '</div>';
            }

            echo '</div>';

            // Close the MySQL connection
            mysqli_close($conn);
            ?>

        </div>
    </div><?php include('./components/footer.php'); ?>
</body>

</html>