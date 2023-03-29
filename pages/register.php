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
    <div class="section">
        <div class="sect">
            <h1>Create an account!</h1>
            <form id="register" method="POST" action="../controller/register.php">
                <legend>
                    <h2>Personal Details</h2>
                </legend>
                <label>Username:</label>
                <input type="text" name="username" required>
                <br>
                <label>Full Name:</label>
                <input type="text" name="fname" required>
                <br>
                <label>Password:</label>
                <input type="password" name="password" required>
                <br>
                <label>Confirm Password:</label>
                <input type="password" name="confirmPassword" required>
                <br>
                <label>Email:</label>
                <input type="text" name="email" required>
                <br>
                <p><big>By continuing, you agree with our <a href="termsofuse.php">Terms of Use</a> and <a href="privacypolicy.php">Privacy Policy</a></big></p>
                <input type="submit" onclick="validateForm()">
                <p><big>Do you have an account?<a href="login.php"> Login</a></big></p>
                <br>
                <br>
            </form>
        </div>
    </div>
    <script>
        function validateForm() {
            let username = document.forms['register']['username'].value;
            let fname = document.forms['register']['fname'].value;
            let password = document.forms['register']['password'].value;
            let confirmPassword = document.forms['register']['confirmPassword'].value;
            let email = document.forms['register']['email'].value;

            let atposition = email.indexOf("@");
            let dotposition = email.lastIndexOf(".");

            if (username == "" || fname == "" || email == "" || password == "" || confirmPassword == "") {
                alert("Form cannot be blank.Enter details correctly.");
                return false;
            } else if (password != confirmPassword) {
                alert("Password and confirm password do not match");
                return false;
            } else if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= email.length) {
                alert("Enter valid email.Email must contain @ symbol and dot .");
                return false;
            }
        }
    </script>
</body>

</html>