<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Reservations</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
		
		 body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("../images/page-heading-bg.jpg");
		    color:cornsilk;
;
        }

        h1 {
            
            text-align: center;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 15px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
            border-radius: 4px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
		footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
		
		
		
		
		
		
    </style>
</head>
<body>

    <h1>Admin Reservations</h1><hr>
	<h3>click<a href="admin ui.php"> here </a> to go back to Admin home</h3>

    <!-- Display reservations from the database -->
    <?php
    include('newconnection.php');

    $sql = "SELECT * FROM reservation";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div>';
            echo '<p>Name: ' . $row['name'] . '</p>';
            echo '<p>Date: ' . $row['date'] . '</p>';
            echo '<p>Time: ' . $row['time'] . '</p>';
            echo '<p>Email: ' . $row['email'] . '</p>';
            echo '<button class="confirm-button" data-reservation-id="' . $row['id'] . '">Confirm</button>';
            echo '<button class="cancel-button" data-reservation-id="' . $row['id'] . '">Cancel</button><hr>';
            echo '</div>';
        }
    } else {
        echo '<p>No reservations found</p>';
    }
    ?>

    <script>
        $(document).ready(function() {
            function confirmReservation(reservationId) {
                $.ajax({
                    url: 'confirm_reservation.php',
                    type: 'POST',
                    data: { id: reservationId },
                    success: function(response) {
                        alert('Reservation confirmed');
                        // You can reload the page or update the UI as needed
                    },
                    error: function(error) {
                        alert('Error confirming reservation');
                    }
                });
            }

            function cancelReservation(reservationId) {
                $.ajax({
                    url: 'cancel_reservation.php',
                    type: 'POST',
                    data: { id: reservationId },
                    success: function(response) {
                        alert('Reservation canceled');
                        // You can reload the page or update the UI as needed
                    },
                    error: function(error) {
                        alert('Error canceling reservation');
                    }
                });
            }

            $(document).on('click', '.confirm-button', function() {
                var reservationId = $(this).data('reservation-id');
                confirmReservation(reservationId);
            });

            $(document).on('click', '.cancel-button', function() {
                var reservationId = $(this).data('reservation-id');
                cancelReservation(reservationId);
            });
        });
    </script>
	
	<footer>
        &copy;Induwara| 2023 The Outer Clove. All rights reserved.
    </footer>
	
	
	
</body>
</html>
