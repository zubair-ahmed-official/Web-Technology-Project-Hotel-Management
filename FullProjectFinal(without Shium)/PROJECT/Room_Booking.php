<?php
	require_once 'Controller/BookingRoomController.php';
	
?>			



<html>
	<body>
		<fieldset>
			<form action="" method = "post">
				<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
					<tr>
						<td align="center" colspan="2"><h1 >Room Booking</h1></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><img width="300px" heigth="200px" src="images/Room.jpg"/></td>
					</tr>
					
					<tr>
					   <td align="left"><b>Room No:</b></td>
					   <td><input name="RoomNo" onfocusout="checkRoom(this)" value="<?php echo $RoomNo;?>" type="text">
					   <br><span id="err_RoomNo" class="text-danger"><?php echo $err_RoomNo; ?></span>
				       </td>
					</tr>
					<tr>
					   <td align="left"><b>Username:</b></td>
					   <td><input id="uname" name="userName"  value="<?php echo $userName;?>" type="text">
					   <br><span id="err_uname" class="text-danger"><?php echo $err_userName; ?></span>
				       </td>
					</tr>
					
					<tr>
					   <td align="left"><b>Branch:</b></td>
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
					   <td align="left"><b>NID:</b></td>
						<td><input name="NID" value="<?php echo $NID;?>" type="text">
					  <span>&nbsp; <br><?php echo $err_NID; ?></span>
						</td>		
					</tr>
					
					<tr>
					   <td align="left"><b>Address: </b></td>
						<td><input name="Address" value="<?php echo $Address;?>" type="text">
					  <span>&nbsp; <br><?php echo $err_Address; ?></span>
						</td>		
					</tr>
					
					<tr>
					   <td align="left"><b>Email: </b></td>
						<td><input name="Email" value="<?php echo $Email;?>" type="text">
					  <span>&nbsp; <br><?php echo $err_Email; ?></span>
						</td>		
					</tr>
					
					<tr>
					   <td align="left"><b>Phone no: </b></td>
						<td><input name="Phone" value="<?php echo $Phone;?>" type="text">
					  <span>&nbsp; <br><?php echo $err_Phone; ?></span>
						</td>		
					</tr>
					
					<tr>
					   <td align="left"><b>Check in time: </b><br> (dd-mm-yyyy)</td>
						<td><input name="CIT" value="<?php echo $CIT;?>" type="text">
					  <span>&nbsp; <br><?php echo $err_CIT; ?></span>
						</td>		
					</tr>
					
					
					<tr>
					   <td align="left"><b>Check out time: </b><br> (dd-mm-yyyy)</td>
						<td><input name="COT" value="<?php echo $COT;?>" type="text">
					  <span>&nbsp; <br><?php echo $err_COT; ?></span>
						</td>	
					</tr>
					
					
					
					<tr>
						<td align="center" colspan="2"><input name="Room_Booking" type="submit" value="Book Now"></td>
				   
						</td>
					</tr>
				</table>
			</form>
<script src="JS/Room_Booking.js"></script>
		</fieldset>
	</body>
</html>