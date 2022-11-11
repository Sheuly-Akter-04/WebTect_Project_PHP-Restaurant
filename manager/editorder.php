<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Edit Order Profile</title>
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
<form method="POST" action="">
<?php

            include '../dbcon.php';

            $id = $_GET['userid'];
            $selectquery = "select * from order where userid='$id'";
            $newquery = mysqli_query($con,$selectquery);
            $result = mysqli_fetch_assoc($newquery);
        
            if(isset($_POST['submit']))
            {
            
            $id = $_GET['userid'];
            $pname = mysqli_real_escape_string($con,$_POST['pname']);
            $price = mysqli_real_escape_string($con,$_POST['price']);
            $quantity = mysqli_real_escape_string($con,$_POST['quantity']);
            $sname = mysqli_real_escape_string($con,$_POST['sname']);
            $ddate = mysqli_real_escape_string($con,$_POST['ddate']);
            $dtime = mysqli_real_escape_string($con,$_POST['dtime']);
            

            $updatequery = "update order set userid=$id, pname='$pname', price='$price', quantity='$quantity', sname='$sname', ddate='$ddate', dtime='$dtime'    where userid=$id";
            $query = mysqli_query($con,$updatequery);
            
            if($query)
            {
                ?>
                    <script>
                        alert('Update Complete!');
                    </script>
                <?php
                header('location:managerdashboard.php');
            }
            else
            {
                ?>
                    <script>
                        alert('Update Incomplete! DO it Again');
                    </script>
                <?php
            }

            }
        ?>
    <table border="3" align="center" width=65%;">
        <tr>
            <td align="left" colspan="3">
                <img src="logo.png" align="left" height="75" width="250" border="1"><b><center>PHP RESTAURANT</center></b> 
                <div align="right">
                <a href="managerdashboard.php">Home |</a>
                <a href="../index.php">Logout |</a>
                <a href="oderlist.php">Back </a>
                
                </div>
            </td>
        </tr>


        <tr>
            <td width="65%" rowspan="3">
                <form method="post" action="">
              <fieldset>
                    <legend><b>EDIT ORDER</b></legend>
                        <table>
                        <tr>
                                <td>User ID : </td>
                                <td>
                                <input type="text" name="userid" value="User ID: <?php echo $result['userid'] ?>" disabled>
                                </td>
                        </tr>
                            <tr>
                                <td> Product name : </td>
                                <td>
                                <input type="text" name="pname" value="<?php echo $result['pname'] ?>">
                                </td>

                            </tr>
                            <tr>
                                <td>Price : </td>
                                <td>
                                <input type="text" name="price" value="<?php echo $result['price'] ?>">
                                </td>

                            </tr>
                            <tr>
                                <td>Quantity : </td>
                                <td>
                                <input type="text" name="quantity" value="<?php echo $result['quantity'] ?>">
                                </td>

                            </tr>

                            <tr>
                                <td>Supplier name : </td>
                                <td>
                                <input type="text" name="sname" value="<?php echo $result['sname'] ?>">
                                </td>

                            </tr>

                            <tr>
                                <td>Delivery date : </td>
                                <td>
                                <input type="text" name="ddate" value="<?php echo $result['ddate'] ?>">
                                </td>

                            </tr>

                            <tr>
                                <td>Delivery time : </td>
                                <td>
                                <input type="text" name="dtime" value="<?php echo $result['dtime'] ?>">
                                </td>

                            </tr>
                            
                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Edited">
                                    
                                </td>
                            </tr>

                        </table>
                    </form>
                </fieldset>
            </td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr>
            <td align="center" colspan="2" >
                Copyright &#169; 2021
            </td>
        </tr>
    </table>
</form>
</body>

</html>
