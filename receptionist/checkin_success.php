<!-- If checkin is successful it gets redirected to this page -->

<?php
session_start();
include("C:\\xampp\\htdocs\\Project 2 - Ariba Naveed\\html\\subnavigation.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check-in Success</title>
</head>
<body>
    <div>
        <h2>Successfully Checked In</h2>
        <p>Patient successfully checked-in.</p>
        <a href="checkin.php">Back to Check-in</a>
    </div>
</body>
</html>
