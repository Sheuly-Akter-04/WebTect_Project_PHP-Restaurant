<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table border="3" align="center" width="65%;">
            <tr>
                <td align="right">
                 <img src="logo.png" align="left" height="65" width="150" border="1"><b><center>PHP RESTAURANT</center></b><br>

                    <a href="index.php">Home |</a>
                    <a href="login.php">Login |</a>
                    <a href="registration.php">Registration |</a>
                    <a href="aboutus.php">About us |</a>
                    <a href="contactus.php">Contract us </a>
                </td>
            </tr>
            <tr>
                <td>
                    <br>
                    <br>
                    <form  action="controller/registrationcheck.php" onsubmit="return validation()" method="post" >
                        <fieldset>

                            <legend style="font-family: Arial, Helvetica;"><b>Registration</b></legend>

                                <div >

                                <label>Name : </label>
                                <input type="text" name="name" id="name">
                                 <span style="color: red"  id="sn"></span><br>
                            <hr><br>

                                <label>Email :</label>
                                <input type="text"  name="email" id="email" >
                                <span style="color: red"  id="se"></span><br>
                                <hr><br>

                                <label>User Name : </label>
                                <input type="text" id="uname" name="username" >
                                <span style="color: red"  id="sun"></span><br>
                                <hr><br>

                                <label>Password :  </label>
                                <input type="password" id="pword" name="password" >
                                    <span style="color: red"  id="sp"></span><br>
                                <hr><br>

                                <label>Confirm Password : </label>
                                <input type="password" id="conpword" name="repass" >
                                <span style="color: red"  id="srp"></span><br>
                                <hr><br>

                                </div>

                                    <fieldset>

                                <legend style="font-family: Arial, Helvetica, sans-serif;">Gender</legend>

                                    <div class="pp2">

                                <input type="radio" name="gender" value="Male" id="gender">
                                <label class="male">Male</label>

                                <input type="radio" name="gender" value="Female" id="gender">
                                <label class="female">Female</label>

                                <input type="radio" name="gender" value="Other" id="gender">
                                 <label class="other">Other</label>
                                    <span style="color: red"  id="sg"></span>
                                </fieldset>

                                <hr>

                                </div>


                                <div class="pp3">

                                <fieldset>

                                <legend style="font-family: Arial, Helvetica, sans-serif;">Date Of Birth</legend>

                                <div class="pp2">

                            <input type="date" id="birthday" name="birthday" id="dob">
                            <span style="color: red"  id="sdob"></span>


                            </fieldset>


</div>


    <hr>

    <input type="submit" name="submit" value="Registration">
    
    <input type="reset" name="reset" id="reset" value="Reset"><br><br>
</fieldset>
</form>

<br>
<br>
</td>
</tr>
<tr>
<td>
<p align="center">Copyright &#169; 2021</p>
</td>
</tr>






<script>
        
        function validation(){
            /*document.getElementById('sn').innerHTML = "*enter name";*/
            var name = document.getElementById('name').value;
            var email = document.getElementById('uname').value;
            var username = document.getElementById('email').value;
            var password = document.getElementById('pword').value;
            
            var conpass = document.getElementById('conpword').value;
            

            if (name == "") {
                document.getElementById('sn').innerHTML = "*enter name";
                document.getElementById('se').innerHTML = "*enter email";
                document.getElementById('sun').innerHTML = "*enter username";
                document.getElementById('sp').innerHTML = "*enter password";
                 document.getElementById('srp').innerHTML = "*enter confirm password";
                 document.getElementById('sg').innerHTML = "*select gender";
                 document.getElementById('sdob').innerHTML = "*enter date of birth";
                
                return false;
            }
            
            if (password != conpass) {
                document.getElementById('sn').innerHTML = "";
                document.getElementById('se').innerHTML = "";
                document.getElementById('sun').innerHTML = "";
                document.getElementById('sp').innerHTML = "";
                 document.getElementById('srp').innerHTML = "";
                 document.getElementById('sg').innerHTML = "";
                 document.getElementById('sdob').innerHTML = "";
                document.getElementById('srp').innerHTML = "*password missmatch";
                
                return false;
            }
            /*
            if (name == "") {
                document.getElementById('sp').innerHTML = "*enter name";
                
                return false;
            }
            if (name == "") {
                document.getElementById('srp').innerHTML = "*enter name";
                
                return false;
            }
            if (name == "") {
                document.getElementById('sg').innerHTML = "*enter name";
                
                return false;
            }
            if (name == "") {
                document.getElementById('sdob').innerHTML = "*enter name";
                
                return false;
            }*/
            

            
        }
        
    
        
    </script>

</body>
</html>















