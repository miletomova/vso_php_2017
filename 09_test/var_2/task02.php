<?php 

//име, фамилия, оценка от писмен изпит, оценка от устен изпит, оценка от тест.

$students = [
	['name'=>'name1', 'last_name'=>'last_name1', 'writing' => 6, 'speaking' => 5, 'test'=>6],
	['name'=>'name2', 'last_name'=>'last_name2', 'writing' => 5, 'speaking' => 4, 'test'=>2],
	['name'=>'name3', 'last_name'=>'last_name3', 'writing' => 4, 'speaking' => 6, 'test'=>3],
	['name'=>'name4', 'last_name'=>'last_name4', 'writing' => 6, 'speaking' => 6, 'test'=>6],
	['name'=>'name5', 'last_name'=>'last_name5', 'writing' => 4, 'speaking' => 3, 'test'=>6],
];

$count = count($students);
$students_avg = 0;

for($i = 0; $i < $count; $i++){
	$students[$i]['avg'] = ($students[$i]['writing']+$students[$i]['speaking']+$students[$i]['test'])/3;
	$students_avg += $students[$i]['avg'];
}

$students_avg = $students_avg/$count;

echo " Средният успех на учениците е " . $students_avg;

echo "<table border=1>";
echo 	"<tr>
			<td>
				Име
			</td>
			<td>
				Фамилия
			</td>
			<td>
				Писмен
			</td>
			<td>
				Устен
			</td>
			<td>
				Тест
			</td>
			<td>
				Среден успех
			</td>
		</tr>";
	for($m = 0; $m < $count; $m++){
		echo "<tr>";
			foreach ($students[$m] as $value) {
				echo "<td>" . $value . "</td>";
			}
		
		echo "</tr>";
	}
echo "</table>";


$max 	= $students[0]['avg'];
$maxInd = 0;

for ($k=1; $k < $count; $k++) { 
	if($students[$k]['avg'] > $max){
		$max 	= $students[$k]['avg'];
		$maxInd = $k;
	}
}

echo "Ученикът с най-висок среден успех - " . $max . " e " . $students[$maxInd]['name'] . ' ' . $students[$maxInd]['last_name'];
