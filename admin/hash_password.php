<?php
include "dbconnection.php";

$username = 'lcg_admin';          // EXACT username
$inputPwd = 'lcg@2026';      // EXACT password you type in form

$sql = "SELECT password FROM admin WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows !== 1) {
    die("❌ Username not found");
}

$row = $result->fetch_assoc();

echo "<pre>";
echo "Password from DB:\n";
var_dump($row['password']);

echo "\n\npassword_verify result:\n";
var_dump(password_verify($inputPwd, $row['password']));
