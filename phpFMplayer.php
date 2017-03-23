

<?php




	if(isset($_POST['play'])){
		
		echo "output:".$_POST['play'];
		
		if(isset($_POST['frequency']))//gets frequency 
		{
			$frequency=$_POST['frequency'];
			//$comm2.=" ".$frequency;//added frequency to bash command
			}
			
			
			
			if(isset($_FILES['music'])){ //get file uploaded
				
      $errors= array();
      $file_name = $_FILES['music']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['music']['tmp_name'];
      $file_type=$_FILES['music']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['music']['name'])));
      
      
      
      $expensions= array("mp3","wav");
      print_r($_FILES);
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a mp3 or wav file.";
      }
			
			
				 
      if(empty($errors)==true){
		  
		  
		 echo "<br>filename".$file_name."<br>";
		 
		  $save_file_location="./music/".$file_name;//music folder location
		  
		  
		  
         move_uploaded_file($file_tmp,$save_file_location);//move uploaded file from /tmp to ./music folder
          
         //echo shell_exec($convert_and_play_cmd);
		//echo "<br>"."sudo ./fileUpload.sh ".$frequency." ".$save_file_location."<br>";
         if($file_ext=="mp3")
         {
         echo "<br>shelloutput=".shell_exec("sudo ./play_mp3.sh ".$frequency." ".$save_file_location);
		}else if($file_ext=="wav")
				{
					
					 echo "<br>shelloutput=".shell_exec("sudo ./play_wav.sh ".$frequency." ".$save_file_location);
		
					}
         
         echo "Success";
      }else{
         print_r($errors);
      }
			
			
			
			
			
			
		}
		
	
		header("Location: ./index.html"); /* Redirect browser */
			//exit();
			
		
		}elseif(isset($_POST['stop'])){
			
			$comm3	= 'sudo bash ./stop.sh';
			
			
			$output = shell_exec($comm3);
			echo "output:".$output;
			header("Location: ./index.html"); /* Redirect browser */
			//exit();
			
			}
			elseif(isset($_POST['replay']))
			{
				
				
				
				if(isset($_POST['frequency']))//gets frequency 
			{
			$frequency=$_POST['frequency'];
			//$comm2.=" ".$frequency;//added frequency to bash command
			}else $frequency=95;
			
				$comm3	= 'sudo bash ./stop.sh';
			
			
			$output = shell_exec($comm3);//stop all current playing 
				
				
				
				
				echo $_POST['replay'];	
					
				$file_name=$_POST['replay'];
			 $file_ext=strtolower(end(explode('.',$file_name)));
					
			
			
			
			

		 
		  $saved_file_location="./music/".$file_name;//music folder location
		  
		  if( $file_ext=="mp3")
		  {
		 echo "<br>shelloutput=";
         shell_exec("sudo ./play_mp3.sh ".$frequency." ".$saved_file_location);//play selected song
		}else if ( $file_ext=="wav"){
			
			 shell_exec("sudo ./play_wav.sh ".$frequency." ".$saved_file_location);//play selected song
		
			
			
			}
			
			
			
		
				}
			
			header("Location: ./index.html"); /* Redirect browser */
			//exit();
			echo "hai";
?>


