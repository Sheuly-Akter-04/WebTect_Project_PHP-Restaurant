<?php
  session_start();
?>
<html>
<head>
    
    <title>Login</title>
</head>
<body>
<?php
    
    include 'dbcon.php';
    if(isset($_POST['submit']))
    {
      $username = $_POST['username'];
      $password = $_POST['password'];

      $username_search = "select * from user where username='$username' && password='$password'";
      $query = mysqli_query($con,$username_search);

      if(mysqli_num_rows($query) == 1)
      {
        $rolesearch = "select role from user where username='$username' && password='$password'";
        $roles = mysqli_query($con,$rolesearch);

        $row = mysqli_fetch_array($roles);

        $username_pass = mysqli_fetch_assoc($query);

        $_SESSION['name'] = $username_pass['name'];
        $_SESSION['userid'] = $username_pass['userid'];
        $_SESSION['email'] = $username_pass['email'];
        $_SESSION['gender'] = $username_pass['gender'];
        $_SESSION['dob'] = $username_pass['dob'];
        $_SESSION['username'] = $username_pass['username'];
        $_SESSION['role'] = $username_pass['role'];


        if($row['role'] == "admin")
        {
          header("Location: ../Final/admin/admindashboard.php");
        }
        else if($row['role'] == "manager")
        {

          header("Location: ../Final/manager/managerdashboard.php");
        }
        else if($row['role'] == "delivery")
        {
          header("Location: ../Final/delivery/deliverymenu.php");
        }
      }
      else
      {
        echo "Invalid Username or Password";
      }
    }
  ?>





<table border="3" align="center" width=65%;">
<tr>
<td align="right">
     <img src="logo.png" align="left" height="75" width="195" border="1"><b><center>PHP RESTAURANT</center></b><br> 

<a href="index.php">Home |</a>
<a href="registration.php">Registration |</a>
<a href="index.php">Back </a>
</td>
</tr>
<tr>
<td>
<br>
<br>
<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" onsubmit="return v2()">
<fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;"><b> LOGIN</b></legend>

    <div class="pp">

    <label>User Name : </label>
    <input type="text" id="name" name="username" > &nbsp;
    <span id="errName" style="color:red"></span> <!--For JS error message-->
    <br><br>

    <label>Password : </label>
    <input type="password" id="password" name="password"> &nbsp;
    <span id="errPass" style="color:red"></span>
     <br>
    
    </div>


    <hr><br>

    <input type="checkbox" id="checkbox" name="checkbox" value="remember me">
    <label>Remember Me</label><br><br>

    <input type="submit" name="submit" value="Login">
    
    <a href="forgetpass.php">Forgot Password</a>
<br><br>
</fieldset>
</form>

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
    function v2()
    {
        var name = get("name").value;
        
         var pass = get("password").value;
      
        var validate = true;
        if(name=="")
        {
            validate = false;
            get("errName").innerHTML="Please Enter User Name";
            get("name").focus();
        }
        else
        {
            get("errName").innerHTML="";
        }

        if(pass=="")
        {
            validate = false;
            get("errPass").innerHTML="Please Enter Password";
            get("password").focus();
        }
        else
        {
            get("errPass").innerHTML="";
        }



        return validate;

    }


</script>






</body>


</html>

















