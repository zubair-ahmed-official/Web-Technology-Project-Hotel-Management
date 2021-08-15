<?php
session_start();
require_once 'Controller/CustomerController.php';
	
$id= $_GET["id"];
$customer= getcustomer($id);
	
?>


<html>
<head>
</head>
<body>
	<form action="" onsubmit = "return validateCustomerDelete()" method="POST">
		<table align="center">
			<tr>
				<td colspan="2" align="center"><h1 style="color:Red"><b>Delete <?php echo $_SESSION["customersOwn"];?></b></h1></td>
			</tr>
			<tr>
				<td align="right">Email:</td>
				<td>
					<input id="demail" name="email" type="text" value="<?php echo $customer["email"];?>">
					<br>
					<span id="err_demail"><?php echo $err_email;?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Password:</td>
				<td><input id="dpass" name="password" type="password" value="<?php echo $customer["password"];?>">
					<br><span id="err_dpass"><?php echo $err_password;?></span>
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
				<input type="submit" name="Delete_ByCustomer" value="Delete Account">
				</td>
			</tr>
		</table>
	</form>
	<script src = "JS/Customer.js"> </script>
</body>
</html>