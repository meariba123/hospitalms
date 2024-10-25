<?php
session_start();
include("C:\\xampp\\htdocs\\Project 2 - Ariba Naveed\\html\\subnavigation.html");
?>

<!-- Login in HTML to show the fields -->

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/login.css" />
</head>
<body>

<div class="login-box">
  <div class="background">
    <h1>Login</h1>
    <form method="post" action="process_login2.php"> 

    <div class="text-entry">
        <input type="text" name="staff_id" placeholder="Staff ID" required>
      </div>
      
      <div class="text-entry">
        <input type="text" name="username" placeholder="Username" required>
      </div>

      <div class="text-entry">
        <input type="password" name="password" placeholder="Password" required>
      </div>

      <button type="submit" class="btn">Login</button>
    </form>
  </div>
</div>

</body>
</html>

