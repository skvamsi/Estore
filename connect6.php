<?php
$firstname=filter_input(INPUT_POST,'fname');
$lastname=filter_input(INPUT_POST,'lname');
$idnumber=filter_input(INPUT_POST,'idnumber');
$country=filter_input(INPUT_POST,'country');
$city=filter_input(INPUT_POST,'city');
$dormnumber=filter_input(INPUT_POST,'dormnumber');
$mobile1=filter_input(INPUT_POST,'mobile1');
$mobile2=filter_input(INPUT_POST,'mobile2');
//echo $firstname.$mobile1."    ";
if(!empty($firstname)){
	if(!empty($lastname)){
		
		if(!empty($idnumber)){
		if(!empty($country)){
		if(!empty($city)){
		if(!empty($dormnumber)){
		if(!empty($mobile1)){
			if(!empty($mobile2)){

			
			$conn=new mysqli('localhost','root','','project1');

							if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
							else{
								   $sql="INSERT INTO `estore3`(`firstname`, `lastname`, `idnumber`, `country`, `city`,`dormnumber`, `mobile1`, `mobile2`) VALUES ('$firstname','$lastname','$idnumber','$country','$city','$dormnumber','$mobile1','$mobile2')";
								  
								   if($conn->query($sql)){
								 	  echo "<script>document.location='order2.html'</script>";
								   }
								   else{
								  	 echo "Error:".$sql."<br>". $conn->error;
								   }
				  				 $conn->close();
				  			}

			}
			else{
		echo "mobile2 should not be empty";
		die();
		}
		
	}
	else{
		echo "mobile1 should not be empty";
		die();
		}
	}
	else{
		echo "dormnumber should not be empty";
		die();
		}
	}
	else{
		echo "city should not be empty";
		die();
		}
	}
	else{
		echo "country should not be empty";
		die();
		}
	}
	else{
		echo "idnumber should not be empty";
		die();
	}
}
else{
   echo "lastname should not be empty";
   die();
 }
 }
else{
   echo "firstname should not be empty";
   die();
 }
   
?>
