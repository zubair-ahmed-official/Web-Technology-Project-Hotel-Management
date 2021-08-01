<?php
error_reporting (E_ALL ^ E_NOTICE);

$CustomerName = "";
$err_Customer = "";
$Cid = "";
$err_Cid = "";
$phone = "";
$err_phone= "";
$address = "";
$err_address="";
$member="";
$err_member="";

$hasError = false;


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	if(empty($_POST["CustomerName"]))
	{
		$hasError = true;
		$err_Customer = "CustomerName required";
	}
	else
	{
		$CustomerName = $_POST["CustomerName"];
	}
	
	if(empty($_POST["Cid"]))
	{
		$hasError = true;
		$err_Cid = "Customer ID required";
	}
	else if(strlen($_POST["Cid"])< 4)
	{
		$hasError = true;
		$err_Cid = "Cid must be at least 4 characters";
	}
	else if(strpos($_POST["Cid"], ' ') !== false)
	{
		$hasError = true;
		$err_Cid = "Cid doesn't allow spaces";
	}
	else
	{
		$Cid = $_POST["Cid"];
	}
	
	
	if(empty($_POST["phone"]))
	{
		$hasError = true;
		$err_phone = "Phone required";
	}
	else if(is_numeric($_POST["phone"]) != true)
	{
		$hasError = true;
		$err_phone = "Invalid Phone number";
		
	}
	else
	{
		$phone = $_POST["phone"];
	}
	if(empty($_POST["address"]))
	{
		$hasError = true;
		$err_address = "Address required";
	}
	
	else
	{
		$address = $_POST["address"];
	}
	if(empty($_POST["member"]))
	{
		$hasError = true;
		$err_member = "Members required";
	}
	
	else
	{
		$member = $_POST["member"];
	}
	
	
	
	if(!$hasError)
	{
		
	echo $_POST["CustomerName"]."<br>";
	echo $_POST["Cid"]."<br>";
	echo $_POST["phone"]."<br>";
	echo $_POST["address"]."<br>";
	echo $_POST["member"]." members<br>";
	echo "<br><b>Booking for the Dinner Buffet event has been completed.You are invited.</b>";
	echo "<br><h4 style='color:red'>Time: 21st July to 25th July; 7.30 PM to 11.00 PM </h4>";
	}
}

?>




<html>
    <body>

	<h1 style="color:blue" align = "center"> Book For The 'Dinner Buffet' Event</h1>
	<form action="" method="post">
	
	
	
	<table align = "center">
	<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	<tr><td></td>
	<tr><td align = "right"><b>Customer Name:</b></td>
	<td><input name = "CustomerName"  type="txt" >
    <span><?php echo $err_Customer;?> </span></td> </tr></td></tr>	</td></tr>
	<tr><td></td>
	<tr><td align = "right"><b>Phone No:</b></td><td><input name = "phone"  type="txt" >
	<span><?php echo $err_phone;?></span></td> </tr>
	
	<tr><td></td>
	<tr><td align = "right"><b>Customer ID:</b></td><td><input name = "Cid"  type="txt" > 
	<span><?php echo $err_Cid;?></span></td> </tr></td></tr>
	<tr><td></td>
	<tr><td align = "right"><b>Address:</b></td><td><input name = "address"  type="txt" > 
	<span><?php echo $err_address;?></span></td> </tr></td></tr>
	
	<tr><td align = "right"><b>Number of Members:</b></td><td><input name = "member"  type="number" > 
	<span><?php echo $err_member;?></span></td> </tr></td></tr>
	
	<td></td><td align = "center"><input  type="submit" value="Book Event" >
	
	<!--<tr><td></td><td align = "center"><input  type="submit" value="Order" ></td></tr>-->
	</table>
	</table>
	</form>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<img height="300px" width="400px" src="DinnerBuffet2.jpg">
	</body>
</html>