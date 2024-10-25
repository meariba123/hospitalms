<?php
// A connection to the SQLite database
try {
    $db = new SQLite3('../data/hospitalsystem.db');
} catch (Exception $e) {
    // Handle connection error
    die("Connection failed: " . $e->getMessage());
}

// Check if the request is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data
    $fullname = $_POST['full_name']; 
    $dob = $_POST['dob']; 
    $email = $_POST['email']; 
    $staffid = $_POST['staff_id']; 
    $bookingDate = $_POST['booking_date']; 
    $bookingTime = $_POST['booking_time'];
    
    // Check if there are any bookings available for the given date, time, and staff id
    $stmt = $db->prepare("SELECT * FROM Bookings WHERE booking_date = :bookingDate AND booking_time = :bookingTime AND staff_id = :staffId");
    $stmt->bindValue(':bookingDate', $bookingDate, SQLITE3_TEXT);
    $stmt->bindValue(':bookingTime', $bookingTime, SQLITE3_TEXT);
    $stmt->bindValue(':staffId', $staffid, SQLITE3_INTEGER);
    $result = $stmt->execute();

    // If no bookings are found, proceed with the booking
    if (!$result->fetchArray()) {
        // Prepare SQL statement to insert data into the bookings table
        $stmt = $db->prepare("INSERT INTO Bookings (full_name, dob, email, staff_id, booking_date, booking_time) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $fullname, SQLITE3_TEXT); 
        $stmt->bindParam(2, $dob, SQLITE3_TEXT); 
        $stmt->bindParam(3, $email, SQLITE3_TEXT); 
        $stmt->bindParam(4, $staffid, SQLITE3_INTEGER); 
        $stmt->bindParam(5, $bookingDate, SQLITE3_TEXT); 
        $stmt->bindParam(6, $bookingTime, SQLITE3_TEXT);


        $result = $stmt->execute();

        // Check if the booking was inserted successfully
        if ($result) {
            echo "Booking confirmed for $bookingDate at $bookingTime for $fullname";
        } else {
            echo "Error: Failed to insert booking.";
        }
    } else {
        echo "Error: Booking not available for $bookingDate at $bookingTime for staff ID $staffid.";
    }
}    
?>
