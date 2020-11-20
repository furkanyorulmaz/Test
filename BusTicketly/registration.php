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

<form action="#" method="POST" style="border:3px solid #ccc">
    <div class="container">
        <h1>Registration</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" required>

        <label><b>Surname</b></label>
        <input type="text" placeholder="Enter Surname" name="surname" required>

        <label><b>Gender</b></label>
        <input type="text" placeholder="Enter F for Female / M for Male" name="gender" required>

        <label><b>Phone Number</b></label>
        <input type="text" placeholder="444-3334" name="phone" required>

        <label><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

        <p>By creating an account you agree to our <a style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="cancel_signup">
            <button type="button" class="cancelbtn"><a href="homepage_G.php">Cancel</a></button>
            <button type="submit" class="signupbtn" name="signupbtn">Register Now</a></button>
        </div>
    </div>
</form>

</body>
</html>

<?php
error_reporting(0);
session_start();
$conn = mysqli_connect("localhost", "root", "", "busdb");

if (isset($_POST['signupbtn'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $psw_repeat = $_POST['psw-repeat'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email.";
        exit();
    } else if ($psw !== $psw_repeat) {
        echo "Passwords do not match !";
        exit();

    } else {
        $registration = "SELECT emailaddress FROM users WHERE emailaddress=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $registration)) {
            echo "SQL error !";
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt); //execute into database
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                echo "User already taken !";
                exit();
            } else {
                $registration = "INSERT INTO users(userName,userSurname,gender,emailaddress,mobilePhone, pwd,userType) 
                         VALUES (?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $registration)) {
                    echo "SQL insert error !";
                    exit();
                } else {

                    $password_hash = password_hash($psw, PASSWORD_DEFAULT);
                    $userType = "registered";
                    mysqli_stmt_bind_param($stmt, "sssssss", $name, $surname, $gender, $email, $phone, $password_hash, $userType);
                    mysqli_stmt_execute($stmt);

                    echo "You Succesfully Registered Click Direct To <a href='login.php' style='color: #008ae6'>Login Page</a>";
                    exit();
                }
            }
        }
    }
}


/*$name = "";
$surname = "";
$gender = "";
$phone = "";
$email = "";
$psw = "";
$psw_repeat = "";

if (isset($_POST['signupbtn'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $psw_repeat = $_POST['psw-repeat'];
}

if ($psw !== $psw_repeat) {
    echo "Passwords do not match !";
    exit();
}

if ($name || $surname || $email) {
    if ($name['name'] === $name || $surname['surname'] === $surname || $email['email'] === $email) {
        echo "User already exists";
        exit();
    }
}

if (isset($connection)) {
    //Password hashed
    $psw = password_hash($psw,PASSWORD_DEFAULT);

    $registration = "INSERT INTO users(userName,userSurname,gender,emailaddress,mobilePhone, pwd,userType) 
                         VALUES ('$name','$surname','$gender','$email', '$phone' , '$psw','registered')";

    $output = mysqli_query($connection, $registration);

    if ($output) {
        echo "You Succesfully Registered Click Direct To <a href='login.php' style='color: #008ae6'>Login Page</a>";
        exit();
    }
}*/
?>

