<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<?php 
	echo 'if isset';
	var_dump(isset($_POST['angle_a']));
	unset($_POST['angle_a']);

	echo 'if isset after unset';

	var_dump(isset($_POST['angle_a']));

	// echo 'if is empty';
	// var_dump(empty($_POST['angle_a']));
	if(!empty($_POST)){
		$angle_a = $_POST['angle_a'];
		$angle_b = $_POST['angle_b'];
		$angle_c = $_POST['angle_c'];

		if(is_numeric($angle_a) && is_numeric($angle_b) && is_numeric($angle_c)){
			echo 'check if triangle';
		} else {
			echo 'Not a valid input';
		}
	}

	?>
	<form method="post" action="">
		<p>Angle a</p>
		<input type="text" name="angle_a">
		<p>Angle b</p>
		<input type="text" name="angle_b">
		<p>Angle c</p>
		<input type="text" name="angle_c">
		<input type="submit" name="check">
	</form>
	<a href="">Назад</a>	
</body>
</html>