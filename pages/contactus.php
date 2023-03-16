<!DOCTYPE html>
<html> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>CONTACT US</title>
    <link rel="stylesheet" type="text/css" href="../style/index.css">
</head>
<body>
<div class="header">
    <h1>Contact us</h1>
    <!-- include nav here  -->
<?php include('../components/pagesnav.php'); ?>
</div>

<div class="section">   
    <div class="sect">
        <h2><big><mark>Please fill this form if you have any query!</mark></big></h3>
        <form action="../pages/contactus.php"" method="post">
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
<?php include('../components/footer.php'); ?>
</div>
</body>
</html>


