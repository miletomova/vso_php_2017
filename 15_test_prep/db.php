<?php 

$conn = mysqli_connect('localhost', 'root', '', 'tickets');

if($conn){
	echo "success";
}