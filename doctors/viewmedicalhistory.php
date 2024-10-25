<?php
include("C:\\xampp\\htdocs\\Project 2 - Ariba Naveed\\html\\subnavigation.html");
?>

<!-- This is where medical history will be viewed to the doctor -->



<div class="container pb-5">
    <main role="main" class="pb-3">
        <h2>Medical History:</h2><br>

<div class="row">
    <div class="col-5">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <th style="min-width: 175px;">History ID</th> 
                <th style="min-width: 175px;">Medical Number</th> 
                <th style="min-width: 150px;">Past Conditions</th>
                <th style="min-width: 150px;">Surgical Procedure</th>
                <th style="min-width: 90px;">Allergies</th>
                <th style="min-width: 150px;">Family History</th>
                </thead>
           
           
            <?php
            include 'viewmedicalhistorySQL.php';
            $MedicalHistory = getMedicalHistory();

                for ($i=0; $i<count($MedicalHistory); $i++):
            ?>
            <tr>
                <td><?php echo $MedicalHistory[$i]['history_id']?></td>
                <td><?php echo $MedicalHistory[$i]['medical_number']?></td>
                <td><?php echo $MedicalHistory[$i]['past_condition']?></td>
                <td><?php echo $MedicalHistory[$i]['surgical_procedure']?></td>
                <td><?php echo $MedicalHistory[$i]['allergies']?></td>
                <td><?php echo $MedicalHistory[$i]['family_history']?></td>
        
                </body>

                </tr>
                    <?php
                    endfor;
                    ?>
                </table>
            </div>
        </div>
    </main>
</div>
