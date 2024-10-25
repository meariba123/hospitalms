<?php
session_start();
include("C:\\xampp\\htdocs\\Project 2 - Ariba Naveed\\html\\subnavigation.html");

// Check if user is logged in
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login4.php");
    exit();
}
?>

<!-- Quantity of lab equipment in HTML to show the fields -->

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quantity Of Equipment</title>
  <link rel="stylesheet" href="../css/login.css" />
  
</head>
<body>

<div class="login-box">
  <div class="background">
  <form method="post" action="process_quantity.php">
      <h1>Quantity Of Equipment</h1>

      <div class="text-entry">
        <label for="labid">Lab ID:</label>
        <input type="integer" id="labid" name="labid" placeholder="Enter Lab ID">
      </div>

      <div class="text-entry">
        <label for="equipmentname">Equipment Name:</label>
        <input type="text" id="equipmentname" name="equipment_name" placeholder="Enter Equipment Name" required>
      </div>

      <div class="text-entry">
        <label for="quantity">Quantity:</label>
        <input type="integer" id="quantity" name="quantity" placeholder="Enter Quantity" required>
      </div>


      <button type="submit">Submit Quantity</button>
      
    </form>
  </div>
</div>

</body>