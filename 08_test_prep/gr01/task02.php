<?php 
$people = [
			['name'=>'Ivan', 'jf'=>100, 'd'=>1000, 'c'=>60, 'p'=>150],
			['name'=>'Dimo', 'jf'=>15, 'd'=>25, 'c'=>600, 'p'=>650],
			['name'=>'Vasil', 'jf'=>155, 'd'=>250, 'c'=>20, 'p'=>1650],
			['name'=>'Kaloqn', 'jf'=>355, 'd'=>750, 'c'=>88, 'p'=>240],
			['name'=>'Pesho', 'jf'=>1100, 'd'=>700, 'c'=>160, 'p'=>250],
		];

$count = count($people);
// R = ((JF+D)2+C*2)/P

for($i = 0; $i < $count; $i++){
	$r = (($people[$i]['jf']+$people[$i]['d'])*($people[$i]['jf']+$people[$i]['d'])+$people[$i]['c']*2)/$people[$i]['p'];

	$people[$i]['r'] = $r;

}

$minR = $people[0]['r'];
$minInd = 0;
$sumR = 0;

for($j = 1; $j<$count; $j++){
	if($people[$j]['r'] < $minR){
		$minR = $people[$j]['r'];
		$minInd = $j;
	}
	$sumR += $people[$j]['r'];
}

echo 'Човекът с най-малък R е ' . $people[$minInd]['name'] . ' и индексът му е ' . $minR;

$averageR = $sumR/$count;