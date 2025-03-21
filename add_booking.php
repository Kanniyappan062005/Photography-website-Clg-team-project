<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit();
}

include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullName"];
    $eventName = $_POST["eventName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $eventDate = $_POST["eventDate"];
    $address = $_POST["address"];

    $sql = "INSERT INTO bookings (fullName, eventName, email, phoneNumber, eventDate, address) 
            VALUES ('$fullName', '$eventName', '$email', '$phone', '$eventDate', '$address')";

    if ($conn->query($sql)) {
        echo "Booking added successfully!";
        header("Location: admin_dashboard.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<form method="post">
    <input type="text" name="fullName" placeholder="Full Name" required>
    <input type="text" name="eventName" placeholder="Event Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="phone" placeholder="Phone Number" required>
    <input type="date" name="eventDate" required>
    <input type="text" name="address" placeholder="Address" required>
    <button type="submit">Add Booking</button>
</form>

<div class="back">
<a href="admin_dashboard.php" class="back-to-db__btn">Back to Dashboard</a>
</div>

<style>/* General Page Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

/* Centering the Forms */
form {
    width: 350px;
    margin: 50px auto;
    padding: 20px;
    background: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    text-align: center;
}

input, button {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

input:focus {
    border-color: #007bff;
    outline: none;
}

/* Button Styles */
button {
    background-color: #28a745;
    color: white;
    border: none;
    cursor: pointer;
    font-size: 18px;
}

button:hover {
    background-color: #218838;
}

.back{
    text-align:center;
}

.back-to-db__btn{
    text-decoration:none;
    color:rgb(137, 47, 255);
    font-size:130%;
}

.back-to-db__btn:hover{
    text-decoration:underline;
}

</style>