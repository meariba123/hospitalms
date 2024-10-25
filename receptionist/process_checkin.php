<?php
session_start();

// A connection to the SQLite database
try {
    $db = new SQLite3('../data/hospitalsystem.db');
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $booking_id = $_POST['booking_id']; 
    $fullname = $_POST['fullname']; 
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $checked_in = isset($_POST['checked_in']) && $_POST['checked_in'] == 'yes' ? 1 : 0;

    // Prepare SQL statement to insert data into the CheckIn table
    $stmt = $db->prepare("INSERT INTO CheckIn (booking_id, full_name, dob, email, checked_in) VALUES (?, ?, ?, ?, ?)");
    $stmt->bindParam(1, $booking_id, SQLITE3_INTEGER); 
    $stmt->bindParam(2, $fullname, SQLITE3_TEXT);
    $stmt->bindParam(3, $dob, SQLITE3_TEXT);
    $stmt->bindParam(4, $email, SQLITE3_TEXT);
    $stmt->bindParam(5, $checked_in, SQLITE3_INTEGER);

    $result = $stmt->execute();

    // Check if the patient checked in 
    if ($checked_in && $result) {
        header("Location: checkin_success.php");
        exit();

    } elseif (!$checked_in) {
        header("Location: checkin_unsuccessful.php");
        exit();

    } else {
        header("Location: checkin.php");
        exit();
    }
}
?>
