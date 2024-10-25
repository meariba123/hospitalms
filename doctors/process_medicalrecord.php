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
    $diagnosis = $_POST['diagnosis'];
    $date = $_POST['date'];

    // Prepare SQL statement to insert data into the MedicalRecord table
    $stmt = $db->prepare("INSERT INTO MedicalRecord (medical_number, diagnosis, date) VALUES (?, ?, ?)");
    
    $stmt->bindParam(1, $medicalnumber, SQLITE3_TEXT);
    $stmt->bindParam(2, $diagnosis, SQLITE3_TEXT);
    $stmt->bindParam(3, $date, SQLITE3_TEXT);

    $result = $stmt->execute();

    // Check if the medical record was inputted successfully
    if ($result) {
        header("Location: viewmedicalrecord.php");
        exit();

    } else {
        header("Location: medicalrecord_unsuccessful.php");
        exit();
    }
} else {
    header("Location: createmedicalrecord.php");
    exit();
}
?>
