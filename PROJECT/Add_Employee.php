<?php 
	require_once 'Controller/EmployeeController.php';
 ?>
						
<head>

</head>
<body>
	<fieldset>
	<form action="" onsubmit= "return (validate());" method="post">
		<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
			<tr>
				<td colspan="2" align="center"><h1 style="color:blue"><b>Add Employee</b></h1></td>
			</tr>
			<tr>
				<td align="right">Name*:</td>
				<td><input id="Name" name="Name" onfocusout="checkName(this)"  type="text"> <br><span id="err_Name" class="text-danger"><?php echo $err_Name;?></span></td>
			</tr>
			<tr>
				<td align="right">Email*:</td>
				<td><input id="Email" name="Email"  type="text"> <br><span id="err_Email"><?php echo $err_Email;?></span></td>
			</tr>
			<tr>
				<td align="right">Phone Number*:</td>
				<td><input id="Phone" name="Phone"  type="number"> <br><span id="err_Phone"><?php echo $err_Phone;?></span></td>
			</tr>
			<tr>
				<td align="right">NID No*:</td>
				<td><input id="NID" name="NID"  type="number"> <br><span id="err_NID"><?php echo $err_NID;?></span></td>
			</tr>
			<tr>
				<td align="right">Address*:</td>
				<td><input id="Address" name="Address"  type="text"> <br><span id="err_Address"><?php echo $err_Address;?></span></td>
			</tr>
			<tr>
				<td align="right">Gender*:</td>
				<td><input type="radio" value="Male" <?php if ($Gender == "Male") echo "checked"; ?> id="Gender" name="Gender"> Male <input type="radio" value="Female" <?php if ($Gender == "Female") echo "checked"; ?> id="Gender" name="Gender">Female
				   <br> <span id="err_Gender"><?php echo $err_Gender;?></span></td>
			</tr>
			<tr>
				<td align="right">Age*:</td>
				<td>
					 <select id="Age" name="Age">
						<option selected disabled>--Select--</option>
						<?php for($j=20;$j<=40;$j++)
                             if($j == $_POST["Age"])
							echo "<option selected >$j</option>";
                        else echo"<option >$j</option>";		?>
					  </select>
					  <br><span id="err_Age">&nbsp; <br><?php echo $err_Age; ?></span>
				</td>
			</tr>
			<tr>
				<td align="right">Educational Background*:</td>
				<td><input id="EB" name="EB"  type="text"> <br><span id="err_EB"><?php echo $err_EB;?></span></td>
			</tr>
			<tr>
				<td align="right">Employee type*:</td>
				<td>
					<select id="ET" name="ET" >
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
					  <br><span id="err_ET">&nbsp; <br><?php echo $err_ET; ?></span>
				</td>
			</tr>
			<tr>
						<td align="center" colspan="2"><input name="Add_Employee" type="submit" value="Add Employee"></td>
					</tr>	    
		</table>
	</form>
<script src="JS/Add_Employee.js"></script>

	</fieldset>
</body>
</html>		