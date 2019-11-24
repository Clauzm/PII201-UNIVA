<?php

$server = "localhost";
$username = "root";
$password = ""; 
$database = "cafemexico"; 

$connection = mysqli_connect($server, $username, $password, $database);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Café México - Jalisco, México.</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../CSS/fomulariocontacto.css">
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
        <nav>         
            <div class="navlist">
            <ul>
            <li style="display:inline;"><a href="inicio.php">Inicio</a></li>
            <li style="display:inline;"><a href="productos.php">Productos</a></li>
            <li style="display:inline;"><a href="nosotros.php">Nosotros</a></li>          
            <li style="display:inline;"><a href="ubicacion.php">Ubicación</a></li>
            <li style="display:inline;"><a href="contacto.php">Contacto</a></li>
            <li style="display:inline;"><a href="../html/login.html">Login</a></li>
            </ul>
        </nav>
            <hr/>
        </div> 
        <div class = "contacto">
            <p>¿Te gustaría ser distribuidor de café mexicano?</p>
            <p>Contáctanos</p>
        </div>               
        <form action="contacto.php" method="POST">
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre">
            </div>
            <div>
                <label for="correo electrónico">Correo electrónico:</label>
                <input type="email" name="email">
            </div>
            <div>
                <label for="mensaje">Mensaje:</label>
                <textarea name="comentario" id="" cols="70" rows="10" ></textarea>
            </div>
            <br> 
            <div class="button"> 
                <input type="submit" name="insert" value="Enviar">
            </div>
        </form>
         <hr/> 
         <footer>
            <h5>2019 &COPY; Clauzm/Developer.</h5>
            <hr/> 
         </footer>
    </body>
</html>

<?php

if(isset($_POST['insert'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $comentario = $_POST['comentario'];        

    $registrar = "INSERT INTO contacto (nombre,email,comentario) VALUES ('$nombre','$email','$comentario')";

    $ejecutar = mysqli_query($connection, $registrar);

}
?>