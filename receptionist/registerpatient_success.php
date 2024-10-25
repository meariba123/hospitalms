<?php
session_start();
include("C:\\xampp\\htdocs\\Project 2 - Ariba Naveed\\html\\subnavigation.html");
include('viewpatientinformationSQL.php');

$PatientInformation = getPatientInformation();
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
                <a href="createregistermedicalhistory.php" class="btn btn-primary">Next To Register Patient Medical History</a>
            </div>
        </div>
    </main>
</div>
