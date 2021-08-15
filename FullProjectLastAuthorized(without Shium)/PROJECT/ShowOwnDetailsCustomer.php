
<?php
require_once 'Controller/CustomerController.php';

if(!isset($_COOKIE["loggeduser0"])){
header("Location: Login.php");
}
$userName= $_COOKIE["loggeduser0"];
$customer= getcustomerByUserName($userName);
	
?>

<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
	<body>
		<h1 align="center">Hello <?php echo $_COOKIE["loggeduser0"];?></h1>
		<table align="center" class="table table-striped">
			<thead>
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
					foreach($customer as $c){
						$id= $c["customerId"];
						echo "<tr>";
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
							echo "<td> <img width='150px' height='150px' src='".$c["image"]."'></td>";
							echo '<td><a href= "UpdateCustomerProfile.php?id='.$id.'" class="btn btn-success">Edit</a></td>';
							echo '<td><a href= "DeleteCustomerProfile.php?id='.$id.'" class="btn btn-danger">Delete</a></td>';
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
		</div>
	</body>
</html>