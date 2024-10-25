<!-- When labtest is successful it gets redirects to this page -->

<?php
session_start();

include("C:\\xampp\\htdocs\\Project 2 - Ariba Naveed\\html\\subnavigation.html");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Test Submitted.</title>
</head>
<body>
    <div>
        <h2>Lab test successfully submitted to lab technician with patient's medical number.</h2>
        <a href="labtest.php">Back to order a lab test</a>
    </div>
</body>
</html>
