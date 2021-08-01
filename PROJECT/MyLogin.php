<?php

$username = "";
$err_username = "";
$password = "";
$err_password = "";

$hasError = false;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	if(empty($_POST["username"]))
	{
		$hasError = true;
		$err_username = "UserName Required";
	}
	
	elseif(($_POST["username"]) == "saadahmed" )
	{
		$username = $_POST["username"];
	}
	elseif(($_POST["username"]) == "zubairahmed" )
	{
		$username = $_POST["username"];
	}
	elseif(($_POST["username"]) == "onturahman" )
	{
		$username = $_POST["username"];
	}
	elseif(($_POST["username"]) == "rayhanahmed" )
	{
		$username = $_POST["username"];
	}
	else
	{
		$hasError = true;
		$err_username = "Invalid UserName";
	}
	
	if(empty($_POST["password"]))
	{
		$hasError = true;
		$err_password = "Password Required";
	}
	
	elseif(($_POST["password"]) == "5555@CUStomer?" )
	{
		$password = $_POST["password"];
	}
	elseif(($_POST["password"]) == "12345@RECEPtionist?" )
	{
		$password = $_POST["password"];
	}
	elseif(($_POST["password"]) == "151515@ADmin?" )
	{
		$password = $_POST["password"];
	}
	elseif(($_POST["password"]) == "484848@MANager?" )
	{
		$password = $_POST["password"];
	}
	else
	{
		$hasError = true;
		$err_password = "Invalid Password";
	}
	
	 
	if(!$hasError)
	{ 
     //echo "Logged In"; 
	}
}

?>
<html>
<body>
<table align="center" style="background-color:rgba(240, 240, 240,0.7); width:100%; height:5%;">
		<tr>
			<td>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;Hotline Number:&nbsp;+88019xxxxxxx,&nbsp;+88018yyyyyyyyy</p>
			</td>
		</tr>
		<table align="center" style="width:100%; height:100%;">
			<tr>
				<td rowspan="10" align="center">
					<form action="" method = "post">
					<table style="background-color:rgba(240, 240, 240,0.7); width:120%; height:100%;">
					<tr>
						<td colspan="2" align="center"><h2 style="color: blue"><b>InterContinental Residence <br> Suites</b></h2></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><img width="250px" heigth="100px" src="Resturant pic.jpg"/></td>
					</tr>
					
					<tr>
						<td align="center"><input name="username"  placeholder="Username" value="<?php echo $username;?>" type="text"> <br> <span><?php echo $err_username;?></span></td>
					</tr>
					<tr>
						<td align="center"><input name="password" placeholder="Password" value="<?php echo $password;?>" type="Password"> <br> <span><?php echo $err_password;?></span> </td>
					</tr>
					<tr>
						<td colspan="2" align="center"><a href ="Forgot_Password.html">Forgot password? </a></td>
					</tr>	
					<tr>
						<td  colspan="2" align="center">
							<a href="Room_Booking.php"><input type="Submit" value="Log In"></a>
						</td>
					</tr>
					</table >
					</form>
				</td>
				<td align="right">
					<table style="background-color:rgba(240, 240, 240,0.7); width:80%; height:55%;">
						<tr>
							<td>
								<h3 style="color: blue">New Customer!!!</h3>
								<p>If you are a new customer please do your registration for better fecilities<br></p>
								<a href="SignUp.php"><input type="Submit" value="Register"></a>
							</td>
						</tr>
					</table>
				</td>
			</tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr><?php

echo "<form action ='' method = 'post'>";
//echo "<br><input type='Submit' value='Log In'><br>";
if($username=="saadahmed")
{
	if($password=="151515@ADmin?")
	{
     header("Location: Admin_panel.php");
	}	
	else
	{ 
	$err_password = "Invalid password";
	}
}
	
if($username=="zubairahmed")
{
	if($password=="12345@RECEPtionist?")
	{
	header("Location: Receiptionist_panel.php");
	}
	else
	{ 
	$err_password = "Invalid password";
	}
}
if($username=="onturahman")
{
	if($password=="484848@MANager?")
	{
	header("Location: Manager_panel.php");
	}
	else
	{ 
	$err_password = "Invalid password";
	}
}
if($username=="onturahman")
{
	if($password=="5555@CUStomer?")
	{
	header("Location: customer_panel.php");
	}
	else
	{ 
	$err_password = "Invalid password";
	
	}
}



echo "</form>";
?>
</td></tr>
<tr><td></td></tr>
</table>
</body>
</html>