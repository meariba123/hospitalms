let calendarShow=1;

function settingDate(date, day) {
    date = new Date(date);
    date.setDate(day);
    date.setHours(23);
    return date;
}

// Now you can use the settingDate function
let currentDate = new Date();
currentDate = settingDate(currentDate, 31);

function getDatesBetween(date1, date2) {
    let range1 = new Date(date1);
    let range2 = new Date(date2);

    // Create a single Date object to avoid repeated creation
    let currentDate = new Date(date1);
    currentDate = settingDate(currentDate, 31);

    let temp;
    let dates = [];

    while (currentDate <= range2) {
        if (currentDate.getDate() !== 31) {
            temp = settingDate(currentDate, 0);
            if (temp >= range1 && temp <= range2) dates.push(temp);
            
            // Update currentDate for the next iteration
            currentDate = settingDate(currentDate, 31);
        } else {
            temp = new Date(currentDate);
            if (temp >= range1 && temp <= range2) dates.push(temp);
            currentDate.setMonth(currentDate.getMonth() + 1);
        }
    }

    let content = "<div class='calendarBtns'><button id='calendarPrev' onclick='callprev()' disabled>Prev</button> | <button id='calendarNext' onclick='callnext()'>Next</button></div>";
    let weekDays = [
        { shortDay: "Mon", fullDay: "Monday" },
        { shortDay: "Tues", fullDay: "Tuesday" },
        { shortDay: "Wed", fullDay: "Wednesday" },
        { shortDay: "Thurs", fullDay: "Thursday" },
        { shortDay: "Fri", fullDay: "Friday" },
        { shortDay: "Sat", fullDay: "Saturday" },
        { shortDay: "Sun", fullDay: "Sunday" }
    ];

    for (let i = 0; i < dates.length; i++) {
        let LastDate = dates[i];
        let firstDate = new Date(LastDate.getFullYear(), LastDate.getMonth(), 1);
        content += "<div id='calendarTable_" + (i + 1) + "' class='calendarDiv'>";
        content += "<h2>" + getMonthName(firstDate.getMonth()) + " " + firstDate.getFullYear() + "</h2>";
        content += "<table class='calendarTable'>";
        content += "<thead>";
        weekDays.forEach(item => {
            content += "<th>" + item.fullDay + "</th>";
        });
        content += "</thead>";
        content += "<tbody>";
        let j = 1;
        let displayNum;
        for (let j = 1; j <= LastDate.getDate(); j++) {
            if (j % 7 === 1) {
                content += "<tr>";
            }
            displayNum = j < 10 ? "0" + j : j;
            content += "<td onclick='bookDate(\"" + displayNum + "\", \"" + getMonthName(firstDate.getMonth()) + "\", " + firstDate.getFullYear() + ")'>" + displayNum + "</td>";
            if (j % 7 === 0) {
                content += "</tr>";
            }
        }
        
        
        content += "</tbody>";    
        content += "</table>";
        content += "</div>";
    }
        
    return content;
}

function bookDate() {
    let fullName = prompt("Enter full name:");
    let dob = prompt("Enter date of birth:");
    let email = prompt("Enter email:");
    let bookingDate = prompt("Enter booking date:");
    let bookingTime = prompt("Enter booking time:");
    let staffid = prompt("Enter staff ID:");

    
    if (fullName && dob && email && bookingDate && bookingTime && staffid) {
        // Send booking details to server using AJAX
        let xhr = new XMLHttpRequest();
        let url = "bookings.php";
        let params = "full_name=" + fullName + "&dob=" + dob + "&email=" + email + "&booking_date=" + bookingDate + "&booking_time=" + bookingTime + "&staff_id=" + staffid;
        
        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                alert(xhr.responseText); // Display response from server
            }
        }

        xhr.send(params);
    } else {
        alert("Please fill in all fields.");
    }
}

    
function callnext(){
    let alltable=document.getElementsByClassName('calendarDiv');
    document.getElementById('calendarPrev').disabled = false;
    calendarShow++;
    if(calendarShow<=alltable.length){
        for(let i=0; i  <alltable.length; i++){
            alltable[i].style.display="none";
        }
        document.getElementById("calendarTable_" + calendarShow).style.display = 
        "block";
        if(calendarShow==alltable.length){ 
            document.getElementById("calendarNext").disabled = true;

    }
    
}
}

function callprev(){
    let alltable=document.getElementsByClassName('calendarDiv');
    document.getElementById('calendarNext').disabled = false;
    calendarShow--;
    if(calendarShow >= 1){
        for(let i=0; i  <alltable.length; i++){
            alltable[i].style.display="none";
        }
        document.getElementById("calendarTable_" + calendarShow).style.display = 
        "block";
        if(calendarShow == 1){ 
            document.getElementById("calendarPrev").disabled = true;

    }
    
}
}
// Function to get month name from month index
function getMonthName(monthIndex) {
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    return months[monthIndex];
}

// Call the getDatesBetween function to generate content
let content = getDatesBetween("2024/01/01", "2050/01/01");


let calendarTable = document.getElementById("calendarTable");
if (calendarTable) {
    calendarTable.innerHTML = content;
} else {
    console.log("Error: Calendar table element not found!");
}

//addEventListener is a method which listens for a keypress etc and executes a function or code when that event occurs
document.addEventListener("DOMContentLoaded", function() {
    let content = getDatesBetween("2024/01/01", "2050/01/01");

    let calendarTable = document.getElementById("calendarTable");
    if (calendarTable) {
        calendarTable.innerHTML = content;
    } else {
        console.log("Error: Calendar table element not found!");
    }
});



