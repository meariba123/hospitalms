<!-- Inserts all the attributes of the Medical Record table from the SQLite database (hospitalsystem.db) -->

<?php
function createMedicalRecord(){
    $created = false;
    $db = new SQLite3('../data/hospitalsystem.db');
    
    $sql = 'INSERT INTO MedicalRecord(diagnosis, medication, dosage, frequency, lab_test, lab_test_result) VALUES (:Diagnosis, :Medication, :Dosage, :Frequency, :LabTest, :LabTestResult)';
    $stmt = $db->prepare($sql);

    
    $stmt->bindParam(':medical_number', $_POST['MedicalNumber'], SQLITE3_INTEGER);
    $stmt->bindParam(':Diagnosis', $_POST['diagnosis'], SQLITE3_TEXT);
    $stmt->bindParam(':Medication', $_POST['medication'], SQLITE3_TEXT);
    $stmt->bindParam(':Dosage', $_POST['dosage'], SQLITE3_NUMERIC);
    $stmt->bindParam(':Frequency', $_POST['frequency'], SQLITE3_TEXT);
    $stmt->bindParam(':LabTest', $_POST['lab_test'], SQLITE3_TEXT); 
    $stmt->bindParam(':LabTestResult', $_POST['lab_test_result'], SQLITE3_TEXT);
                         
    if ($stmt->execute()) {
        $created = true;
    }


    $db->close();

    return $created;
}
?>
