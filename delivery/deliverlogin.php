<html>


<body>
<table border="3" align="center" width=65%;">
<tr>
<td align="right">
     <img src="logo.png" align="left" height="65" width="150" border="1"><b><center>PHP RESTAURANT</center></b><br> 

     <a href="index.php">Home |</a>
<a href="registration.php">Registration |</a>
</td>
</tr>
<tr>
<td>
<br>
<br>
<form  action="" onsubmit="return validation()">
<fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;"><b>DELIVER TEAM LOGIN</b></legend>

    <div class="pp">

    <label>User Name : </label>
    <input type="text" id="name" name="username" >
    <span style="color: red"  id="errn"></span><br><br><br>


    <label>Password : </label>
    <input type="password" id="pass" name="password">
    <span style="color: red"  id="errp"></span> <br>
    
    </div>
    <span style="color: red"  id="inv"></span>

    <hr><br>

    <input type="checkbox" id="checkbox" name="checkbox" value="remember me">
    <label>Remember Me</label><br><br>

    <input type="submit" name="submit" id="submit" value="Login">
    
    <a href="forgetpass.php">Forgot Password</a>
<br><br>
</fieldset>
</form>


<br>
<br>

</a>
</td>
</tr>
<tr>
<td>
<p align="center">Copyright &#169; 2021</p>
</td>
</tr>
<script >
    function validation(){
            
            var username = document.getElementById('name').value;
            var password = document.getElementById('pass').value;

            if (username == "") {
                document.getElementById('errn').innerHTML = "*enter username";
                
                return false;
            }
            if (password == "") {
                document.getElementById('errn').innerHTML = "";
                document.getElementById('errp').innerHTML = "*enter password";
                return false;
            }

            if (username != "" || password != "" ) {
                const xhttp = new XMLHttpRequest();
                xhttp.open('GET','ajax.php?username='+username+'&&password='+password,true);
                xhttp.send();
                xhttp.onreadystatechange = function(){
                if (this.readyState == 4 && this.status ==200) {
                    
                    
                    text = this.responseText;
                    if (text == 'error') {
                        
                        document.getElementById('inv').innerHTML= "*User Not Found";
                        
                    }
                    else{
                        location.href = 'controller/deliverylogincheck.php?username='+username+'&&password='+password;
                        
                    }
                    
                }
            }
            return false;
        }


            
        }
</script>
</body>


</html>

















