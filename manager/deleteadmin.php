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
$selectquery = "select * from user where userid='$id'";
$newquery = mysqli_query($con,$selectquery);
$result = mysqli_fetch_assoc($newquery);

if(isset($_POST['submit']))
{

$id = $_GET['userid'];
$name = mysqli_real_escape_string($con,$_POST['name']);
$username = mysqli_real_escape_string($con,$_POST['username']);
$email = mysqli_real_escape_string($con,$_POST['email']);

$updatequery = "delete from user where userid=$id";
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
            alert('Update Incomplete! DO it Again');
        </script>
    <?php
}

}
?>
    <table border="3" align="center" width=65%;">
        <tr>
            <td align="left" colspan="3">
                <img src="../logo.png" align="left" height="75" width="190" border="1"><b><center>PHP RESTAURANT</center></b> 
                <div align="right">
                <a href="managerdashboard.php">Home |</a>
                <a href="../index.php">Logout |</a>
                <a href="manageinformation.php">Back </a>
                
                </div>
            </td>
        </tr>


        <tr>
            <td width="65%" rowspan="3">
                <form method="post" action="">
              <fieldset>
                    <legend><b>DELETE PROFILE</b></legend>
                        <table>
                        <tr>
                                <td>User ID : </td>
                                <td>
                                <input type="text" name="userid" value="User ID: <?php echo $result['userid'] ?>" disabled>
                                </td>
                        </tr>
                            <tr>
                                <td>Name : </td>
                                <td>
                                <input type="text" name="name" value="<?php echo $result['name'] ?>" disabled>
                                </td>

                            </tr>
                            <tr>
                                <td>User Name : </td>
                                <td>
                                <input type="text" name="username" value="<?php echo $result['username'] ?>" disabled>
                                </td>

                            </tr>
                            <tr>
                                <td>Email : </td>
                                <td>
                                <input type="text" name="email" value="<?php echo $result['email'] ?>" disabled>
                                </td>

                            </tr>
                            <tr>
                                <td>Gender : </td>
                                <td>
                                <input type="text" name="gender" value="<?php echo $result['gender'] ?>" disabled>
                                </td>

                            </tr>
                            <tr>
                                <td>Date of Birth : </td>
                                <td>
                                <input type="text" name="dob" value="<?php echo $result['dob'] ?>" disabled>
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
