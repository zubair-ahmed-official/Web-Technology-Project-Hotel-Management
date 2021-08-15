<?php 
require_once 'main_header.php';
require_once 'Controller/CheckinController.php';
$id = $_GET["id"];
$c = getProduct($id);
?>
<html>
<body>
<h1 style="color:blue;" align ="center">Welcome Admin</h1>
<form action="" method="post">
<h2 style="color:red;" align ="center">Customer Checkout:</h2>
<span><?php echo $err_db; ?></span>
<table style="border-color:green; width:40%; height:70%;" align="center" border="4">
<input type="hidden" name= "id" value = "<?php echo $c["id"]; ?>">
<tr><td align="right"><b>Customer Name:</b></td><td>&nbsp;<input type="text" name= "cname" value = "<?php echo $c["cname"]; ?>"><span><?php echo $err_cname ?></span> </td></tr>
<tr><td align="right"><b>Customer ID:</b></td><td>&nbsp;<input type="text" name= "cid" value = "<?php echo $c["cid"]; ?>"><span><?php echo $err_cid ?></span></td></tr>
<tr><td align="right"><b>Phone:</b></td><td>&nbsp;<input type="text" name= "phone" value = "<?php echo $c["phone"]; ?>"><span><?php echo $err_phone ?></span> </td></tr>
<!--<tr><td align="right"><b>Image:</b></td><td><input type="file" name= "img" ><img width='200px' heigth='400px' src = "<?php //echo $c["img"]; ?>"></img></td></tr>-->
<tr><td align="right"><b>Room no:</b></td><td>&nbsp;<input type="textarea" name= "room_no" value = "<?php echo $c["room_no"]; ?>"><span><?php echo $err_room_no?></span></td> </tr>
<tr><td align="right"><b>Customer Chekin Time:</b></td><td>&nbsp;<input type="textarea" name= "btime" value = "<?php echo $c["btime"]; ?>"><span><?php echo $err_btime?></span></td> </tr>
<tr><td align="right"><b>Customer Chekout Time:</b></td><td>&nbsp;<input type="textarea" name= "bdays" value = "<?php echo $c["bdays"]; ?>"><span><?php echo $err_bdays?></span></td> </tr>
<tr><td align="right"><b>Customer Link:</b></td><td>&nbsp;<input type="textarea" name= "clink" value = "<?php echo $c["clink"]; ?>"><span><?php echo $err_clink?></span></td> </tr>
<tr><td ><b></b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name= "Cancel_Checkin" value="Checkout" ></td></tr>
</table>
</body>
</html>