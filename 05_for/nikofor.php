<?php 


$arr = [0, 0, -1, false, '', 2, 3, 7];

$arr = array_filter($arr);
var_dump($arr);

sort($arr);
var_dump($arr);

echo $arr[0] .  PHP_EOL;
echo $arr[0] .  PHP_EOL;