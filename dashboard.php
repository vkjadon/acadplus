<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login");
    exit;
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head><title>Dashboard</title></head>
<body>
    <h2>Welcome, <?= htmlspecialchars($user['fullname']) ?>!</h2>
    <p>Usertype: <?= htmlspecialchars($user['usertype']) ?></p>
    <p>Department: <?= htmlspecialchars($user['department']) ?></p>
    <a href="logout">Logout</a>
</body>
</html>
