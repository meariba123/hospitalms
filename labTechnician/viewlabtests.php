<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Save the requested page for redirection after login
    $_SESSION = "viewlabtests.php";
    header("Location: login6.php");
    exit();
}
include("C:\\xampp\\htdocs\\Project 2 - Ariba Naveed\\html\\subnavigation.html");
?>

<!-- This is where lab tests will be viewed to the lab technician -->

<div class="container pb-5">
    <main role="main" class="pb-3">
        <h2>Lab Test Result Update:</h2><br>

<div class="row">
    <div class="col-5">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <th style="min-width: 175px;">Lab Test ID</th> 
                <th style="min-width: 175px;">Patient Name</th> 
                <th style="min-width: 150px;">Medical Number</th>
                <th style="min-width: 150px;">Test Name</th>
                <th style="min-width: 150px;">Test Date</th>
                <th style="min-width: 150px;">Test Result</th>
                <th style="min-width: 150px;">Staff ID</th>
                <td colspan="2" align="center"> Action </td>

                </td>
                </thead>
           
           
            <?php
            include 'viewlabtestsSQL.php';
            $LabTests = getLabTests();

                for ($i=0; $i<count($LabTests); $i++):
            ?>
            <tr>
                <td><?php echo $LabTests[$i]['lab_test_id']?></td>
                <td><?php echo $LabTests[$i]['patient_name']?></td>
                <td><?php echo $LabTests[$i]['medical_number']?></td>
                <td><?php echo $LabTests[$i]['test_name']?></td>
                <td><?php echo $LabTests[$i]['test_date']?></td>
                <td><?php echo $LabTests[$i]['test_result']?></td>
                <td><?php echo $LabTests[$i]['staff_id']?></td>
                <td colspan="2" align="center">
                <td><a href="updatetestresults.php?lab_test_id=<?php echo $LabTests[$i]['lab_test_id']; ?>">Update</a></td>
                </tr>
                    <?php
                    endfor;
                    ?>
                </table>
            </div>
        </div>
    </main>
</div>
