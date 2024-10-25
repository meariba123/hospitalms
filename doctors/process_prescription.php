<?php
session_start();

// A connection to the SQLite database 
try {
    $db = new SQLite3('../data/hospitalsystem.db');
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $labTestId = $_POST['lab_test_id']; 
    $patientName = $_POST['patient_name'];
    $diagnosis = $_POST['diagnosis'];
    $pastCondition = $_POST['past_condition'];
    $prescription = $_POST['prescription'];
    $prescriptionDate = $_POST['prescription_date'];


    // Prepare SQL statement to insert data into the Prescription table
    $stmt = $db->prepare("INSERT INTO Prescription (lab_test_id, patient_name, diagnosis, past_condition, prescription, prescription_date) VALUES (?, ?, ?, ?, ?, ?)");
    
    $stmt->bindParam(1, $labTestId, SQLITE3_INTEGER);
    $stmt->bindParam(2, $patientName, SQLITE3_TEXT);
    $stmt->bindParam(3, $diagnosis, SQLITE3_TEXT);
    $stmt->bindParam(4, $pastCondition, SQLITE3_TEXT);
    $stmt->bindParam(5, $prescription, SQLITE3_TEXT);
    $stmt->bindParam(6, $prescriptionDate, SQLITE3_TEXT);

    $result = $stmt->execute();

    // Check if the prescription was inputted successfully
    if ($labTestId) {
        header("Location: prescription_success.php");
        exit();

    } else {
        header("Location: prescription_unsuccessful.php");
        exit();
    }
    } else {
        header("Location: prescription.php");
        exit();
    }
    ?>
