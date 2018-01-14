<?php 

$ext1 	= 'png';
$ext2 	= 'jpeg';
$ext3 	= 'jpg';
$extn 	= 'gif';
//extensions = array('png', 'jpeg', 'jpg', 'gif',);
$extensions = ['png', 
				'jpeg', 
				'jpg', 
				'gif',
				];

echo $extensions[0];//png

$extensions[] = 'svg';

var_dump($extensions);
