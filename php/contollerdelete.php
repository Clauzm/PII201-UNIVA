<?php

$useremail = $_GET['useremail'];

$server = "localhost";
$username = "root";
$password = ""; 
$database = "univa"; 

$connection = mysqli_connect($server, $username, $password, $database);

if ($connection) {
    //echo "You are connected";

    $sqlquery = "DELETE FROM users WHERE useremail='$useremail'";
    $result = mysqli_query($connection, $sqlquery);    
  

} else {
    echo "You are NOT connected";
}
   

?>