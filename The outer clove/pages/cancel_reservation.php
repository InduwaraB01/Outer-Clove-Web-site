<?php
include('newconnection.php');

if (isset($_POST['id'])) {
    $reservationId = $_POST['id'];

    // Check if the reservation exists
    $checkQuery = "SELECT * FROM reservation WHERE id = $reservationId";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        // Reservation exists, proceed with deletion
        $deleteQuery = "DELETE FROM reservation WHERE id = $reservationId";

        if ($conn->query($deleteQuery) === TRUE) {
            echo 'Cancellation success';
        } else {
            echo 'Error: ' . $conn->error;
        }
    } else {
        echo 'Reservation not found';
    }
} else {
    echo 'Invalid request';
}
?>
