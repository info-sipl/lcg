<?php
session_start();
include "dbconnection.php";

if (!isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit;
}

$result = $conn->query("SELECT * FROM faculty ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Faculty</title>
</head>
<body>

<h2>Manage Faculty</h2>
<a href="add_faculty.php">+ Add Faculty</a>

<table border="1" cellpadding="8">
<tr>
    <th>Name</th>
    <th>Department</th>
    <th>Status</th>
</tr>

<?php while ($row = $result->fetch_assoc()): ?>
<tr>
    <td><?php echo htmlspecialchars($row['name']); ?></td>
    <td><?php echo htmlspecialchars($row['department']); ?></td>
    <td><?php echo $row['status'] ? 'Active' : 'Inactive'; ?></td>
</tr>
<?php endwhile; ?>

</table>

</body>
</html>
