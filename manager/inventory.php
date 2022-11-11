<html>
<head>
        <title>Inventory</title>
    </head>
<style type="text/css">
table, th, td {
  padding: 5px;
}
table {
  border-spacing: 15px;
}
</style>

<body>
<table border="3" align="center" width=65%;">
<tr>
<td align="right">
     <img src="../logo.png" align="left" height="65" width="150" border="1"><b><center>PHP RESTAURANT</center></b> 
	 
	 

     <a href="managerdashboard.php">Home |</a>
    <a href="../index.php">Logout |</a>
    <a href="managerdashboard.php">Back </a>
</td>
</tr>
<tr>
<td>
<br>
<br>
&nbsp;&nbsp;&nbsp;
<legend><b><center><h2>Inventory </h2></center></b></legend><br>
<div class="info">
            <center><a href="addinventory.php"><input type="submit" name="submit" value="Add Inventory"></a></center>
            
        </div>
        
        <center>
            <table class="content-table">
                <thead>
                    <tr>
                        <td align="center"> User ID </td>
                        <td align="center"> Product Name </td>
                        <td align="center"> Have </td>
                        <td align="center"> Expire Date </td>
                        <td colspan="2" align="center"> Action </td>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        include '../dbcon.php';

                        $selectquery = "select * from inventory";
                        $query = mysqli_query($con,$selectquery);
                        $nums = mysqli_num_rows($query);

                        while($res = mysqli_fetch_array($query))
                        {
                            ?>
                            <tr>
                                <td><?php echo $res['id'] ?></td>
                                <td><?php echo $res['pname'] ?></td>
                                <td><?php echo $res['have'] ?></td>
                                <td><?php echo $res['exdate'] ?></td>
                                
                                <td><a href="editinventory.php?userid=<?php echo $res['id'] ?>"><input type="button" value="Edit"></a></td>
                                <td><a href="deleteinventory.php?userid=<?php echo $res['id'] ?>"><input type="button" value="Delete"></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                </tbody>
            </table>


            </center>



<br>
<br>
</td>
</tr>
<tr>
<table border="1"align="center" width="100%"height="10%"> 
<p align="center">Copyright &#169; 2021</p>
</td>
</tr>




<!-- <form methods="" action"">

<table>
    <tr>
    <td>Serial no :
    <select name="=serial no">
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="08" selected>01</option>
    </select>
    </td>
    </tr>
    <table>
    <tr>
    <td>Product name :
    <select name="product name">
    <option value="Flour">Flour</option>
    <option value="Rice">Rice</option>
    <option value="Beef">Beef</option>
    <option value="Sugar">Sugar</option>
    <option value="Oil">Oil</option>
    <option value="Nut">Nut</option>
    <option value="Potato">Potato</option>
    <option value="Salt" selected>Flour</option>
    </select>
    </td>
    </tr>
	
	
	
	<table>
    <tr>
    <td>Have :
    <select name="have">
    <option value="40 kg">40 kg</option>
    <option value="25 kg">25 kg</option>
    <option value="5 kg">5 kg</option>
    <option value="15 kg">15 kg</option>
    <option value="19 liter">19 liter</option>
    <option value="2 kg">2 kg</option>
    <option value="20 kg">20 kg</option>
    <option value="15 kg" selected>40 kg</option>
    </select>
    </td>
    </tr>
	
	
	<table>
    <tr>
    <td>Expire date :
    <select name="expire date">
    <option value="12-05-21">12-05-21</option>
    <option value="12-09-21">12-09-21</option>
    <option value="16-03-21">16-03-21</option>
    <option value="13-07-21">13-07-21</option>
    <option value="14-05-21">14-05-21</option>
    <option value="14-04-21">14-04-21</option>
    <option value="15-03-21">15-03-21</option>
    <option value="14-05-21" selected>12-05-21</option>
    </select>
    </td>
    </tr>
	
	
	
    <br>
    <tr>
    <td>
    <hr>
    <input type="submit" name="submit" value="Submit"><br>
    </td>            
    </tr>
<table border="1"align="center" width="30%"height="10%"> 
<tr align="center">
<td><b>Serial no</b></td>
<td><b>Product name</b></td>
<td><b>Have</b></td>
<td><b>Expir date</b></td>
<td><b>Update</b></td>



</tr>
<tr align="center">
<td>01</td>
<td>Flour</td>
<td>40 kg</td>
<td>12-05-21</td>
<td><a href="udate.php">Update</a></td>




</tr>

<tr align="center">
<td>02</td>
<td>Rice</td>
<td>25 kg</td>
<td>12-09-21</td>
<td><a href="udate.php">Update</a></td>


</tr>

<tr align="center">

<td>03</td>
<td>Beef</td>
<td>5 kg</td>
<td>16-03-21</td>
<td><a href="udate.php">Update</a></td>


</tr>

<tr align="center">
<td>04</td>
<td>Sugar</td>
<td>15 kg</td>
<td>14-05-21</td>
<td><a href="udate.php">Update</a></td>

</tr>

<tr align="center">
<td>05</td>
<td>Oil</td>
<td>19 liter</td>
<td>14-03-21</td>
<td><a href="udate.php">Update</a></td>
</tr>



<tr align="center">
<td>06</td>
<td>Nut</td>
<td>2 kg</td>
<td>14-04-21</td>
<td><a href="udate.php">Update</a></td>


</tr>

<tr align="center">
<td>07</td>
<td>Potato</td>
<td>20 kg</td>
<td>15-03-21</td>
<td><a href="udate.php">Update</a></td>


</tr>

<tr align="center">
<td>08</td>
<td>Salt</td>
<td>15 kg</td>
<td>14-05-21</td>
<td><a href="udate.php">Update</a></td>


</tr>

</td>

</td>




<br>
<br>
</td>
</tr>
<tr>
<table border="1"align="center" width="100%"height="10%"> 
<p align="center">Copyright &#169; 2021</p>
</td>
</tr>
-->

</body>


</html>









































