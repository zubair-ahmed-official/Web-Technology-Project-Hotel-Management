<<?php
if(!isset($_COOKIE["loggeduser"]) && !isset($_COOKIE["loggeduser1"]) ){
header("Location: Login.php");
}
?>
<?php
session_start();
require_once 'Controller/CustomerController.php';
$customers= getAllCustomer();

$_SESSION["customers"] = "Customers";	
?>

<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
	<body>
		<h3 align="center" style="color:Green"> <u>All <?php echo $_SESSION["customers"];?></u></h3><br>
		<div align="center">
			<input type="text" class="form-control" onkeyup="searchCustomer(this)" placeholder="Search Here...">
			<br>
		</div>
		<!--<div id="suggesstion"></div>-->
		<div id="table">
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
		</div>
	</body>
	<script src="JS/Customer.js"></script>
</html>