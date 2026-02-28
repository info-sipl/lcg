<?php
include "admin/dbconnection.php";

// Fetch only ACTIVE highlights, latest first
$sql = "SELECT title, description, created_at
        FROM highlights
        WHERE status = 1
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
    <title>All Highlights</title>

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
        .highlight-box {
            background:#fff;
            padding:20px;
            margin-bottom:15px;
            border-radius:6px;
            box-shadow:0 2px 6px rgba(0,0,0,0.1);
        }
        .highlight-title {
            font-size:18px;
            font-weight:bold;
            margin-bottom:8px;
        }
        .highlight-date {
            font-size:13px;
            color:#777;
            margin-bottom:10px;
        }
        .highlight-desc {
            font-size:15px;
            line-height:1.5;
        }
    </style>
</head>

<body>

<h2>Highlights & Notices</h2>

<?php if ($result->num_rows > 0): ?>
    <?php while ($row = $result->fetch_assoc()): ?>
        <div class="highlight-box">
            <div class="highlight-title">
                <?php echo htmlspecialchars($row['title']); ?>
            </div>
            <div class="highlight-date">
                Posted on <?php echo date("d M Y, h:i A", strtotime($row['created_at'])); ?>
            </div>
            <div class="highlight-desc">
                <?php echo nl2br(htmlspecialchars($row['description'])); ?>
            </div>
        </div>
    <?php endwhile; ?>
<?php else: ?>
    <p>No highlights available.</p>
<?php endif; ?>

</body>
</html>
