<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/controlaccesostyle.css">
    <title>Inicio de sesión | Administrador | Café México</title>
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

    $correo = $_GET['correo'];
    $contrasena = $_GET['pass'];

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
                if ($correo == $row['correo'] && $contrasena == $row['pass']) {
                    echo "<a href='acciones.php'></a>";
                    echo '<div class="titulo"><h1>Bienvenido administrador</h1></div>';
                    echo '<div class="subtitulo"><h3>Ir a la página dónde quieres realizar cambios, selecciona una tarjeta 
                    te llevará ahí para que puedas generar las acciones.</h3></div>';               
                    echo "<table>
                          <tr>
                            <th><h2>Usuarios</th>                           
                            <th><h2>Inicio</th>
                            <th><h2>Productos</th>
                            <th><h2>Nosotros</th>
                            <th><h2>Ubicación</th>
                          </tr>
                          <tr>
                            <td><a href = 'adminusuario.php'</a> 
                            <img src='../img/usuario.png' alt='Usuarios'></td>
                            <td><a href = 'admininicio.php'</a> 
                            <img src='../img/inicioIndex.jpg' alt='Inicio'></td>
                            <td><a href = 'adminproductos.php'</a> 
                            <img src='../img/productos.png' alt='Productos'></td>
                            <td><a href = 'adminnosotros.php'</a> 
                            <img src='../img/nosotros.png' alt='Nosotros'></td>
                            <td><a href = 'adminubicacion.php'</a> 
                            <img src='../img/ubicacion.png' alt='Ubicación'></td>
                          </tr>";
                    break;
                } else {
                //echo "UPS! Error 002, you are not registered";
                echo "no conectado";
                echo "<a href='../html/login.html'><br><h3>Regresar</h3></a>";
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

