<?php
require_once 'Controller/ProductsController.php';
$pro = getProducts();
echo "<h1>All PRODUCTS</h1>";
$i=1;

foreach($pro as $c)
{
	$id = $c["id"];
	echo "<table border = '2'>";
	echo "<tr>";
	echo "<td>$i.</td>";
	echo "<td><img width = '80px' height = '100px' src = '".$c["img"]."'</td>";
	echo "<td>".$c["name"]."</td>";
	echo "<td>".$c["c_name"]."</td>";
	echo "<td>".$c["price"]."</td>";
	echo "<td>".$c["qty"]."</td>";
	echo "<td>".$c["desc"]."</td>";
	//echo '<td><a href= "editcat.php?id='.$id.'"> Edit </a></td>';
	echo "</tr>";
	echo "</table>";
	$i++;
	
}
?>

