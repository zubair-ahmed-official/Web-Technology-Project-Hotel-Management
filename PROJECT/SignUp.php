<?php
	$name="";
	$err_name="";
	$userName="";
	$err_userName="";
	$password="";
	$err_password="";
	$ConfirmPassword="";
	$err_ConfirmPassword="";
	$email="";
	$err_email="";
	$PhoneNumber="";
	$err_PhoneNumber="";
	$Address="";
	$err_Address="";
	$day="";
	$err_day="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";
	$gender="";
	$err_gender="";
	$NID="";
	$err_NID="";
	$age="";
	$err_age="";
	
	$hasError=false;
	
	$months= array("January","February","March","April","May","June","July","August","September","October","November","December");
	$years= array("1985","1986","1987","1988","1989","1990","1991","1992","1993","1994","1995","1996","1997","1998","2000","2001","2002","2003",
	              "2004","2005","2006","2007","2008","2009","2010","2011","2012","2013","2014","2015","2016","2017","2018","2019","2020","2021");
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$hasError=true;
			$err_name="Name Required";
		}
		elseif (strlen($_POST["name"]) <=2){
			$hasError = true;
			$err_name = "Name must be greater than 2 characters";
		}
		elseif (is_numeric($_POST["name"]))
		{
			$hasError = true;
			$err_name = "Name can't be numeric!!";
		}
		else{
			$name = $_POST["name"];
		}
		
		if(empty($_POST["userName"])){
			$hasError=true;
			$err_userName="UserName Required";
		}
		elseif (strlen($_POST["userName"]) <6){
			$hasError = true;
			$err_userName = "UserName must be greater than 6 characters";
		}
		elseif (strpos($_POST["userName"]," ")){
			$hasError = true;
			$err_userName = "UserName can't take space!!!";
		}
		else
		{
			$userName = $_POST["userName"];
		}
		if(empty($_POST["password"]))
		{
		$hasError = true;
		$err_password = "Password required";
		}

		else if((strlen($_POST["password"])< 8))
		{
		$hasError = true;
		$err_password = "Password requires minimum 8 characters";
		}
		if((strlen($_POST["password"])>= 8))
		{
	
			$passwordvariable = $_POST["password"];
			$uppercase = preg_match('@[A-Z]@',$passwordvariable);
			$lowercase = preg_match('@[a-z]@',$passwordvariable);
			if(!$uppercase)
			{
			$hasError = true;
			$err_password = "Password requires uppercase letters";
			}
			else if(!$lowercase)
			{
			$hasError = true;
			$err_password = "Password requires lowercase letters";
			}
			if(!strpos($_POST["password"],'#') && !strpos($_POST["password"],'?'))
			{
			$hasError = true;
			$err_password = "Password requires minimum 1 '#' and '?'";
			}
			else
			{
			$password = $_POST["password"];
			}
		}
	
		if(empty($_POST["ConfirmPassword"]))
		{
		$hasError = true;
		$err_ConfirmPassword = "Confirm Password required";
		}

		else if((strlen($_POST["ConfirmPassword"])< 8))
		{
		$hasError = true;
		$err_ConfirmPassword = "Confirm Password requires minimum 8 characters";
		}
		if((strlen($_POST["ConfirmPassword"])>= 8))
		{
	
			$passwordvariable = $_POST["ConfirmPassword"];
			$uppercase = preg_match('@[A-Z]@',$passwordvariable);
			$lowercase = preg_match('@[a-z]@',$passwordvariable);
			if(!$uppercase)
			{
			$hasError = true;
			$err_ConfirmPassword = "Confirm Password requires uppercase letters";
			}
			else if(!$lowercase)
			{
			$hasError = true;
			$err_ConfirmPassword = "Confirm Password requires lowercase letters";
			}
			if(!strpos($_POST["ConfirmPassword"],'#') && !strpos($_POST["password"],'?'))
			{
			$hasError = true;
			$err_ConfirmPassword = "Confirm Password requires minimum 1 '#' and '?'";
			}
			else
			{
			$ConfirmPassword = $_POST["ConfirmPassword"];
			}
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
		
		if(empty($_POST["gender"])){
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
		if(empty($_POST["day"])){
			$hasError = true;
			$err_day= "Please choose a date!!";
		}
		else{
			$day = $_POST["day"];
		}
		if(empty($_POST["month"])){
			$hasError = true;
			$err_month= "Please choose a month!!";
		}
		else{
			$month = $_POST["month"];
		}
		if(empty($_POST["year"])){
			$hasError = true;
			$err_year= "Please choose year!!";
		}
		else{
			$year = $_POST["year"];
		}
		if(empty($_POST["age"])){
			$hasError = true;
			$err_age = "Age Required!!";
		}
		else{
			$age = $_POST["age"];
		}
		
		if(!$hasError){
			echo $_POST["name"]."<br>";
			echo $_POST["userName"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["ConfirmPassword"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["PhoneNumber"]."<br>";
			echo $_POST["Address"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["day"]."<br>";
			echo $_POST["month"]."<br>";
			echo $_POST["year"]."<br>";
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
	<table align="center" style="background-color:rgb(240, 240, 240); width:100%; height:5%;">
		<tr>
			<td>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;Hotline Number:&nbsp;+88019xxxxxxx,&nbsp;+88018yyyyyyyyy</p>
			</td>
			<td align="right">
				&nbsp;&nbsp;&nbsp;&nbsp;<a href="MyLogin.php"><input type="submit" value="Go Beck To Log In" ></a>
			</td>
		</tr>
		<tr>
			<td colspan="4">
			</td>
			<td colspan="3">
			</td>
		</tr>
		<tr>
			<td colspan="4">
			</td>
			<td colspan="3">
			</td>
		</tr>
		
	</table>
	<br>
	<fieldset>
	<form action="" method="post">
		<table align="center">
			<tr>
				<td colspan="2" align="center"> <hr></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><h1><b>Account</b></h1></td>
			</tr>
			<tr>
				<td colspan="2" align="center"> <hr></td>
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
				<td align="right">Password*</td>
				<td><input name="password" type="password" value="<?php echo $password;?>">
					<br><span><?php echo $err_password;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Confirm Password*</td>
				<td><input name="ConfirmPassword" type="password" value="<?php echo $ConfirmPassword;?>"><br>
					<span><?php echo $err_ConfirmPassword;?></span>
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
					</select><span><?php echo $err_age;?></span>
				</td>
			</tr>
				<tr>
					<td align="right">Date*</td>
					<td colspan="2"><select name="day" value="<?php echo $day;?>">
							<option selected disabled>Day</option>
							<?php
								for($i=1; $i<=31; $i++){
									if(i==$_POST["day"])
									    echo "<option>$i</option>";
									else
										echo "<option>$i</option>";
									
								}
							?>
						</select><span><?php echo $err_day;?></span>
						<select name="month" value="<?php echo $month;?>">
							<option selected disabled>Month</option>
							<?php
								foreach($months as $m){
									if($m == $_POST["month"])
										echo "<option selected>$m</option>";
									else
										echo "<option>$m</option>";
								}
							?>
						</select><span><?php echo $err_month;?></span>
						<select name="year" value="<?php echo $year;?>">
							<option selected disabled>Year</option>
							<?php
								foreach($years as $y){
									if($y == $_POST["year"])
										echo "<option selected>$y</option>";
									else
										echo "<option>$y</option>";
								}
							?>
						</select><span><?php echo $err_year;?></span>
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
	</form>
	</fieldset>
</body>
</html>