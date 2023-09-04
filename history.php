<?php
session_start();


?>

<!DOCTYPE html>
<html>
<head>
<style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .success-message {
            font-size: 24px;
            margin: 20px;
            color: green;
        }

        #booking-history {
            margin-top: 20px;
        }

        table {
            border-collapse: collapse;
            width: 60%;
            margin: 0 auto;
            border: 2px solid #333;
        }

        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #fff;
        }
    </style>
</head>

<body>
    <div class="success-message">Successfully Booked!</div>
    <h2>Booking History:<?php echo $_SESSION["name"];?></h2>
    <?php include("booking_history.php"); ?>
</body>
</html>
