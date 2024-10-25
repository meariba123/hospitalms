<?php
session_start();

// A connection to the SQLite database 
try {
    $db = new SQLite3('../data/hospitalsystem.db');
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $labid = $_POST['labid']; 
    $equipmentname = $_POST['equipment_name']; 
    $quantity = $_POST['quantity'];
   
    // Prepare SQL statement to insert data into the LabEquipmentQuantity table
    $stmt = $db->prepare("INSERT INTO LabEquipmentQuantity (lab_id, equipment_name, quantity) VALUES (?, ?, ?)");

    $stmt->bindParam(1, $labid, SQLITE3_INTEGER); 
    $stmt->bindParam(2, $equipmentname, SQLITE3_TEXT);
    $stmt->bindParam(3, $quantity, SQLITE3_INTEGER);

    $result = $stmt->execute();

    // Check if the quantity is more than or equal to 50
    if ($quantity >= 50) {
        header("Location: quantity_success.php");
        exit();
        
    } else {
        header("Location: quantity_unsuccessful.php");
        exit();
    }
}
?>
