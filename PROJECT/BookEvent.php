<?php 
/* session_start(); */
require_once 'Controller/EventsController.php';
error_reporting(0);
//require_once 'checkEvent.php';
$id = $_GET["id"];
$c = getProduct($id);


?>
<html>
<body>
<h1 style="color:blue;" align ="center">Welcome Admin</h1>
<form action="" onsubmit = "return(validate());" method="post">
<h2 style="color:brown;" align ="center">Book for Event:</h2>
<h3><?php echo $err_db ?></h3>

<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
<input type="hidden" name= "id" value = "<?php echo $c["id"]; ?>">
<tr><td align="right"><b>Event Name:</b></td><td>&nbsp;<input type="text" id= "ename" name= "ename" onfocusout="checkEventname(this)" value = "<?php echo $_POST["ename"];  ?>"><span  style="color: red;" id="err_ename"><?php //echo $err_ename; ?></span> </td></tr>
<tr><td align="right"><b>Customer Name:</b></td><td>&nbsp;<input type="text" id= "cname" name= "cname" value = "<?php echo $_POST["cname"];  ?>"><span id="err_cname"><?php //echo $err_ename; ?></span></td></tr>
<tr><td align="right"><b>Customer ID:</b></td><td>&nbsp;<input type="number" id= "cid" name= "cid" value = "<?php  echo $_POST["cid"]; ?>"> <span id="err_cid"><?php //echo $err_ename; ?></span></td></tr>
<!--<tr><input type="file" name= "img" value = "<?php //echo $c["img"]; ?>"> </tr>-->
<tr><td align="right"><b>Number of Members:</b></td><td>&nbsp;<input type="number" id= "members" name= "members" value = "<?php echo $_POST["members"];  ?>"><span id="err_members"><?php //echo $err_ename; ?></span></td> </tr>
<tr><td ><b></b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name= "Book_Event" value="Book" ></td></tr>
<script src ="checkEvent.js"></script>
<script src ="BookEvent.js"></script>

</table>
</body>
</html>