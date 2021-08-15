<?php
require_once 'Controller/RoomsController.php';
$key= $_GET["key"];
$rooms= searchRoom($key);
if(count($rooms)>0){
	//foreach($rooms as $r){
		//echo "<a href='Roombooking.php?id='.$r["id"]>".$r["room_no"]."</p>";
	//}
	?>
	<table align="center" class="table table-striped">
			<thead>
				<th>Sl</th>
				<th>Room No</th>
				<th>Price</th>
				<th>Category</th>
				<th>Description</th>
				<th>Image</th>
			</thead>
			<tbody>
				<?php
					$i=1;
					foreach($rooms as $r){
						//$id= $r["id"];
						echo "<tr>";
							echo "<td> $i </td>";
							echo "<td>".$r["room_no"]."</td>";
							echo "<td>".$r["price"]."</td>";
							echo "<td>".$r["category"]."</td>";
							echo "<td>".$r["description"]."</td>";
							echo "<td> <img width='120px' height='120px' src='".$r["image"]."'></td>";
						echo "</tr>";
						$i++;
					}
				?>
			</tbody>
		</table>
		<?php
}
?>