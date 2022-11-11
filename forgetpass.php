<html>


<body>
<table border="3" align="center" width=65%;">
<tr>
<td align="right">
     <img src="logo.png" align="left" height="65" width="190" border="1"><b><center>PHP RESTAURENT</center></b> 

     <a href="index.php">Home |</a>
<a href="login.php">Login |</a>
<a href="registration.php">Registration |</a>
<a href="login.php">Back </a>
</td>
</tr>
<tr>
<td>
<br>
<br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?> onsubmit="return validate()">
<fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;"><b>FORGOT PASSWORD</b></legend>

    <div class="pp">

    <label>User Name : </label>
    <input type="text" id="name" name="name" >
    &nbsp;
            <span id="name" style="color:red"></span> <!--For JS error message-->
    <br><br>
	
	<label>Email : </label>
    <input type="text" id="email" name="email" >
     &nbsp;
            <span id="email" style="color:red"></span> <!--For JS error message-->
    <br><br>

    <label> New Password : </label>
    <input type="password" id="newpassword" name="newpassword"> 
     &nbsp;
            <span id="new password" style="color:red"></span> <!--For JS error message-->
    <br><br>
    
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

<script>

    function get(id)
    {
        return document.getElementById(id);
    }
    function validate()
    {
        var name = get("name").value;
        var email = get("email").value;
        var newpassword = get("newpassword").value;
    
        
        
      
        var validate = true;


        if(NewPassword=="")
        {
            validate = false;
            get("errNewPassword").innerHTML="Please Enter  New Password";
            get("NewPassword").focus();
        }
        else
        {
           get("errNewPassword").innerHTML="";
        }


        if(repassword=="")
        {
            validate = false;
           get("errrepassword").innerHTML="Please Enter  Repassword";
            get("repassword").focus();
        }
        else
        {
           get("errrepassword").innerHTML="";
        }

        // if(NewPassword=!repassword)
        // {
        //     validate = false;
        //     get("errrepassword").innerHTML="Password Must be same";
        //     get("repassword").focus();
        // }
        // else
        // {
        //    get("errrepassword").innerHTML="";
        // }
    






        return validate;

    }

  </script>




</body>


</html>

















