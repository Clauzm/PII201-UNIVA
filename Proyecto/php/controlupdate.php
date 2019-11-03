<?php

    $texto1 = $_GET['texto1'];

    $server = "localhost";
    $username = "root";
    $password = ""; 
    $database = "cafemexico"; 

        $connection = mysqli_connect($server, $username, $password, $database);

            if ($connection) {
                //echo "You are connected";

                $sqlquery = "UPDATE inicio SET texto1 = '$texto1' WHERE idinicio=1";
                $result = mysqli_query($connection, $sqlquery); 
                
                if($result){
                    echo "Cambio guardado";
                    echo "<a href = ../inicio.html>Inicio</a>";
                }            

            } else {
                echo "You are NOT connected";
            }            

?>