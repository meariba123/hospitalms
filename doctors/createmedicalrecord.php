<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    $_SESSION = "createmedicalrecord.php";
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

include("C:\\xampp\\htdocs\\Project 2 - Ariba Naveed\\html\\subnavigation.html");

?>

<!-- Medical Record in HTML to show the fields -->

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create Medical Record</title>
  <link rel="stylesheet" href="../css/boxes.css" />
  <link rel="stylesheet" href="../css/checkbox.css" />
  
</head>
<body>

<div class="login-box">
  <div class="background">
  <form method="post" action="process_medicalrecord.php">
      <h1>Create Medical Record: </h1>
      <div class="input-box">
        <label for="medicalnumber">Medical Number:</label>
        <input type="integer" id="medicalnumber" name="medicalnumber" placeholder="Enter Medical Number" required>
      </div>

      <div class="input-box">
        <label for="diagnosis">Diagnosis:</label>
        <input type="text" id="diagnosis" name="diagnosis" placeholder="Enter Diagnosis" required>
      </div>

      <div class="input-box">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
      </div>


      <button type="submit">Create Medical Record</button>
      
    </form>
  </div>
</div>

</body>