<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forget Password</title>
</head>
<body>
<table border="1" align="center" width="100%">
		<tr>
			<td colspan="3">
				<center><img src="D.jpg" height="100px" width="150px">
<table  align="right"  ><br> Forget Password</center>
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
		<li><a href="login.php">LogIn</a></li>
	<li><a href="signup.php">Registration</a></li>
</ol>
</ul>
</td>
</table>
			<td colspan="2"  height="190px">
<form method="POST">
	<center>
	<fieldset>
			<legend>Forget Password</legend>

			E-MAIL: <input id="text" type="text" name="email"><br><br>
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
	$email = $_POST['email'];
	$password = $_POST['password'];
	$repass = $_POST['repass'];

	$query = "UPDATE multilog SET email = '$email',password = '$password',repass = '$repass' WHERE email = '$email'";
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