<?php
		


			   
          $username = $_GET['username'];
          $password = $_GET['password'];

          
          $user = ['username'=> $username, 'password'=> $password];
          $formdata = array(
               'username'=> $_GET["username"],
               'password'=> $_GET["password"]
               
           );

          $userFile = fopen("model/userdata.json", "r");
          $userData = fread($userFile, filesize('model/userdata.json'));
          
          $existingdata[]= json_decode($userData, true);
          

          $val = 0;
          
              foreach ($existingdata as $key => $value) {
                    foreach ($value as $k => $v) {     
                
               if($v['username'] == $_GET['username'] && $v['password'] == $_GET['password']){
                    $_SESSION['flag'] = true;
                    
                                        
                    $_SESSION['current_user'] =$formdata;
                   $val = 1;
               } 

          }
      
          
           }   
           if ($val == 1) {
                echo "corr";
           }
           else{
                    echo "error";
                    
               }

          
          
         
        	

 ?>