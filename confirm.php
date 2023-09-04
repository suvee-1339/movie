<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the selected time and total seats from the form
    $selectedTime = $_POST["selected-time"];
    $totalSeats = $_POST["total-seats"];

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

    // Prepare and execute an SQL INSERT statement to store the booking information
    $sql = "INSERT INTO bookings (selected_time, total_seats) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Error: " . $conn->error);
    }

    $stmt->bind_param("si", $selectedTime, $totalSeats);
    if ($stmt->execute()) {
        header("Location: history.php");

    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
} else {
    // Redirect to the booking page if the form was not submitted
    header("Location: book.php");
}

?>
