<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="../style/login.css">
</head>

<body>
    <div class="header">
        <h1>Register</h1>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        // Retrieve form data
        $user = $_POST['username'];
        $passcode = $_POST['password'];
        $email = $_POST['email'];

        // Hash password
        $hashed_password = password_hash($passcode, PASSWORD_DEFAULT);

        // Insert user into database
        include("../controller/connection.php");
        $query = "INSERT INTO user_logins (username, password, email) VALUES ('$user', '$hashed_password', '$email')";
        mysqli_query($conn, $query);
        mysqli_close($conn);

        // Redirect to login page
        header('Location: ./login.php');
        exit();
    }
    ?>
    <div class="section">
        <div class="sect">
            <h1>Create an account!</h1>
            <form method="post">
                <legend>
                    <h2>Personal Details</h2>
                </legend>
                <label>Username:</label>
                <input type="text" name="username" required>
                <br>
                <label>Password:</label>
                <input type="password" name="password" required>
                <br>
                <label>Email:</label>
                <input type="text" name="email" required>
                <br>
                <p><big>By continuing, you agree with our <a href="termsofuse.php">Terms of Use</a> and <a href="privacypolicy.php">Privacy Policy</a></big></p>
                <input type="submit">
                <p><big>Do you have an account?<a href="login.php"> Login</a></big></p>
                <br>
                <br>

            </form>
        </div>
    </div>
</body>

</html>