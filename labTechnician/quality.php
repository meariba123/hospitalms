<?php
session_start();
include("C:\\xampp\\htdocs\\Project 2 - Ariba Naveed\\html\\subnavigation.html");

// Check if user is logged in
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login3.php");
    exit();
}
?>

<!-- Quality Assessment in HTML to show the fields -->

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/site.css" />
</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Equipment Quality Assessment</title>
</head>
<body>
    <h2>Lab Equipment Quality Assessment</h2>
    <form action="quality_review.php" method="post">
        <label for="accuracy">Accuracy (1-10):</label>
        <input type="number" id="accuracy" name="accuracy" min="1" max="10" required><br>

        <label for="precision">Precision (1-10):</label>
        <input type="number" id="precision" name="precision" min="1" max="10" required><br>

        <label for="reliability">Reliability (1-10):</label>
        <input type="number" id="reliability" name="reliability" min="1" max="10" required><br>

        <label for="durability">Durability (1-10):</label>
        <input type="number" id="durability" name="durability" min="1" max="10" required><br>

        <label for="ease_of_use">Ease of Use (1-10):</label>
        <input type="number" id="ease_of_use" name="ease_of_use" min="1" max="10" required><br>

        <label for="safety">Safety Features (1-10):</label>
        <input type="number" id="safety" name="safety" min="1" max="10" required><br>

        <label for="comments">Comments:</label><br>
        <textarea id="comments" name="comments" rows="4" cols="50"></textarea><br>

        <button type="submit">Submit Assessment</button>
    </form>
</body>
</html>

