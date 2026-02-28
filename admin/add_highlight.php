<?php
session_start();
include "dbconnection.php";

if (!isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $notice = trim($_POST['notice']);
    $link   = trim($_POST['link']);

    if ($notice !== "") {
        $sql = "INSERT INTO highlights (title, description) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $notice, $link);
        $stmt->execute();

        $msg = "Highlight published successfully";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Highlight</title>
</head>
<body>

<h3>Add Highlight</h3>
<?php if (!empty($msg)) echo "<p>$msg</p>"; ?>

<form method="POST">
    <textarea name="notice" required></textarea><br><br>
    <input type="text" name="link"><br><br>
    <button type="submit">Publish</button>
</form>

</body>
</html>
