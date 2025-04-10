<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <h2>Admin Panel</h2>
    <a href="php/logout.php">Logout</a>

    <h3>Manage Categories</h3>
    <form action="php/add_category.php" method="POST">
        <input type="text" name="category" required placeholder="New Category">
        <button type="submit">Add</button>
    </form>
</body>
</html>
