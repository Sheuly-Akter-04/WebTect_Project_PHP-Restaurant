<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Change Password</title>
</head>

<body>
    <table border="3" align="center" width=65%;">
        <tr>
            <td align="left" colspan="3">
               <img src="logo.png" align="left" height="65" width="150" border="1"><b><center>PHP RESTAURANT</center></b>
                <div align="right">
                <a href="deliverymenu.php">Home</a>
                <a href="../index.php">Logout |</a>
                
                </div>
            </td>
        </tr>

hg
        <tr>
            <td align="center" rowspan="3" >
			<hr>
			<ul>
            PHP Delivery Co.
					
					</ul>
            </td>
            <td width="65%" rowspan="3">
               <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;"><b>CHANGE PASSWORD</b></legend>

    <div class="pp">

    <label>Current Password : </label>
    <input type="password" id="currpword" name="currpword" ><br><br>

    <label style="color: black;">New Password : </label>
    <input type="password" id="npword" name="npword" ><br><br>

    <label style="color: black;">Retype New Password : </label>
    <input type="password" id="Rnpword" name="Rnpword" ><br>

    </div>

    


    <hr><br>

    <input type="submit" name="submit" id="submit" value="Submit">

</fieldset>
</form>
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
	
</body>

</html>
