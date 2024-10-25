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

<!-- Prescription in HTML to show the fields -->

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
  <form method="post" action="process_prescription.php">
      <h1>Prescriptions</h1>
      
    <div class="text-entry">
        <input type="integer" name="lab_test_id" placeholder="Lab Test ID" required>
    </div>

    <div class="text-entry">
        <input type="text" name="patient_name" placeholder="Patient Name" required>
    </div>

    <div class="text-entry">
        <input type="text" name="diagnosis" placeholder="Diagnosis" required>
    </div>

    <div class="text-entry">
        <input type="text" name="past_condition" placeholder="Past Condition">
    </div>

    <div class="text-entry">
        <input type="text" name="prescription" placeholder="Prescription" required>
    </div>

    <div class="text-entry">
        <input type="date" name="prescription_date" placeholder="Prescription Date" required>
    </div>

    <button type="submit" class="btn">Prescribe</button>
</form>

  </div>
</div>



