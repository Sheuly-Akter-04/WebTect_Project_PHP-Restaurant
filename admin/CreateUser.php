<?php 
session_start();

//	include("connection.php");
//	include("functions.php");

/*
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name = $_POST['name'];
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];
		$type = $_POST['type'];

		if(!empty($name) && !empty($password) && !empty($type) && !is_numeric($name))
		{

			//save to database
			//$user_id = random_num(20);
			$query = "insert into multilog (name,user_name,password,repass,email,type) values ('$name','$user_name','$password','$repass','$email','$type')";

			mysqli_query($con, $query);

			header("Location: CreateUser.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}*/
	include '../dbcon.php';
    if(isset($_POST['submit']))
    {
      $role = mysqli_real_escape_string($con,$_POST['role']);
      $name = mysqli_real_escape_string($con,$_POST['name']);
      $username = mysqli_real_escape_string($con,$_POST['username']);
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $password = mysqli_real_escape_string($con,$_POST['password']);
      $repassword = mysqli_real_escape_string($con,$_POST['repassword']);
      $gender = mysqli_escape_string($con,$_POST['gender']);
      $dob = date('y-m-d', strtotime($_POST['date']));

      $usernamequery = "select * from user where username='$username'";
      $query = mysqli_query($con,$usernamequery);

      $unamecount = mysqli_num_rows($query);

      if($unamecount>0)
      {
        ?>
          <script>
          alert("Username has been Taken!");
          </script>
        <?php
      }
      else
      {
        if($password === $repassword)
        {
          $insetquery = "insert into user(name, username, email, password, repassword, gender, dob, role) values('$name','$username','$email','$password','$repassword', '$gender', '$dob', '$role')";

          $iquery = mysqli_query($con, $insetquery);
          if($con)
              {
                  ?>
                  <script>
                      alert("User Added!");
                      </script>
                      <?php
              }
              else
              {
                  ?>
                  <script>
                      alert("Something Wrong! DO it again. Thank you");
                      </script>
                      <?php
              }
        }else{
          echo "Password are not matching!";
        }
      }
    }


?>


<!DOCTYPE html>
<html>
<head>
	<title>Create New User</title>
</head>
<body>

	<table border="1" align="center" width="100%">
		<tr>
			<td colspan="3">
				<center><img src="I.png" height="100px" width="150px">
<table  align="right"  ><br> Create New User</center>
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
	
		
		<form method="post">
			<center>
					<fieldset>
						<legend>CREATE NEW USER</legend>

			<label> NAME: </label>
			<input id="text" type="text" name="name"><br><br>
			<label> USERNAME: </label>
			<input id="text" type="text" name="username"><br><br>
			<label> PASSWORD: </label>
			<input id="text" type="password" name="password"><br><br>
			<label> RE-PASSWORD: </label>
			<input id="text" type="password" name="repassword"><br><br>
			<label> E-MAIL: </label>
			<input id="text" type="email" name="email"><br><br>

			<div class="pp2">
			<Label>Gender: </Label>
			<input type="radio" name="gender" value="Male">
			<label class="male">Male</label>
			<input type="radio" name="gender" value="Female">
			<label class="female">Female</label>
			<input type="radio" name="gender" value="Other">
			<label class="other">Other</label>
			</div>
			<br>

			<label>Date Of Birth</label>
			<input type="date" name="date" id="dob" placeholder="dd/mm/yyyy"><br><br>

			<label> USER TYPE: </label>
			<select name="role" required>
			<option value="">------</option>
			<option value="admin">Admin </option>
			<option value="manager">Manager</option>
			<option value="supplier">Supplier</option>
			<option value="delivery">Delivery</option>
			<option value="normal">Normal</option>
		</select><br><br>

		<input type="submit" name="submit" value="Create">

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