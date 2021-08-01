<?php
	$password="";
	$err_password="";
	$ConfirmPassword="";
	$err_ConfirmPassword="";
	$email="";
	$err_email="";
	
	$hasError=false;
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
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
		
		if(!$hasError){
			echo $_POST["password"]."<br>";
			echo $_POST["ConfirmPassword"]."<br>";
			echo $_POST["email"]."<br>";
		}
		
	}
	
?>




<html>
<head>
</head>
<body>
	<form>
		<table align="center">
			<tr>
				<td colspan="2" align="center"><h1 style="color:Red"><b>Delete Profile</b></h1></td>
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
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
				<input type="submit" value="Remove">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>