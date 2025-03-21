<?php
include 'config.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $conn->real_escape_string($_POST['fullName']);
    $eventName = $conn->real_escape_string($_POST['eventName']);
    $email = $conn->real_escape_string($_POST['email']);
    $phoneNumber = $conn->real_escape_string($_POST['phoneNumber']);
    $eventDate = $conn->real_escape_string($_POST['eventDate']);
    $address = $conn->real_escape_string($_POST['address']);

    $sql = "INSERT INTO bookings (fullName, eventName, email, phoneNumber, eventDate, address, created_at)
        VALUES ('$fullName', '$eventName', '$email', '$phoneNumber', '$eventDate', '$address', NOW())";


    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Booking Confirmed!'); window.location.href='index.html';</script>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>