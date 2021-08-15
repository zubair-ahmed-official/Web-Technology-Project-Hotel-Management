<?php require_once 'Controller/LoginController.php';?>

<html>
	<script src="JS/login.js">
		
	</script>
	<body>
		<fieldset>
			<form action="" onsubmit="return validate()" method="post">
				<table align="center">
					<tr>
						<td colspan="2" align="center"><h2 style="color:blue"><b>InterContinental Residence <br> Suites</b></h2></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><img width="200px" heigth="100px" src="Pictures/Resturant pic.jpg"/></td>
					</tr>
					
					<tr>
						<td align="center"><input id="uname" name="Username"  placeholder="Username" value="<?php echo $Username;?>" type="text"> <br> <span id="err_uname"><?php echo $err_Username;?></span></td>
					</tr>
					<tr>
						<td align="center"><input id="pass" name="Password" placeholder="Password" value="<?php echo $Password;?>" type="Password"> <br> <span id="err_pass"><?php echo $err_Password;?></span> </td>
					</tr>
					<tr>
						<td colspan="2" align="center"><a href ="Forgot_Password.html">Forgot password? </a></td>
					</tr>	
					<tr>
						<td colspan="2" align="center"><a href ="Admin_panel.php"><input name="Log_In" type="submit" value="Log In">
				    </td>
					</tr>
				</table >
			</form>
		</fieldset>
	</body>
</html>