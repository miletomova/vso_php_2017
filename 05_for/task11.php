<?php 
$row = 5;
$col = 6;

echo "<table border=1>";
for($i = 0; $i < $row; $i++){
	echo "<tr>"; 
	for($j = 0; $j<$col; $j++){
		echo "<td>" . ($i+1) . ", " . ($j+1) . "</td>";
	} 
	echo"</tr>";
} 
echo "</table>";