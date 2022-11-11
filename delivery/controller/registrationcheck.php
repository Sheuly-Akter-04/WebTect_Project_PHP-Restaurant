  
<?php
	session_start();

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$birthday = $_Post['birthday'];

		if($name == "" || $username == "" || $password == "" || $email == "" || $gender == "" || $birthday = ""){
			echo "null value found...";
		}else{
			if($password == $repass){

				$user = ['name' => $name, 'username'=> $username, 'password'=> $password, 'email'=>$email, 'gender'=>$gender, 'birthday'=>$birthday];
				$formdata = array(
					'name' => $_POST["name"],
					'username'=> $_POST["username"],
					'password'=> $_POST["password"],
					'email'=> $_POST["email"],
					'gender'=> $_POST["gender"],
					'birthday' =>$_post["birthday"]
					
				 );
				
				$existingdata = file_get_contents('../model/userdata.json');
				$tempJSONdata = json_decode($existingdata);
				$tempJSONdata[] =$formdata;
				//Convert updated array to JSON
				$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
				
				//write json data into data.json file
				if(file_put_contents("../model/userdata.json", $jsondata)) {
					 echo "Data successfully saved <br>";
				 }
				else 
					 echo "no data saved";
				
				$data = file_get_contents("../model/userdata.json");
				$mydata = json_decode($data);
				
				
				
				
				
						$_SESSION['username'] = '';
						$_SESSION['password'] = "";
						$_SESSION['name'] = "";
				
						echo "User Id is: " . $_SESSION['username'];
						echo "<br>";
						echo "Password is: " . $_SESSION['password'];
						echo "<br>";
						echo "Name is" .$_SESSION['name'];

			
				$_SESSION['current_user'] = $user;

				header('location: ../login.php');
			}else{
				echo "password & confirm password mismatch...";
			}
		}
	}


?>