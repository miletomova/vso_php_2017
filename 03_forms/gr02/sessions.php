<?php 
session_start();

$_POST['username'] = 'username';

$_SESSION['username'] = $_POST['username'];

echo "<a href='session2.php'>LoginIn</a>";