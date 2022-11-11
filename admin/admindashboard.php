<?php 
session_start();

//	include("connection.php");
//	include("functions.php");
//  $user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
</head>
<body>
	<table border="1" align="center" width="100%">
		<tr>
			<td colspan="3">
				<center><img src="B.png" height="100px" width="150px">
<table  align="right"  ><br> THIS IS AN ADMIN PANEL,PLEASE PROCEED WITH CAUTION !!! </center>
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
		<legend>ADMIN DASHBOARD</legend>

<center>
Welcome <b><?php echo $_SESSION['name']; ?></b>! and Your ID = <b><?php echo $_SESSION['userid']; ?></b> Have a nice day
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