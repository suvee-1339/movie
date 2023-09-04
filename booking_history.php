<?php
// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch booking history from the database
$sql = "SELECT selected_time, total_seats FROM bookings";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Selected Time</th><th>Total Seats</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["selected_time"] . "</td><td>" . $row["total_seats"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No booking history available.";
}

// Close the database connection
$conn->close();

?>
