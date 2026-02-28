<?php
session_start();
include "dbconnection.php";

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? ''; // DO NOT trim password

$sql = "SELECT sl_no, username, password FROM admin WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows !== 1) {
    echo "<script>alert('Invalid Username'); location.href='index.php';</script>";
    exit;
}

$row = $result->fetch_assoc();

if (!password_verify($password, $row['password'])) {
    echo "<script>alert('Invalid Password'); location.href='index.php';</script>";
    exit;
}

$_SESSION['admin_id']   = $row['sl_no'];
$_SESSION['admin_user'] = $row['username'];

header("Location: dashboard.php");
exit;
