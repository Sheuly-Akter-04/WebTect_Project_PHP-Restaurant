<?php 
//		include_once('connection.php'); 
//		$query="select * from menu"; 
//		$result=mysqli_query($con,$query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Restaurant Menu </title> 
	</head> 
	<body>
	<table border="1" align="center" width="100%">
		<tr>
			<td colspan="3">
				<center><img src="G.jpg" height="100px" width="150px">
<table  align="right"  ><br> This is a Restaurant Menu </center>
	<tr>
			</td>
			</tr>
	</table>
</td>
</tr>
			</td>
		</tr>

		<tr>
			<td width="35%">
				<label><b><center>Menubar</center></b></label>
<hr>
				<table>	
				<tr>
					<td>
				<ul>
					<ol>
		<li><a href="admindashboard.php">Dashboard</a></li>
		<li><a href="adminProfile.php">View Profile</a></li>
		<li><a href="adcpass.php">Change Password</a></li>
		<li><a href="CreateUser.php">Create New User</a></li>
		<li><a href="userlist.php">View User List</a></li>
		<li><a href="OrderList.php">Order List</a></li>
		<li><a href="ManageMenu.php">Manage Menu</a></li>
		<li><a href="ManageService.php">Manage Service</a></li>
		<li><a href="logout.php">Logout</a></li>
</ol>
</ul>
</td>
</table>
			<td colspan="2"  height="190px">
				<center>
 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="6"><b> Food Items </b></th> 
		</tr> 
			  <th> Food Code </th>
			  <th> Food Item </th> 
			  <th> F.Price </th> 
			  <th> Drinks </th>
			  <th> D.Price </th> 
			  
			  
		</tr> 


		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['code']; ?></td> 
		<td><?php echo $rows['item']; ?></td> 
		<td><?php echo $rows['p1']; ?></td>
		<td><?php echo $rows['drink']; ?></td>
		<td><?php echo $rows['p2']; ?></td>
		
		</tr> 


	<?php 
               } 
          ?> 

	</table> 
	</center>
</td>
         <tr>
			<td colspan="3" align="center" height="30px">
				Copyright@2021
			</td>
		</tr>
	</table>


</body>
</html>