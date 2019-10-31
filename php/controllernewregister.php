<?php

$name = $_GET['username'];
$useremail = $_GET['useremail'];
$userpassword = $_GET['userpassword'];
$userstatus = "Activo";

$server = "localhost";
$username = "root";
$password = ""; 
$database = "univa"; 

$connection = mysqli_connect($server, $username, $password, $database);

if ($connection) {
    //echo "You are connected";

    $sqlquery = "INSERT INTO users (username, useremail, userpassword)
    VALUES ('".$name."', '".$useremail."','".$userpassword."')";
    $result = mysqli_query($connection, $sqlquery);  

} else {
    echo "You are NOT connected";
}

    

?>