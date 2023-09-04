<?php
// Include the QR Code library
include('phpqrcode/qrlib.php');

// Database connection configuration
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "testing";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database (replace with your own query)
$sql = "SELECT selected_time, total_seats FROM bookings ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Assuming you want to display multiple rows of data
    $data = '';
    while ($row = $result->fetch_assoc()) {
        // Concatenate data from each row
        $data .= "Column1: " . $row["selected_time"] . "\n";
        $data .= "Column2: " . $row["total_seats"] . "\n";
        // Add any additional columns as needed
    }

    // Generate and display the QR code
    QRcode::png($data, 'qrcode.png');
    echo "<img src='qrcode.png' alt='QR Code'>";
} else {
    echo "No data found.";
}

// Close the database connection
$conn->close();
?>
