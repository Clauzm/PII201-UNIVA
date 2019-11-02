<?php

    $name = $_POST['username'];
    $useremail = $_POST['useremail'];
    $userpassword = $_POST['userpassword'];
   
    //echo $username."-".$useremail."-".$userpassword;

    $server = "localhost";
    $username = "root";
    $password = ""; 
    $database = "univa"; 

    $connection = mysqli_connect($server, $username, $password, $database);

    if ($connection) {
        //echo "You are connected";
        
        $sqlquery = "INSERT INTO users (username, useremail, userpassword) 
        VALUES ('$name', '$useremail', '$userpassword');";
        //print $sqlquery;

        $result = mysqli_query($connection, $sqlquery);

        if ($result) {
            echo "new user created successfully";
        } else {
            echo "something is wrong";
        }        

    } else {
        echo "You are NOT connected";
    }
    

?>