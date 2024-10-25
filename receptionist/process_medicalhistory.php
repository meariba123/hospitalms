<?php
session_start();

// A connection to the SQLite database
try {
    $db = new SQLite3('../data/hospitalsystem.db');
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $medicalnumber = $_POST['medicalnumber']; 
    $pastcondition = $_POST['past_condition'];
    $surgicalprocedure = $_POST['surgical_procedure'];
    $allergies = $_POST['allergies'];
    $familyhistory = $_POST['family_history'];


    // Prepare SQL statement to insert data into the medical history table
    $stmt = $db->prepare("INSERT INTO MedicalHistory (medical_number, past_condition, surgical_procedure, allergies, family_history) VALUES (?, ?, ?, ?, ?)");
    
    $stmt->bindParam(1, $medicalnumber, SQLITE3_INTEGER);
    $stmt->bindParam(2, $pastcondition, SQLITE3_TEXT);
    $stmt->bindParam(3, $surgicalprocedure, SQLITE3_TEXT);
    $stmt->bindParam(4, $allergies, SQLITE3_TEXT);
    $stmt->bindParam(5, $familyhistory, SQLITE3_TEXT);

    $result = $stmt->execute();

    // Check if the medical history has been inputted
    if ($medicalnumber && $result) {
        header("Location: medicalhistory_success.php");
        exit();

    } elseif (!$medicalnumber) {
        header("Location: medicalhistory_unsuccessful.php");
        exit();

    } else {
        header("Location: medicalhistory.php");
        exit();
    }
}
?>
