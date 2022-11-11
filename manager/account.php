<html>
<head>
		<title>Account</title>
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
     <img src="../logo.png" align="left" height="75" width="195" border="1"><b><center>PHP RESTAURANT</center></b> 
	
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
<legend><b><center><h2>Account</h2></center></b></legend>

<div class="info">
            <center><a href="addaccount.php"><input type="submit" name="submit" value="Add Account"></a></center>
            
        </div>
        
        <center>
            <table class="content-table">
                <thead>
                    <tr>
                        <td align="center"> User ID </td>
                        <td align="center"> Name </td>
                        <td align="center"> Net Balance </td>
                        <td align="center"> Credit </td>
                        <td align="center"> Withdraw </td>
                        <td align="center">Arrears </td>
                        <td colspan="2" align="center"> Action </td>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        include '../dbcon.php';

                        $selectquery = "select * from accounts";
                        $query = mysqli_query($con,$selectquery);
                        $nums = mysqli_num_rows($query);

                        while($res = mysqli_fetch_array($query))
                        {
                            ?>
                            <tr>
                                <td><?php echo $res['userid'] ?></td>
                                <td><?php echo $res['name'] ?></td>
                                <td><?php echo $res['balance'] ?></td>
                                <td><?php echo $res['credit'] ?></td>
                                <td><?php echo $res['withdraw'] ?></td>
                                <td><?php echo $res['arrears'] ?></td>
                                
                                <td><a href="editaccount.php?userid=<?php echo $res['userid'] ?>"><input type="button" value="Edit"></a></td>
                                <td><a href="deleteaccount.php?userid=<?php echo $res['userid'] ?>"><input type="button" value="Delete"></a></td>
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




<!-- <table border="1"align="center" width="30%"height="10%"> 

<tr align="center">
<td><b>Date</b></td>
<td><b>Current cash</b></td>
<td><b>Supplier payout</b></td>
<td><b>Delivery payout</b></td>
<td><b>Total pending amount</b></td>
<td><b>S-pending amount</b></td>
<td><b>D-pending amount</b></td>
<td><b>Net profit</b></td>
<td><b>Net loss</b></td>
<td><b>Update</b></td>


</tr>
<tr align="center">
<td>12-03-21</td>
<td>18000</td>
<td>3000</td>
<td>2000</td>
<td>5000</td>
<td>1500</td>
<td>1350</td>
<td>2000</td>
<td>980</td>
<td><a href="Update.php">Update</a></td>

</tr>

<tr align="center">
<td>13-03-21</td>
<td>16000</td>
<td>2501</td>
<td>1700</td>
<td>5100</td>
<td>1190</td>
<td>800</td>
<td>1590</td>
<td>700</td>
<td><a href="Update.php">Update</a></td>

</tr>

<tr align="center">

<td>14-03-21</td>
<td>20000</td>
<td>2200</td>
<td>2000</td>
<td>1900</td>
<td>5800</td>
<td>1050</td>
<td>1700</td>
<td>500</td>
<td><a href="Update.php">Update</a></td>

</tr>

<tr align="center">
<td>25000</td>
<td>3600</td>
<td>2700</td>
<td>1700</td>
<td>3000</td>
<td>780</td>
<td>980</td>
<td>5000</td>
<td>1000</td>
<td><a href="Update.php">Update</a></td>

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









































