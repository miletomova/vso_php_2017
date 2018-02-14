<?php 
function display_arr($arr){
	$rows = count($arr);
	echo "<table>";
		for($i = 0; $i < $rows; $i++){			
			echo "<tr>";
			foreach($arr[$i] as $value){
				echo "<td>". $value ."</td>";
			}
			echo "</tr>";
		}
	echo "</table>";
}

$students = [
			['name' => 'Христо', 'age' => '37', 'height' => '185', 'weight' => '80'],
			['name' => 'Петър', 'age' => '29', 'height' => '178', 'weight' => '84'],
			['name' => 'Тодор', 'age' => '25', 'height' => '190', 'weight' => '102'],
			['name' => 'Ана', 'age' => '18', 'height' => '165', 'weight' => '53'],
			['name' => 'Марина', 'age' => '20', 'height' => '170', 'weight' => '62'],
];

display_arr($students);