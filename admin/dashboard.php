<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit;
}

include "dbconnection.php";

/* 🔴 CHANGE TABLE NAME HERE IF NEEDED */
$sql = "SELECT COUNT(*) AS total_users FROM admin";
$result = $conn->query($sql);

$totalUsers = 0;
if ($result && $row = $result->fetch_assoc()) {
    $totalUsers = $row['total_users'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
        }

        .header {
            background-color: #343a40;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 200px;
            background-color: #212529;
            height: 100vh;
            padding-top: 20px;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 12px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }

        .logout-btn {
            background-color: #dc3545;
            color: white;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 4px;
            float: right;
        }
    </style>
</head>

<body>

<div class="header">
    <span>Admin Dashboard</span>
    <a href="logout.php" class="logout-btn">Logout</a>
</div>

<div class="container">

    <div class="sidebar">
        <a href="dashboard.php">Dashboard</a>
        <a href="add_highlight.php">Add Highlights</a>
        <a href="manage_highlights.php">Manage Highlights</a>
        <a href="add_faculty.php">Add Faculty</a>
        <a href="manage_faculty.php">Manage Faculty</a>
        
    </div>

    <div class="content">
        <div class="card">
            <h2>Welcome, <?php echo htmlspecialchars($_SESSION['admin_user']); ?> 👋</h2>
            <p>You have successfully logged in.</p>
        </div>

        <div class="card">
            <h3>Demo Statistics</h3>
            <ul>
                <li>Total Admin: <?php echo $totalUsers; ?></li>
                <li>Last Login: Today</li>
            </ul>
        </div>
    </div>

</div>

</body>
</html>
