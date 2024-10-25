<?php
session_start();

// A connection to the SQLite database 
try {
    $db = new SQLite3('../data/hospitalsystem.db');
} catch (Exception $e) {
    // Handle connection error
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patientname = $_POST['patient_name']; 
    $medicalnumber = $_POST['medical_number'];
    $testname = $_POST['test_name'];
    $testdate = $_POST['test_date'];
    $testresult = $_POST['test_result'];
    $staffid = $_POST['staff_id'];

    // Prepare SQL statement to insert data into the LabTests table
    $stmt = $db->prepare("INSERT INTO LabTests (patient_name, medical_number, test_name, test_date, test_result, staff_id) VALUES (?, ?, ?, ?, ?, ?)");
    
    $stmt->bindParam(1, $patientname, SQLITE3_TEXT);
    $stmt->bindParam(2, $medicalnumber, SQLITE3_INTEGER);
    $stmt->bindParam(3, $testname, SQLITE3_TEXT);
    $stmt->bindParam(4, $testdate, SQLITE3_TEXT);
    $stmt->bindParam(5, $testresult, SQLITE3_TEXT);
    $stmt->bindParam(6, $staffid, SQLITE3_INTEGER);

    // Execute the statement
    $result = $stmt->execute();
    
    // Check if the lab test was inserted successfully
    if ($result) {
        header("Location: labtest_success.php");
        exit();

    } else {
        header("Location: labtest_unsuccessful.php");
        exit();
    }

    } else {
        header("Location: labtest.php");
        exit();
    }
?>
