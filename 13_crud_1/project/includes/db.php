<?php 

// $conn = mysqli_connect($servername, $username, $password, $dbname);
$conn = mysqli_connect('localhost', 'root', '', 'recipes_new');

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
} else {
	echo "Connected successfully !";
}