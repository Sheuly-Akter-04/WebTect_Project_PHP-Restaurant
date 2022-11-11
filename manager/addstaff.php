<html>
<head>
<title>Add Staff Page</title>
</head>
<body>
<?php 
    include '../dbcon.php';
    if(isset($_POST['submit']))
    {
      $name = mysqli_real_escape_string($con,$_POST['name']);
      $username = mysqli_real_escape_string($con,$_POST['username']);
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $gender = mysqli_real_escape_string($con,$_POST['gender']);
      $dob = mysqli_real_escape_string($con,$_POST['dob']);
      $role = mysqli_real_escape_string($con,$_POST['role']);

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
          $insetquery = "insert into user(name, username, email, gender, dob, role) values('$name','$username','$email','$gender','$dob','$role')";

          $iquery = mysqli_query($con, $insetquery);
          if($con)
              {
                  ?>
                  <script>
                      alert("Bingo! Staff added");
                      </script>
                      <?php
                      header('location:managerdashboard.php');
              }
              else
              {
                  ?>
                  <script>
                      alert("Something Wrong! DO it again. Thank you");
                      </script>
                      <?php
              }
        }
      }
  ?>



<table border="3" align="center" width=65%;">
<tr>
<td align="right">
     <img src="../logo.png" align="left" height="65" width="195" border="1"><b><center>PHP RESTAURANT</center></b><br>

     <a href="manageinformation.php">Back</a>
</td>
</tr>
<tr>
<td>
<br>
<br>
<form method="POST" action="" onsubmit="return validate()">
<fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;"><b>Add Staff</b></legend>

    <div class="pp1">

    <label>Name : </label>
    <input type="text"   id="name" name="name" >
    &nbsp;
            <span id="errname" style="color:red"></span> <!--For JS error message-->
    <br>
    <hr><br>

    <label>User Name : </label>
    <input type="text" id="username" name="username" >
    &nbsp;
            <span id="errusername" style="color:red"></span> <!--For JS error message-->
    <br>
    <hr><br>

    <label>Email :</label>
    <input type="text" id="email"  name="email" >
    &nbsp;
            <span id="erremail" style="color:red"></span> <!--For JS error message-->
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

    <span id="errgender" style="color: red;"></span>



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


</div><br>

<label>User Type :</label>
    <input type="text" id="role"  name="role" >
    &nbsp;
            <span id="errrole" style="color:red"></span> <!--For JS error message-->
    <br>
    <hr><br>

    <hr>
    <input type="submit" name="submit" value="Add">
    
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
    function validate()
    {
        var name = get("name").value;
        var username = get("username").value;
        var email = get("email").value;
        var gender = get("gender").value;
        var dob = get("dob").value;
        var role = get("role").value;
        
        
      
        var validate = true;


        if(name=="")
        {
            validate = false;
            get("errname").innerHTML="Please Enter  Name";
            get("name").focus();
        }
        else
        {
            get("errname").innerHTML="";
        }



        if(username=="")
        {
            validate = false;
            get("errusername").innerHTML="Please Enter  User Name ";
            get("username").focus();
        }
        else
        {
            get("errusername").innerHTML="";
        }


         if(email=="")
        {
            validate = false;
            get("erremail").innerHTML="Please Enter  Email";
            get("email").focus();
        }
        else
        {
            get("erremail").innerHTML="";
        }




        if (!(gender[0].checked || gender[1].checked || gender[2].checked)) 
      {
          get("errgender").innerHTML="Please Enter Gender";
          //alert("Please Select Your Gender");
          validate = false;
      }
      else
      {
        get("ergender").innerHTML="";
      }


      if(dob=="")
      {
          validate = false;
          get("errdob").innerHTML="Please Enter Date of Birth";
          get("dob").focus();
      }
      else
      {
          get("errdob").innerHTML="";
      }

       if(role=="")
        {
            validate = false;
            get("errrole").innerHTML="Please Enter User Type";
            get("role").focus();
        }
        else
        {
            get("errrole").innerHTML="";
        }

        



        return validate;

    }

  </script>










</body>


</html>

















