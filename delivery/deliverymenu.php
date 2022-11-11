<?php
	session_start();
?>
<html>


<body>
<table border="3" align="center" width=65%;">
<tr>
<td align="right">
  
 <img src="logo.png" align="left" height="65" width="150" border="1"><b><center>PHP RESTAURANT</center></b> 

	<a href="deliverymenu.php">Home</a>
<a href="../index.php">Logout</a>
</td>
</tr>
<tr>
<td>
<br>
<center>Welcome<b><?php echo $_SESSION['name']; ?></b>! and Your ID = <b><?php echo $_SESSION['userid']; ?></b> Have a nice day </center>
<br>
<p>Menu</p>
			<hr>
			<ul>
            <li> <a href="orderList.php">Order List</a></li>
            <li> <a href="neworders.php">New Orders</a></li>
            <li> <a href="Transport.php">Transport</a></li>
			<li><a href="contactreciver.php">Contact Suplier</a></li>
			<li><a href="contactreciver.php">Contact Rsciver</a></li>
			<li> <a href="deliverystatus.php">Delivery Status</a></li>
			<li> <a href="cancelorder.php">Cancel Order</a></li>
			<li> <a href="Payment.php">Payment</a></li>
           
					</ul>
			
<br>


</td>
</tr>
<tr>
<td>
<p align="center">Copyright &#169; 2021</p>
</td>
</tr>
</body>


</html>