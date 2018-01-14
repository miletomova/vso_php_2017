<?php 
$angle_a = $_GET['angle_a'];
$angle_b = $_GET['angle_b'];
$angle_c = $_GET['angle_c'];

if(is_numeric($angle_a) && is_numeric($angle_b) && is_numeric($angle_c)){
	echo 'check if triangle';
} else {
	echo 'Not a valid input!';
}