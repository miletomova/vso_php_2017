<?php 

$arr = array(
	'name'	=>'Ivan Ivanov',
	'email'	=>'ivan@email.com',
	'age'	=> 25,
	);

echo $arr['name'];//Ivan Ivanov
echo $arr['email'];//ivan@email.com

//var_dump($arr);

$arr['addres'] = 'Addres';

var_dump($arr);
