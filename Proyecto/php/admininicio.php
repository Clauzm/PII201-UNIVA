<?php
require_once "../clases/Inicio.php";
require "../clases/Consulta.php";
require "../clases/Actualizar.php";

$consulta = new Consulta;
$inicio = new inicioAdmin;
$query = "select * from inicio";
$inicio = $consulta -> getIndex($query);
//Obtiene variables externas y las filtra
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
if(isset($post['submit'])){    
    $inicio -> setTexto($post['texto1']);
    $inicio -> setImagen($post['file']);
    $sql = "update inicio set texto1='".$inicio -> getTexto()."', imagen='../img/".$inicio -> getImagen()."' where idinicio = 1;";
    $update = new Actualizar;
    $update -> actualizar($sql);

    
}

?>

<!Doctype html>
<html>
    <head>
        <title>Administrador</title>
        <link rel="stylesheet" href="../CSS/styleindex.css">
        <script src="../js/myfunctions.js"></script>
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
            <li style="display:inline;"><a href="admininicio.php">Inicio</a></li>
            <li style="display:inline;"><a href="adminproductos.php">Productos</a></li>
            <li style="display:inline;"><a href="adminnosotros.php">Nosotros</a></li>          
            <li style="display:inline;"><a href="adminubicacion.php">Ubicación</a></li>
            <li style="display:inline;"><a href="admincontacto.php">Contacto</a></li>
            <li style="display:inline;"><a href="../html/login.html">Login</a></li>
            </ul>
        </nav>
        <hr/>
        </div>
       <div style="padding-top: 50px">
          <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
           <h2>Texto 1</h2>
           <textarea name="texto1" id="" cols="70" rows="10" ><?php echo($inicio -> getTexto());?></textarea>
           <br><br>
           <h2>Imagen</h2>
           <img src="<?php echo($inicio -> getImagen());?>" alt="" style="width: 500px;">
           <input type="file" name="file" >
           <br><br>
           <button onclick="update()" type="submit" name="submit" >Guardar</button>
           <br><br>
           </form>
       </div>
        <footer>
            <hr/>
            <h5>2019 &COPY; Clauzm/Developer.</h5>
            <hr/> 
        </footer>
    </body>
</html>