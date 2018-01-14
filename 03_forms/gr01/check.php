<?php 

//var_dump($_GET);

//$angle_a = $_GET['angle_a'];

if(is_numeric($_GET['angle_a']) && is_numeric($_GET['angle_b']) && is_numeric($_GET['angle_c'])){
	//check if sum is 180
} else {
	echo 'Not a valid input!';
}