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
    <link rel="stylesheet" href="../CSS/tablestyles.css">
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
            <hr/>
        </div> 
        <article>
        <h2>Productos</h2>
          <table>
          <tr style= "background-color: burlywood; color:white">
                  <th>Café caliente</th>
                  <th>Precio</th>
                  <th>Café frío</th>
                  <th>Precio</th>
                  <th>Platillos</th>
                  <th>Precio</th>            
        </tr>
    <?php       

        $consulta = "SELECT * FROM productos";

        $ejecutar = mysqli_query($connection, $consulta);

        $i=0;

        while($fila = mysqli_fetch_array($ejecutar)){
            $cafecaliente = $fila['bebidascalientes'];
            $preciocafecaliente = $fila['preciobebidascalientes'];
            $cafefrio = $fila['bebidasfrias'];
            $preciocafefrio = $fila['preciobebidasfrias'];
            $platillos = $fila['platillos'];
            $precioplatillos = $fila['precioplatillos'];
            $imagen = $fila['imagen'];

            $i++;
    ?>

        <tr aligne = "center">
            <td><?php echo $cafecaliente; ?></td>
            <td><?php echo $preciocafecaliente; ?></td>
            <td><?php echo $cafefrio; ?></td>
            <td><?php echo $preciocafefrio; ?></td>
            <td><?php echo $platillos; ?></td>
            <td><?php echo $precioplatillos; ?></td>
    <?php } ?>
    </table>
         <footer style="padding-top: 70px;">
            <hr/>
            <h5>2019 &COPY; Clauzm/Developer.</h5>
            <hr/> 
         </footer>
    </body>
</html>

