<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
<?php 
//if(!empty($_POST)){
if(isset($_POST['angle_a']) && isset($_POST['angle_b']) && isset($_POST['angle_c'])){

	$angle_a = $_POST['angle_a'];
	$angle_b = $_POST['angle_b'];
	$angle_c = $_POST['angle_c'];

	if(is_numeric($angle_a) && is_numeric($angle_b) && is_numeric($angle_c)){
		echo 'If valid triangle';
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
</body>
</html>