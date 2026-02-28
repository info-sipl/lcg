<?php
$servername = "localhost";
$username   = "root";     // default XAMPP username
$password   = "";         // default XAMPP password (blank)
$database   = "lcg";
$port       = 3315;

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Optional success message (remove in production)
// echo "Database connected successfully";
?>
