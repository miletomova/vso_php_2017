<?php 

$alc = ['whiskey', 'beer', 'tequila', 'brandy'];
$non_alc = ['cola', 'pepsi', '7up', 'juice'];
if(empty($_GET['age'])){
?>

<form method="get">
	Age:
	<input type="text" name="age">
	<input type="submit" name="submit" value="order">	
</form>

<?php 
} else {
	if ($_GET['age'] < 18) {
		$print = $non_alc;
	} else {
		$print = $alc;
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
	<?php
}