<?php 
require_once "../clases/Ubicacion.php";
require "../clases/Consulta.php";

$ubicacion = new Ubicacion;
$consulta = new Consulta;
$query = "select * from ubicacion;";
$ubicacion = $consulta -> getUbicacion($query);

?>

<!DOCTYPE hmtl>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Café México - Jalisco, México.</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../CSS/ubicacionstyle.css">
    <script src='main.js'></script>
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
            <li style="display:inline;"><a href="../inicio.html">Inicio</a></li>
            <li style="display:inline;"><a href="productos.html">Productos</a></li>
            <li style="display:inline;"><a href="nosotros.php">Nosotros</a></li>          
            <li style="display:inline;"><a href="ubicacion.html">Ubicación</a></li>
            <li style="display:inline;"><a href="contacto.html">Contacto</a></li>
            <li style="display:inline;"><a href="login.html">Login</a></li>
            </ul>
        </nav>
            <hr/>
        </div> 
        <article>
            <div><img style = "padding-left: 350px" src="<?php echo($ubicacion -> getImagen());?>"></div>
            <p style = "padding-left: 300px"><?php echo($ubicacion -> getTexto());?></p>
         </article> 
        <hr/> 
         <footer>
            <h5>2019 &COPY; Clauzm/Developer.</h5>
            <hr/> 
         </footer>
    </body>
</html>
