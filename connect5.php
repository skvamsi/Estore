<?php
$firstname=filter_input(INPUT_POST,'fname');
$email=filter_input(INPUT_POST,'email');
$message=filter_input(INPUT_POST,'message');
if(!empty($firstname)){
	if(!empty($email)){
		if(!empty($message)){

		$host="localhost";
		$dbfirstname="root";
		$dbmessage="";
		$dbname="project1";
		//create connection
		$conn=new mysqli($host,$dbfirstname,$dbmessage,$dbname);
						if(mysqli_connect_error()){
							   die('Connect Error('.mysqli_connect_errno().')'
							   .mysqli_connect_error());
							   }
						else{
							   $sql="INSERT INTO `estore2`(`firstname`, `email`, `message`) VALUES ('$firstname','$email','$message')";
							   if($conn->query($sql)){
							 	  echo "<script>document.location='storing.html'</script>";
							   }
							   else{
							  	 echo "Error:".$sql."<br>". $conn->error;
							   }
			  				 $conn->close();
			  			}

		}
		else{
		echo "message should not be empty";
		die();
		}
	}
	else{
		echo "email should not be empty";
		die();
	}
}
else{
   echo "firstname should not be empty";
   die();
 }
   
?>
