<!--Medical History table being connected through SQLite to gather data -->

<?php
function getMedicalHistory (){
    $arrayResult = array(); 
    $db = new SQLite3('../data/hospitalsystem.db');
    $sql = "SELECT * FROM MedicalHistory";
    $stmt = $db->prepare($sql);
    $result = $stmt->execute();

    while ($row = $result->fetchArray()){ 
        $arrayResult [] = $row; 
    }
    return $arrayResult;
}
?>
