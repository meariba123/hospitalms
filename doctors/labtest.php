<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    $_SESSION = "labtest.php";
    // Redirect to login page if not logged in
    header("Location: login2.php");
    exit();
}

include("C:\\xampp\\htdocs\\Project 2 - Ariba Naveed\\html\\subnavigation.html");
?>

<!-- Lab Test in HTML to show the fields -->

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/login.css" />
  <link rel="stylesheet" href="../css/boxes.css" />

</head>
<body>

<div class="login-box">
  <div class="background">
  <form method="post" action="process_labtest.php">
      <h1>Order A Lab Test</h1>
    <div class="text-entry">
        <input type="text" name="patient_name" placeholder="Patient Name" required>
    </div>

    <div class="text-entry">
        <input type="number" name="staff_id" placeholder="Staff ID" required>
    </div>

    <div class="text-entry">
        <input type="number" name="medical_number" placeholder="Medical Number" required>
    </div>

    <div class="text-entry">
        <input type="text" name="test_name" placeholder="Test Name" required>
    </div>

    <div class="text-entry">
        <input type="date" name="test_date" placeholder="Test Date" required>
    </div>

    <div class="text-entry">
        <input type="text" name="test_result" placeholder="No Input Needed">
    </div>

    <button type="submit" class="btn">Order A Lab Test</button>
</form>

  </div>
</div>



