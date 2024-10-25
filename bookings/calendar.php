<!DOCTYPE html>
<html>
<head>
    <title>Booking Calendar</title>
    <link rel="stylesheet" href="../css/calendar.css" />
    <script src="calendar.js"></script>
    <style>

    #calendar {
    width: 80%;
    margin-left: 10%;
    margin-top: 60px;
    }

    .calendarTable {
        width: 100%;
        border: 1px solid #000;
        }   

    .calendarTable thead tr th{
        background: #2e7188;;
        border-bottom: 1px solid #000;
        padding: 20px 0px;
        color:#fff;
    }

    .calendarTable tr td {
        text-align:center;
        padding: 20px 0;
        border: 1px ;
        cursor: pointer;
        background: #90ee90;
    }

    .calendarBtns {
        padding: 10px 0;
        width: 100%;
    }

    .calendarBtns button {
        padding: 6px 12px;
        font-size: 18px;
        border-radius: 6px;
        cursor: pointer;

    }

    .calendarDiv {
        display: none;
    }

    #calendarTable_1{
        display:block;

    }

    </style>
</head>
<body>

    <?php include("C:\\xampp\\htdocs\\Project 2 - Ariba Naveed\\html\\subnavigation.html"); ?>
    <div id="calendarTable"></div>
    
</body>
</html>
