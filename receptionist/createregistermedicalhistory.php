<?php
include("C:\\xampp\\htdocs\\Project 2 - Ariba Naveed\\html\\subnavigation.html");
?>

<!-- Register Patient's Medical History in HTML to show the fields -->

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Patient's Medical History</title>
  <link rel="stylesheet" href="../css/boxes.css" />
</head>

<body>
<div class="registration-box">
  <div class="background">
    <h1>Register Patient</h1>
    <form method="post" action="process_medicalhistory.php">
      <div class="input-box">
        <label for="medicalnumber">Medical Number:</label>
        <input type="text" id="medicalnumber" name="medicalnumber" placeholder="Enter Medical Number">
      </div>

      <div class="input-box">
        <label for="condition">Past Condition:</label>
        <input type="text" id="condition" name="past_condition" placeholder="Enter Past Condition">
      </div>

      <div class="input-box">
        <label for="procedure">Surgical Procedure:</label>
        <input type="text" id="procedure" name="surgical_procedure" placeholder="Enter Surgical Procedure">
      </div>

      <div class="input-box">
        <label for="allergies">Allergies:</label>
        <input type="text" id="allergies" name="allergies" placeholder="Enter Allergies">
      </div>

      <div class="input-box">
        <label for="history">Family History:</label>
        <input type="text" id="history" name="family_history" placeholder="Enter Family History">
      </div>

      <button type="submit" name="submit">Register Patient Account</button>
    </form>
  </div>
</div>

</body>
</html>
