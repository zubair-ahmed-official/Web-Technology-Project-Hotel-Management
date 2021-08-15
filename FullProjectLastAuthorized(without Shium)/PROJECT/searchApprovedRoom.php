<?php
require_once 'Controller/ApprovedRoomController.php';
$key= $_GET["key"];
$approved_rooms= searchApprovedRoom($key);
if(count($approved_rooms)>0){
	
	?>		
		<table align="center" class="table table-striped">
			<thead>
				<th>Sl</th>
				<th>Room No</th>
				<th>Branch</th>
				<th>Email</th>
				<th>Phone Number</th>
				<th>NID No</th>
				<th>Address</th>
				<th>Check In Date</th>
				<th>Check Out Date</th>
			</thead>
			<tbody>
				<?php
					$i=1;
					foreach($approved_rooms as $a){
						$id= $a["id"];
						echo "<tr>";
							echo "<td> $i </td>";
							echo "<td>".$a["room_no"]."</td>";
							echo "<td>".$a["branch"]."</td>";
							echo "<td>".$a["email"]."</td>";
							echo "<td>".$a["phoneNumber"]."</td>";
							echo "<td>".$a["nid"]."</td>";
							echo "<td>".$a["address"]."</td>";
							echo "<td>".$a["CIT"]."</td>";
							echo "<td>".$a["COT"]."</td>";
						echo "</tr>";
						$i++;
					}
				?>
			</tbody>
		</table>
		<?php
}
?>