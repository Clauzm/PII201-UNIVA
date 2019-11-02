<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/controlaccesostyle.css">
    <title>Document</title>
</head>
<body>
    <hr/>            
        <header>              
            <section>                
                <tr>
                    <td><img src="../img/cafeMexico.png" alt="Cafe Mexico"></td>
                    <td><h1 style="display:inline; margin-left: 130px;">El verdadero sabor del café</h1></td>                                                             
            </section>                   
        </header> 
    <hr/> 
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
                if ($usuario == 'claudia' && $contrasena == 'claudia' && $estatus == 'activo') {
                    echo '<div class="titulo"><h1>Bienvenido administrador</h1></div>';
                    echo '<div class="subtitulo"><h3>Ir a la página dónde quieres realizar cambios, selecciona una tarjeta 
                    te llevará ahí para que puedas generar las acciones.</h3></div>';               
                    echo '<table>
                          <tr>
                            <td><a href=../inicio.html>Inicio</a></td>
                          </tr>';
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
</body>
</html>

