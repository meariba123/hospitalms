<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Save the requested page for redirection after login
    $_SESSION = "checkin.php";
    header("Location: login2.php");
    exit();
}
include("C:\\xampp\\htdocs\\Project 2 - Ariba Naveed\\html\\subnavigation.html");
?>

<!-- Check-In Patient in HTML to show the fields -->

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Check-In Patient</title>
  <link rel="stylesheet" href="../css/boxes.css" />
  <link rel="stylesheet" href="../css/checkbox.css" />
  
</head>
<body>

<div class="login-box">
  <div class="background">
  <form method="post" action="process_checkin.php">
      <h1>Check-In Patient</h1>
      <div class="text-entry">
        <label for="bookingid">Booking ID:</label>
        <input type="text" id="bookingid" name="bookingid" placeholder="Enter Booking ID">
      </div>

      <div class="text-entry">
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" placeholder="Enter Full Name" required>
      </div>

      <div class="text-entry">
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>
      </div>

      <div class="text-entry">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" placeholder="Enter Email" required>
      </div>

      <div class="text-entry">
        <label>Checked In:</label>
        <input type="checkbox" id="checked_in_yes" name="checked_in" value="yes">
        <label for="checked_in_yes">Yes</label>
        <input type="checkbox" id="checked_in_no" name="checked_in" value="no">
        <label for="checked_in_no">No</label>
      </div>



      <button type="submit">Check-In Patient</button>
      
    </form>
  </div>
</div>

</body>