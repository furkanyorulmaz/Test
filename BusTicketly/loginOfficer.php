<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5 maxmum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>

<form action="#" style="border:3px solid #ccc" method="POST">
    <div class="container">
        <h1>Officer Login Form</h1>
        <hr>

        <label><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <div class="cancel_signup">
            <button type="button" class="cancelbtn"><a href="homepage_G.php">Cancel</a></button>
            <button type="submit" class="signupbtn" name="officer_login">Login</a></button>
        </div>
    </div>
</form>

</body>
</html>


<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "busdb");

if (isset($_POST['officer_login'])) {

    $email = $_POST['email'];
    $psw = password_hash($_POST['psw'], PASSWORD_DEFAULT);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email.";
        exit();
    } else {
        $query = "SELECT * FROM users WHERE emailaddress=?";
        $officer = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($officer, $query)) {
            echo "Sql Error.";
            exit();
        } else {
            mysqli_stmt_bind_param($officer, "s", $email);
            mysqli_stmt_execute($officer);
            $result = mysqli_stmt_get_result($officer);

            if ($row = mysqli_fetch_assoc($result)) {
                session_start();
                $_SESSION['email'] = $row['emailaddress'];
                echo header("Location: officerProfile.php");
                exit();

            } else {
                echo "No user match.";
                exit();
            }
        }
    }
}
?>