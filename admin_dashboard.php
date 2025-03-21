<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit();
}

include 'db_connection.php';

// Fetch bookings from database
$sql = "SELECT * FROM bookings";
$result = $conn->query($sql);
?>

<h2 class="dashboard__heading">Booking Records</h2>
<div class="menu-bar">
<a href="add_booking.php">➕ Add New Booking</a>
<a href="logout.php" class="logout_btn">Logout</a>
</div>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Event Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Event Date</th>
        <th>Address</th>
        <th>Actions</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row["id"] ?></td>
            <td><?= $row["fullName"] ?></td>
            <td><?= $row["eventName"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["phoneNumber"] ?></td>
            <td><?= $row["eventDate"] ?></td>
            <td><?= $row["address"] ?></td>
            <td>
                <a href="edit_booking.php?id=<?= $row['id'] ?>">✏️ Edit</a> | 
                <a href="delete_booking.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">🗑 Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>




<style>/* General Page Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.dashboard__heading{
    font-size:200%;
    font-weight:800;
    text-align:center;
    margin-top:20px;
}

/* Table Styling */
table {
    width: 100%;
    border-collapse: collapse;
    background: #fff;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}

th, td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: center;
}

th {
    background-color: #007bff;
    color: white;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

/* Action Links */
a {
    text-decoration: none;
    font-weight: bold;
    padding: 5px 10px;
    border-radius: 5px;
}

a.edit {
    background-color: #ffc107;
    color: black;
}

a.delete {
    background-color: #dc3545;
    color: white;
}

a.add {
    background-color: #28a745;
    color: white;
    padding: 10px;
    display: inline-block;
    margin-bottom: 10px;
}

a:hover {
    opacity: 0.8;
}

/* Logout Link */
.logout {
    display: inline-block;
    padding: 10px 15px;
    background-color: #dc3545;
    color: white;
    border-radius: 5px;
    text-decoration: none;
}

.logout:hover {
    background-color: #c82333;
}

.menu-bar{
    display:flex;
    justify-content: space-between;
    margin:0px 20px 0px 20px;
}

.logout_btn{
    background-color:red;
    padding:10px;
    color:white;
}
</style>