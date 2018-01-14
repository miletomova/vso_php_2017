<?php 
session_start();

echo $_SESSION['username'];
echo '<a href="session_destroy.php">Log out</a>';