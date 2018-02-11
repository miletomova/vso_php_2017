<?php 

$rainy = ['umbrella', 'jacket', 'boots', 'pvc-coat'];
$shiny = ['sunglasses', 'slippers', 't-shirt', 'sun-hat'];

if($_GET['date'] % 3 === 0){
	$print = $rainy;
} else {
	$print = $shiny;
}

?>

<ul>
	<?php 
		foreach ($print as $value) {
	?>
		<li>
			<?= $value ?>
		</li>
	<?php
		}
	?>
</ul>