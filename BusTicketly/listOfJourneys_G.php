<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "busdb");
#header("Location: login.php");

if (isset($_POST['submit_guest'])) {
    $from = $_POST['from'];
    $to = $_POST['destination'];
    $date = $_POST['date'];
    $time = "";
    $price = "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5 maxmum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>LIST OF JOURNEYS G</title>
</head>
<body>
<!-- Navbar -->
<div class="navbar">

    <!-- Left-aligned links (default) -->
    <a href="homepage_G.php">Homepage</a>
    <a href="aboutUs_G.php">About Us</a>
    <a href="contactUs_G.php">Contact Us</a>
    <a href="support_G.php">Support</a>

    <!-- Right-aligned links -->
    <div class="navbar-right">
        <a href="login.php">Login</a>
        <a href="registration.php">Registration</a>
    </div>

</div>


<div class="container">
    <h1>All Journeys</h1>
    <hr class="hr_main">
    <table id="seats">
        <tr style="color: darkred">
            <th>From</th>
            <th>To</th>
            <th>Date</th>
            <th>Time</th>
            <th>Price</th>
            <th>Reserve Ticket Action</th>
            <!-- Burası Biletlerin listelenmeye basladıgı yer -->
            <?php
            $query = "SELECT * FROM journey WHERE DeparturePlace='$from' OR DestinationPlace='$to'OR journeyDate='$date' ORDER BY journeyId";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)){
            ?>
        <tr>
            <td><?php echo $row['DeparturePlace']; ?></td>
            <td><?php echo $row['DestinationPlace']; ?></td>
            <td><?php echo $row['journeyDate']; ?></td>
            <td><?php echo $row['journeyTime']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td>
                <?php echo "<button style=\"background-color: darkgreen; width: 55%\"><a href=\"chooseSeatNoReserve_RU.html\">Reserve Ticket</a>
                                    </button>"; ?>
            </td>
        </tr>
        <?php
        }
        ?>
        </tr>
    </table>
</div>




<footer class="main_footer">
    <h5 id="footer_text"> All Rights Reserved By BUS TICKETLY. © 2020</h5>
</footer>

</body>
</html>