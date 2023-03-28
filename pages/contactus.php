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
    <title>CONTACT US</title>
    <link rel="stylesheet" type="text/css" href="../style/index.css">
    <style>
        #contact-form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f7f7f7;
            border-radius: 5px;
            text-align: left;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            outline: none;
            border-color: #2e8cbd;
        }

        .btn {
            display: inline-block;
            background-color: #2e8cbd;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #3a9ad9;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Contact us</h1>
        <!-- include nav here  -->
        <?php include('../components/pagesnav.php'); ?>
    </div>
    <?php
    if (isset($_GET['success']) && $_GET['success'] == 1) {
        echo "<p>Form submitted successfully!</p>";
    }
    ?>

    <form id="contact-form" method="post" action="../controller/submit-form.php">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="isect"></div>
    <div class="footer">
        <?php include('../components/footer.php'); ?>
        <h2>For quick assistance</h2>
        <h3>Email: leccscarhire25@gmail.com</h3>
        <h3>Tel: +254724937568</h3>
    </div>
</body>

</html>