<html>
<head>
    
    <title>Order list</title>
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
<legend><b><center>Order list</center></b></legend><br>
<div class="info">
            <center><a href="addorder.php"><input type="submit" name="submit" value="Add Order"></a></center>
            
        </div>
<center>
            <table class="content-table">
                <thead>
                    <tr>
                        <td align="center"> Order ID </td>
                        <td align="center"> Order Name </td>
                        <td align="center"> Price </td>
                        <td align="center"> Quantity </td>
                        <td align="center"> Supplier Name </td>
                        <td align="center"> Delivery Date </td>
                        <td align="center"> Delivery Time </td>
                        <td colspan="2" align="center"> Action </td>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        include '../dbcon.php';
                        $selectquery = "select * from orderlist";
                        $query = mysqli_query($con,$selectquery);
                        $nums = mysqli_num_rows($query);
                        $nums = mysqli_num_rows($query);
                        while($res = mysqli_fetch_array($query))
                        {
                            ?>
                            <tr>
                                <td><?php echo $res['id'] ?></td>
                                <td><?php echo $res['name'] ?></td>
                                <td><?php echo $res['price'] ?></td>
                                <td><?php echo $res['quantity'] ?></td>
                                <td><?php echo $res['suppliername'] ?></td>
                                <td><?php echo $res['deliverydate'] ?></td>
                                <td><?php echo $res['deliverytime'] ?></td>
                                <td><a href="updateorder.php?userid=<?php echo $res['id'] ?>"><input type="button" value="Edit"></a></td>
                                <td><a href="deleteorder.php?userid=<?php echo $res['id'] ?>"><input type="button" value="Delete"></a></td>
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

</body>


</html>

