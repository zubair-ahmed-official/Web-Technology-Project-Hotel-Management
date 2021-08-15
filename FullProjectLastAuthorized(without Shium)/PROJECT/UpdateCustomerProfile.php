<?php
session_start();
require_once 'Controller/CustomerController.php';

$id= $_GET["id"];
$customer= getcustomer($id);

$_SESSION["customersOwn"] = "Profile";
	
?>


<html>
<head>
	<style>
		
	</style>
</head>
<body>
	<h5><?php echo $err_db;?></h5>
	<form action="" onsubmit = "return validateCustomerEditByOwn()"  method="post" enctype= "multipart/form-data">
		<table align="center" style="background-color:rgb(240, 240, 240); width:40%; height:5%;">
			<tr>
				<td colspan="2" align="center"> <hr></td>
			</tr>
			<tr>
				<td colspan="2" align="center" style="color: Green"><h1><b>Update <?php echo $_SESSION["customersOwn"];?></b></h1></td>
			</tr>
			<tr>
				<td colspan="2" align="center"> <hr></td>
			</tr>
			<tr>
				<td align="right">Id:</td>
				<td> <input id="cido" type="text" name= "id" value ="<?php echo $customer["customerId"]; ?>">
				<br>
				<span id = "err_cido"><?php echo $err_id;?></span>
				</td>
			</tr>
			<tr>
				
				<td align="right">Name:</td>
				<td><input id="eNameo" name="name" type="text" value="<?php echo $customer["name"];?>"><br>
					<span id = "err_eNameo"><?php echo $err_name;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Username:</td>
				<td><input id="euNameo" name="userName" type="text"  value="<?php echo $customer["userName"];?>" onfocusout="checkUserNameEditOwn(this)">
					<br>
					<span id="err_euNameo"><?php echo $err_userName;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Email:</td>
				<td><input id="eemailo" name="email" type="text" value="<?php echo $customer["email"];?>"><br>
					<span id="err_eemailo"><?php echo $err_email;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Phone Number:</td>
				<td>
					<input id="ePho" name="PhoneNumber" type="text" value="<?php echo $customer["phoneNumber"];?>">
					<br>
					<span id="err_ePho"><?php echo $err_PhoneNumber;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">NID No:</td>
				<td>
					<input id="enido" name="NID" type="text" value="<?php echo $customer["nidNo"];?>">
					<br>
					<span id="err_enido"><?php echo $err_NID;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Address:</td>
				<td><textarea id="eAddresso" name="Address"><?php echo $customer["address"];?></textarea>
						<br><span id="err_eAddresso"><?php echo $err_Address;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Gender:</td>
				<td>
					<input id="emGendero" type="radio" name="gender" value="Male" <?php if($gender == "Male") echo "checked";?>> Male <input id="efGender" type="radio" name="gender" <?php if($gender == "Female") echo "checked";?> value="Female"> Female
					<br>
					<span id="err_egendero"><?php echo $err_gender;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Age:</td>
				<td>
					<select id="ecAgeo" name="age" value="<?php echo $customer["age"];?>">
						<option selected disabled>-Select-</option>
						<?php
							for($i=18; $i<=80; $i++){
								echo "<option>$i</option>";
							}
						?>
					</select><span id="err_ecAgeo"><?php echo $err_age;?></span>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="2" align="center"> 
				<input type="submit" name ="Edit_CustomerByCustomer" value="Update">
				</td>
			</tr>
		</table>
	</form>
			<script src = "JS/Customer.js"> </script>
</body>
</html>