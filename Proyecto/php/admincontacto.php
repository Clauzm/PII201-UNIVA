<?php  
require "../clases/Consulta.php";
require_once "../clases/Contacto.php";

$consulta = new Consulta;
$sql ="select * from contacto;";
$lista = $consulta -> getContacto($sql);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Café México - Jalisco, México.</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../CSS/formulariophp.css">
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
        <div class = "contacto">
            <p>Mensajes recibidos</p>
        </div>  
       <br><br>
       <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
           <table style= "margin-top: 1px;">
               <tr>
                   <th width="150">Nombre</th>
                   <th width="200">Email</th>
                   <th width="300">Comentario</th>
                   <th width="120">Fecha</th>
               </tr>

               <?php
                $contacto = new Contacto;
                foreach($lista as $contacto){
                echo("<tr>");
                echo("<td>". $contacto -> getNombre()."</td>");
                echo("<td>". $contacto -> getEmail()."</td>");
                echo("<td>". $contacto -> getComentario()."</td>");
                echo("<td>". $contacto -> getFecha()."</td>");
                echo("</tr>");
                }?>
                
           </table>
           <hr/> 
           </form>
         <footer>
            <div class = "pie">
            <h5>2019 &COPY; Clauzm/Developer.</h5>
            <hr/> 
            </div>
         </footer>
    </body>
</html>