<html>
<head>
    
    <title>Staff Information</title>
</head>

<style type="text/css">
table, th, td {
  padding: 5px;
}
table {
  border-spacing: 15px;
}
</style>
<body>
<table border="3" align="center" width=65%;">
<tr>
<td align="right">
     <img src="../logo.png" align="left" height="65" width="150" border="1"><b><center>PHP RESTAURANT</center></b> 
	 
	 

     <a href="managerdashboard.php">Home |</a>
     <a href="../index.php">Logout |</a>
     <a href="managerdashboard.php">Back </a>
</td>
</tr>
<tr>
<td>
<br>
<br>
&nbsp;&nbsp;&nbsp;

<legend><b><center><h2>Staff Information </h2></center></b></legend><br>
<div class="info">
            <center><a href="addstaff.php"><input type="submit" name="submit" value="Add Staff"></a></center><br>
            
        </div>
<center>
            <table border="1" class="content-table">
                <thead>
                    <tr>
                        <td align="center"> User ID </td>
                        <td align="center"> Full Name </td>
                        <td align="center"> User Name </td>
                        <td align="center"> Email </td>
                        <td align="center"> Gender </td>
                        <td align="center"> Date Of Birth </td>
                        <td align="center"> User Type </td>
                        <td colspan="2" align="center"> Action </td>
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
                                <td><a href="updateadmin.php?userid=<?php echo $res['userid'] ?>"><input type="button" value="Edit"></a></td>
                                <td><a href="deleteadmin.php?userid=<?php echo $res['userid'] ?>"><input type="button" value="Delete"></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                </tbody>
            </table>


            </center>



<br>
<br>
</td>
</tr>
<tr>
<table border="1"align="center" width="100%"height="10%"> 
<p align="center">Copyright &#169; 2021</p>
</td>
</tr>

</body>


</html>









































