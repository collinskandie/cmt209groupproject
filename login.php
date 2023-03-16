<!DOCTYPE html>
<html> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>LOGIN</title>
    <style>
.body{
    width: 1900px;
    height: auto;
    font: sans-serif;
    font-size: 20px;
}
.header {
    width: 100%;
    height: auto;
    text-align: center;
    background-color: black;
    color: white;
}
.nav{
    width: 100%;
    height: auto;
    background-color: black;
    text-align: center;
    color: white;
    word-spacing: 3px;
}
.section{
    width: 100%;
    height: auto;
    background-color: floralwhite;
    color: black;
}
.sec{
    text-align: center;
    color: black;
}
.sect{
    
    text-align: center;
    color: black;
}
.footer {
    width: 100%;
    height: auto;
    text-decoration-color: white;
    background-color: black;
    color: white;
    text-align: center;
}
ul {
    text-decoration-color: black;
    color: white;
    padding: 20px;
}

    ul li {
        display:inline;
        padding:20px;
        text-decoration:white;
        color: black;

    }

        ul li a {
            text-decoration: white;
            color: white;
            font-size: 125%;
            padding:50px;
        }

            ul li a:hover {
                text-decoration-color: red;
                display: inline;
                color:red;
            }
         
    </style>
</head>
<body>
<div class="header">
    <h1>SIGN IN</h1>
</div>
<div class="nav">
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="aboutus.php">ABOUT US</a></li>
        <li><a href="services.php">SERVICES</a></li>
        <li><a href="contactus.php">CONTACT US</a></li>
        <li><a href="registration.php">SIGN UP</a></li>
        <li><a href="login.php">SIGN IN</a></li>
     </ul>
</div>
<div class="section">
    <div class="sect">
        <h1>Login!</h1>
        <form method="post" id="login" action="login.php">
            <fieldset>
                <legend><h2>Log In Here</h2></legend>

                <h3>Email</h3>
                <input style="height:50px; width:300px; border: 1px hidden; background-color: lightgreen; color: darkblue; font-size: 26px;" id="email" type="email" name="email" autocomplete="off" class="form-control" placeholder="Enter Email Address" required>

                <h3>Password</h3>
                <input style="height:50px; width:300px; border: 1px hidden; background-color: lightgreen; color: darkblue; font-size: 26px;" id="password" type="Password" name="password" placeholder="Enter Password" required><br><br><br>

                <input style="height:50px; width:300px; border: 1px hidden; background-color: lightgreen; color: darkblue; font-size: 26px;" id="button" type="submit" name="login" value="Login" placeholder="Login"><br><br>

                <p><big>Do you have an account?<a href="registration.php"> Register</a></big></p><br>

                <a href="forgotpassword.php"><button style="height:20px; width:185px; border: 1px hidden; background-color: green; color: yellow; font-size: 15px;" class="sign up">Forgot Password</button></a>
            </fieldset>
        </form>
    </div>
</div>
<div class="footer">
    <ul>
        <li><a href="privacypolicy.php">PRIVACY POLICY</a></li>
        <li><a href="termsofuse.php">TERMS OF USE</a></li>
        <li><a href="helpcenter.php">HELP CENTER</a></li>
    </ul>
    <p>@2023. All Rights Reserved.</p>
</div>
</body>
</html>