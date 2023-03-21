<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
</head>

<body>
    <?php
    include('../controller/connection.php');
    if (isset($_GET['id'])) {
        $vehicle_id = $_GET['id'];
    } else {
        echo '<p>No vehicle id specified</p>';
        exit;
    }
    // Select the vehicle record with the given ID
    $sql = 'SELECT * FROM vehicles WHERE id = ' . $vehicle_id;
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $price= $row['price_per_day'];

        // Display the vehicle details
        echo '<h1>' . $row['make'] . ' ' . $row['model'] . '</h1>';
        echo '<img src="data:image/jpeg;base64,' . base64_encode($row['picture']) . '" width="300" height="300" />';
        echo '<p>Year: ' . $row['year'] . '</p>';
        echo '<p id="price">Price per day: ' . $price . '</p>';
    } else {
        // If no vehicle record is found with the given ID, display an error message
        echo '<p>Vehicle not found.</p>';
    }

    // Close the MySQL connection
    mysqli_close($conn);

    echo ' <form method="post" action="../controller/bookvehicle.php?vehicle_id=' . $vehicle_id . '">';
    echo    '<label for="start_date">Start Date:</label>';
    echo  '<input type="date" id="start_date" onchange="updatePrice()" name="start_date" required><br><br>';
    echo '<label for="end_date">End Date:</label>';
    echo '<input type="date" id="end_date" onchange="updatePrice()" name="end_date" required><br><br>';
    echo ' <input type="submit" value="Submit">';
    echo '<label for="total-price">Total Price:</label>';
    echo '<input type="text" id="total-price" disabled>';
    echo '<br>';
    echo '</form>';
    ?>
    <script>
        function updatePrice() {
            let startDate = new Date(document.getElementById("start_date").value);
            let endDate = new Date(document.getElementById("end_date").value);
            let pricePerDay = <?php echo $price ?>;

            let differenceInMs = endDate.getTime() - startDate.getTime();
            let differenceInDays = differenceInMs / (1000 * 3600 * 24);
            let totalPrice = differenceInDays * pricePerDay;
            totalPrice = totalPrice.toFixed(2);

            document.getElementById("total-price").value = "$" + totalPrice;
        }
    </script>

</body>

</html>