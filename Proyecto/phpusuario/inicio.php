<?php 
require_once "../clases/Inicio.php";
require "../clases/Consulta.php";

$inicio = new inicioAdmin;
$consulta = new Consulta;
$query = "select * from inicio;";
$inicio = $consulta -> getIndex($query);

?>

<!DOCTYPE hmtl>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Café México - Jalisco, México.</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../CSS/styleindex.css">
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
        <article>
            <div><img style = "float:right; padding-right:130px" src="<?php echo($inicio -> getImagen());?>"></div>
            <p><?php echo($inicio -> getTexto());?></p>
            <script>alert("Bienvenido a Café México")</script>
         <hr/> 
         </article> 
         <footer>
            <h5>2019 &COPY; Clauzm/Developer.</h5>
            <hr/> 
         </footer>
    </body>
</html>
