<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        #time-display {
            font-size: 24px;
            margin: 20px;
        }

        .time-button {
            font-size: 18px;
            padding: 10px 20px;
            margin: 10px;
            cursor: pointer;
            border: 2px solid #007bff;
            background-color: #fff;
            color: #007bff;
            border-radius: 5px;
        }

        .time-button:hover {
            background-color: #007bff;
            color: #fff;
        }

        .seat-button {
            font-size: 18px;
            padding: 10px 20px;
            margin: 10px;
            cursor: pointer;
            border: 2px solid #28a745;
            background-color: #fff;
            color: #28a745;
            border-radius: 5px;
        }

        .seat-button:hover {
            background-color: #28a745;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Select a Time:</h1>
    <button class="time-button" onclick="updateTime('10am')">10 AM</button>
    <button class="time-button" onclick="updateTime('2pm')">2 PM</button>
    <button class="time-button" onclick="updateTime('6pm')">6 PM</button>
    <button class="time-button" onclick="updateTime('10pm')">10 PM</button>

    <div id="time-display">Selected Time: </div>

    <h1>Select Seats:</h1>
    <button class="seat-button" onclick="selectSeat(1)">Seat 1</button>
    <button class="seat-button" onclick="selectSeat(2)">Seat 2</button>
    <button class="seat-button" onclick="selectSeat(3)">Seat 3</button>
    <button class="seat-button" onclick="selectSeat(4)">Seat 4</button>
    <button class="seat-button" onclick="selectSeat(5)">Seat 5</button>
    <button class="seat-button" onclick="selectSeat(6)">Seat 6</button>
    <button class="seat-button" onclick="selectSeat(7)">Seat 7</button>
    <button class="seat-button" onclick="selectSeat(8)">Seat 8</button>
    <button class="seat-button" onclick="selectSeat(9)">Seat 9</button>
    <button class="seat-button" onclick="selectSeat(10)">Seat 10</button>
    <!-- Add more seat buttons as needed -->

    <div id="selected-seats"></div>

    <form method="post" action="confirm.php">
        <input type="hidden" id="selected-time" name="selected-time" value="">
        <input type="hidden" id="total-seats" name="total-seats" value="">
        <input type="submit" value="Confirm">
        
      

    </form>

    <script>
        let selectedTime = "";
        let selectedSeats = [];

        function updateTime(time) {
            selectedTime = time;
            document.getElementById("time-display").textContent = "Selected Time: " + time;
        }

        function selectSeat(seatNumber) {
            selectedSeats.push(seatNumber);
            updateSelectedSeatsDisplay();
        }

        function updateSelectedSeatsDisplay() {
            document.getElementById("selected-seats").textContent = "Selected Seats: " + selectedSeats.join(", ");
            document.getElementById("total-seats").value = selectedSeats.length;
            document.getElementById("selected-time").value = selectedTime;
        }
    </script>
</body>
</html>
