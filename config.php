<?php
$host = "localhost";  // Change if using a different server
$user = "root";       // Your MySQL username (default: root)
$pass = "";           // Your MySQL password (default: empty for XAMPP)
$dbname = "booking_db"; 

$conn = new mysqli($host, $user, $pass, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
