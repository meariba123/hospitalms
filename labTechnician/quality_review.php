<?php
session_start();
include("C:\\xampp\\htdocs\\Project 2 - Ariba Naveed\\html\\subnavigation.html");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $accuracy = $_POST['accuracy']; 
    $precision = $_POST['precision']; 
    $reliability = $_POST['reliability']; 
    $durability = $_POST['durability']; 
    $ease_of_use = $_POST['ease_of_use']; 
    $safety = $_POST['safety']; 
    $comments = $_POST['comments']; 

    // Calculate the mean of the quality score 
    $average_quality = ($accuracy + $precision + $reliability + $durability + $ease_of_use + $safety) / 6;

    // Perform quality control assessment
    if ($average_quality >= 7) {
        echo "<strong> Quality control assessment passed. Lab equipment is successful. </strong>";
        
    } else {
        echo "<strong> Quality control assessment failed. Lab equipment requires further inspection. \n<br />\n<br /> <u> Ways on how to improve the quality of the lab equipments:</u> </strong>";
        echo "\n<br />\n<br /> - Standardize Processes and Procedures";
        echo "\n<br />\n<br /> - Workspace organisation";
        echo "\n<br />\n<br /> - Steralise lab equipment after every use";
        echo "\n<br />\n<br /> - Damaged lab equipment should be reported as soon as possible";

    }   
}
?>

<html>
<a href="quality.php" class="btn btn-primary">Back to Lab Equipment Quality Assessment</a>
</html>
