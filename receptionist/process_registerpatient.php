<?php
session_start();

// A connection to the SQLite database
try {
    $db = new SQLite3('../data/hospitalsystem.db');
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST['fullname']; 
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $telephonenumber = $_POST['telephone_number'];
    $email = $_POST['email'];
    $emergencynumber = $_POST['emergency_number'];


    // Prepare SQL statement to insert data into the patient information table
    $stmt = $db->prepare("INSERT INTO PatientInformation (full_name, dob, gender, telephone_number, email, emergency_number) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bindParam(1, $fullname, SQLITE3_TEXT);
    $stmt->bindParam(2, $dob, SQLITE3_TEXT);
    $stmt->bindParam(3, $gender, SQLITE3_TEXT);
    $stmt->bindParam(4, $telephonenumber, SQLITE3_INTEGER);
    $stmt->bindParam(5, $email, SQLITE3_TEXT);
    $stmt->bindParam(6, $emergencynumber, SQLITE3_INTEGER);

    $result = $stmt->execute();

    // Check if the patient information has been inputted
    if ($fullname&& $result) {
        header("Location: registerpatient_success.php");
        exit();

    } elseif (!$fullname) {
        header("Location: registerpatient_unsuccessful.php");
        exit();

    } else {
        header("Location: registerpatient.php");
        exit();
    }
}
?>
