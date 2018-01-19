<?php 
$rand1 = rand(1, 100);
$rand2 = rand(1, 100);
?>
<form action="">
	<input type="hidden" name="num1" value="<?php echo $rand1 ?>">
	<input type="hidden" name="num2" value="<?= $rand2 ?>">
</form>