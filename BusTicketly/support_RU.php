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

    <title>SUPPORT G</title>
</head>
<body>
<!-- Navbar -->
<div class="navbar">

    <!-- Left-aligned links (default) -->
    <a href="homepage_RU.php">Homepage</a>
    <a href="aboutUs_RU.php">About Us</a>
    <a href="contactUs_RU.php">Contact Us</a>
    <a href="support_RU.php">Support</a>

    <!-- Right-aligned links -->
    <div class="navbar-right">
        <a href="registerUserProfile.php">My Profile</a>
        <a href="logout.php">Logout</a>
    </div>

</div>


<div class="container">
    <h2 style="text-align:center">FREQUENTLY ASKED QUESTIONS</h2>
    <div class="column_support">
        <h8 style="font-weight: normal; font-family:Candara">How can I become a Passenger Card member?</h8>
        <p>You can apply for the membership of the Passenger Card from our ticket sales offices, from the Call Center of Metro Turizm and online, from our web site by registering yourself as a member.</p>
    </div>

    <div class="column_support">
        <h8 style="font-weight: normal; font-family:Candara">For example, ticket prices are indicated in your web site as İzmir- Kastamonu 65 TL, however same ticket costs 80 TL in your sales Office. What is the reason of such a difference?</h8>
        <p>he list price for İzmir – Kastamonu is 80 TL, the online ticket sales price (Membership for Passenger Card Price) is 65 TL. While normal sales are realised with 80 TL, the special price for Metro members is 65 TL. By becoming a member, you can buy your tickets at Metro special price.</p>
    </div>

    <div class="column_support">
        <h8 style="font-weight: normal; font-family:Candara">Do I have to give my T.R. ID number to the ticket sales officer?</h8>
        <p>In line with clause 48-A of the Regulation on Highway Transportation issued within the scope of the Highway Transportation Law Numbered 4925 of the Ministry of Transportation Maritime and Communication of the T.R., owners of licenses and sales offices have to issue a separate ticket for every passenger during their regular passenger transportations. The information of every passenger (Name-Surname /T.R. ID number) has to be indicated separately. Therefore, it is utmost important for your safety that you use your T.R. ID number within the said process and indicate it to our sales personnel.</p>
    </div>

    <div class="column_support">
        <h8 style="font-weight: normal; font-family:Candara">Do I have to give my T.R. ID number to the ticket sales officer?</h8>
        <p>In line with clause 48-A of the Regulation on Highway Transportation issued within the scope of the Highway Transportation Law Numbered 4925 of the Ministry of Transportation Maritime and Communication of the T.R., owners of licenses and sales offices have to issue a separate ticket for every passenger during their regular passenger transportations. The information of every passenger (Name-Surname /T.R. ID number) has to be indicated separately. Therefore, it is utmost important for your safety that you use your T.R. ID number within the said process and indicate it to our sales personnel.</p>
    </div>
</div>

<footer class="main_footer">
    <h5 id="footer_text"> All Rights Reserved By BUS TICKETLY. © 2020</h5>
</footer>

</body>
</html>