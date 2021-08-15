<?php 
session_start();
error_reporting (E_ALL ^ E_NOTICE);
	require_once 'Controller/BookingRoomController.php';
	$id = $_GET["id"];
	$e = getbookedrooms($id);
?>

<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
	<tr align="center">
		<td>
		<h5 class="text-danger"><?php echo $err_db;?></h5>
		<td>
	</tr>
	<form action="" method="post">
	<tr>
				<td colspan="2" align="center"><h1><b>Delete <?php echo $_SESSION["Booking Rooms"];?></b></h1></td>
				
			</tr>
	<tr>				<input type="hidden" name="id" value=<?php echo $id;?>>
					   <td align="left"><b>Room No:</b></td>
					   <td><input name="RoomNo" value="<?php echo $e["RoomNo"];?>" type="text">
						</td>		
					</tr>
					
					<tr>
					   <td align="left"><b>Branch:</b></td>
					   <td>
						   <select name="Branch" value="<?php echo $e["Branch"];?>">
						<option selected disabled>--select--</option>
						<?php
							foreach($Br as $b)
							{
								if($b == $e["Branch"])
									echo "<option selected>$b</option>";
								else
									echo "<option>$b</option>";
							}
						?>
					  </select>
					   
				       </td>
					</tr>
					
					<tr>
					   <td align="left"><b>NID: </b></td>
						<td><input name="NID" value="<?php echo $e["NID"];?>" type="text">
						</td>		
					</tr>
					<tr>
					   <td align="left"><b>Address: </b></td>
						<td><input name="Address" value="<?php echo $e["Address"];?>" type="text">
						</td>		
					</tr>
					<tr>
					   <td align="left"><b>Email: </b></td>
						<td><input name="Email" value="<?php echo $e["Email"];?>" type="text">
						</td>		
					</tr>
					<tr>
					   <td align="left"><b>Phone no: </b></td>
						<td><input name="Phone" value="<?php echo $e["Phone"];?>" type="text">
						</td>		
					</tr>
					
					<tr>
					   <td align="left"><b>Check in time: </b><br> (dd-mm-yyyy)</td>
						<td><input name="CIT" value="<?php echo $e["CIT"];?>" type="text">
						</td>		
					</tr>
					
					<tr>
					   <td align="left"><b>Check out time: </b><br> (dd-mm-yyyy)</td>
						<td><input name="COT" value="<?php echo $e["COT"];?>" type="text">
						</td>		
					</tr>
					
					
					<tr>
						<td align="center" colspan="2"><input name="DeleteRoom" type="submit" value="Delete"></td>
				   
						</td>
					</tr>
			</form>
		</table>
		