  
<?php
	session_start();

	if(isset($_POST['submit'])){

		$code = $_POST['code'];
		$item = $_POST['item'];
		$price = $_POST['price'];
		$vat = $_POST['vat'];

		if($code == "" || $item == "" || $price == "" || $vat == ""){
			echo "null value found...";
		}else{
			if($password == $repass){

				$user = ['code'=> $code, 'item'=> $item, 'price'=>$price, 'vat'=>$vat];
				$formdata = array(
					'code'=> $_POST["code"],
					'item'=> $_POST["item"],
					'price'=> $_POST["price"],
                    'vat'=> $_POST["vat"]
				 );
				
				$existingdata = file_get_contents('../model/odata.json');
				$tempJSONdata = json_decode($existingdata);
				$tempJSONdata[] =$formdata;
				//Convert updated array to JSON
				$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
				
				//write json data into data.json file
				if(file_put_contents("../model/odata.json", $jsondata)) {
					 echo "Data successfully saved <br>";
				 }
				else 
					 echo "no data saved";
				
				$data = file_get_contents("../model/odata.json");
				$mydata = json_decode($data);
				
				
				
				
				
						$_SESSION['username'] = '';
				
						echo "User Id is: " . $_SESSION['username'];
						
			
				$_SESSION['current_user'] = $user;

				header('location: ../admin/OrderList.php');
			}else{
				echo "Information Missing...";
			}
		}
	}


?>