<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once 'Controller/Temp.php';
?>
<?php
require_once 'main_header.php';
?>
<html>
<body>
<form action="" method="post">
<table align="center">
<tr><td></td></tr><tr><td></td></tr>
<tr><td></td></tr><tr><td></td></tr>
<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr><tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td> <h1> Login </h1> </td></tr>
<span><?php echo $err_db; ?></span>
<tr><td></td></tr>
<tr><td align="center"> <b>Username: </b> </td> <td> <input name = "username" value = "<?php echo $username;?>" align="center" type="txt"  >
<span><?php echo $err_username; ?></span></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td align="center"> <b>Password: </b> </td> <td> <input name = "password" value = "<?php echo $password;?>" align="center" type="password" >
<span><?php echo $err_password; ?></span></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td><td>
<tr><td></td><td align = "right"><input type='Submit' name='Login' value='Log In'></td></tr>
<tr><td></td></td></tr>
<tr><td></td><td align = "right"> Not registered yet?<a href = "Signup.php">Signup!</a></td></tr>

<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
</td></tr>
<tr><td></td></tr>
</table>
</body>
</html>