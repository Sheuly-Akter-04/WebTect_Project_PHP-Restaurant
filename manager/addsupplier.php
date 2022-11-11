<html>
<head>
<title>Add Suplier page</title>
</head>
<body>
<?php 
    include '../dbcon.php';
    if(isset($_POST['submit']))
    {
      $name = mysqli_real_escape_string($con,$_POST['name']);
      $username = mysqli_real_escape_string($con,$_POST['username']);
      $phone = mysqli_real_escape_string($con,$_POST['phone']);
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $address = mysqli_real_escape_string($con,$_POST['address']);

      $usernamequery = "select * from supplier where username='$username'";
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
          $insetquery = "insert into supplier(name, username, phone, email, address) values('$name','$username','$phone','$email','$address')";

          $iquery = mysqli_query($con, $insetquery);
          if($con)
              {
                  ?>
                  <script>
                      alert("Bingo! Supplier added");
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

     <a href="supplierpreserve.php">Back</a>
</td>
</tr>
<tr>
<td>
<br>
<br>
<form method="POST" action="" onsubmit="return validate()">
<fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;"><b>Add Supplier</b></legend>

    <div class="pp1">

    <label>Name : </label>
    <input type="text"   id="name" name="name" >
    &nbsp;
    				<span id="errName" style="color:red"></span> <!--For JS error message-->
    <br>
    <hr><br>

    <label>Email :</label>
    <input type="text" id="email"  name="email" >
    &nbsp;
    				<span id="erremail" style="color:red"></span> <!--For JS error message-->
    <br>
    <hr><br>

    <label>User Name : </label>
    <input type="text" id="username" name="username" >
    &nbsp;
    				<span id="errusername" style="color:red"></span> <!--For JS error message-->
    <br>
    <hr><br>

    </div>


    <label>Phone Number: </label>
    <input type="text" id="phone"  name="phone" >
    &nbsp;
    				<span id="errphone" style="color:red"></span> <!--For JS error message-->
    <br>
    <hr><br>
    <label>Address : </label>
    <textarea id="address"  name="address"></textarea>
    &nbsp;
    				<span id="erraddress" style="color:red"></span> <!--For JS error message-->
    <hr><br>
 


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
        var email = get("email").value;
        var username = get("username").value;
        var phone = get("phone").value;
        var address = get("address").value;
        
        
      
        var validate = true;


        if(name=="")
        {
            validate = false;
            get("errName").innerHTML="Please Enter  Name";
            get("name").focus();
        }
        else
        {
            get("errName").innerHTML="";
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




        if(phone=="")
        {
            validate = false;
            get("errphone").innerHTML="Please Enter  Phone ";
            get("phone").focus();
        }
        else
        {
            get("errphone").innerHTML="";
        }

        if(address=="")
        {
            validate = false;
            get("erraddress").innerHTML="Please Enter Address ";
            get("address").focus();
        }
        else
        {
            get("erraddress").innerHTML="";
        }




        



        return validate;

    }

	</script>










</body>


</html>

















