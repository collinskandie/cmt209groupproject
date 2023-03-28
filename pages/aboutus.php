<!DOCTYPE html>
<html>
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: ../pages/login.php');
    exit();
}
$user_id = $_SESSION['user_id'];
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="../style/index.css">
</head>

<body>
    <div class="header">
        <h1>About Us</h1>
        <?php include('../components/pagesnav.php'); ?>
    </div>

    <div class="section">
        <div class="imgtxt">
            <div class="image">
                <img src="../imgs/safarilandcruiser.png">
            </div>
        </div>
    </div>
    <?php include('../components/footer.php'); ?>
</body>

</html>