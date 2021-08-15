<?php
	include 'Controller/ReviewController.php';
?>			
				
		

<html>
	<body>
		<fieldset>
			<form action="" onsubmit= "return (validate());" method = "post">
				<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
					<tr>
						<td colspan="3" align="center"><h1 style="color:blue"><b>Write Us </b></h1></td>
					</tr>
					<tr>
						<td><input id="Name" name="Name" placeholder="Your name ...." value="<?php echo $Name;?>" type="text"> <br><span id="err_Name"><?php echo $err_Name;?></span> </td>
						<td><input id="Email" name="Email" type="text" placeholder="Your email ..." value="<?php echo $Email;?>" type="text"> <br><span id="err_Email"><?php echo $err_Email;?></span></td>
						<td><input id="Subject" name="Subject" type="text" placeholder="Subject" value="<?php echo $Subject;?>" type="text"> <br><span id="err_Subject"><?php echo $err_Subject;?></span></td>
					</tr>
					<tr>
						<td colspan="3" align="center"><textarea id="Message" name="Message" placeholder="Message"><?php echo "$Message";?></textarea>
						<br><span id="err_Message"><?php echo $err_Message;?></span></td>
					</tr>
					
					<tr>
						<td  align="center"><b>Give a Rating: </b></td>
						<td><input id="Rating" name="Rating" type="text" placeholder="......out of 5......" value="<?php echo $Rating;?>" type="text"> <br><span id="err_Rating"><?php echo $err_Rating;?>
					</tr>
					
					<tr>
						<td colspan="3" align="center"> <input name="Add_Review" type="Submit" value="Submit">
				    </td>
					</tr>
				</table>
			</form>
<script src="js/review.js"></script>
		</fieldset>
	</body>
</html>