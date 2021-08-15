<?php 
/* session_start(); */
require_once 'Controller/EventsController.php';
//require_once 'UpcomingEvents.php';

error_reporting(0);
require_once 'main_header.php';
//require_once 'checkEvent.php';
$id = $_GET["id"];
$c = getProduct($id);
$cat = getProducts();
session_start();
?>
<html>
<body>
<h1 style="color:blue;" align ="center">Welcome Admin</h1>
<form action="" onsubmit = "return(validate());" method="post">
<h2 style="color:brown;" align ="center">BOOK  <?php echo $_SESSION["EVENTS"]; ?>:</h2>

<h3><?php echo $err_db ?></h3>

<table style="border-color:green; width:40%; height:60%;" align="center" border="4">
<input type="hidden" name= "id" value = "<?php echo $c["id"]; ?>">

<tr><td align="right"><b>Event Name:</b></td><td>&nbsp; <select id="ename" name="ename" value="<?php echo $ename; ?>">
<option> Choose </option>
<?php
foreach($cat as $c)
{
	echo "<option value='".$c["name"]."'>".$c["name"]."</option>";
}
?>
</select><span id="err_ename"><?php echo $err_ename; ?></td></tr>

<tr><td align="right"><b>Customer Name:</b></td><td>&nbsp;<input type="text" id= "cname" name= "cname" value = "<?php echo $_POST["cname"];  ?>"><span id="err_cname"><?php echo $err_cname; ?></span></td></tr>
<tr><td align="right"><b>Customer ID:</b></td><td>&nbsp;<input type="number" id= "cid" name= "cid" value = "<?php  echo $_POST["cid"]; ?>" onfocusout="customerIdExisting(this)"> <span style="color:red" id="err_cid"><?php echo $err_cid; ?></span></td></tr>
<!--<tr><input type="file" name= "img" value = "<?php //echo $c["img"]; ?>"> </tr>-->
<tr><td align="right"><b>Number of Members:</b></td><td>&nbsp;<input type="number" id= "members" name= "members" value = "<?php echo $_POST["members"];  ?>"><span id="err_members"><?php echo $err_members; ?></span></td> </tr>
<tr><td align="right"><b>Phone Number:</b></td><td>&nbsp;<input type="number" id= "phone" name= "phone" value = "<?php echo $_POST["phone"];  ?>"><span id="err_phone"><?php echo $err_phone; ?></span></td> </tr>
<tr><td align="right"><b>E-Mail:</b></td><td>&nbsp;<input type="text" id= "email" name= "email" value = "<?php echo $_POST["email"];  ?>"><span id="err_email"><?php echo $err_email; ?></span></td> </tr>
<tr><td align="right"><b>Customer ID Link:</b></td><td>&nbsp;<input type="text" id= "clink" name= "clink" value = "<?php echo $_POST["clink"];  ?>"><span id="err_clink"><?php echo $err_clink; ?></span></td> </tr>
<tr><td ><b></b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name= "Book_Event" value="Book" ></td></tr>
<script src ="JS/checkEvent.js"></script>
<script src ="JS/BookEvent.js"></script>
<script src ="JS/customerIdExisting.js"></script>

</table>
</body>
</html>
<!--<input type="text" id= "ename" name= "ename" onfocusout="checkEventname(this)" value = "<?php //echo $_POST["ename"];  ?>">
<span  style="color: red;" id="err_ename"><?php //echo $err_ename; ?></span>-->