<?php 
if(!empty($_GET['road_type'])&&!empty($_GET['fuel_cons'])){
$road_type = $_GET['road_type'];
$fuel_cons = $_GET['fuel_cons'];

switch ($road_type) {
	case '1':
		$fuel_cons = $fuel_cons*1.05;
		break;
	case '2':
		$fuel_cons = $fuel_cons*1.5;
		break;
	case '3':
		$fuel_cons = $fuel_cons*1.20;
		break;
	case '4':
		$fuel_cons = $fuel_cons*0.9;
		break;
}

echo $fuel_cons;
} else {
	echo 'Въведете стойности!';
}