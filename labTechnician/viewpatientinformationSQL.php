<!-- Patient Information table being connected through SQLite to gather data -->

<?php
function getPatientInformation(){
    $arrayResult = array(); 
    $db = new SQLite3('../data/hospitalsystem.db');
    $sql = "SELECT * FROM PatientInformation"; 
    $stmt = $db->prepare($sql);
    $result = $stmt->execute();

    while ($row = $result->fetchArray()){ 
        $arrayResult [] = $row; 
    }
    return $arrayResult;
}
?>
