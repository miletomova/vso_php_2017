<?php 

$countries = [
	'Bulgaria'	=>	'Vratsa',
	'Turkey'	=> 	'Didim',
	'Greece'	=>	'Veriq',
	'Macedonia'	=> 	'Prilep',
	'Albania'	=>	'Tirana',
	'Serbia'	=> 	'Bosilegrad'
];

if(empty($_POST['city'])){
	?>

	<form action="" method="post">
		<select name="city" id="">
			<?php 
			foreach ($countries as $value) {
				echo "<option value=" . $value . ">". $value ."</option>";
			}
			?>
		</select>
		<input type="submit" name="submit" value="check">
	</form>

	<?php
} else {
	$city = $_POST['city'];

	foreach($countries as $key=>$value){
		if($value == $city){
			echo $city. ' is in '. $key;
			break;
		}			
	}
}
?>