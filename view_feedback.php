<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'admin') {
    header("Location: login.php");
    exit;
}

$res = $conn->query("SELECT feedback.message, feedback.created_at, users.username FROM feedback JOIN users ON feedback.user_id = users.id ORDER BY feedback.created_at DESC");
?>

<h2>All Feedback</h2>
<ul>
<?php while ($row = $res->fetch_assoc()): ?>
    <li><strong><?= $row['username'] ?>:</strong> <?= $row['message'] ?> (<?= $row['created_at'] ?>)</li>
<?php endwhile; ?>
</ul>
