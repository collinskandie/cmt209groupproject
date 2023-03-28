<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../style/login.css">
</head>

<body>
    <h1>Login</h1>
    <?php
    session_start();
    if (isset($_POST['submit'])) {
        $user = $_POST['username'];
        $passcode = $_POST['password'];
        include("../controller/connection.php");
        $query = "SELECT * FROM user_logins WHERE username='$user'";
        $result = mysqli_query($conn, $query);
        if ($row = mysqli_fetch_assoc($result)) {
            $hashed_password = $row['password'];
            if (password_verify($passcode, $hashed_password)) {
                $_SESSION['user_id'] = $row["id"];
                header('Location: ../index.php');
                exit();
            } else {
                echo '<p>Wrong password</p>';
            }
        } else {
            echo '<p>Invalid username</p>';
        }
        mysqli_close($conn);
    }
    ?>
    <h2>Please login to procees</h2>
    <form method="post">
        <label>Username:</label>
        <input type="text" name="username" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" name="submit" value="Login">
        <p>New user?<a href="../pages/register.php">Register</a><p>
    </form>
</body>

</html>