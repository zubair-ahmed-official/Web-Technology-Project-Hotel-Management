<?php
if(!isset($_COOKIE["loggeduser"]) && !isset($_COOKIE["loggeduser1"]) ){
header("Location: Login.php");
}
?><?php
	include 'Controller/NoticeController.php';
?>			



<html>
	<body>
		<fieldset>
			<form action="" onsubmit= "return (validate());" method = "post">
				<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
					<tr>
						<td align="center" colspan="2" style="color:blue"><h1><b>Add Notice</b></h1></td>
					</tr>
					<tr>
					   
						<td align="center"><textarea id="Notice" name="Notice"><?php echo "$Notice";?></textarea>
					  <br><span id="err_Notice">&nbsp; <br><?php echo $err_Notice; ?></span>
						</td>		
					</tr>
					
					
					<tr>
						<td align="center" colspan="2"><input name="Add_Notice" type="submit" value="Submit"></td>
				   
						</td>
					</tr>
				</table>
			</form>
<script src="js/notice.js"></script>
		</fieldset>
	</body>
</html>
				