<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Applicant Registration</title>
    <link rel="stylesheet" type="text/css" href="../style/index.css">
</head>

<body>
    <div class="header">
        <h1>SIGN UP</a></h1>
    </div>
    <div class="nav">
       <!-- Include nav here  -->
    </div>
    <div class="section">
        <div class="sect">
            <h1>Create an account!</h1>
            <form method="post" action="registration.php">
                <fieldset>
                    <legend>
                        <h2>Personal Details</h2>
                    </legend>

                    <h3>Full Name</h3>
                    <input style="height:50px; width:300px; border: 1px hidden; background-color: lightgreen; color: darkblue; font-size: 26px;" id="fname" type="text" name="fname" placeholder="Enter Full Names" pattern="^(\w\w+)\s(\w+)$" title="Enter valid name" onclick="validatename();" required>

                    <h3>Phone Number</h3>
                    <input style="height:50px; width:300px; border: 1px hidden; background-color: lightgreen; color: darkblue; font-size: 26px;" id="phonenumber" type="tel" name="phonenumber" placeholder="Enter Phone Number" pattern="[0-9]{10}" title="Ten digits code" onclick="validatephonenumber();" required>

                    <h3>Email</h3>
                    <input style="height:50px; width:300px; border: 1px hidden; background-color: lightgreen; color: darkblue; font-size: 26px;" id="email" type="email" name="email" placeholder="Enter Email Address" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Invalid email address" required>

                    <h3>Gender</h3>
                    <input style="height:30px; width:40px;" id="gender" type="radio" name="gender" required>MALE
                    <input style="height:30px; width:40px;" id="gender" type="radio" name="gender">FEMALE

                    <h3>County</h3>
                    <select style="height:50px; width:300px; border: 1px hidden; background-color: lightgreen; color: darkblue; font-size: 26px;" name="county" id="county" required>
                        <option value="">Select county</option>
                        <option value="Mombasa">Mombasa</option>
                        <option value="Kwale">Kwale</option>
                        <option value="Kilifi">Kilifi</option>
                        <option value="Tana River">Tana River</option>
                        <option value="Lamu">Lamu</option>
                        <option value="Taita Taveta">Taita Taveta</option>
                        <option value="Garissa">Garissa</option>
                        <option value="Wajir">Wajir</option>
                        <option value="Mandera">Mandera</option>
                        <option value="Marsabit">Marsabit</option>
                        <option value="Isiolo">Isiolo</option>
                        <option value="Meru">Meru</option>
                        <option value="Tharaka Nithi">Tharaka Nithi</option>
                        <option value="Embu">Embu</option>
                        <option value="Kitui">Kitui</option>
                        <option value="Machakos">Machakos</option>
                        <option value="Makueni">Makueni</option>
                        <option value="Nyandarua">Nyandarua</option>
                        <option value="Nyeri">Nyeri</option>
                        <option value="Kirinyaga">Kirinyaga</option>
                        <option value="Muranga">Muranga</option>
                        <option value="Kiambu">Kiambu</option>
                        <option value="Turkana">Turkana</option>
                        <option value="West Pokot">West Pokot</option>
                        <option value="Samburu">Samburu</option>
                        <option value="Trans Nzoia">Trans Nzoia</option>
                        <option value="Uasin Gishu">Uasin Gishu</option>
                        <option value="Elgeyo Marakwet">Elgeyo Marakwet</option>
                        <option value="Nandi">Nandi</option>
                        <option value="Baringo">Baringo</option>
                        <option value="Laikipia">Laikipia</option>
                        <option value="Nakuru">Nakuru</option>
                        <option value="Narok">Narok</option>
                        <option value="Kajiado">Kajiado</option>
                        <option value="Kericho">Kericho</option>
                        <option value="Bomet">Bomet</option>
                        <option value="Kakamega">Kakamega</option>
                        <option value="Vihiga">Vihiga</option>
                        <option value="Bungoma">Bungoma</option>
                        <option value="Busia">Busia</option>
                        <option value="Siaya">Siaya</option>
                        <option value="Kisumu">Kisumu</option>
                        <option value="Homabay">Homabay</option>
                        <option value="Migori">Migori</option>
                        <option value="Kisii">Kisii</option>
                        <option value="Nyamira">Nyamira</option>
                        <option value="Nairobi">Nairobi</option>
                    </select>

                    <h3>Town</h3>
                    <input style="height:50px; width:300px; border: 1px hidden; background-color: lightgreen; color: darkblue; font-size: 26px;" id="town" type="text" name="town" placeholder="Enter Your Town" required>

                    <h3>Password</h3>
                    <input style="height:50px; width:300px; border: 1px hidden; background-color: lightgreen; color: darkblue; font-size: 26px;" id="password" type="password" name="password" placeholder="Enter Password" pattern="^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=\S+$).{6,}$" required>

                    <h3>Confirm Password</h3>
                    <input style="height:50px; width:300px; border: 1px hidden; background-color: lightgreen; color: darkblue; font-size: 26px;" id="conpassword" type="password" name="conpassword" placeholder="Enter Confirm Password" required>

                    <p><big>By continuing, you agree with our <a href="termsofuse.php">Terms of Use</a> and <a href="privacypolicy.php">Privacy Policy</a></big></p>
                    <input style="height:50px; width:300px; border: 1px hidden; background-color: lightgreen; color: darkblue; font-size: 26px;" id="button" type="submit" name="register" placeholder="Submit">

                    <p><big>Do you have an account?<a href="login.php"> Login</a></big></p>
                    <br>
                    <br>
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