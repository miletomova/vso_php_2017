<?php 

for($i = 1; $i <= 300; $i+=10){
	echo '<p>' . $i . ' ';
	for($j = $i + 1; $j < $i+10; $j++){
		echo $j . ' ';
	}
	echo '</p>';
}