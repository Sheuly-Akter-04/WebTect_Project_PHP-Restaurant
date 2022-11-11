<html>


<body>
<table border="3" align="center" width=65%;">
<tr>
<td align="right">
     <img src="logo.png" align="left" height="65" width="150" border="1"><b><center>PHP RESTAURENT</center></b> 

     <a href="index.php">Home |</a>
<a href="login.php">Login |</a>
<a href="registration.php">Registration |</a>
</td>
</tr>
<tr>
<td>
<br>
<br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;"><b>FORGOT PASSWORD</b></legend>

    <div class="pp">

    <label>User Name : </label>
    <input type="text" id="name" name="name" ><br><br>
	
	<label>Email : </label>
    <input type="text" id="email" name="email" ><br><br>

    <label> New Password : </label>
    <input type="password" id="new password" name="new password"> <br>
    
    </div>


    <hr><br>

    <input type="checkbox" id="checkbox" name="checkbox" value="remember me">
    <label>Remember Me</label><br><br>

    <input type="submit" name="submit" id="submit" value="Submit">
    
    
<br><br>
</fieldset>
</form>

<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
          if(isset($_POST['submit']))
            {
              $name = $_POST['name'];
              $password = $_POST['password'];
              if (empty($name || $password)) 
              {
                echo "Your User Name or Password is empty";
              } 
                else 
              {
                echo "Your user name is $name and password is $password";
              }
            }
        }
?>

<br>
<br>


</a>
</td>
</tr>
<tr>
<td>
<p align="center">Copyright &#169; 2021</p>
</td>
</tr>
</body>


</html>

















