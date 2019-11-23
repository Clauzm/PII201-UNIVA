<?php
require_once "../clases/Ubicacion.php";
require "../clases/Consulta.php";
require "../clases/Actualizar.php";

$consulta = new Consulta;
$ubicacion = new Ubicacion;
$query = "select * from ubicacion";
$ubicacion = $consulta -> getUbicacion($query);
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
if(isset($post['submit'])){
    $ubicacion -> setTexto($post['texto']);
    $ubicacion -> setImagen($post['file2']);
    $sql = "update ubicacion set texto1='".$ubicacion -> getTexto()."', imagenubicacion='../img/".$ubicacion -> getImagen()."' where idubicacion = 1;";
    $update = new Actualizar;
    $update -> actualizar($sql);    
}

?>

<!Doctype html>
<html>
    <head>
        <title>Administrador</title>
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
            <li style="display:inline;"><a href="../phpusuario/inicio.php">Inicio</a></li>
            <li style="display:inline;"><a href="productos.html">Productos</a></li>
            <li style="display:inline;"><a href="../phpusuario/nosotros.php">Nosotros</a></li>          
            <li style="display:inline;"><a href="ubicacion.html">Ubicación</a></li>
            <li style="display:inline;"><a href="contacto.html">Contacto</a></li>
            <li style="display:inline;"><a href="login.html">Login</a></li>
            </ul>
        </nav>
            <hr/>
        </div> 
       <div style="padding-top: 70px">
          <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
           <h2>Texto</h2>
           <textarea name="texto" id="" cols="76" rows="10" ><?php echo($ubicacion -> getTexto());?></textarea>
           <h2>Imagen</h2>
           <img src="<?php echo($ubicacion -> getImagen());?>" alt="" style="width: 500px;">
           <input type="file" name="file2" >
           <br><br>
           <button type="submit" name="submit" >Guardar</button>
           <br>
           </form>
       </div>
       <hr/> 
         <footer>
            <h5>2019 &COPY; Clauzm/Developer.</h5>
            <hr/> 
         </footer>
</html>