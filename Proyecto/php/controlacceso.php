<?php

    $usuario = $_GET['nombreusuario'];
    $contrasena = $_GET['contrasenausuario'];
    $estatus = "activo";

    $server = "localhost";
    $username = "root";
    $password = ""; 
    $database = "cafemexico"; 

    $connection = mysqli_connect($server, $username, $password, $database);

    if ($connection) {
        //echo "You are connected";

        $sqlquery = "SELECT * FROM usuarios";
        $result = mysqli_query($connection, $sqlquery);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                //echo $row['username']."+".$row['userpassword'];
                if ($usuario == $row['nombreusuario'] && $contrasena == $row['contrasenausuario'] 
                && $estatus == $row['estatususuario']) {
                    echo "User connected";
                    break;
                } else {
                   //echo "UPS! Error 002, you are not registered";
                   echo "no conectado";
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