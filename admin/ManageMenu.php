<?php 
session_start();

	//include("connection.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$code = $_POST['code'];
		$item = $_POST['item'];
		$p1 = $_POST['p1'];
		$drink = $_POST['drink'];
		$p2 = $_POST['p2'];
		

		if(!empty($code) && !empty($item) && !empty($p1) && !empty($drink) && !empty($p2))
		{

			//save to database
			//$user_id = random_num(20);
			$query = "insert into menu (code,item,p1,drink,p2) values ('$code','$item','$p1','$drink','$p2')";

			mysqli_query($con, $query);

			header("Location: ManageMenu.php");
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
	<title>Manage Menu</title>
</head>
<body>
	<table border="1" align="center" width="100%">
		<tr>
			<td colspan="2">
             <center><img src="G.jpg" height="100px" width="150px">
<table  align="right"  ><br> This is a Restaurant Menu</center>
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
			<legend >Food Item Info</legend>
			 
			 <table>
				
						<tr>
						<td>Food Code</td>
						<td><input type="text" name="code">
						</td>
                         </tr>
                         <tr>
                         	<td>Food Item</td>
                         	<td><input type="radio" name="item" value="Fried-rice">
					    <label class="Fried-rice">Fried-rice</label>

					    <input type="radio" name="item" value="Vegitables">
					    <label class="Vegitables">Vegitables</label>

					    <input type="radio" name="item" value="Fried-chicken">
					    <label class="Fried-chicken">Fried-chicken</label>

					    <input type="radio" name="item" value="Chicken-curry">
					    <label class="Chicken-curry">Chicken-curry</label>

					    <input type="radio" name="item" value="Beef-curry">
					    <label class="Beef-curry">Beef-curry</label>

					    <input type="radio" name="item" value="Soup">
					    <label class="Soup">Soup</label>
						</td>
                         </tr>
                         <tr>
                         	<td>F. Price</td>
                         	<td><input type="text" name="p1"></td>
                         </tr>
                         <tr>
                         	<td>Drinks</td>
                         	<td><input type="radio" name="drink" value="Coca-cola">
					    <label class="Coca-cola">Coca-cola</label>

					    <input type="radio" name="drink" value="Pepsi">
					    <label class="Pepsi">Pepsi</label>

					    <input type="radio" name="drink" value="Diet-coke">
					    <label class="Diet-coke">Diet-coke</label>

					    <input type="radio" name="drink" value="Mountain-dew">
					    <label class="Chicken-curry">Chicken-curry</label>

					    <input type="radio" name="drink" value="Diet-pepsi">
					    <label class="Diet-pepsi">Diet-pepsi</label>

					    <input type="radio" name="drink" value="Sprite">
					    <label class="Sprite">Sprite</label>
						</td>
                         </tr>
                         <tr>
                         	<td>D. Price</td>
                         	<td><input type="text" name="p2"></td>
                         </tr>
						<td>
							<input type="submit" name="submit" value="Submit">
							<a href="ShowMList.php">Show</a>
							
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