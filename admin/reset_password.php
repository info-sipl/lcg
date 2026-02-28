<?php
include "dbconnection.php";

$username = 'lcg_admin';
$newPlainPassword = 'lcg@2026';   // this will be your login password

$hash = password_hash($newPlainPassword, PASSWORD_DEFAULT);

$sql = "UPDATE admin SET password = ? WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $hash, $username);
$stmt->execute();

echo "✅ Password reset successfully";
