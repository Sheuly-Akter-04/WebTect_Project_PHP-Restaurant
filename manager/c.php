<html>
	<head>
		<title>Delivery preserve</title>
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
<legend><b><center>Delivery Preserve</center></b></legend><br>
<div class="info">
            <center><a href="adddelivery.php"><input type="submit" name="submit" value="Add Delivery"></a></center>
            
        </div>
		
        <center>
            <table class="content-table">
                <thead>
                    <tr>
                        <td align="center"> User ID </td>
                        <td align="center"> Full Name </td>
                        <td align="center"> User Name </td>
                        <td align="center"> Email </td>
                        <td align="center"> Phone </td>
                        <td align="center"> Address </td>
                        <td colspan="2" align="center"> Action </td>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        include '../dbcon.php';

                        $selectquery = "select * from delivery";
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
                                <td><?php echo $res['phone'] ?></td>
                                <td><?php echo $res['address'] ?></td>
                                <td><a href="updatedelivery.php?userid=<?php echo $res['userid'] ?>"><input type="button" value="Edit"></a></td>
                                <td><a href="deletedelivery.php?userid=<?php echo $res['userid'] ?>"><input type="button" value="Delete"></a></td>
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









































