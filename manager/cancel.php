
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validate()">
		<fieldset>
			<legend>Cancel</legend>
			<table>
				<tr>
					<td>Serial no :</td>
					<td><input type="text" id="Serialno" name="text" value="">
					&nbsp;
    				<span id="errSerialno" style="color:red"></span> <!--For JS error message-->
					</td>
				</tr>
				<tr>
					<td>Product name :</td>
					<td><input type="text" id="Productname" name="text" value="">
					&nbsp;
    				<span id="errProductname" style="color:red"></span> <!--For JS error message-->
					</td>
				</tr>

				<tr>
					<td>Price :</td>
					<td><input type="text" id="Price" name="text" value="">
					&nbsp;
    				<span id="errPrice" style="color:red"></span> <!--For JS error message-->
					</td>
				</tr>
				<tr>
					<td>Quantity :</td>
					<td><input type="text" id="Quantity" name="text" value="">
					&nbsp;
    				<span id="errQuantity" style="color:red"></span> <!--For JS error message-->
					</td>
				</tr>
				<tr>
					<td>Supplier name :</td>
					<td><input type="text" id="Suppliername" name="text" value="">
					&nbsp;
    				<span id="errSuppliername" style="color:red"></span> <!--For JS error message-->
					</td>
				</tr>
				<tr>
					<td>Delivery date:</td>
					<td><input type="text" id="Deliverydate" name="text" value="">
					&nbsp;
    				<span id="errDeliverydate" style="color:red"></span> <!--For JS error message-->
					</td>
				</tr>
				<tr>
					<td>Delivery time:</td>
					<td><input type="text" id="Deliverytime" name="text" value="">
					&nbsp;
    				<span id="errDeliverytime" style="color:red"></span> <!--For JS error message-->
					</td>
				</tr>
				<tr>
					<td>Action:</td>
					<td><input type="text" id="Action" name="text" value="">
					&nbsp;
    				<span id="errAction" style="color:red"></span> <!--For JS error message-->
					</td>
				</tr>
				
				
				<tr>
					<td></td>
					<td>
						<input type="submit" name="signup" value="Cencel"> 
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
        var Serialno = get("Serialno").value;
		 var Productname = get("Productname").value;
		 var Price = get("Price").value;
		 var Quantity = get("Quantity").value;
		 var Suppliername = get("Suppliername").value;
		 var Deliverydate = get("Deliverydate").value;
		 var Deliverytime = get("Deliverytime").value;
		 var Action = get("Action").value;
        
        
      
        var validate = true;


        if(Serialno=="")
        {
            validate = false;
            get("errSerialno").innerHTML="Please Enter  Serial no";
            get("Serialno").focus();
        }
        else
        {
            get("errSerialno").innerHTML="";
        }

		if(Productname=="")
        {
            validate = false;
            get("errProductname").innerHTML="Please Enter  Product name";
            get("Productname").focus();
        }
        else
        {
            get("errProductname").innerHTML="";
        }


		if(Price=="")
        {
            validate = false;
            get("errPrice").innerHTML="Please Enter  Price";
            get("Price").focus();
        }
        else
        {
            get("errPrice").innerHTML="";
        }




		if(Quantity=="")
        {
            validate = false;
            get("errQuantity").innerHTML="Please Enter  Quantity";
            get("Quantity").focus();
        }
        else
        {
            get("errQuantity").innerHTML="";
        }


		if(Suppliername=="")
        {
            validate = false;
            get("errSuppliername").innerHTML="Please Enter  Supplier name";
            get("Suppliername").focus();
        }
        else
        {
            get("errSuppliername").innerHTML="";
        }




		if(Deliverydate=="")
        {
            validate = false;
            get("errDeliverydate").innerHTML="Please Enter  Delivery date";
            get("Deliverydate").focus();
        }
        else
        {
            get("errDeliverydate").innerHTML="";
        }



		if(Deliverytime=="")
        {
            validate = false;
            get("errDeliverytime").innerHTML="Please Enter  Delivery time";
            get("Deliverytime").focus();
        }
        else
        {
            get("errDeliverytime").innerHTML="";
        }


		if(Action=="")
        {
            validate = false;
            get("errAction").innerHTML="Please Enter  Action";
            get("Action").focus();
        }
        else
        {
            get("errAction").innerHTML="";
        }







        return validate;

    }

	</script>



