<?php

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

        $sqlquery = "SELECT * FROM users";
        $result = mysqli_query($connection, $sqlquery);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                //echo $row['username']."+".$row['userpassword'];
                if ($useremail == $row['useremail'] && $userpassword == $row['userpassword'] 
                && $userstatus == $row['userstatus']) {
                    echo "User connected";
                    break;
                } else {
                   //echo "UPS! Error 002, you are not registered";
                   echo "<a href='registerform.html'>Register Now </a>";
                   break;
                }                
            }
        } else {
            echo "UPS! Error 001, query vacioo";
        }
        

    } else {
        echo "You are NOT connected";
    }
    


?>