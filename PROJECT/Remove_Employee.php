<?php
		$Name="";
		$err_Name="";
		$Email="";
		$err_Email="";
		$Phone=" ";
		$err_Phone="";
		$NID="";
		$err_NID="";
		$Address="";
		$err_Address="";
		$Gender="";
		$err_Gender="";
		$Age="";
		$err_Age="";
		$EB="";
		$err_EB="";
		$ET="";
		$err_ET="";
		
		$hasError=false;
		
		$EmpT=array("Manager","Receptionist","Hotel Maintenance Engineer","Event planner","Housekeeper","Porter","Chef","Waiter/Waitress","Cleaner");
		
		if($_SERVER["REQUEST_METHOD"] == "POST"){
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
				
				
				
				if(empty($_POST["Phone"]))
				{
					$hasError=true;
					$err_Phone="Phone Required";
				}
				else
				{
					$Phone=$_POST["Phone"];
				}
				
				
				
				if(empty($_POST["NID"]))
				{
					$hasError=true;
					$err_NID="NID Required";
				}
				else
				{
					$NID=$_POST["NID"];
				}
				
				
				
				if(empty($_POST["Address"]))
				{
					$hasError=true;
					$err_Address="Address Required";
				}
				else
				{
					$Address=$_POST["Address"];
				}
				
				
				
				if(!isset($_POST["Gender"]))
				{
					$hasError=true;
					$err_Gender="Gender Required";
				}
				else
				{
					$Gender=$_POST["Gender"];
				}
				
				
				
				if(!isset($_POST["Age"]))
				{
					$hasError=true;
					$err_Age="Age Required";
				}
				else
				{
					$Age=$_POST["Age"];
				}
				
				
				
				if(!isset($_POST["EB"]))
				{
					$hasError=true;
					$err_EB="Educational Background Required";
				}
				else
				{
					$EB=$_POST["EB"];
				}
				
				
				
				if(!isset($_POST["ET"]))
				{
					$hasError=true;
					$err_ET="Employee Type Required";
				}
				else
				{
					$ET=$_POST["ET"];
				}
				
				
				if(!$hasError)	
			{	
			echo $_POST["Name"]."<br>";
			echo $_POST["Email"]."<br>";
			echo $_POST["Phone"]."<br>";
			echo $_POST["NID"]."<br>";
			echo $_POST["Address"]."<br>";
			echo $_POST["Gender"]."<br>";
			echo $_POST["Age"]."<br>";
			echo $_POST["EB"]."<br>";
			echo $_POST["ET"]."<br>";
			
			foreach($arr as $e)
				echo "$e<br>";
			}
		}
?>
				
				
<head>

</head>
<body>
	<fieldset>
	<form action="" method="post">
		<table align="center">
			<tr>
				<td colspan="2" align="center"><h1><b>Remove Employee</b></h1></td>
			</tr>
			<tr>
				<td align="right">Name*:</td>
				<td><input name="Name" value="<?php echo $Name;?>" type="text"> <br><span><?php echo $err_Name;?></span></td>
			</tr>
			<tr>
				<td align="right">Email*:</td>
				<td><input name="Email" value="<?php echo $Email;?>" type="text"> <br><span><?php echo $err_Email;?></span></td>
			</tr>
			<tr>
				<td align="right">Phone Number*:</td>
				<td><input name="Phone" value="<?php echo $Phone;?>" type="number"> <br><span><?php echo $err_Phone;?></span></td>
			</tr>
			<tr>
				<td align="right">NID No*:</td>
				<td><input name="NID" value="<?php echo $NID;?>" type="number"> <br><span><?php echo $err_NID;?></span></td>
			</tr>
			<tr>
				<td align="right">Address*:</td>
				<td><input name="Address" value="<?php echo $Address;?>" type="text"> <br><span><?php echo $err_Address;?></span></td>
			</tr>
			<tr>
				<td align="right">Gender*:</td>
				<td><input type="radio" value="Male" <?php if ($Gender == "Male") echo "checked"; ?> name="Gender"> Male <input type="radio" value="Female" <?php if ($Gender == "Female") echo "checked"; ?> name="Gender">Female
				   <br> <span><?php echo $err_Gender;?></span></td>
			</tr>
			<tr>
				<td align="right">Age*:</td>
				<td>
					 <select name="Age">
						<option selected disabled>--Select--</option>
						<?php for($j=20;$j<=40;$j++)
                             if($j == $_POST["Age"])
							echo "<option selected >$j</option>";
                        else echo"<option >$j</option>";		?>
					  </select>
					  <span>&nbsp; <br><?php echo $err_Age; ?></span>
				</td>
			</tr>
			
			<tr>
				<td align="right">Employee type*:</td>
				<td>
					<select name="ET" value="<?php echo $ET;?>">
						<option selected disabled>--Select--</option>
						<?php
							foreach($EmpT as $e)
							{
								if($e ==  $_POST["ET"])
									echo "<option selected>$e</option>";
								else
									echo "<option>$e</option>";
							}
						?>
					  </select>
					  <span>&nbsp; <br><?php echo $err_ET; ?></span>
				</td>
			</tr>
			<tr>
						<td colspan="2" align="center"><button> Remove </button></td>
			</tr>	    
		</table>
	</form>
	</fieldset>
</body>
</html>		