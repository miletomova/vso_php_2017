<?php 

$str = 'Здравейте група, с риск да понеса критики, някой да даде идея как да ги коригирам? Днес бях на химиотерапия, беше ми лошо като се прибрах, но си навих на пръста да направя курабийки, гади ми се от вливките, но съм инат ще правя, то хубаво ама нещо почнах да забравям и пропуснах захарта, ей като пръв абориген съм,?';

$res = explode(',', $str);
print_r($res);
var_dump($res);

$res = implode('@', $res);

var_dump($res);

$pswd = '           123456 ';
var_dump($pswd);

$res_pswd = trim($pswd);

var_dump($res_pswd);
$ord = ord('A');
echo $ord.PHP_EOL;

$chr = chr(97);
echo $chr;

$str_latin = 'Hello!';
$res = str_split($str_latin);

$str_cyr = 'Здравей!';
$res = str_split($str_cyr, 2);

$len = mb_strlen($str_cyr);

var_dump($len);

