<?php
include('db_connection.php');

if (isset($_POST['id'])) {
    $reservationId = $_POST['id'];
    // Perform confirmation actions with the reservation ID
    // For example, update the database to mark the reservation as confirmed
    // You may want to add error handling as needed
    echo 'Confirmation success';
} else {
    echo 'Invalid request';
}
?>
