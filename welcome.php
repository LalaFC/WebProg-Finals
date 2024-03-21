<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

echo "Welcome " . $_SESSION['email'] . "!<br>";
echo "<a href='logout.php'>Logout</a>";
?>