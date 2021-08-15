<?php
require_once 'Controller/CustomerController.php';
$key= $_GET["key"];
$customers= searchCustomer($key);
if(count($customers)>0){
	//foreach($customers as $c){
		//echo "<p>".$c["name"]."</p>";
		?>
		<table align="center" class="table table-striped">
			<thead>
				<th>Sl</th>
				<th>Id</th>
				<th>Name</th>
				<th>User Name</th>
				<th>Password</th>
				<th>Email</th>
				<th>Phone Number</th>
				<th>NID No</th>
				<th>Address</th>
				<th>Gender</th>
				<th>Age</th>
				<th>Image</th>
			</thead>
			<tbody>
				<?php
					$i=1;
					foreach($customers as $c){
						$id= $c["customerId"];
						echo "<tr>";
							echo "<td> $i </td>";
							echo "<td>".$c["customerId"]."</td>";
							echo "<td>".$c["name"]."</td>";
							echo "<td>".$c["userName"]."</td>";
							echo "<td>".$c["password"]."</td>";
							echo "<td>".$c["email"]."</td>";
							echo "<td>".$c["phoneNumber"]."</td>";
							echo "<td>".$c["nidNo"]."</td>";
							echo "<td>".$c["address"]."</td>";
							echo "<td>".$c["gender"]."</td>";
							echo "<td>".$c["age"]."</td>";
							echo "<td> <img width='80px' height='100px' src='".$c["image"]."'></td>";
							echo '<td><a href= "EditCustomerProfileByAdmin.php?id='.$id.'" class="btn btn-success">Edit</a></td>';
							//echo '<td><a href= "DeleteCustomerProfile.php?id='.$id.'">Delete</a></td>';
						echo "</tr>";
						$i++;
					}
				?>
			</tbody>
		</table>
	<?php
}
?>