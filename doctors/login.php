<?php
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
    <form method="post" action="process_login.php">
      <h1>Login</h1>

      <div class="text-entry">
        <input type="text" name="staff_id" placeholder="Staff ID" required>
      </div>

      <div class="text-entry">
        <input type="text" placeholder="Username" name="username" required>
      </div>

      <div class="text-entry">
        <input type="password" placeholder="Password" name="password" required>
      </div>


      <button type="submit" class="btn">Login</button>
    </form>
  </div>
</div>

</body>
</html>
