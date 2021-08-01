<?php
	$name="";
	$err_name="";
	$userName="";
	$err_userName="";
	$userId="";
	$err_userId="";
	$email="";
	$err_email="";
	$PhoneNumber="";
	$err_PhoneNumber="";
	$Address="";
	$err_Address="";
	$gender="";
	$err_gender="";
	$NID="";
	$err_NID="";
	$age="";
	$err_age="";
	
	$hasError=false;
	
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"]))
		{
			$hasError=true;
			$err_name="Name Required!!";
		}
		elseif (strlen($_POST["name"]) <=2)
		{
			$hasError = true;
			$err_name = "Name must be greater than 2 characters!!";
		}
		elseif (is_numeric($_POST["name"]))
		{
			$hasError = true;
			$err_name = "Name can't be numeric!!";
		}
		else{
			$name = $_POST["name"];
		}
		
		if(empty($_POST["userName"]))
		{
			$hasError=true;
			$err_userName="UserName Required!!";
		}
		elseif (strlen($_POST["userName"]) <6)
		{
			$hasError = true;
			$err_userName = "UserName must be greater than 6 characters!!";
		}
		elseif (strpos($_POST["userName"]," ")){
			$hasError = true;
			$err_userName = "UserName can't take space!!!";
		}
		else
		{
			$userName = $_POST["userName"];
		}
		if(empty($_POST["email"])){
			$hasError = true;
			$err_email = "Email Required!!!";
		}
		elseif(strpos($_POST["email"],"@.")){
			$email = $_POST["email"];	
		}
		else{
			$hasError = true;
			$err_email = "please use an @. !!!";
		}
		
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender = "Gender Required!!!";
		}
		else{
			$gender = $_POST["gender"];
		}
		
		if(empty($_POST["PhoneNumber"])){
			$hasError = true;
			$err_PhoneNumber = "PhoneNumber Required!!!";
		}
		elseif(is_numeric($_POST["PhoneNumber"])){
			$PhoneNumber = $_POST["PhoneNumber"];
		}
		else{
			$hasError = true;
			$err_PhoneNumber = "Please enter a numeric value!!!";
		}
		if(empty($_POST["NID"])){
			$hasError = true;
			$err_NID = "NID No Required!!!";
		}
		elseif(is_numeric($_POST["NID"])){
			$NID = $_POST["NID"];
		}
		else{
			$hasError = true;
			$err_NID = "Please enter a numeric value!!!";
		}
		if(empty($_POST["Address"])){
			$hasError = true;
			$err_Address= "Address Required!!";
		}
		else{
			$Address = $_POST["Address"];
		}
		
		if(empty($_POST["age"])){
			$hasError = true;
			$err_age = "Age Required!!";
		}
		else{
			$age = $_POST["age"];
		}
		if(empty($_POST["userId"])){
			$hasError = true;
			$err_userId = "User Id Required!!!";
		}
		elseif(is_numeric($_POST["userId"])){
			$userId = $_POST["userId"];
		}
		else{
			$hasError = true;
			$err_userId = "Please enter a numeric value!!!";
		}
		
		if(!$hasError){
			echo $_POST["name"]."<br>";
			echo $_POST["userName"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["PhoneNumber"]."<br>";
			echo $_POST["Address"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["userId"]."<br>";
			echo $_POST["age"]."<br>";
		}
		
	}
	
?>




<html>
<head>
	<style>
		
	</style>
</head>
<body>
	<form action="" method="post">
		<table align="center">
			<tr>
				<td colspan="2" align="center"><h1 style="color:blue"><b>Update Profile</b></h1></td>
			</tr>
			<tr>
				<td align="right">User Id*</td>
				<td><input name="userId" value="<?php echo $userId;?>" type="text"><br>
					<span><?php echo $err_userId;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Name*</td>
				<td><input name="name" value="<?php echo $name;?>" type="text"><br>
					<span><?php echo $err_name;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Username*</td>
				<td><input name="userName" type="text" value="<?php echo $userName;?>"><br>
					<span><?php echo $err_userName;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Email*</td>
				<td>
					<input name="email" type="text" value="<?php echo $email;?>">
					<br>
					<span><?php echo $err_email;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Phone Number*</td>
				<td>
					<input name="PhoneNumber" type="text" value="<?php echo $PhoneNumber;?>">
					<br>
					<span><?php echo $err_PhoneNumber;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">NID No*</td>
				<td>
					<input name="NID" type="text" value="<?php echo $NID;?>">
					<br>
					<span><?php echo $err_NID;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Address*</td>
				<td><textarea name="Address"><?php echo $Address;?></textarea>
						<br><span><?php echo $err_Address;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Gender*</td>
				<td>
					<input type="radio" name="gender" value="Male" <?php if($gender == "Male") echo "checked";?>> Male <input type="radio" name="gender" <?php if($gender == "Female") echo "checked";?> value="Female"> Female
					<br>
					<span><?php echo $err_gender;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Age*</td>
				<td>
					<select name="age" value="<?php echo $age;?>">
						<option selected disabled>-Select-</option>
						<option>20-25</option>
						<option>25-30</option>
						<option>30-35</option>
						<option>35+</option>
					</select><br><span><?php echo $err_age;?></span>
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
				<input type="submit" value="Submit">
				</td>
			</tr>
		</table>
		<h3 align="center"><a href="DeleteCustomerProfile.php">Do you want to delete any Profile???</a></h3>
	</form>
</body>
</html>