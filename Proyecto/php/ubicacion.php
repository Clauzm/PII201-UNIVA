<!DOCTYPE html>
<html>
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
          <li style="display:inline;"><a href="nosotros.html">Nosotros</a></li>          
          <li style="display:inline;"><a href="ubicacion.html">Ubicación</a></li>
          <li style="display:inline;"><a href="contacto.html">Contacto</a></li>
          <li style="display:inline;"><a href="login.html">Login</a></li>
          </ul>
          <hr/>
      </div> 
        </div>
        <article>

        <?php 

            if(isset($_GET['editar'])){
            include("adminubicacion.php");
            }

            if(isset($_GET['editar'])){
                        
            $editar_id = $_GET['editar']; 

            $consulta = "SELECT * FROM ubicacion WHERE idubicacion='$editar_id'";
            $ejecutar = mysqli_query($connection, $consulta); 

            $fila=mysqli_fetch_array($ejecutar);
                
            $texto1 = $fila['texto1']; 
            $texto2 = $fila['texto2'];  

            }
            ?>
             
            <div><img src="../img/mapaUbicacion.png"/></div>
            <p><?php echo $texto1;?></p>
            <p><?php echo $texto2;?></p> 

         <hr/>  
        </article> 
         <footer>
            <h5>2019 &COPY; Clauzm/Developer.</h5>
            <hr/> 
         </footer>
    </body>
</html>