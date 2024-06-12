<?php
error_reporting(E_ALL); error_reporting(-1); 
ini_set('error_reporting', E_ALL); 
$username=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
if(!empty($username)){
if(!empty($password)){
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="project";
//create connection
$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
           die('Connect Error('.mysqli_connect_errno().')'
           .mysqli_connect_error());
           }
           else{
           $sql="SELECT * FROM `estore` WHERE username='$username' and password='$password';";
        $result=  mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)){
        	echo "<script>document.location='index.html'</script>";
        }else{
        		echo "check your credentials";
			die();
        }
}
}
else{
echo "password should not be empty";
die();
}
}
else{
   echo "username should not be empty";
   die();
   }
   
?>
