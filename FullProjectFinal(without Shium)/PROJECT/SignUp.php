<?php
require_once 'Controller/CustomerController.php';
?>
<html>
<head>
	<style>
		
	</style>
</head>
<body>
	<h5><?php echo $err_db;?></h5>
	<form action="" onsubmit = "return validateCustomer()"  method="post" enctype= "multipart/form-data">
		<table align="center" style="background-color:rgb(240, 240, 240); width:40%; height:5%;">
			<tr>
				<td colspan="2" align="center"> <hr></td>
			</tr>
			<tr>
				<td colspan="2" align="center" style="color:Blue"><h1><b>Create Account</b></h1></td>
			</tr>
			<tr>
				<td colspan="2" align="center"> <hr></td>
			</tr>
			<tr>
				<td align="right">Name:</td>
				<td><input id="name" name="name" type="text" value="<?php echo $name;?>"><br>
					<span id = "err_name"><?php echo $err_name;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Username:</td>
				<td><input id="uName" name="userName" type="text" onfocusout="checkUserName(this)"value="<?php echo $userName;?>"><br>
					<span id="err_uName"><?php echo $err_userName;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Password:</td>
				<td><input id="pass" name="password" type="password" value="<?php echo $password;?>"><br>
					<span id="err_pass"><?php echo $err_password;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Confirm Password:</td>
				<td><input id="ConfirmPass" name="ConfirmPassword" type="password" value="<?php echo $ConfirmPassword;?>"><br>
					<span id="err_ConfirmPass"><?php echo $err_ConfirmPassword;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Email:</td>
				<td><input id="email" name="email" type="text" value="<?php echo $email;?>"><br>
					<span id="err_email"><?php echo $err_email;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Phone Number:</td>
				<td>
					<input id="ph" name="PhoneNumber" type="text" value="<?php echo $PhoneNumber;?>">
					<br>
					<span id="err_ph"><?php echo $err_PhoneNumber;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">NID No:</td>
				<td>
					<input id="nid" name="NID" type="text" value="<?php echo $NID;?>">
					<br>
					<span id="err_nid"><?php echo $err_NID;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Address:</td>
				<td><textarea id="address" name="Address"><?php echo $Address;?></textarea>
						<br><span id="err_address"><?php echo $err_Address;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Gender:</td>
				<td>
					<input id="mGender" type="radio" name="gender" value="Male" <?php if($gender == "Male") echo "checked";?>> Male <input id="fGender" type="radio" name="gender" <?php if($gender == "Female") echo "checked";?> value="Female"> Female
					<br>
					<span id="err_gender"><?php echo $err_gender;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Age:</td>
				<td>
					<select id="cAge" name="age" value="<?php echo $age;?>">
						<option selected disabled>-Select-</option>
						<?php
							for($i=18; $i<=80; $i++){
								echo "<option>$i</option>";
							}
						?>
					</select><span id="err_cAge"><?php echo $err_age;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Image:</td>
				<td><input type="file" name="customer_image"></td>
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
				<input type="submit" name ="Sign_Up" value="Submit">
				</td>
			</tr>
		</table>
	</form>
			<script src = "JS/Customer.js"> </script>
</body>
</html>