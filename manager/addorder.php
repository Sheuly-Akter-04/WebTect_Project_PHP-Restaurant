<html>
<head>
<title>Add Order Page</title>
</head>
<body>
<?php 
    include '../dbcon.php';
    if(isset($_POST['submit']))
    {
      $name = mysqli_real_escape_string($con,$_POST['name']);
      $price = mysqli_real_escape_string($con,$_POST['price']);
      $quantity = mysqli_real_escape_string($con,$_POST['quantity']);
      $suppliername = mysqli_real_escape_string($con,$_POST['suppliername']);
      $deliverydate = mysqli_real_escape_string($con,$_POST['deliverydate']);
      $deliverytime = mysqli_real_escape_string($con,$_POST['deliverytime']);

      $netbquery = "select * from order where pname='$pname'";
      $query = mysqli_query($con,$pnamequery);

      $netbcount = mysqli_num_rows($query);

      if($netbcount>0)
      {
        ?>
          <script>
          alert("Product Name has been Taken!");
          </script>
        <?php
      }
      else
      {
          $insetquery = "insert into orderlist(name, price, quantity, suppliername, deliverydate, deliverytime) values('$name','$price','$quantity','$suppliername','$deliverydate','$deliverytime')";

          $iquery = mysqli_query($con, $insetquery);
          if($con)
              {
                  ?>
                  <script>
                      alert("Bingo! Order added");
                      </script>
                      <?php
                      header('location: managerdashboard.php');
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
     <img src="../logo.png" align="left" height="65" width="190" border="1"><b><center>PHP RESTAURANT</center></b><br>

     <a href="oderlist.php">Back</a>
</td>
</tr>
<tr>
<td>
<br>
<br>
<form method="POST" action="" onsubmit="return validate()">
<fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;"><b>Add Order</b></legend>

    <div class="pp1">

    <label>Product name : </label>
    <input type="text" name="name" required>
    &nbsp;
            <span id="errpname" style="color:red"></span> <!--For JS error message-->
    <br>
    <hr><br>

    <label>Price :</label>
    <input type="text" name="price" required>
    &nbsp;
            <span id="errprice" style="color:red"></span> <!--For JS error message-->
    <br>
    <hr><br>

    <label>Quantity : </label>
    <input type="text" name="quantity" required>
    &nbsp;
            <span id="errquantity" style="color:red"></span> <!--For JS error message-->
    <br>
    <hr><br>

    <label>Supplier name : </label>
    <input type="text" name="suppliername" id="suppliername" required>
    &nbsp;
            <span id="errsname" style="color:red"></span> <!--For JS error message-->
    <br>
    <hr><br>

    <label>Delivery date : </label>
    <input type="date" name="deliverydate" id="deliverydate" placeholder="dd/mm/yyyy" required> 
    &nbsp;
            <span id="errddate" style="color:red"></span> <!--For JS error message-->
    <br>
    <hr><br>

    <label>Delivery time : </label>
    <input type="text" name="deliverytime" id="deliverytime" required>
    &nbsp;
    &nbsp;
            <span id="errdtime" style="color:red"></span> <!--For JS error message-->
    <br>
    <hr><br>

    </div>


    
  
 


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
        var price = get("price").value;
        var quantity = get("quantity").value;
        var sname = get("sname").value;
        var ddate = get("ddate").value;
        var dtime = get("dtime").value;
        
        
        
      
        var validate = true;


        if(pname=="")
        {
            validate = false;
            get("errpname").innerHTML="Please Enter Product name";
            get("pname").focus();
        }
        else
        {
            get("errpname").innerHTML="";
        }




        if(price=="")
        {
            validate = false;
            get("errprice").innerHTML="Please Enter  Price";
            get("price").focus();
        }
        else
        {
            get("errprice").innerHTML="";
        }


        if(quantity=="")
        {
            validate = false;
            get("errquantity").innerHTML="Please Enter  Quantity";
            get("quantity").focus();
        }
        else
        {
            get("errquantity").innerHTML="";
        }


        if(sname=="")
        {
            validate = false;
            get("errsname").innerHTML="Please Enter  Supplier name";
            get("sname").focus();
        }
        else
        {
            get("errsname").innerHTML="";
        }


        if(ddate=="")
        {
            validate = false;
            get("errddate").innerHTML="Please Enter  Delivery date";
            get("ddate").focus();
        }
        else
        {
            get("errddate").innerHTML="";
        }

        if(dtime=="")
        {
            validate = false;
            get("errdtime").innerHTML="Please Enter  Delivery time";
            get("dtime").focus();
        }
        else
        {
            get("errdtime").innerHTML="";
        }





        return validate;

    }

  </script>











</body>


</html>

















