<?php 

include('db.php');

$q 		= 'SELECT * FROM `destinations` WHERE `date_deleted` IS NULL';

$result = mysqli_query($conn, $q);
$i = 1;
if($result){
	echo "<table border=1>";
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>". $i++ ."</td>";
		// echo "<td>". $row['destination_id'] ."</td>";
		echo "<td>". $row['destination_name'] ."</td>";
		echo "<td><a href='update.php?id=". $row['destination_id']."'>Update</a></td>";
		echo "<td><a href='delete.php?id=". $row['destination_id']."'>Delete</a></td>";
		echo "</tr>";
	}
	echo "</table>";
}