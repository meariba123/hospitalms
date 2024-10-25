<?php
include("C:\\xampp\\htdocs\\Project 2 - Ariba Naveed\\html\\subnavigation.html");
?>

<!-- This is where medical record will be viewed to the doctor -->

 <!-- Search Bar -->
 <input type="text" id="searchInput" onkeyup="searchMedicalRecord()" placeholder="Search for Medical Number">

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
                <th style="min-width: 90px;">Date</th>
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
        
                <!-- Links the JavaScript Code -->
                <script src="searchmedicalrecord.js"></script>
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
