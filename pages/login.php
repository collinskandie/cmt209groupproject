<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="../style/login.css">vuvvii
</head>

<body>
    <h2>Please login to procees</h2>
    <form action="../controller/login.php" method="post">
        <label>Username:</label>
        <input type="text" name="username" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <input type="submit" name="submit" value="Login">
        <?php if (isset($error)) { ?>
            <div class="error"><?php echo $error; ?></div>
        <?php } ?>
        <p>New user?<a href="../pages/register.php">Register</a><p>
    </form>
</body>

</html>