<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Edit Profile</title>
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
            if(isset($_POST['submit']))
            {
             
            $id = $_GET['userid'];
            $name = mysqli_real_escape_string($con,$_POST['name']);
            $username = mysqli_real_escape_string($con,$_POST['username']);
            $email = mysqli_real_escape_string($con,$_POST['email']);

            $updatequery = "update user set userid=$id, name='$name', username='$username', email='$email' where userid=$id";
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
                <a href="managerdashboard.php">Back </a>
                
                </div>
            </td>
        </tr>


        <tr>
            <td width="65%" rowspan="3">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"  onsubmit="return v6()">
              <fieldset>
                    <legend><b>EDIT PROFILE</b></legend>
                        <table>
                        <tr>
                                <td>User ID : </td>
                                <td>
                                <input type="text" name="userid" value="User ID: <?php echo $_SESSION['userid'] ?>" disabled>
                                </td>
                        </tr>
                            <tr>
                                <td>Name : </td>
                                <td>
                                <input type="text" name="name" id="name" value="<?php echo $_SESSION['name'] ?>">
                                </td>

                            </tr>
                            <tr>
                                <td>Email : </td>
                                <td>
                                <input type="text" name="email" id="email" value="<?php echo $_SESSION['email'] ?>">
                                </td>

                            </tr>
                            <tr>
                                <td>User Name : </td>
                                <td>
                                <input type="text" name="username" value="<?php echo $_SESSION['username'] ?>">
                                </td>

                            </tr>
                            <tr>
                                <td> Gender : </td>
                                <td>
                                <input type="text" name="gender" value="<?php echo $_SESSION['gender'] ?>" disabled>
                                </td>

                            </tr>
                            <tr>
                                <td>Date of Birth : </td>
                                <td>
                                <input type="text" name="date" value="<?php echo $_SESSION['dob'] ?>" disabled>
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







<script>
	  function get(id)
    {
        return document.getElementById(id);
    }

    function v6()
    {
        return false;
    }
    function validate()
    {
        //var name = get("name").value;
       // var email = get("email").value;
        
	
        
        
      
        //var validate = true;


        // if(name=="")
        // {
        //     validate = false;
        //    // get("errSerialno").innerHTML="Please Enter  Serial no";
        //     get("name").focus();
        // }
        // else
        // {
        //    // get("errSerialno").innerHTML="";
        // }

        // if(email=="")
        // {
        //     validate = false;
        //    // get("errSerialno").innerHTML="Please Enter  Serial no";
        //     get("email").focus();
        // }
        // else
        // {
        //    // get("errSerialno").innerHTML="";
        // }






        return false;

    }

	</script>








</body>

</html>
