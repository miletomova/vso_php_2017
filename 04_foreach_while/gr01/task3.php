<?php 

$countries = [
			'Bg'	=> 'Sofia',
			'USA'	=> 'Washington',
			'Spain'	=> 'Madrid',
			'Greece'=> 'Athens',
			'Turkey'=> 'Ancara',
		];

		if(empty($_POST)){
?> 

<form method="post" action="">
	<select name="city">
		<?php 
		foreach($countries as $country) {
		?>
		<option value="<?php echo $country ?>">
			<?php echo $country ?>
		</option>
		<?php 
			}
		?>		
	</select>
	<input type="submit" name="submit" value="check">	
</form>
<?php 
	} else {
		
		$city = $_POST['city'];
		foreach ($countries as $key=>$value) {		
			if($value == $city){
				echo $city.' - '. $key ;
				break;
			}			
		}
	}
