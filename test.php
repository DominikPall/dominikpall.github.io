<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vaiitest1";
 
// Create connection in mysqli
 
$conn = mysqli_connect($servername, $username, $password, $dbname);
 
//Check connection in mysqli
if(!$conn){
die("Error on the connection" .mysqli_error());
}
else
{
echo "Connected Sucessfully";
}
?>