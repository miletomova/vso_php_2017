<?php 
include('includes/header.php');
include('includes/db.php');

if(empty($_POST['submit'])){
	echo "<p>Insert new UNIT</p>";
	echo "<form action='create.php' method='post'>";
//city_name!!! same as in the DB!!!
	echo "<input type='text' name='unit_name'>";
	echo "<input type='submit' name='submit' value='insert'>";
	echo "</form>";
}
else{
	$unit = $_POST['unit_name'];
		
	$insert_query = 	"INSERT INTO units (unit_name) 
						VALUES ('$unit')";
			//or $result
			$insert_result= mysqli_query($conn, $insert_query);
			if ($insert_result) {
				//success code can be read db query - 
				//you can print the entire info your newly inserted in the db query 
				//is appended to
				//it depends on you and UI you have designed ...
				//the same with unseccess code=
				echo "Успешно добавихте $unit в базата данни!";
				echo "<p><a href='index.php'>Read DB</a></p>";
			}else{
				echo "Неуспешно добавяне на запис в базата данни! Моля опитайте по-късно!";
			}
}

include('includes/footer.php');