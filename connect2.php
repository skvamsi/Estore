<?php
$username=filter_input(INPUT_POST,'username');
$email=filter_input(INPUT_POST,'email');
$password=filter_input(INPUT_POST,'password');
if(!empty($username)){
	if(!empty($email)){
		if(!empty($password)){

		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="project";
		//create connection
		$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
						if(mysqli_connect_error()){
							   die('Connect Error('.mysqli_connect_errno().')'
							   .mysqli_connect_error());
							   }
						else{
							   $sql="INSERT INTO estore(username,email,password)
							   values('$username','$email','$password')";
							   if($conn->query($sql)){
							 	  echo "new record is inserted successfully";
							   }
							   else{
							  	 echo "Error:".$sql."<br>". $conn->error;
							   }
			  				 $conn->close();
			  			}

		}
		else{
		echo "password should not be empty";
		die();
		}
	}
	else{
		echo "email should not be empty";
		die();
	}
}
else{
   echo "username should not be empty";
   die();
 }
   
?>
