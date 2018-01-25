<?php 

$a = 0;

while($a <= 100){

	echo $a . ' - ';
	
	$a+=10;
	
}

$_POST['smth'] = rand(1, 10);
echo 'num' . $_POST['smth'];