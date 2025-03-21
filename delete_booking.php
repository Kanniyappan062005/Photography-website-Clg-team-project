<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit();
}

include 'db_connection.php';

$id = $_GET['id'];
$sql = "DELETE FROM bookings WHERE id=$id";

if ($conn->query($sql)) {
    echo "Booking deleted successfully!";
    header("Location: admin_dashboard.php");
} else {
    echo "Error: " . $conn->error;
}
?>
