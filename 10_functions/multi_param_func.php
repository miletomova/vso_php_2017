<?php 
function display_arr($arr, $tag1, $tag2, $tag3, $tag4 = ''){
	$rows = count($arr);
	echo "<". $tag1 .">";
		for($i = 0; $i < $rows; $i++){
			echo "<". $tag4 .">";
			echo "<". $tag2 .">";
			foreach($arr[$i] as $value){
				echo "<". $tag3 .">". $value ."</". $tag3 .">";
			}
			echo "</". $tag2 .">";
			echo "</". $tag4 .">";
		}
	echo "</". $tag1 .">";
}

$students = [
			['name' => 'Христо', 'age' => '37', 'height' => '185', 'weight' => '80'],
			['name' => 'Петър', 'age' => '29', 'height' => '178', 'weight' => '84'],
			['name' => 'Тодор', 'age' => '25', 'height' => '190', 'weight' => '102'],
			['name' => 'Ана', 'age' => '18', 'height' => '165', 'weight' => '53'],
			['name' => 'Марина', 'age' => '20', 'height' => '170', 'weight' => '62'],
];

display_arr($students, 'ul', 'ul', 'li', 'li');

display_arr($students, 'table', 'tr', 'td');