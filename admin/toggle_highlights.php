<?php
session_start();
include "dbconnection.php";

// Security check
if (!isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit;
}

// Validate GET params
if (!isset($_GET['id']) || !isset($_GET['status'])) {
    die("Invalid request");
}

$id     = (int) $_GET['id'];
$status = (int) $_GET['status'];

// Only allow 0 or 1
if ($status !== 0 && $status !== 1) {
    die("Invalid status value");
}

// Update highlight status
$sql = "UPDATE highlights SET status = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $status, $id);

if (!$stmt->execute()) {
    die("Update failed: " . $stmt->error);
}

// Redirect back to manage page
header("Location: manage_highlights.php");
exit;
