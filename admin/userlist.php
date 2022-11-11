<?php 
//	include_once('connection.php'); 
//	$query="select * from multilog"; 
//	$result=mysqli_query($con,$query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> User List </title> 
	</head> 
	<body>
	<table border="1" align="center" width="100%">
		<tr>
			<td colspan="3">
				<center><img src="E.png" height="100px" width="150px">
<table  align="right"  ><br> User List </center>
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
	<thead>
                    <tr>
                        <td align="center"> User ID </td>
                        <td align="center"> Full Name </td>
                        <td align="center"> User Name </td>
                        <td align="center"> Email </td>
                        <td align="center"> Gender </td>
                        <td align="center"> Date Of Birth </td>
						<td align="center"> User Type </td>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        include '../dbcon.php';
                        $selectquery = "select * from user";
                        $query = mysqli_query($con,$selectquery);
                        $nums = mysqli_num_rows($query);
                        while($res = mysqli_fetch_array($query))
                        {
                            ?>
                            <tr>
                                <td><?php echo $res['userid'] ?></td>
                                <td><?php echo $res['name'] ?></td>
                                <td><?php echo $res['username'] ?></td>
                                <td><?php echo $res['email'] ?></td>
                                <td><?php echo $res['gender'] ?></td>
                                <td><?php echo $res['dob'] ?></td>
                                <td><?php echo $res['role'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                </tbody>
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