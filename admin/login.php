<?php 

session_start();

	include("connection.php");
	//include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from multilog where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password && $user_data['type'] === 'Admin')
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
					elseif ($user_data['password'] === $password && $user_data['type'] === 'Manager')
					 {
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index1.php");
						die;
					}
					elseif ($user_data['password'] === $password && $user_data['type'] === 'Supplier')
					 {
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index2.php");
						die;
					}
					elseif ($user_data['password'] === $password && $user_data['type'] === 'Delivery')
					 {
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index3.php");
						die;
					}
				}
			}
			
			echo "<script>alert('wrong username or password!')</script>";
		}else
		{
			echo "<script>alert('wrong username or password!')</script>";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
		<table border="1" align="center" width="100%">
		<tr>
			<td colspan="3">
				<center><img src="A.png" height="100px" width="150px">
<table  align="right"  ><br> PHP RESTAURENT</center>
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
			<form method="post">
				<center>
					<fieldset>
						<legend>LOGIN</legend>

			<label> USERNAME: </label> 
			<input id="text" type="text" name="user_name"><br><br>
			<label> PASSWORD: </label>
			<input id="text" type="password" name="password"><br><br>
			<input type="checkbox" ><span>Remember Me</span>
			<br>
			<br>

			<input id="button" type="submit" value="Login">
			<a href="ForgetPassword.php">Forget Password?</a>
			
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