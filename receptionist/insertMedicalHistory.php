<!-- Inserts all the attributes of the Medical History table from the SQLite database (hospitalsystem.db) -->

<?php
function createMedicalHistory(){
    $created = false;
    $db = new SQLite3('../data/hospitalsystem.db');
    
    $sql = 'INSERT INTO MedicalHistory(past_condition, surgical_procedure, allergies, family_history) VALUES (:PastCondition, :SurgicalProcedure, :Allergies, :FamilyHistory)';
    $stmt = $db->prepare($sql);

    $stmt->bindParam(':PastCondition', $_POST['condition'], SQLITE3_TEXT);
    $stmt->bindParam(':SurgicalProcedure', $_POST['procedure'], SQLITE3_TEXT);
    $stmt->bindParam(':Allergies', $_POST['allergies'], SQLITE3_TEXT);
    $stmt->bindParam(':FamilyHistory', $_POST['history'], SQLITE3_TEXT);

    if ($stmt->execute()) {
        $created = true;
    }

    $db->close();

    return $created;
}
?>
