<?php
require_once 'Controller/CategoryController.php';
$categories = getallcategory();
echo "<h1>All Categories</h1>";
$i=1;
foreach($categories as $c)
{
	$id = $c["id"];
	echo "<table>";
	echo "<tr>";
	echo "<td>$i. </td>";
	echo "<td>".$c["name"]."</td>";
	echo '<td><a href= "editcat.php?id='.$id.'"> Edit </a></td>';
	echo "</tr>";
	echo "</table>";
	$i++;
}
?>
