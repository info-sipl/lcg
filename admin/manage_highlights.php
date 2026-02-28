<?php
session_start();
include "dbconnection.php";

// Security check
if (!isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit;
}

// Fetch highlights using CORRECT column names
$sql = "SELECT id, title, description, status, created_at
        FROM highlights
        ORDER BY created_at DESC";

$result = $conn->query($sql);

if (!$result) {
    die("SQL Error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Highlights</title>

    <link
      rel="shortcut icon"
      href="./assets/img/fav.png"
      type="image/xml+png"
    />
    <style>
        body {
            font-family: Arial, sans-serif;
            background:#f4f6f8;
            padding:20px;
        }
        table {
            width:100%;
            border-collapse:collapse;
            background:#fff;
        }
        th, td {
            border:1px solid #ccc;
            padding:10px;
            vertical-align: top;
        }
        th {
            background:#343a40;
            color:#fff;
        }
        .active { color:green; font-weight:bold; }
        .inactive { color:red; font-weight:bold; }
        a.btn {
            display:inline-block;
            margin-bottom:15px;
            padding:8px 14px;
            background:#007bff;
            color:#fff;
            text-decoration:none;
            border-radius:4px;
        }
        a.action {
            margin-right:10px;
            text-decoration:none;
            font-weight:bold;
        }
    </style>
</head>

<body>

<h2>Manage Highlights</h2>

<a href="add_highlight.php" class="btn">+ Add Highlight</a>

<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description (Preview)</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Action</th>
    </tr>

<?php if ($result->num_rows > 0): ?>
<?php while ($row = $result->fetch_assoc()): ?>
<tr>
    <td><?php echo $row['id']; ?></td>

    <td><?php echo htmlspecialchars($row['title']); ?></td>

    <td>
        <?php
        echo htmlspecialchars(
            mb_strimwidth($row['description'], 0, 256, '...')
        );
        ?>
    </td>

    <td>
        <?php
        echo $row['status']
            ? '<span class="active">Active</span>'
            : '<span class="inactive">Inactive</span>';
        ?>
    </td>

    <td><?php echo date("d M Y, h:i A", strtotime($row['created_at'])); ?></td>

    <td>
        <?php if ((int)$row['status'] === 1): ?>
            <a class="action"
            style="color:red;"
            href="toggle_highlights.php?id=<?php echo $row['id']; ?>&status=0">
                Disable
            </a>
        <?php else: ?>
            <a class="action"
            style="color:green;"
            href="toggle_highlights.php?id=<?php echo $row['id']; ?>&status=1">
                Enable
            </a>
        <?php endif; ?>
</td>

</tr>
<?php endwhile; ?>
<?php else: ?>
<tr>
    <td colspan="6">No highlights found</td>
</tr>
<?php endif; ?>

</table>

</body>
</html>
