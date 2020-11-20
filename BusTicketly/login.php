<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5 maxmum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<!-- Navbar -->
<div class="navbar">

    <!-- Left-aligned links (default) -->
    <a href="homepage_G.php">Homepage</a>
    <a href="aboutUs_G.php">About Us</a>
    <a href="contactUs_G.html">Contact Us</a>
    <a href="support_G.php">Support</a>


    <!-- Right-aligned links -->
    <div class="navbar-right">
        <a href="login.php">Login</a>
        <a href="registration.php">Registration</a>
    </div>

</div>


<form action="#" style="border:3px solid #ccc" method="POST">
    <div class="container">
        <h1>Login Form</h1>
        <p>Please fill in this form to login with an account.</p>
        <hr>
        <label><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" id="input" name="psw" required>

        <input type="checkbox" onclick="myFunction()">Show Password
        <br>
        <br>
        <script>
            function myFunction() {
                var x = document.getElementById("input");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
        <span style="margin-left: 73%">Forgot password?<a href="changePassword.php" style="color: dodgerblue"> Click Here !</a></span>
        <br>
        <br>
        <div class="cancel_signup">
            <button type="button" class="cancelbtn"><a href="homepage_G.php">Cancel</a></button>
            <button type="submit" class="signupbtn" name="login_user">Login</a></button>
        </div>
    </div>
</form>
</body>
</html>

<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "busdb");

if (isset($_POST['login_user'])) {

    $email = $_POST['email'];
    $psw = $_POST['psw'];

    #$psw = password_hash($psw, PASSWORD_DEFAULT);

    if (empty($email) || empty($psw)) {
        echo '<script language="javascript">';
        echo "alert('Fill all blanks')";
        echo '</script>';
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email.";
        exit();
    } else {

        $query = "SELECT * FROM users WHERE emailaddress=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $query)) {
            echo "Sql Error.";
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($psw, $row['pwd']);
                if ($pwdCheck == false) {
                    echo "Invalid password.";
                    exit();

                } else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['email'] = $row['emailaddress'];

                    echo header("Location: homepage_RU.php");
                    exit();

                } else {
                    echo "Wrong user.";
                    exit();
                }

                echo "user here.";
            } else {
                echo "No user match.";
                exit();
            }
        }
    }
}


/*$conn = mysqli_connect("localhost", "root", "", "busdb");

if (isset($_POST['login_user'])) {

    $email = $_POST['email'];
    $psw = $_POST['psw'];

    $query = "SELECT * FROM users WHERE emailaddress='$email' AND pwd='$psw'";

    $login = mysqli_query($conn, $query);
    if ($login) {
        # echo $_SESSION['email'] = $email;
        # echo "You Succesfully Logged In <a href='homepage_RU.php' style='color: #008ae6'>Home Page</a>";
        echo header("Location: homepage_RU.php");
    } else {
        echo "Invalid Email or Password !";
    }
}*/
?>


