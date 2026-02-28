<?php
include_once __DIR__ . "/../admin/dbconnection.php";

/*
  Using REAL table columns:
  id, title, description, status, created_at
*/
$sql = "SELECT title, description
        FROM highlights
        WHERE status = 1
        ORDER BY created_at DESC";

$result = $conn->query($sql);
?>

<div class="header-notice">
    <div class="container">
        <div class="notice-content">
            <p class="notice-title">Highlights</p>

            <marquee class="notice-text">
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>

                        <strong>
                            <?php echo htmlspecialchars($row['title']); ?>
                        </strong>
                        —
                        <?php
                        // Short preview of description
                        echo htmlspecialchars(
                            mb_strimwidth($row['description'], 0, 100, '...')
                        );
                        ?>

                        <a href="highlights.php"
                           target="_blank"
                           style="color:red; font-weight:bold;">
                            Click Here
                        </a>

                        &nbsp;&nbsp; | &nbsp;&nbsp;

                    <?php endwhile; ?>
                <?php else: ?>
                    No current highlights
                <?php endif; ?>
            </marquee>

        </div>
    </div>
</div>
