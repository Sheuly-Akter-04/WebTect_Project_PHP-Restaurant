
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validate()">
		<fieldset>
			<legend>EDIT USER </legend>
			<table>
				<tr>
					<td>User name :</td>
					<td><input type="text" name="username" id="username" value="">
					&nbsp;
    				<span id="errName" style="color:red"></span> <!--For JS error message-->
					</td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input type="submit" name="signup" value="Edited"> 
						<a href="../managerdashboard.php">Back </a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>

	<script>
	  function get(id)
    {
        return document.getElementById(id);
    }
    function validate()
    {
        var name = get("username").value;
        
        
      
        var validate = true;
        if(name=="")
        {
            validate = false;
            get("errName").innerHTML="Please Enter User Name";
            get("username").focus();
        }
        else
        {
            get("errName").innerHTML="";
        }

        



        return validate;

    }

	</script>