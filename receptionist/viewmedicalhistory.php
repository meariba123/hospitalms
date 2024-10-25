<?php
include("C:\\xampp\\htdocs\\Project 2 - Ariba Naveed\\html\\subnavigation.html");
?>

<!-- This is where medical history will be viewed to the lab technician -->

<div class="container pb-5">
    <main role="main" class="pb-3">
        <h2>View Medical History:</h2><br>

<div class="row">
    <div class="col-5">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                <td>Past Condition</td>
                <td>Surgical Procedure</td>
                <td>Allergies</td>
                <td>Family History</td>
                </tr>
            </thead>
            
            
            <?php
            include 'viewmedicalhistorySQL.php';
            $MedicalHistory = getMedicalHistory();

                for ($i=0; $i<count($MedicalHistory); $i++):
            ?>
            <tr>
                <td><?php echo $MedicalHistory[$i]['past_condition']?></td>
                <td><?php echo $MedicalHistory[$i]['surgical_procedure']?></td>
                <td><?php echo $MedicalHistory[$i]['allergies']?></td>
                <td><?php echo $MedicalHistory[$i]['family_history']?></td>
                </td>
            </tr>
            <?php endfor;?>
            
        </table>
    </div>
</div>

</main>
</div>

