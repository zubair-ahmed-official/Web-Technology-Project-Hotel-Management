<?php

$username = "";
$err_username = "";
$email = "";
$err_email = "";
$hasError=false;


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	
	if(empty($_POST["username"]))
	{
		$hasError = true;
		$err_username = "UserName required";
	}
	else if(strlen($_POST["username"])< 6)
	{
		$hasError = true;
		$err_username = "UserName must be at least 6 characters";
	}
	else if(strpos($_POST["username"], ' ') !== false)
	{
		$hasError = true;
		$err_username = "UserName doesn't allow spaces";
	}
	else
	{
		$username = $_POST["username"];
	}
	
	
	if(empty($_POST["email"]))
	{
		$hasError = true;
		$err_email = "Email required";
	}
	else if(strpos($_POST["email"],"@") && strpos($_POST["email"],".") )
	{
		$email = $_POST["email"];
	}
	else
	{
		$hasError = true;
		$err_email = "Email format not correct";
	}
	

	
	if(!$hasError)
	{
	echo $_POST["username"]."<br>";
	echo $_POST["email"]."<br>";
	}
	
}

?>

    <html>
       <body>
         <form action="Reset_Password.php" method="post">
              <table align="Center">
                  <tr>
                      <td align="Center" colspan="3">
                      <h1>
                           Forgot Your Password?
                      </h1>
                      </td>
                  </tr>
                  <tr>
                   <td rowspan="2"><img src="https://cdn4.iconfinder.com/data/icons/post-office/32/post-email-letter-message-mail-secure-protected-locked-512.png" alt="Email" height="200" width="200"></td>
                   <td><h4>
                        Enter Your email and username<br>
                       We'll email instructs on how <br>
                        to reset your password.
                   </h4></td>
                    <td>
                    <b>Your Email</b>  <br>
                    <input type="text" name="email" id="email" value = "<?php echo $email;?>" placeholder="Enter Email..." >
                    <span> <br> <?php echo $err_email;?></span><br>
                    <b>Username</b>  <br>
                    <input type="text" name="username" id="username"  value = "<?php echo $username;?>" placeholder="Enter your username...">
                    <span> <br><?php echo $err_username;?> </span>
                </td>

            </tr>
            <tr>
                <td>
                    <B>Need Help?</B> Learn more about <br>
                    how to <a href="">retrieve an <br>
                    exisisting account.</a>
                </td>
            </tr>
            <tr>
                <td> <a href="MyLogin.php" target="_blank">
                    <input type="button" value="Back">
                </a>
                 </td>
                 <td><!-- <a target="_blank" href="Reset_Password.php">
                    <input type="submit" value="Submit">
                </a>-->
                <?php  
                echo    "<form  action='Reset_Password.php' method='post'>";
                echo    "<input type='submit' value='Submit'>";
                echo    "</form>";
                    ?>
                 </td>
            </tr>
           </table>
       </form> 

        
    </body>
</html>
