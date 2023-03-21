<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/index.css">
    <title>Edit Booking</title>
    <style>        

        /* Center the form */
        form {
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
        }

        /* Style the labels */
        label {
            display: block;
            font-size: 1.1rem;
            margin-top: 1rem;
        }

        /* Style the input fields */
        input,
        select,
        textarea {
            display: block;
            font-size: 1.1rem;
            padding: 0.5rem;
            width: 100%;
            border: 2px solid #ccc;
            border-radius: 0.5rem;
            margin-top: 0.5rem;
        }

        /* Style the submit button */
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 0.5rem 1rem;
            font-size: 1.1rem;
            border: none;
            border-radius: 0.5rem;
            margin-top: 1rem;
        }

        /* Style the submit button when hovered */
        button[type="submit"]:hover {
            background-color: #0069d9;
            cursor: pointer;
        }
    </style>
    </style>

</head>

<body>
    <div class="header">
        <h1>Edit Booking</h1>
        <?php include('../components/pagesnav.php'); ?>

    </div>

    <?php

    include('../controller/connection.php');
    // $user_id = $_SESSION['user_id'];
    $user_id = 1;
    // echo '<p>The code reached here</p>';
    if (isset($_GET['id'])) {
        $booking_id = $_GET['id'];
    } else {
        // If no ID is provided, redirect to the main page
        echo '<p>Error: Vehicle ID not specified</p>';
        exit;
    }

    // Check if the vehicle ID exists in the vehicles table
    $sql = "SELECT * FROM hires WHERE id = $booking_id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
        // Redirect to an error page or display an error message
        die("Error: Booking doesnt not exhist");
    }
    echo '<div style="display: flex; flex-wrap: wrap;">';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<form method="POST" action="../controller/edit_booking.php">';
        echo '<input type="hidden" name="booking_id" value="'. $row['id'] .'">';
        echo '<label for="pickup_date">Start date:</label>';
        echo '<input id="start_date" name="end_date" value=" ' . $row['start_date'] . '">';
        echo '<label for="return_date">End Date:</label>';
        echo '<input type="date" id="return_date" name="return_date" value="' . $row['end_date'] . '">';
        echo ' <button type="submit">Save Changes</button>';
        echo '</form>';
    }

    echo '</div>';
    ?>
    


</body>

</html>