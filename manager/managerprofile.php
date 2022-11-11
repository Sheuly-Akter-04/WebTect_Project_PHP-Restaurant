<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>View Profile</title>
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
    <table border="3" align="center" width=65%;">
        <tr>
            <td align="left" colspan="3">
                <img src="../logo.png" align="left" height="65" width="150" border="1"><b><center>PHP RESTAURANT</center></b> 
                <div align="right">
                <a href="managerdashboard.php">Home |</a>
                <a href="../index.php">Logout |</a>
                <a href="managerdashboard.php">Back </a>
                </div>
            </td>
        </tr>


        <tr>
            <td width="65%" rowspan="3">
               <fieldset>
               <legend><b>PROFILE</b></legend>
               <table>
                <tr>
                   <td>User ID : <?php echo $_SESSION['userid'] ?> </td>
                       <td></td>
                       <td></td>
                   </tr>
                   <tr>
                   <td>Name : <?php echo $_SESSION['name']; ?> </td>
                       <td></td>
                       <td></td>
                   </tr>
                   <tr>
                   <td>Email : <?php echo $_SESSION['email']; ?> </td>
                       <td></td>
                       <td></td>
                   </tr>
                   <tr>
                   <td>User Name : <?php echo $_SESSION['username']; ?> </td>
                       <td></td>
                       <td></td>
                   </tr>
                   <tr>
                   <td> Gender : <?php echo $_SESSION['gender']; ?> </td>
                       <td> </td>
                       <td></td>
                   </tr>
                   <tr>
                   <td>Date of Birth : <?php echo $_SESSION['dob']; ?>  </td>
                       
                       <td></td>
                    </tr>
                   <tr></tr>
                   <td>
                    <li><a href="editprofile.php">Edit Profile</a></li>
                    <li><a href="changepassword.php">Change Password</a></li>
                   </td>

                       <td></td>
                       <td></td>
                   </tr>

               </table>
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
