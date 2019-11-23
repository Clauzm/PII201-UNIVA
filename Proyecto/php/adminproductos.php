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
    <?php

        $server = "localhost";
        $username = "root";
        $password = ""; 
        $database = "cafemexico"; 
    
        $connection = mysqli_connect($server, $username, $password, $database);
        
    ?>

    <form action="adminproductos.php" method="POST">
        <label for="Nombre"></label>
        <input type="text" name="bebidascalientes" placeholder="bebida caliente">
        <br><br>
        <input type="text" name="preciobebidascalientes" placeholder="precio bebida caliente">
        <br><br>
        <input type="text" name="bebidasfrias" placeholder="bebida fria">
        <br><br>
        <input type="text" name="preciobebidasfrias" placeholder="precio bebida fria">
        <br><br>
        <input type="text" name="platillos" placeholder="platillo">
        <br><br>
        <input type="text" name="precioplatillos" placeholder="precio platillo">
        <br><br>
        <input type="submit" name="insert" value="Registrar">
    </form>

    <?php

    if(isset($_POST['insert'])){
        $bebidacaliente = $_POST['bebidascalientes'];
        $preciobebidacaliente = $_POST['preciobebidascalientes'];
        $bebidafria = $_POST['bebidasfrias']; 
        $preciobebidafria = $_POST['preciobebidasfrias'];
        $platillo = $_POST['platillos'];
        $precioplatillo = $_POST['precioplatillos'];          

        $registrar = 
        "INSERT INTO productos (bebidascalientes, preciobebidascalientes, bebidasfrias, preciobebidasfrias, platillos, precioplatillos) 
        VALUES ('$bebidacaliente','$preciobebidacaliente','$bebidafria','$preciobebidafria','$platillo','$precioplatillo')";

        $ejecutar = mysqli_query($connection, $registrar);

        if($ejecutar){
            echo "<script>alert('El producto ha sido registrado!')</script>";
            echo "<script>window.open('adminproductos.php','_self')</script>";
        }

    }
    ?>

    <br   />

    <table width="500" border="1" style="background-color:#F9F9F9;">
          <tr>
            <th>id</th>
            <th>Café frio</th>                           
            <th>precio</th>
            <th>Café Caliente</th>
            <th>precio</th>
            <th>Platillo</th>
            <th>precio</th>
            <th>Editar</th>
            <th>Borrar</th>
          </tr>          

    <?php       

        $consulta = "SELECT * FROM productos";

        $ejecutar = mysqli_query($connection, $consulta);

        $i=0;

        while($fila = mysqli_fetch_array($ejecutar)){
            $id = $fila['idproductos'];
            $cafecaliente = $fila['bebidascalientes'];
            $preciocafecaliente = $fila['preciobebidascalientes'];
            $cafefrio = $fila['bebidasfrias'];
            $preciocafefrio = $fila['preciobebidasfrias'];
            $platillos = $fila['platillos'];
            $precioplatillos = $fila['precioplatillos'];

            $i++;
    ?>

        <tr aligne = "center">
            <td><?php echo $id; ?></td>
            <td><?php echo $cafecaliente; ?></td>
            <td><?php echo $preciocafecaliente; ?></td>
            <td><?php echo $cafefrio; ?></td>
            <td><?php echo $preciocafefrio; ?></td>
            <td><?php echo $platillos; ?></td>
            <td><?php echo $precioplatillos; ?></td>
            <td><a href="adminproductos.php?editar=<?php echo $id;?>">Editar</a></td>
            <td><a href="adminproductos.php?borrar=<?php echo $id;?>">Eliminar</a></td>

    <?php } ?>

    </table>

    <?php 

		    if(isset($_GET['editar'])){
			
			$editar_id = $_GET['editar']; 
			
			$consulta = "SELECT * FROM productos WHERE idproductos='$editar_id'";
            $ejecutar = mysqli_query($connection, $consulta); 

            $filauno=mysqli_fetch_array($ejecutar);

            $id = $filauno['idproductos'];
            $cafecaliente = $filauno['bebidascalientes'];
            $preciocafecaliente = $filauno['preciobebidascalientes'];
            $cafefrio = $filauno['bebidasfrias'];
            $preciocafefrio = $filauno['preciobebidasfrias'];
            $platillos = $filauno['platillos'];
            $precioplatillos = $filauno['precioplatillos'];
			
        }
    

?>

<br>

<form method="post" action="">
        <input type="text" name="bebidascalientes" value="<?php echo $cafecaliente;?>"/><br>
        <input type="text" name="preciobebidascalientes" value="<?php echo $preciocafecaliente ;?>"/><br>
		<input type="text" name="bebidasfrias" value="<?php echo $cafefrio;?>"/><br>
        <input type="text" name="preciobebidasfrias" value="<?php echo $preciocafefrio;?>"/><br>
        <input type="text" name="platillos" value="<?php echo $platillos ;?>"/><br>
		<input type="text" name="precioplatillos" value="<?php echo $precioplatillos;?>"/><br>	
		<input type="submit" name="actualizar" value="ACTUALIZAR DATOS"/>
	
</form>

	<?php 
	if(isset($_POST['actualizar'])){

        $cafecaliente = $_POST['bebidascalientes'];
        $actualizarpreciocafecaliente = $_POST['preciobebidascalientes'];
        $actualizarcafefrio = $_POST['bebidasfrias'];
        $actualizarpreciocafefrio = $_POST['preciobebidasfrias'];
        $actualizarplatillos = $_POST['platillos'];
        $actualizarprecioplatillos = $_POST['precioplatillos'];		
		
		$actualizar = "UPDATE productos SET bebidascalientes='$cafecaliente', 
        preciobebidascalientes='$actualizarpreciocafecaliente', 
        bebidasfrias='$actualizarcafefrio',
        preciobebidasfrias='$actualizarpreciocafefrio',
        platillos='$actualizarplatillos',
        precioplatillos='$actualizarprecioplatillos'
        WHERE idproductos='$editar_id'";
		
		$ejecutar = mysqli_query($connection, $actualizar);
	
		if($ejecutar){
		
		echo "<script>alert('Datos actualizados!')</script>";
		echo "<script>window.open('adminproductos.php','_self')</script>";
		}
	}
	
?> 

    <?php 
        if(isset($_GET['borrar'])){
        
        $borrar_id = $_GET['borrar'];
        
        $borrar = "DELETE FROM productos WHERE idproductos='$borrar_id'";
        
        $ejecutar = mysqli_query($connection,$borrar); 
            
            if($ejecutar){            
            echo "<script>alert('El producto ha sido borrado!')</script>";
            echo "<script>window.open('adminproductos.php','_self')</script>";
            }
        
        }
        
        ?>

</body>
</html>

