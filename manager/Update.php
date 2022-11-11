
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validate()">
		<fieldset>
			<legend>UPDATE</legend>
			<table>
				<tr>
					<td>Date :</td>
					<td><input type="text" id="date" name="text" value="">  &nbsp;
    				<span id="errDate" style="color:red"></span> <!--For JS error message-->
					
					</td>
				</tr>
				<tr>
					<td>Current cash :</td>
					<td><input type="text" id="cash" name="text" value=""> &nbsp;
    				<span id="errCash" style="color:red"></span> <!--For JS error message-->
					
					
					</td>
				</tr>

				<tr>
					<td>Supplier payout :</td>
					<td><input type="text" id="spayout" name="text" value=""> &nbsp;
    				<span id="errspayout" style="color:red"></span> <!--For JS error message-->
					</td>
				</tr>
				<tr>
					<td>Delivery payout :</td>
					<td><input type="text" id="dpayout"  name="text" value="">&nbsp;
    				<span id="errdpayout" style="color:red"></span> <!--For JS error message--></td>
				</tr>
				<tr>
					<td>Total pending amount:</td>
					<td><input type="text" id="pendingAmount" name="text" value="">  &nbsp;
    				<span id="errpendingAmount" style="color:red"></span> <!--For JS error message--></td>
				</tr>
				<tr>
					<td>S- pending amount:</td>
					<td><input type="text" id="Spendingamount" name="text" value="">     &nbsp;
    				<span id="errSpendingamount" style="color:red"></span> <!--For JS error message--></td>
				</tr>
				<tr>
					<td>D- pending amount:</td>
					<td><input type="text" id="Dpendingamount" name="text" value="">    &nbsp;
    				<span id="errDpendingamount" style="color:red"></span> <!--For JS error message--></td>
				</tr>
				<tr>
					<td>Net profit:</td>
					<td><input type="text" id="Netprofit" name="text" value="">    &nbsp;
    				<span id="errNetprofit" style="color:red"></span> <!--For JS error message--></td>
				</tr>
				<tr>
					<td>Net loss:</td>
					<td><input type="text" id="Netloss" name="text" value="">   &nbsp;
    				<span id="errNetloss" style="color:red"></span> <!--For JS error message--></td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input type="submit" name="signup" value="Updated"> 
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
        var date = get("date").value;
		var cash = get("cash").value;
		var spayout = get("spayout").value;
		var dpayout = get("dpayout").value;
		var pendingAmount = get("pendingAmount").value;
		var Spendingamount = get("Spendingamount").value;
		var Dpendingamount = get("Dpendingamount").value;
		var Netprofit = get("Netprofit").value;
		var Netloss = get("Netloss").value;

        
        
      
        var validate = true;

        if(date=="")
        {
            validate = false;
            get("errDate").innerHTML="Please Enter Date";
            get("date").focus();
        }
        else
        {
           get("errDate").innerHTML="";
        }

		if(cash=="")
        {
            validate = false;
            get("errCash").innerHTML="Please Enter Current cash";
            get("cash").focus();
        }
        else
        {
           get("errCash").innerHTML="";
        }
        

		if(spayout=="")
        {
            validate = false;
            get("errspayout").innerHTML="Please Enter Supplier payout";
            get("spayout").focus();
        }
        else
        {
           get("errspayout").innerHTML="";
        }


		if(dpayout=="")
        {
            validate = false;
            get("errdpayout").innerHTML="Please Enter Delivery payout";
            get("dpayout").focus();
        }
        else
        {
           get("errdpayout").innerHTML="";
        }



		if(pendingAmount=="")
        {
            validate = false;
            get("errpendingAmount").innerHTML="Please Enter Total pending amount";
            get("pendingAmount").focus();
        }
        else
        {
           get("errpendingAmount").innerHTML="";
        }


		if(Spendingamount=="")
        {
            validate = false;
            get("errSpendingamount").innerHTML="Please Enter S- pending amount";
            get("Spendingamount").focus();
        }
        else
        {
           get("errSpendingamount").innerHTML="";
        }

		if(Dpendingamount=="")
        {
            validate = false;
            get("errDpendingamount").innerHTML="Please Enter D- pending amount";
            get("Dpendingamount").focus();
        }
        else
        {
           get("errDpendingamount").innerHTML="";
        }



		if(Netprofit=="")
        {
            validate = false;
            get("errNetprofit").innerHTML="Please Net profit";
            get("Netprofit").focus();
        }
        else
        {
           get("errNetprofit").innerHTML="";
        }


		if(Netloss=="")
        {
            validate = false;
            get("errNetloss").innerHTML="Please Net Loss";
            get("Netloss").focus();
        }
        else
        {
           get("errNetloss").innerHTML="";
        }







        return validate;

    }

	</script>