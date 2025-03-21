<?php
session_start();
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_email = $_POST['email'];
    $admin_password = $_POST['password'];

    // Example: Replace with actual admin credentials check from DB
    if ($admin_email == "admin@example.com" && $admin_password == "admin123") {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin_dashboard.php");
        exit();
    } else {
        echo "Invalid credentials!";
    }
}
?>

<div class="form-container">
<form method="post">
    <h1>Admin login</h1>
    <input type="email" name="email" placeholder="Admin Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>

<div class="back">
<a href="index.html" class="back-to-db__btn">Back to Home</a>
</div>

</div>


<style>/* General Page Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display:grid;
    place-items:center;
    height:90vh;
}

/* Centering the Forms */
form {
    width: 350px;
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
    margin-top:20px;
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