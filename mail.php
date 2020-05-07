
<?php

	// include "db.php";
	$servername="localhost";
 $username="root";
$password="root";
$dbname="businessownerinfo";

$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed".$conn->connect_error);


} 
// Escape user inputs for security
/* $name = $mysqli->real_escape_string($_REQUEST['name']);
$message = $mysqli->real_escape_string($_REQUEST['message']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
 */

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
   
		   $sql="INSERT into contact(name,email, message) VALUES ('$name', '$email', '$message')";
   
   
		   if($conn->query($sql) === true){
			   echo "Records inserted successfully.";
		   } else{
			   echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
		   }
   
   
}


$conn->close();

?>