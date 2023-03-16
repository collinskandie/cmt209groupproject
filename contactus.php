<!DOCTYPE html>
<html> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>CONTACT US</title>
    <link rel="stylesheet" type="text/css" href="contactus.css">
</head>
<body>
<div class="header">
    <h1>CONTACT US</h1>
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
    <div class="sec">
        <h1><big>Contact Us!!</big></h1>
    </div>
    <div class="sect">
        <h2><big><mark>Please fill this form if you have any query!</mark></big></h3>
        <form action="contactus.php" method="post">
            <fieldset>
                <legend><h2>Personal Details</h2></legend>

                <h2>Name</h2>
                <input style="height:50px; width:300px; border: 1px hidden; background-color: lightgreen; color: darkblue; font-size: 26px;" id="fname" type="text" name="fname" placeholder="Enter Full Names"><br>

                <h2>Phone Number</h2>
                <input style="height:50px; width:300px; border: 1px hidden; background-color: lightgreen; color: darkblue; font-size: 26px;" id="phonenumber" type="tel" name="phonenumber" placeholder="Enter Phone Number"><br>

                <h2>Email</h2>
                <input style="height:50px; width:300px; border: 1px hidden; background-color: lightgreen; color: darkblue; font-size: 26px;" id="email" type="email" name="email" placeholder="Enter Email Address"><br>
            </fieldset>
            <fieldset>
                <legend><h2>Please Leave Message Here</h2></legend>
                <h2>Message</h2>
                <input style="height:220px; width:300px; border: 1px hidden; background-color: lightgreen; color: darkblue; font-size: 26px;" id="query" type="textarea" name="message" placeholder="Enter Message"><br><br>

                <input style="height:50px; width:300px; border: 1px hidden; background-color: lightgreen; color: darkblue; font-size: 26px;" type="submit" value="Send Message">
            </fieldset>
        </form>
    </div>
    <div class="isect">
        <fieldset>
            <legend><h2>For More</h2></legend>
            <h2>For quick assistance</h2>
            <h3>Email: leccscarhire25@gmail.com</h3>
            <h3>Tel: +254724937568</h3>
        </fieldset>
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


