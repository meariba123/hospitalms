<!-- If quantity is insufficient it gets redirected to this page -->

<?php
session_start();
include("C:\\xampp\\htdocs\\Project 2 - Ariba Naveed\\html\\subnavigation.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantity Unsuccessful</title>
</head>
<body>
    <div>
        <h2>Insufficient quantity for the equipment.</h2>
        <p>This lab has the incorrect amount of the equipment, the correct amount should be 50 or above.</p>
        <p>Here is the contact number of the supplier 02932932912, to request the sufficient amount of the equipment.
        <a href="quantity.php">Back to quantity of lab equipment form </a>
    </div>
</body>
</html>
