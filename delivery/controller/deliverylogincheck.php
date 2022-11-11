<?php

	session_start();

	

		$username = $_GET['username'];
		$password = $_GET['password'];
		
		$user = ['username'=> $username, 'password'=> $password];
		$formdata = array(
			'username'=> $_GET["username"],
			'password'=> $_GET["password"]
			
		 );

		$userFile = fopen("../model/userdata.json", "r");
		$userData = fread($userFile, filesize('../model/userdata.json'));
		//$data = file_get_contents('../model/data.json');
		$existingdata[]= json_decode($userData, true);
      
		if($username == "" || $password == ""){
			echo "null input...";
		}else{

			foreach ($existingdata as $key => $value) {
				foreach ($value as $k => $v) {	
			 
			if($v['username'] == $_GET['username'] && $v['password'] == $_GET['password']){
				$_SESSION['flag'] = true;
				//print_r($value['username']);
								
				$_SESSION['current_user'] =$formdata;
				header('location: ../delivery/deliverymenu.php');
			}else{
				echo "invalid user, Please registration first";
				
			}
		  }
		 }	

		}
	


?>