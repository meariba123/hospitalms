<!-- Updates the lab test results -->

<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Save the requested page for redirection after login
    $_SESSION['requested_page'] = "viewlabtests.php";
    header("Location: login6.php");
    exit();
}

include("C:\\xampp\\htdocs\\Project 2 - Ariba Naveed\\html\\subnavigation.html");

if(isset($_GET['lab_test_id'])) {
    // Retrieve lab_test_id from the URL
    $lab_test_id = $_GET['lab_test_id'];

    $db = new SQLite3('../data/hospitalsystem.db'); 
    $sql = "SELECT * FROM LabTests WHERE lab_test_id=:LabTestId"; 
    $stmt = $db->prepare($sql); 
    $stmt->bindParam(':LabTestId', $lab_test_id, SQLITE3_INTEGER); 
    $result= $stmt->execute(); 

    $arrayResult = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $arrayResult[] = $row;
    }

    if (isset($_POST['submit'])){
        $db = new SQLite3('../data/hospitalsystem.db');
        $sql = "UPDATE LabTests SET test_result = :TestResult WHERE lab_test_id = :LabTestId";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':LabTestId', $lab_test_id, SQLITE3_INTEGER);
        $stmt->bindParam(':TestResult', $_POST['test_result'], SQLITE3_TEXT);
        $stmt->execute();

        // Redirect back to the viewlabtestresults.php page after updating the test result

        header("Location: viewlabtests.php");
        exit();
    }
} else {
    echo "Lab Test ID is missing in the URL.";
}
?>

<div class="row">
    <div class="col-11">
        <?php if (!empty($arrayResult)): ?>
            <form method="post">
                <?php foreach($arrayResult as $row): ?>
                <input type="hidden" name="LabTestId" value="<?php echo $row['lab_test_id']; ?>">
                <div class="form-group col-md-3">
                    <label class="control-label labelFont">Test Result</label>
                    <input class="form-control" type="text" name="test_result" value="<?php echo $row['test_result']; ?>">
                </div>
                <?php endforeach; ?>
                <input type="submit" name="submit" value="Update Test Result" class="btn btn-primary">
            </form>
        <?php else: ?>
            <p>No lab test found with the provided ID.</p>
        <?php endif; ?>
    </div>
</div>
<div class="form-group col-md-3"><a href="viewlabtests.php">Back</a></div> 
