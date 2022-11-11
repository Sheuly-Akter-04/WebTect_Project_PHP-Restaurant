<html>
<head>
<title>Registration Page</title>
</head>
<body>
<?php
    include 'dbcon.php';
    if(isset($_POST['submit']))
    {
      $role = mysqli_real_escape_string($con,$_POST['role']);
      $name = mysqli_real_escape_string($con,$_POST['name']);
      $username = mysqli_real_escape_string($con,$_POST['username']);
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $password = mysqli_real_escape_string($con,$_POST['password']);
      $repassword = mysqli_real_escape_string($con,$_POST['repassword']);
      $gender = mysqli_escape_string($con,$_POST['gender']);
      $dob = date('y-m-d', strtotime($_POST['date']));

      $usernamequery = "select * from user where username='$username'";
      $query = mysqli_query($con,$usernamequery);

      $unamecount = mysqli_num_rows($query);

      if($unamecount>0)
      {
        ?>
          <script>
          alert("Username has been Taken!");
          </script>
        <?php
      }
      else
      {
        if($password === $repassword)
        {
          $insetquery = "insert into user(name, username, email, password, repassword, gender, dob, role) values('$name','$username','$email','$password','$repassword', '$gender', '$dob', '$role')";

          $iquery = mysqli_query($con, $insetquery);
          if($con)
              {
                  ?>
                  <script>
                      alert("Registration complete! Go to Login Page");
                      </script>
                      <?php
              }
              else
              {
                  ?>
                  <script>
                      alert("Something Wrong! DO it again. Thank you");
                      </script>
                      <?php
              }
        }else{
          echo "Password are not matching!";
        }
      }
    }

?>




<table border="3" align="center" width=65%;">
<tr>
<td align="right">
     <img src="logo.png" align="left" height="75" width="250" border="1"><b><center>PHP RESTAURANT</center></b><br>

     <a href="index.php">Home |</a>
<a href="login.php">Login |</a>
<a href="registration.php">Registration |</a>
<a href="aboutus.php">About us |</a>
<a href="contactus.php">Contract us </a>
</td>
</tr>
<tr>
<td>
<br>
<br>
<form method="POST" action="" onsubmit="return f1()">
<fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;"><b>Registration</b></legend>

    <div class="pp1">
    <label>User Type : </label>
    <br>
    <br>
        <select name="role" required>
          <option value="">------</option>
          <option value="admin">Admin </option>
          <option value="manager">Manager</option>
          <option value="supplier">Supplier</option>
          <option value="delivery">Delivery</option>
          <option value="normal">Normal</option>
        </select>
    <br>
    <hr><br>

    <label>Name : </label>
    <input type="text" id="name1" name="name" > &nbsp;
    <span id="errName" style="color:red">  </span>
    <br>
    <hr><br>

    <label>Email :</label>
    <input type="text" id="email" name="email" > &nbsp;
    <span id="errEmail" style="color:red"> </span>
    <br>
    <hr><br>

    <label>User Name : </label>
    <input type="text" id="uname" name="username" > &nbsp;
    <span id="errUname" style="color:red"> </span>
    <br>
    <hr><br>

    <label>Password :  </label>
    <input type="password" id="pword" name="password" > &nbsp;
    <span id="errpword" style="color:red"> </span>
    <br>
    <hr><br>

    <label>Confirm Password : </label>
    <input type="password" id="conpword" name="repassword" > &nbsp;
    <span id="errconpword" style="color:red"> </span>
    <br>
    <hr><br>

    </div>

    <fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;">Gender</legend>

    <div class="pp2">

    <input type="radio" name="gender" value="Male">
    <label class="male">Male</label>

    <input type="radio" name="gender" value="Female">
    <label class="female">Female</label>

    <input type="radio" name="gender" value="Other">
    <label class="other">Other</label>  &nbsp; &nbsp;

    <span id="errGender" style="color: red;"></span>



    </fieldset>

    <hr>

    </div>


<div class="pp3">

<fieldset>

<legend style="font-family: Arial, Helvetica, sans-serif;">Date Of Birth</legend>

<div class="pp2">

<input type="date" name="date" id="dob" placeholder="dd/mm/yyyy"> &nbsp;
<span id="errDob" style="color: red;"></span>


</fieldset>


</div>


    <hr>

    <input type="submit" name="submit" value="Registration">
    
    <input type="reset" name="reset" id="reset" value="Reset"><br><br>
</fieldset>
</form>

<br>
<br>
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


    function f1()
    {
      var name = get("name1").value;
      
      var email = get("email").value;
      var uname = get("uname").value;

      var pass = get("pword").value;
      var rPass = get("conpword").value;

      var Gender = document.getElementsByName("gender");

      var DOB = get("dob").value;


      var validate = true;

      if(name=="")
      {
          validate = false;
          get("errName").innerHTML="Please Enter Name";
          get("name1").focus();
      }
      else
      {
          get("errName").innerHTML="";
      }


      if(email=="")
      {
          validate = false;
          get("errEmail").innerHTML="Please Enter Email";
          get("email").focus();
      }
      else
      {
          get("errEmail").innerHTML="";
      }

      if(uname=="")
      {
          validate = false;
          get("errUname").innerHTML="Please Enter User Name";
          get("uname").focus();
      }
      else
      {
          get("errUname").innerHTML="";
      }


      
      if(pass=="")
      {
          validate = false;
          get("errpword").innerHTML="Please Enter Password";
          get("pword").focus();
      }
      else
      {
          get("errpword").innerHTML="";
      }

      if(rPass=="")
      {
          validate = false;
          get("errconpword").innerHTML="Please  Re-Enter Password";
          get("conpword").focus();
      }
      else
      {
          get("errconpword").innerHTML="";
      }

      if (!(Gender[0].checked || Gender[1].checked || Gender[2].checked)) 
      {
          get("errGender").innerHTML="Please Enter Gender";
          //alert("Please Select Your Gender");
          validate = false;
      }
      else
      {
        get("errGender").innerHTML="";
      }


      if(DOB=="")
      {
          validate = false;
          get("errDob").innerHTML="Please Enter Date of Birth";
          get("dob").focus();
      }
      else
      {
          get("errDob").innerHTML="";
      }




      return validate;
    }

    
</script>














</body>


</html>

















