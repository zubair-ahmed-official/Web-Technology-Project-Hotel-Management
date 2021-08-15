<?php
if(!isset($_COOKIE["loggeduser"])){
header("Location: Login.php");
}
?><?php 
session_start();
   error_reporting (E_ALL ^ E_NOTICE);
   error_reporting (0);
	require_once 'Controller/EmployeeController.php';
	$id = $_GET["id"];
	$d = getEmployees($id);
?>

<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
	<tr align="center">
		<td>
		<h5 class="text-danger"><?php echo $err_db;?></h5>
		<td>
	</tr>
	<form action="" method="post">
	<tr>
				<td colspan="2" align="center"><h1 style="color:blue"><b>Delete <?php echo $_SESSION["Employees"];?></b></h1></td>
			</tr>
	<tr>		<input type="hidden" name="id" value=<?php echo $id;?>>
				<td align="right">Name*:</td>
				<td><input name="Name" value="<?php echo $d["Name"]; ?>" type="text"></td>
			</tr>
			<tr>
				<td align="right">Email*:</td>
				<td><input name="Email" value="<?php echo $d["Email"];?>" type="text"> </td>
			</tr>
			<tr>
				<td align="right">Phone Number*:</td>
				<td><input name="Phone" value="<?php echo $d["Phone"];?>" type="number"> </td>
			</tr>
			<tr>
				<td align="right">NID No*:</td>
				<td><input name="NID" value="<?php echo $d["NID"];;?>" type="number"> </td>
			</tr>
			<tr>
				<td align="right">Address*:</td>
				<td><input name="Address" value="<?php echo $d["Address"];?>" type="text"> </td>
			</tr>
			<tr>
				<td align="right">Gender*:</td>
				<td><input type="radio" value="Male" <?php if ($d["Gender"] == "Male") echo "checked"; ?> name="Gender"> Male <input type="radio" value="Female" <?php if ($Gender == "Female") echo "checked"; ?> name="Gender">Female
				   </td>
			</tr>
			<tr>
				<td align="right">Age*:</td>
				<td>
					 <select name="Age">
						<option selected disabled>--Select--</option>
						<?php for($j=20;$j<=40;$j++)
                             if($j == $d["Age"])
							echo "<option selected >$j</option>";
                        else echo"<option >$j</option>";		?>
					  </select>
					  
				</td>
			</tr>
			<tr>
				<td align="right">Educational Background*:</td>
				<td><input name="EB" value="<?php echo $d["E_b"];?>" type="text"> </td>
			</tr>
			<tr>
				<td align="right">Employee type*:</td>
				<td>
					<select name="ET" value="<?php echo $d["E_type"];?>">
						<option selected disabled>--Select--</option>
						<?php
							foreach($EmpT as $e)
							{
								if($e ==  $d["E_type"])
									echo "<option selected>$e</option>";
								else
									echo "<option>$e</option>";
							}
						?>
					  </select>
					  
				</td>
			</tr>
			<tr>
						<td align="center" colspan="2"><input name="DeleteEmployee" type="submit" value="Delete"></td>
					</tr>	
			</form>
		</table>
	