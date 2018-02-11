<?php 

// техните имена, възраст, ръст, тегло.

$men = [
	['name'=>'name1', 'age' => 61, 'height' => 159, 'weight'=>66],
	['name'=>'name2', 'age' => 15, 'height' => 149, 'weight'=>28],
	['name'=>'name3', 'age' => 42, 'height' => 169, 'weight'=>37],
	['name'=>'name4', 'age' => 69, 'height' => 169, 'weight'=>60],
	['name'=>'name5', 'age' => 12, 'height' => 139, 'weight'=>56],
];

// ИТМ = (ръст – тегло)/възраст2

$count = count($men);
$itm_avg = 0;

for($i = 0; $i < $count; $i++){
	$men[$i]['itm'] = ($men[$i]['height']-$men[$i]['weight'])/($men[$i]['age']*$men[$i]['age']);
	$itm_avg += $men[$i]['itm'];
}

// Намерете средния ИТМ за всички хора, за които имате информация в масива и го отпечатайте./
$itm_avg = $itm_avg /$count;

echo " Средният ИТМ на хората е " . $itm_avg;

// Отпечатайте информацията, която съхранявате в масива под формата на таблица, като всяка колона трябва да има название – име, възраст, ръст и т. н.

echo "<table border=1>";
echo 	"<tr>
			<td>
				Имена
			</td>			
			<td>
				Възраст
			</td>
			<td>
				Ръст
			</td>
			<td>
				Тегло
			</td>
			<td>
				ИТМ
			</td>
		</tr>";
	for($m = 0; $m < $count; $m++){
		echo "<tr>";
			foreach ($men[$m] as $value) {
				echo "<td>" . $value . "</td>";
			}
		
		echo "</tr>";
	}
echo "</table>";

// Намерете и отпечатайте името на човека с най-нисък ИТМ

$min 	= $men[0]['itm'];
$minInd = 0;

for ($k=1; $k < $count; $k++) { 
	if($men[$k]['itm'] < $min){
		$min 	= $men[$k]['itm'];
		$minInd = $k;
	}
}

echo "Човекът с най-нисък ИТМ - " . $min . " e " . $men[$minInd]['name'];
