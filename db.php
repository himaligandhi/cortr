<?php
$_servername="localhost";
$username="root";
$password="root";

//Create Connection
$conn=new mysqli($servername, $username, $password);
//Check connection

if($conn->connect_error){
    die("Connection Failed:". $conn->connect_error);

}

//Create databse
$sql="Create Database businessownerinfo";
if($conn->query($sql)===True){
    echo "Database created Successfully";

}
else{
    echo"Error creating Database". $conn->error;
}

$conn->close();
?>