<?php 

$phone_nums = 	[
					'Ivan Ivanov'		=>'0123456789',
					'Petur Petrov'		=>'1123456789',
					'Geotrgi Georgiev'	=>'2123456789',
					'Angel Angelov'		=>'3123456789',
					'Plamen Vulchev'	=>'4123456789',
					'Ivan Petrov'		=>'5123456789',
				];

// echo $phone_nums['Ivan Ivanov'];
			//1
echo "<ul>";

foreach($phone_nums as $name => $phone){
	echo '<li>'.$name. ' - ' .$phone.'</li>';
}
echo "</ul>";
//2
echo "<ul>";

foreach($phone_nums as $phone){
	echo '<li>'. $phone .'</li>';
}
echo "</ul>";
