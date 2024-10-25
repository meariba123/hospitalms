<?php
session_start();

// A connection to the SQLite database 
$db = new SQLite3('../data/hospitalsystem.db');

// Check if connection was successful
if (!$db) {
    die("Connection failed: " . $db->lastErrorMsg());
}

$username = $_POST["username"];
$password = $_POST["password"];
$staffid = $_POST["staff_id"];

// Correct login details for the doctor
if ($username === "doctor" && $password === "doctor2") {
    $_SESSION['logged_in'] = true;

    // Prepare SQL statement to insert data into the StaffLoginDetails table
    $stmt = $db->prepare("INSERT INTO StaffLoginDetails (username, password, staff_id) VALUES (:username, :password, :staff_id)");

    $stmt->bindValue(':username', $username, SQLITE3_TEXT);
    $stmt->bindValue(':password', $password, SQLITE3_TEXT);
    $stmt->bindValue(':staff_id', $staffid, SQLITE3_INTEGER);
    $result = $stmt->execute();

    if ($result) {
        header("Location: labtest.php");
        exit();

    } else {
        echo "Failed to insert login details into StaffLoginDetails table.";
    }
} else {
    // Statement shown if wrong username or password inputted
    echo "Invalid username or password";
}

$db->close();
?>
