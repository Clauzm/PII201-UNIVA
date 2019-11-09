<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin ubicacion</title>
</head>
<body>
    <?php

        $server = "localhost";
        $username = "root";
        $password = ""; 
        $database = "cafemexico"; 

        $connection = mysqli_connect($server, $username, $password, $database);

    ?>

    <h3>Consulta</h3>

    <table width="500" border="1" style="background-color:#F9F9F9;">
          <tr>
            <th>Id</th>                                      
            <th>texto1</th>
            <th>texto2</th>           
            <th>Editar</th>
          </tr>          

    <?php      
    
        
        $consulta = "SELECT * FROM ubicacion";
        $ejecutar = mysqli_query($connection, $consulta);          

        $i=0;

        while($fila = mysqli_fetch_array($ejecutar)){
            $id = $fila['idubicacion'];
            $texto1 = $fila['texto1'];
            $texto2 = $fila['texto2'];

            $i++;
    ?>

        <tr aligne = "center">
            <td><?php echo $id; ?></td>
            <td><?php echo $texto1; ?></td>
            <td><?php echo $texto2; ?></td>
            <td><a href="adminubicacion.php?editar=<?php echo $id;?>">Editar</a></td>

    <?php } ?>

    </table>

    <?php 

        if(isset($_GET['editar'])){
					
		$editar_id = $_GET['editar']; 
		
		$consulta = "SELECT * FROM ubicacion WHERE idubicacion='$editar_id'";
		$ejecutar = mysqli_query($connection, $consulta); 
		
		$fila=mysqli_fetch_array($ejecutar);
			
        $texto1 = $fila['texto1']; 
        $texto2 = $fila['texto2'];  
    
        }
?>

<br>

    <form method="POST" action="">
            <h3>texto 1</h3>
            <textarea name="texto1" id="" cols="70" rows="10" value="<?php echo $texto1;?>"></textarea><br><br>
            <h3>texto 2</h3>
            <textarea name="texto2" id="" cols="70" rows="10" value="<?php echo $texto2;?>"></textarea><br><br>
            <input type="submit" name="actualizar" value="ACTUALIZAR DATOS"/>
        
    </form>

	<?php 
	if(isset($_POST['actualizar'])){
	
        $actualizar_texto1 = $_POST['texto1'];        
        $actualizar_texto2 = $_POST['texto2'];   
		
		$actualizar = "UPDATE ubicacion SET texto1='$actualizar_texto1', texto2='$actualizar_texto2' WHERE idubicacion='$editar_id'";
		
		$ejecutar = mysqli_query($connection, $actualizar);
	
		if($ejecutar){
		
		echo "<script>alert('Datos actualizados!')</script>";
		echo "<script>window.open('adminubicacion.php','_self')</script>";
		}
	}
	
?> 
    
</body>
</html>