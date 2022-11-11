  
<?php
	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$address = $_POST['address'];

		if($username == "" || $phone == "" || $email == "" || $address == ""){
			echo "null value found...";
		}else{
			if($password == $repass){

				$user = ['username'=> $username, 'phone'=> $phone, 'email'=>$email, 'address'=>$address];
				$formdata = array(
					'username'=> $_POST["name"],
					'phone'=> $_POST["phone"],
					'email'=> $_POST["email"],
                    'address'=> $_POST["address"]
				 );
				
				$existingdata = file_get_contents('../model/dtdata.json');
				$tempJSONdata = json_decode($existingdata);
				$tempJSONdata[] =$formdata;
				//Convert updated array to JSON
				$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
				
				//write json data into data.json file
				if(file_put_contents("../model/dtdata.json", $jsondata)) {
					 echo "Data successfully saved <br>";
				 }
				else 
					 echo "no data saved";
				
				$data = file_get_contents("../model/dtdata.json");
				$mydata = json_decode($data);
				
				
				
				
				
						$_SESSION['username'] = '';
				
						echo "User Id is: " . $_SESSION['username'];
						
			
				$_SESSION['current_user'] = $user;

				header('location: ../admin/DeliveryTeam.php');
			}else{
				echo "Information Missing...";
			}
		}
	}


?>