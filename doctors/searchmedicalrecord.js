function searchMedicalRecord() {
    // Get the input element for search
    let searchInput = document.getElementById("searchInput"); // Get the input element for search
    let searchTerm = searchInput.value.toUpperCase(); // Get the value entered by the user and convert it 
    let medicalRecordTable = document.getElementsByTagName("table")[0]; // Get the table containing medical records
    let recordRows = medicalRecordTable.getElementsByTagName("tr"); // Get all rows (records) in the table

    // Loop through all table rows, and hide those that don't match the search query
    for (let rowIndex = 0; rowIndex < recordRows.length; rowIndex++) {
        let recordCells = recordRows[rowIndex].getElementsByTagName("td"); 
        let medicalNumberCell = recordCells[1];
        if (medicalNumberCell) {
            let medicalNumberText = medicalNumberCell.textContent || medicalNumberCell.innerText;
            if (medicalNumberText.toUpperCase().indexOf(searchTerm) > -1) {
                recordRows[rowIndex].style.display = "";
            } else {
                recordRows[rowIndex].style.display = "none";
            }
        }       
    }
}
