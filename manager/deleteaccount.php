<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Delete Account Profile</title>
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
$selectquery = "select * from accounts where userid='$id'";
$newquery = mysqli_query($con,$selectquery);
$result = mysqli_fetch_assoc($newquery);

if(isset($_POST['submit']))
{

$id = $_GET['userid'];
$netb = mysqli_real_escape_string($con,$_POST['netb']);
$credit = mysqli_real_escape_string($con,$_POST['credit']);
$withdraw = mysqli_real_escape_string($con,$_POST['withdraw']);
$arrears = mysqli_real_escape_string($con,$_POST['arrears']);

$updatequery = "delete from accounts where userid=$id";
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
                <a href="account.php">Back </a>
                
                </div>
            </td>
        </tr>


        <tr>
            <td width="65%" rowspan="3">
                <form method="post" action="">
              <fieldset>
                    <legend><b>DELETE ACCOUNT</b></legend>
                        <table>
                        <tr>
                                <td>User ID : </td>
                                <td>
                                <input type="text" name="userid" value="User ID: <?php echo $result['userid'] ?>" disabled>
                                </td>
                        </tr>
                            <tr>
                                <td>Net Balance : </td>
                                <td>
                                <input type="text" name="netb" value="<?php echo $result['balance'] ?>" disabled>
                                </td>

                            </tr>
                            <tr>
                                <td>Credit : </td>
                                <td>
                                <input type="text" name="credit" value="<?php echo $result['credit'] ?>" disabled>
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
