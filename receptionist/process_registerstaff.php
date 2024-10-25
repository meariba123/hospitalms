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
    $email = $_POST['email'];
    $role = $_POST['role'];
    $password = $_POST['password'];
    

    // Prepare SQL statement to insert data into the staff register details table
    $stmt = $db->prepare("INSERT INTO StaffRegisterDetails (full_name, email, role, password) VALUES (?, ?, ?, ?)");
    $stmt->bindParam(1, $fullname, SQLITE3_TEXT);
    $stmt->bindParam(2, $email, SQLITE3_TEXT);
    $stmt->bindParam(3, $role, SQLITE3_TEXT);
    $stmt->bindParam(4, $password, SQLITE3_TEXT);

    $result = $stmt->execute();

    if ($fullname && $result) {
        header("Location: registerstaff_success.php");
        exit();

    } else {
        header("Location: registerstaff.php");
        exit();
    }
}
?>