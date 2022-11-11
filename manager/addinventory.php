<html>
<head>
<title>Add Inventory Page</title>
</head>
<body>
<?php 
    include '../dbcon.php';
    if(isset($_POST['submit']))
    {
      $pname = mysqli_real_escape_string($con,$_POST['pname']);
      $have = mysqli_real_escape_string($con,$_POST['have']);
      $exdate = mysqli_real_escape_string($con,$_POST['exdate']);

      $pnamequery = "select * from inventory where pname='$pname'";
      $query = mysqli_query($con,$pnamequery);

      $unamecount = mysqli_num_rows($query);

      if($pnamecount>0)
      {
        ?>
          <script>
          alert("Productname has been Taken!");
          </script>
        <?php
      }
      else
      {
          $insetquery = "insert into inventory(pname, have, exdate) values('$pname','$have','$exdate')";

          $iquery = mysqli_query($con, $insetquery);
          if($con)
              {
                  ?>
                  <script>
                      alert("Bingo! Inventory added");
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

     <a href="inventory.php">Back</a>
</td>
</tr>
<tr>
<td>
<br>
<br>
<form method="POST" action="" onsubmit="return validate()">
<fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;"><b>Add Delivery</b></legend>

    <div class="pp1">

    <label>Product Name : </label>
    <input type="text" id="pname" name="pname" >
    &nbsp;
    				<span id="errpname" style="color:red"></span> <!--For JS error message-->
    <br>
    <hr><br>

    <label>Have :</label>
    <input type="text" id="have" name="have" >
    &nbsp;
    				<span id="errhave" style="color:red"></span> <!--For JS error message-->
    <br>
    <hr><br>

    <label>Expire Date : </label>
    <input type="date" name="exdate" placeholder="mm-dd-yyyy" >
    &nbsp;
    				<span id="errexdate" style="color:red"></span> <!--For JS error message-->
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
        var pname = get("pname").value;
        var have = get("have").value;
        var exdate = get("exdate").value;
        
        
        
      
        var validate = true;


        if(pname=="")
        {
            validate = false;
            get("errpname").innerHTML="Please Enter Product Name";
            get("pname").focus();
        }
        else
        {
            get("errpname").innerHTML="";
        }




        if(have=="")
        {
            validate = false;
            get("errhave").innerHTML="Please Enter  Exist";
            get("have").focus();
        }
        else
        {
            get("errhave").innerHTML="";
        }


        if(exdate=="")
        {
            validate = false;
            get("errexdate").innerHTML="Please Enter  Expire Date ";
            get("exdate").focus();
        }
        else
        {
            get("errexdate").innerHTML="";
        }





        return validate;

    }

	</script>











</body>


</html>

















