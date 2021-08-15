<?php
session_start();
require_once 'Controller/CustomerController.php';
$id= $_GET["id"];
$customer= getcustomer($id);


	
?>


<html>
<head>
	<style>
		
	</style>
</head>
<body>
	<h5><?php echo $err_db;?></h5>
	<form action="" onsubmit = "return validateCustomerEdit()"  method="post" enctype= "multipart/form-data">
		<table align="center" style="background-color:rgb(240, 240, 240); width:40%; height:5%;">
			<tr>
				<td colspan="2" align="center"> <hr></td>
			</tr>
			<tr>
				<td colspan="2" align="center" style="color: Green"><h1><b>Update <?php echo $_SESSION["customers"];?></b></h1></td>
			</tr>
			<tr>
				<td colspan="2" align="center"> <hr></td>
			</tr>
			<tr>
				<td align="right">Id:</td>
				<td> <input id="cid" type="text" name= "id" value = "<?php echo $customer["customerId"]; ?>">
				<br>
				<span id = "err_cid"><?php echo $err_id;?></span>
				</td>
			</tr>
			
			<tr>
				<td align="right">Name:</td>
				<td><input id="eName" name="name" type="text" value="<?php echo $customer["name"];?>"><br>
					<span id = "err_eName"><?php echo $err_name;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Username:</td>
				<td><input id="euName" name="userName" type="text"  value="<?php echo $customer["userName"];?>" onfocusout="checkUserNameEdit(this)">
					<br>
					<span id="err_euName"><?php echo $err_userName;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Email:</td>
				<td><input id="eemail" name="email" type="text" value="<?php echo $customer["email"];?>"><br>
					<span id="err_eemail"><?php echo $err_email;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Phone Number:</td>
				<td>
					<input id="ePh" name="PhoneNumber" type="text" value="<?php echo $customer["phoneNumber"];?>">
					<br>
					<span id="err_ePh"><?php echo $err_PhoneNumber;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">NID No:</td>
				<td>
					<input id="enid" name="NID" type="text" value="<?php echo $customer["nidNo"];?>">
					<br>
					<span id="err_enid"><?php echo $err_NID;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Address:</td>
				<td><textarea id="eAddress" name="Address"><?php echo $customer["address"];?></textarea>
						<br><span id="err_eAddress"><?php echo $err_Address;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Gender:</td>
				<td>
					<input id="emGender" type="radio" name="gender" value="Male" <?php if($gender == "Male") echo "checked";?>> Male <input id="efGender" type="radio" name="gender" <?php if($gender == "Female") echo "checked";?> value="Female"> Female
					<br>
					<span id="err_egender"><?php echo $err_gender;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Age:</td>
				<td>
					<select id="ecAge" name="age" value="<?php echo $customer["age"];?>">
						<option selected disabled>-Select-</option>
						<?php
							for($i=18; $i<=80; $i++){
								echo "<option>$i</option>";
							}
						?>
					</select><span id="err_ecAge"><?php echo $err_age;?></span>
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
				<input type="submit" name ="Edit_CustomerByAdmin" value="Update">
				</td>
			</tr>
		</table>
	</form>
			<script src = "JS/Customer.js"> </script>
</body>
</html>