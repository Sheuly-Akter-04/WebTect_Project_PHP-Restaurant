<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<body>
<table border="1" align="center" width="100%">
		<tr>
			<td colspan="3">
				<center><img src="D.jpg" height="100px" width="150px">
<table  align="right"  ><br> Change Password</center>
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
<form method="POST">
	<center>
	<fieldset>
			<legend>Change Password</legend>

			USERNAME:<input id="text" type="text" name="user_name"><br><br>
			NEW-PASSWORD: <input id="text" type="password" name="password"><br><br>
			RE-PASSWORD: <input id="text" type="password" name="repass"><br><br>

			<input id="button" type="submit" name="update" value="Update">

			
		</fieldset>
		</center>
</form>
</td>
         <tr>
			<td colspan="3" align="center" height="30px">
				Copyright@2021
			</td>
		</tr>
	</table>


</body>
</html>
<?php
if($_POST['update'])
{
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$repass = $_POST['repass'];

	$query = "UPDATE multilog SET user_name = '$user_name',password = '$password',repass = '$repass' WHERE user_name = '$user_name'";
	$result = mysqli_query($con,$query);

	if($result)
	{
		echo "<script>alert('Password Changed.')</script>";
	}
	else
	{
		echo "<script>alert('Action Failed.')</script>";
	}
}
?>