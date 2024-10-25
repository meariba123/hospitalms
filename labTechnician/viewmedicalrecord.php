<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Save the requested page for redirection after login
    $_SESSION = "viewmedicalrecord.php";
    header("Location: login5.php");
    exit();
}
include("C:\\xampp\\htdocs\\Project 2 - Ariba Naveed\\html\\subnavigation.html");
?>

<!-- This is where medical records will be viewed to the lab technician -->

<div class="container pb-5">
    <main role="main" class="pb-3">
        <h2>Medical Record:</h2><br>

<div class="row">
    <div class="col-5">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <th style="min-width: 175px;">Record ID</th> 
                <th style="min-width: 175px;">Medical Number</th> 
                <th style="min-width: 150px;">Diagnosis</th>
                <th style="min-width: 150px;">Date</th>

                </td>
                </thead>
           
           
            <?php
            include 'viewmedicalrecordSQL.php';
            $MedicalRecord = getMedicalRecord();

                for ($i=0; $i<count($MedicalRecord); $i++):
            ?>
            <tr>
                <td><?php echo $MedicalRecord[$i]['record_id']?></td>
                <td><?php echo $MedicalRecord[$i]['medical_number']?></td>
                <td><?php echo $MedicalRecord[$i]['diagnosis']?></td>
                <td><?php echo $MedicalRecord[$i]['date']?></td>
                </tr>
                    <?php
                    endfor;
                    ?>
                </table>
            </div>
        </div>
    </main>
</div>
