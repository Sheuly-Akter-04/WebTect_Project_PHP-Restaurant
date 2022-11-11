<?php 
session_start();

//	include("connection.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$area = $_POST['area'];
		$vehicle = $_POST['vehicle'];
		$price = $_POST['price'];
		
		

		if(!empty($area) && !empty($vehicle) && !empty($price))
		{

			//save to database
			//$user_id = random_num(20);
			$query = "insert into service (area,vehicle,price) values ('$area','$vehicle','$price')";

			mysqli_query($con, $query);

			header("Location: ManageService.php");
			die;
		}else
		{
			echo "<script>alert('Please enter some valid information!')</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Manage Service</title>
</head>
<body>
	<table border="1" align="center" width="100%">
		<tr>
			<td colspan="2">
             <center><img src="H.jpg" height="100px" width="150px">
<table  align="right"  ><br> Managing Service Area</center>
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
		<fieldset >
			<legend >Manage Service Area</legend>
			 
			 <table>
				
                         <tr>
                         	<td>Service Area</td>
                         	<td><input type="radio" name="area" value="Inside-Dhaka">
					    <label class="Inside-Dhaka">Inside-Dhaka</label>

					    <input type="radio" name="area" value="Outside-Dhaka">
					    <label class="Outside-Dhaka">Outside-Dhaka</label>

						</td>
                         </tr>
                         <tr>
                         	<td>Service Vehicle</td>
                         	<td><input type="radio" name="vehicle" value="Bicycle">
					    <label class="Bicycle">Bicycle</label>

					    <input type="radio" name="vehicle" value="Motorcycle">
					    <label class="Motorcycle">Motorcycle</label>

					    <input type="radio" name="vehicle" value="Mini-van">
					    <label class="Mini-van">Mini-van</label>

							<tr>
                         	<td>Service Charge</td>
                         	<td><input type="text" name="price"></td>
                         </tr>
						<td>
							<input type="submit" name="submit" value="Submit">
							<a href="ShowSAList.php">Show</a>
							
						</td>
					</tr>
                     </fieldset>
                 </form>
                 </table>

</center>
</td>
         <tr>
			<td colspan="2" align="center" height="30px">
				Copyright@2021
			</td>
		</tr>
	</table>
</body>
</html>