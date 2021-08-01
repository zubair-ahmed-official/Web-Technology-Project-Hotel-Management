<?php
		$Name="";
		$err_Name="";
		$Email="";
		$err_Email="";
		$Subject="";
		$err_Subject="";
		$Message="";
		$err_Message="";
		
		$hasError=false;
		
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			if(empty($_POST["Name"]))
				{
					$hasError=true;
					$err_Name="Name Required";
				}
				elseif(strlen($_POST["Name"])<=6)
				{
					$hasError=true;
					$err_Name="Name must be greater than 6 characters";
				}
				else
				{
					$Name=$_POST["Name"];
				}
				
			
			if(empty($_POST["Email"]))
				{
					$hasError=true;
					$err_Email="Email Required";
				}
				elseif(strpos($_POST["Email"],"@")== false && strpos($_POST["Email"],".")== false)
				{
					$hasError = true;
					$err_Email = " Email Invalid Id";
				}
				else
				{
					$Email=$_POST["Email"];
				}
				
				
			if(empty($_POST["Subject"]))
				{
					$hasError=true;
					$err_Subject="Subject Required";
				}
				else
				{
					$Subject=$_POST["Subject"];
				}
				
				
			if(empty($_POST["Message"]))
				{
					$hasError=true;
					$err_Message="Message Required";
				}
				else
				{
					$Message=$_POST["Message"];
				}
				
			if(!$hasError)	
			{	
			echo $_POST["Name"]."<br>";
			echo $_POST["Email"]."<br>";
			echo $_POST["Subject"]."<br>";
			echo $_POST["Message"]."<br>";
			}
		}
?>
				
		

<html>
	<body>
		<fieldset>
			<form action="" method = "post">
				<table align="center">
					<tr>
						<td colspan="3" align="center"><h1><b>Write Us </b></h1></td>
					</tr>
					<tr>
						<td><input name="Name" placeholder="Your name ...." value="<?php echo $Name;?>" type="text"> <br><span><?php echo $err_Name;?></span> </td>
					
						<td><input  type="text" placeholder="Your email ..." value="<?php echo $Email;?>" type="text"> <br><span><?php echo $err_Email;?></span></td>
						<td><input  type="text" placeholder="Subject" value="<?php echo $Email;?>" type="text"> <br><span><?php echo $err_Email;?></span></td>
					</tr>
					<tr>
						<td colspan="3" align="center"><textarea name="Message" placeholder="Message"><?php echo "$Message";?></textarea>
						<br><span><?php echo $err_Message;?></span></td>
					</tr>
					<tr>
						<td colspan="3" align="center"> <input type="Submit" value="Submit">
				    </td>
					</tr>
				</table>
			</form>
		</fieldset>
	</body>
</html>