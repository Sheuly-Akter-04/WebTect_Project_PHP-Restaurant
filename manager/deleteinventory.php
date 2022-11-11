<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Delete Inventory Profile</title>
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
$selectquery = "select * from inventory where id='$id'";
$newquery = mysqli_query($con,$selectquery);
$result = mysqli_fetch_assoc($newquery);

if(isset($_POST['submit']))
{

$id = $_GET['userid'];
$pname = mysqli_real_escape_string($con,$_POST['pname']);
$have = mysqli_real_escape_string($con,$_POST['have']);
$exdate = mysqli_real_escape_string($con,$_POST['exdate']);

$updatequery = "delete from inventory where id=$id";
$query = mysqli_query($con,$updatequery);

if($query)
{
    ?>
        <script>
            alert('Delete Complete!');
        </script>
    <?php
    header('location:managerdashboard.php');
}
else
{
    ?>
        <script>
            alert('Delete Incomplete! DO it Again');
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
                <a href="inventory.php">Back </a>
                
                </div>
            </td>
        </tr>


        <tr>
            <td width="65%" rowspan="3">
                <form method="post" action="">
              <fieldset>
                    <legend><b>DELETE INVENTORY</b></legend>
                        <table>
                        <tr>
                                <td>User ID : </td>
                                <td>
                                <input type="text" name="userid" value="User ID: <?php echo $result['id'] ?>" disabled>
                                </td>
                        </tr>
                            <tr>
                                <td>Product Name : </td>
                                <td>
                                <input type="text" name="pname" value="<?php echo $result['pname'] ?>" disabled>
                                </td>

                            </tr>
                            <tr>
                                <td>Have : </td>
                                <td>
                                <input type="text" name="have" value="<?php echo $result['have'] ?>" disabled>
                                </td>

                            </tr>
                            
                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Delete">
                                    
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
