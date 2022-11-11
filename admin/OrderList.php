<?php 
session_start();

		include("connection.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$veg = $_POST['veg'];
		$q1 = $_POST['q1'];
		$pro = $_POST['pro'];
		$q2 = $_POST['q2'];
		$spi = $_POST['spi'];
		$q3 = $_POST['q3'];

		if(!empty($veg) && !empty($q1) && !empty($pro) && !empty($q2) && !empty($spi) && !empty($q3))
		{

			//save to database
			//$user_id = random_num(20);
			$query = "insert into orders (veg,q1,pro,q2,spi,q3) values ('$veg','$q1','$pro','$q2','$spi','$q3')";

			mysqli_query($con, $query);

			header("Location: OrderList.php");
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
	<title>Order List</title>
</head>
<body>
	<table border="1" align="center" width="100%">
		<tr>
			<td colspan="2">
             <center><img src="F.jpg" height="100px" width="150px">
<table  align="right"  ><br> This is an Order List</center>
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
			<legend >Raw Materials Info</legend>
			 
			 <table>
				
						<tr>
						<td>Vegitable</td>
						<td><input type="radio" name="veg" value="Potato">
					    <label class="Potato">Potato</label>

					    <input type="radio" name="veg" value="Carrot">
					    <label class="Carrot">Carrot</label>

					    <input type="radio" name="veg" value="Papaya">
					    <label class="Papaya">Papaya</label>

					    <input type="radio" name="veg" value="Capsicum">
					    <label class="Capsicum">Capsicum</label>

					    <input type="radio" name="veg" value="Cucumber">
					    <label class="Cucumber">Cucumber</label>

					    <input type="radio" name="veg" value="Lime">
					    <label class="Lime">Lime</label>

						</td>
                         </tr>
                         <tr>
                         	<td>Veg. Quantity</td>
                         	<td><input type="text" name="q1"></td>
                         </tr>
                         <tr>
						<td>Protine</td>
						<td><input type="radio" name="pro" value="Chicken">
					    <label class="Chicken">Chicken</label>

					    <input type="radio" name="pro" value="Beef">
					    <label class="Beef">Beef</label>

					    <input type="radio" name="pro" value="Mutton">
					    <label class="Mutton">Mutton</label>

					    <input type="radio" name="pro" value="Duck">
					    <label class="Duck">Duck</label>

					    <input type="radio" name="pro" value="Rui-fish">
					    <label class="Rui-fish">Rui-fish</label>

					    <input type="radio" name="pro" value="Prawn">
					    <label class="Prawn">Prawn</label>

						</td>
                         </tr>
                         <tr>
                         	<td>Pro. Quantity</td>
                         	<td><input type="text" name="q2"></td>
                         </tr>
                         <tr>
						<td>Spices</td>
						<td><input type="radio" name="spi" value="Chili-powder">
					    <label class="Chili-powder">Chili-powder</label>

					    <input type="radio" name="spi" value="Turmeric-powder">
					    <label class="Turmeric-powder">Turmeric-powder</label>

					    <input type="radio" name="spi" value="Garlic">
					    <label class="Garlic">Garlic</label>

					    <input type="radio" name="spi" value="Ginger">
					    <label class="Ginger">Ginger</label>

					    <input type="radio" name="spi" value="Garam-masala">
					    <label class="Garam-masala">Garam-masala</label>

					    <input type="radio" name="spi" value="Green cardamom">
					    <label class="Green cardamom">Green cardamom</label>

						</td>
                         </tr>
                         <tr>
                         	<td>Spi. Quantity</td>
                         	<td><input type="text" name="q3"></td>
                         </tr>
						<td>
							<input type="submit" name="submit" value="Submit">
							<a href="ShowOList.php">Show</a>
							
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



