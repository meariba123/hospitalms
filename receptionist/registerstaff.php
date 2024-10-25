<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Save the requested page for redirection after login
    $_SESSION = "registerstaff.php";
    header("Location: login3.php");
    exit();
}
include("C:\\xampp\\htdocs\\Project 2 - Ariba Naveed\\html\\subnavigation.html");
?>

<!-- Register Staff in HTML to show the fields -->

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Staff</title>
  <link rel="stylesheet" href="../css/boxes.css" />
  <link rel="stylesheet" href="../css/checkbox.css" />
  <link rel="stylesheet" href="../css/login.css" />
  
</head>
<body>


<div class="login-box">
  <div class="background">
  <form method="post" action="process_registerstaff.php">
      <h1>Register Staff</h1>
      
      <div class="text-entry">
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" placeholder="Enter Full Name" required>
      </div>

      <div class="text-entry">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" placeholder="Enter Email" required>
      </div>

      <div class="text-entry">
    <label for="role">Role:</label>
    <select id="role" name="role" required>
        <option value="Receptionist">Receptionist</option>
        <option value="Doctor">Doctor</option>
        <option value="Lab Technician">Lab Technician</option>
    </select>
      </div>

      <div class="text-entry">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter Password" required>
      </div>



      <button type="submit">Register Staff</button>
   
      
    </form>
  </div>
</div>

</body>