<html>
<head>
<title>Add Account Page</title>
</head>
<body>
<?php 
    include '../dbcon.php';
    if(isset($_POST['submit']))
    {
      $netb = mysqli_real_escape_string($con,$_POST['netb']);
      $name = mysqli_real_escape_string($con,$_POST['name']);
      $credit = mysqli_real_escape_string($con,$_POST['credit']);
      $withdraw = mysqli_real_escape_string($con,$_POST['withdraw']);
      $arrears = mysqli_real_escape_string($con,$_POST['arrears']);

      $netbquery = "select * from accounts where netb='$netb'";
      $query = mysqli_query($con,$pnamequery);

      $netbcount = mysqli_num_rows($query);

      if($netbcount>0)
      {
        ?>
          <script>
          alert("Net Balance has been Taken!");
          </script>
        <?php
      }
      else
      {
          $insetquery = "insert into accounts(name, balance, credit, withdraw, arrears) values('$name','$netb','$credit','$withdraw','$arrears')";

          $iquery = mysqli_query($con, $insetquery);
          if($con)
              {
                  ?>
                  <script>
                      alert("Account added");
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
     <img src="../logo.png" align="left" height="65" width="150" border="1"><b><center>PHP RESTAURANT</center></b><br>

     <a href="account.php">Back</a>
</td>
</tr>
<tr>
<td>
<br>
<br>
<form method="POST" action="" onsubmit="return validate()">
<fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;"><b>Add Account</b></legend>

    <div class="pp1">

    <label>Name: </label>
    <input type="text" id="name" name="name" >
    &nbsp;
    				<span id="errnetb" style="color:red"></span> <!--For JS error message-->
    <br>
    <hr><br>
    <label>Net Balance : </label>
    <input type="text" id="netb" name="netb" >
    &nbsp;
    				<span id="errnetb" style="color:red"></span> <!--For JS error message-->
    <br>
    <hr><br>

    <label>Credit :</label>
    <input type="text" id="credit" name="credit" >
    &nbsp;
    				<span id="errcredit" style="color:red"></span> <!--For JS error message-->
    <br>
    <hr><br>

    <label>Withdraw : </label>
    <input type="text" name="withdraw" id="withdraw" >
    &nbsp;
    				<span id="errwithdraw" style="color:red"></span> <!--For JS error message-->
    <br>
    <hr><br>

    <label>Arrears : </label>
    <input type="text" name="arrears" id="arrears" >
    &nbsp;
            <span id="errarrears" style="color:red"></span> <!--For JS error message-->
    <br>
    <hr><br>

    </div>


    
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
        var netb = get("netb").value;
        var credit = get("credit").value;
        var withdraw = get("withdraw").value;
        var arrears = get("arrears").value;
        
        
        
      
        var validate = true;


        if(netb=="")
        {
            validate = false;
            get("errnetb").innerHTML="Please Enter Net Balance";
            get("netb").focus();
        }
        else
        {
            get("errnetb").innerHTML="";
        }




        if(credit=="")
        {
            validate = false;
            get("errcredit").innerHTML="Please Enter  Credit";
            get("credit").focus();
        }
        else
        {
            get("errcredit").innerHTML="";
        }


        if(withdraw=="")
        {
            validate = false;
            get("errwithdraw").innerHTML="Please Enter  Eithdraw";
            get("withdraw").focus();
        }
        else
        {
            get("errwithdraw").innerHTML="";
        }


        if(arrears=="")
        {
            validate = false;
            get("errarrears").innerHTML="Please Enter  Arrears";
            get("arrears").focus();
        }
        else
        {
            get("errarrears").innerHTML="";
        }





        return validate;

    }

	</script>











</body>


</html>

















