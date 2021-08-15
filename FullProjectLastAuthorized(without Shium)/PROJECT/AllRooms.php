<?php
require_once 'CommonHeader.php';

if(!isset($_COOKIE["loggeduser0"])){
header("Location: Login.php");
}
?>
<?php
require_once 'Controller/RoomsController.php';


$rooms= getAllRoomsWithPrice();	
?>



<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
	<body>
		<h3 align="center" style="color:Green"><u> All Rooms</u></h3><br>
		<div align="center">
			<input type="text" class="form-control" onkeyup="searchRoomAll(this)" placeholder="Search Here...">
			<br>
		</div>
		<div id="room_suggesstion">
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
		</div>
	</body>
	<script src="JS/Room.js"></script>
</html>