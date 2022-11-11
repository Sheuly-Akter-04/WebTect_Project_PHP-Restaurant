<?php 
session_start();

//	include("connection.php");
//	include("functions.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Profile</title>
</head>
<body>
	<table border="1" align="center" width="100%">
		<tr>
			<td colspan="3">
				<center><img src="C.png" height="100px" width="150px">
<table  align="right"  ><br> THIS IS AN ADMIN PROFILE </center>
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
	<fieldset>
		<legend>ADMIN PROFILE</legend>

		<center>


<table align="center" border="1px" style="width:300px; line-height:40px;"> 
	<tr> 
		<th colspan="2"><b>Profile</b></th> 
		</tr>
		<td>NAME</td>
		<td><?php echo $_SESSION['name']; ?> </td></tr>
		<td>USERNAME</td>
		<td><?php echo $_SESSION['username']; ?> </td></tr>
		<td>E-MAIL</td>
		<td><?php echo $_SESSION['email']; ?> </td></tr>
		<td>USER TYPE</td>
		<td><?php echo $_SESSION['role']; ?> </td></tr>
	</table>

		
</fieldset>
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