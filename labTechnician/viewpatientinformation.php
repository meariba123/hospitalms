<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Save the requested page for redirection after login
    $_SESSION = "viewpatientinformation.php";
    header("Location: login2.php");
    exit();
}
include("C:\\xampp\\htdocs\\Project 2 - Ariba Naveed\\html\\subnavigation.html");
?>

<!-- This is where patient information will be viewed to the lab technician -->

<div class="container pb-5">
    <main role="main" class="pb-3">
        <h2>Patient Information:</h2><br>

        <div class="row">
            <div class="col-5">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <th style="min-width: 175px;">Medical Number</th> 
                        <th style="min-width: 150px;">Full Name</th>
                        <th style="min-width: 150px;">Date Of Birth</th>
                        <th style="min-width: 150px;">Gender</th>
                        <th style="min-width: 80px;">Phone Number</th>
                        <th style="min-width: 90px;">Email</th>
                        <th style="min-width: 90px;">Emergency Phone Number</th>
                    </thead>
                    
                    <?php
                    include 'viewpatientinformationSQL.php';
                    $PatientInformation = getPatientInformation();

                        for ($i=0; $i<count($PatientInformation); $i++):
                    ?>
                    <tr>
                        <td><?php echo $PatientInformation[$i]['medical_number']?></td>
                        <td><?php echo $PatientInformation[$i]['full_name']?></td>
                        <td><?php echo $PatientInformation[$i]['dob']?></td>
                        <td><?php echo $PatientInformation[$i]['gender']?></td>
                        <td><?php echo $PatientInformation[$i]['telephone_number']?></td>
                        <td><?php echo $PatientInformation[$i]['email']?></td>
                        <td><?php echo $PatientInformation[$i]['emergency_number']?></td>
                    </tr>
                    <?php
                    endfor;
                    ?>
                </table>
            </div>
        </div>
    </main>
</div>

