<?php
session_start();
#include('database.php');
$conn = mysqli_connect("localhost", "root", "", "busdb");
if (!isset($_SESSION['email'])) {
    $loginError = "You are not logged in";
    echo '<script language="javascript">';
    echo "alert('$loginError')";
    echo '</script>';
    #include("login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5 maxmum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="main.css">

    <title>ADMIN PROFILE</title>
</head>
<body>
<!-- Navbar -->
<div class="navbar">

    <!-- Right-aligned links -->
    <div class="navbar-right">
        <a href="adminProfile.php">Admin Profile</a>
        <a href="logout.php">Logout</a>
    </div>

</div>

<div class="container">
    <h1>System Transactions</h1>
    <hr class="hr_main">

    <button type="submit" class="transactions_admin_btn"><a href="addJourney_A.html">Add Journey</a></button>
    <button type="submit" class="transactions_admin_btn"><a href="editJourney_A.html">Edit Journey</a></button>
    <button type="submit" class="transactions_admin_btn"><a href="cancelJourney_A.html">Cancel Journey</a></button>
    <button type="submit" class="transactions_admin_btn"><a href="cancelTicket_A.html">Cancel Ticket</a></button>
    <button type="submit" class="transactions_admin_btn"><a href="addCampaign_A.html">Add Campaign</a></button>
    <button type="submit" class="transactions_admin_btn"><a href="infoBox_A.html">Look Feebacks</a></button>
</div>

<br>
<br>
<br>
<br>
<footer class="main_footer">
    <h5 id="footer_text"> All Rights Reserved By BUS TICKETLY. © 2020</h5>
</footer>
