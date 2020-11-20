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
        <h1>Admin Login Form</h1>
        <hr>

        <label><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <div class="cancel_signup">
            <button type="button" class="cancelbtn"><a href="homepage_G.php">Cancel</a></button>
            <button type="submit" class="signupbtn" name="login_admin">Login</button>
        </div>
    </div>
</form>

</body>
</html>

<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "busdb");

if (isset($_POST['login_admin'])) {

    $email = $_POST['email'];
    $psw = $_POST['psw'];

    if (empty($email) || empty($psw)) {
        echo '<script language="javascript">';
        echo "alert('Fill all blanks')";
        echo '</script>';
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email.";
        exit();
    } else {
        $query = "SELECT * FROM admin WHERE email=?";
        $admin = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($admin, $query)) {
            echo "Sql Error.";
            exit();
        } else {
            mysqli_stmt_bind_param($admin, "s", $email);
            mysqli_stmt_execute($admin);
            $result = mysqli_stmt_get_result($admin);

            if ($row = mysqli_fetch_assoc($result)) {
                session_start();
                $_SESSION['email'] = $row['email'];
                echo header("Location: adminProfile.php");
                exit();
            } else {
                echo "No user match.";
                exit();
            }
        }
    }
}
?>