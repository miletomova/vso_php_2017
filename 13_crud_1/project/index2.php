<?php 
include('includes/header.php');
include('includes/db.php');
?>
	<a href="#">Add Unit</a>

<?php 
$conn = mysqli_connect('localhost', 'root', '', 'recipes_new');

$q = "SELECT product_description, product_image FROM products";

$result = mysqli_query($conn, $q);
echo "<table border=1>";
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)){ 
		echo "<tr>";
		echo "<td><img src='img/" . $row['product_image'] . 'alt="" > </td><td>'.$row['product_description'] . '</td>';
		echo "<td><a href='#'>Update</a></td>";
		echo "<td><a href='#'>Delete</a></td>";
		echo "</tr>";
	}
}
echo "</table>";
include('includes/footer.php');
?>