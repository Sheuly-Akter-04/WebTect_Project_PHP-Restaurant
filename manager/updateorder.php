<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Edit Supplier Profile</title>
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
            $selectquery = "select * from orderlist where id='$id'";
            $newquery = mysqli_query($con,$selectquery);
            $result = mysqli_fetch_assoc($newquery);
        
            if(isset($_POST['submit']))
            {
            
            $id = $_GET['userid'];
            $name = mysqli_real_escape_string($con,$_POST['name']);
            $price = mysqli_real_escape_string($con,$_POST['price']);
            $quantity = mysqli_real_escape_string($con,$_POST['quantity']);
            $suppliername = mysqli_real_escape_string($con,$_POST['suppliername']);
            $deliverytime = mysqli_real_escape_string($con,$_POST['deliverytime']);
            $deliverydate = mysqli_real_escape_string($con,$_POST['deliverydate']);
            

            $updatequery = "update orderlist set id=$id, name='$name', price='$price', quantity='$quantity', suppliername='$suppliername', deliverydate='$deliverydate', deliverytime='$deliverytime' where id=$id";
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
                <img src="../logo.png" align="left" height="75" width="250" border="1"><b><center>PHP RESTAURANT</center></b> 
                <div align="right">
                <a href="managerdashboard.php">Home |</a>
                <a href="../index.php">Logout |</a>
                <a href="managerviewprofile.php">Back </a>
                
                </div>
            </td>
        </tr>


        <tr>
            <td width="65%" rowspan="3">
                <form method="post" action="">
              <fieldset>
                    <legend><b>EDIT Order</b></legend>
                        <table>
                        <tr>
                                <td>Order ID : </td>
                                <td>
                                <input type="text" name="id" value="Order ID: <?php echo $result['id'] ?>" disabled>
                                </td>
                        </tr>
                            <tr>
                                <td>Order Name : </td>
                                <td>
                                <input type="text" name="name" value="<?php echo $result['name'] ?>">
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
                                <td>Supplier Name : </td>
                                <td>
                                <input type="text" name="suppliername" value="<?php echo $result['suppliername'] ?>">
                                </td>

                            </tr>
                            <tr>
                                <td>Delivery Date: </td>
                                <td>
                                <input type="date" name="deliverydate" value="<?php echo $result['deliverydate'] ?>">
                                </td>

                            </tr>
                            <tr>
                                <td>Delivery Time : </td>
                                <td>
                                <input type="text" name="deliverytime" value="<?php echo $result['deliverytime'] ?>">
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Update">
                                    
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
