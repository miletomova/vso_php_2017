<?php 

$nums = [
	'Ivan Ivanov' => '123456789',
	'Gorgi Georgiev' => '234567890',
	'Petur Petrov' => '345678901',
	'Ivan P Ivanov' => '4567890123'
];

echo $nums['Petur Petrov'];
echo '<ul>';
foreach($nums as $name => $phone){
	echo '<li>' . $name . ' - ' . $phone . '</li>';
}
echo '</ul>';

echo '<ul>';
foreach($nums as $num){
	echo '<li>' . $num . '</li>';
}
echo '</ul>';