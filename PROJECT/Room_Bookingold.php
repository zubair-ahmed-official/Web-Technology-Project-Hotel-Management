<?php
		$RoomNo="";
		$err_RoomNo="";
		$Branch="";
		$err_Branch="";
		$CIT="";
		$err_CIT="";
		$COT="";
		$err_COT="";
		
		$hasError=false;
		
		$Mon=array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
		$RmNo=array("A-4","B-7","C-12","D-5","E-6","F-7","G-12","H-2","I-3");
		$Br=array("Cox's Bazar","Chittagong","Dhaka");
		
		
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
		if(empty($_POST["RoomNo"]))
				{
					$hasError=true;
					$err_RoomNo="Room No Required";
				}
				else
				{
					$RoomNo=$_POST["RoomNo"];
				}
				
		if(empty($_POST["Branch"]))
				{
					$hasError=true;
					$err_Branch="Branch Name Required";
				}
				else
				{
					$Branch=$_POST["Branch"];
				}

		if(empty($_POST["CIT"]))
				{
					$hasError=true;
					$err_CIT="Check in Time Required";
				}
				else
				{
					$CIT=$_POST["CIT"];
				}
				
		if(empty($_POST["COT"]))
				{
					$hasError=true;
					$err_COT="Check out Time Required";
				}
				else
				{
					$COT=$_POST["COT"];
				}		
				
				
		if(!$hasError)	
			{	
			echo $_POST["RoomNo"]."<br>";
			echo $_POST["Branch"]."<br>";
			echo $_POST["CIT"]."<br>";
			echo $_POST["COT"]."<br>";
			}
		}
?>			



<html>
	<body>
		<fieldset>
			<form action="" method = "post">
				<table align="center">
					<tr>
						<td align="center" colspan="2"><h1 >Room Booking</h1></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><img width="300px" heigth="200px" src="Room.jpg"/></td>
					</tr>
					<tr>
						<td><br></td>
					</tr>
					<tr>
					   <td align="left"><b>Room No</b></td>
					   <td>
						  <select name="RoomNo" value="<?php echo $RoomNo;?>">
						<option selected disabled>--select--</option>
						<?php
							foreach($RmNo as $r)
							{
								if($r == $RoomNo)
									echo "<option selected>$r</option>";
								else
									echo "<option>$r</option>";
							}
						?>
					  </select>
					   <span>&nbsp; <br><?php echo $err_RoomNo; ?></span>
				       </td>
					</tr>
					
					<tr>
					   <td align="left"><b>Branch</b></td>
					   <td>
						   <select name="Branch" value="<?php echo $Branch;?>">
						<option selected disabled>--select--</option>
						<?php
							foreach($Br as $b)
							{
								if($b == $Branch)
									echo "<option selected>$b</option>";
								else
									echo "<option>$b</option>";
							}
						?>
					  </select>
					   <span>&nbsp; <br><?php echo $err_Branch; ?></span>
				       </td>
					</tr>
					<tr>
					   <td align="left"><b>Check in time</b></td>
					   <td>
						  <select name="CIT">
						  <option selected disabled>Day</option>
						<?php for($i=1;$i<=31;$i++) echo "<option>$i</option>"; ?>
							</select>
				       
						  <select name="CIT" value="<?php echo $CIT;?>">
						<option selected disabled>Month</option>
						<?php
							foreach($Mon as $m)
							{
								if($m == $CIT)
									echo "<option selected>$m</option>";
								else
									echo "<option>$m</option>";
							}
						?>
					  </select>
						
						  <select name="CIT">
						<option selected disabled>Year</option>
						<?php for($j=2010;$j<=2021;$j++) echo "<option>$j</option>"; ?>
					  </select>
					  <span>&nbsp; <br><?php echo $err_CIT; ?></span>
						</td>		
					</tr>
					
					<tr>
					   <td align="left"><b>Check out time</b></td>
					   <td>
						  <select name="COT">
						  <option selected disabled>Day</option>
						<?php for($i=1;$i<=31;$i++) echo "<option>$i</option>"; ?>
							</select>
				       
						  <select name="COT" value="<?php echo $COT;?>">
						<option selected disabled>Month</option>
						<?php
							foreach($Mon as $m)
							{
								if($m == $COT)
									echo "<option selected>$m</option>";
								else
									echo "<option>$m</option>";
							}
						?>
					  </select>
						
						  <select name="COT">
						<option selected disabled>Year</option>
						<?php for($j=2010;$j<=2021;$j++) echo "<option>$j</option>"; ?>
					  </select>
					  <span>&nbsp; <br><?php echo $err_COT; ?></span>
						</td>	
					</tr>
					<tr>
						<td><br></td>
					</tr>
					
					<tr>
						<td colspan="2" align="center"> <button> Book Now </button>
				   
						</td>
					</tr>
				</table>
			</form>
		</fieldset>
	</body>
</html>