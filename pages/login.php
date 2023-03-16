<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="../style/index.css">
</head>

<body>
    <div class="header">
        <h1>SIGN IN</h1>
    </div>
    <div class="nav">
        <!-- include nav here  -->
    </div>
    <div class="section">
        <div class="sect">
            <form method="post" id="login" action="../pages/login.php">
                <fieldset>
                    <legend>
                        <h2>Log In Here</h2>
                    </legend>
                    <h3>Email</h3>
                    <input style="height:50px; width:300px; border: 1px hidden; background-color: lightgreen; color: darkblue; font-size: 26px;" id="email" type="email" name="email" autocomplete="off" class="form-control" placeholder="Enter Email Address" required>

                    <h3>Password</h3>
                    <input style="height:50px; width:300px; border: 1px hidden; background-color: lightgreen; color: darkblue; font-size: 26px;" id="password" type="Password" name="password" placeholder="Enter Password" required><br><br><br>

                    <input style="height:50px; width:300px; border: 1px hidden; background-color: lightgreen; color: darkblue; font-size: 26px;" id="button" type="submit" name="login" value="Login" placeholder="Login"><br><br>

                    <p><big>Do you have an account?<a href="registration.php"> Register</a></big></p><br>

                    <a href="../pages/forgotpassword.php"><button style="height:20px; width:185px; border: 1px hidden; background-color: green; color: yellow; font-size: 15px;" class="sign up">Forgot Password</button></a>
                </fieldset>
            </form>
        </div>
    </div>
    <div class="footer">
       <!-- Include footer here  -->
    </div>
</body>

</html>