<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Save the requested page for redirection after login
    $_SESSION = "registerpatient.php";
    header("Location: login.php");
    exit();
}
include("C:\\xampp\\htdocs\\Project 2 - Ariba Naveed\\html\\subnavigation.html");
?>

<!-- Register Patient in HTML to show the fields -->

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Patient</title>
  <link rel="stylesheet" href="../css/boxes.css" />
  <link rel="stylesheet" href="../css/login.css" />
</head>
<body>

<div class="login-box">
  <div class="background">
    <form method="post" action="process_registerpatient.php">
      <h1>Register Patient</h1>
      <div class="text-entry">
        <label for="firstname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" placeholder="Enter Full Name" required>
      </div>

      <div class="text-entry">
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>
      </div>

      <div class="text-entry">
          <label for="gender">Gender:</label>
          <select id="gender" name="gender" required>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
          </select>
      </div>

      <div class="text-entry">
          <label for="telephonenumber">Phone Number:</label>
          <input type="text" id="telephonenumber" name="telephone_number" placeholder="Enter Phone Number" required>
      </div>


      <div class="text-entry">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" placeholder="Enter Email" required>
      </div>

      <div class="text-entry">
        <label for="emergencynumber">Emergency Phone Number:</label>
        <input type="text" id="emergencynumber" name="emergency_number" placeholder="Enter Emergency Phone Number" required>
      </div>


      <button type="submit">Register Patient Account</button>
      
    </form>
  </div>
</div>

</body>
</html>

