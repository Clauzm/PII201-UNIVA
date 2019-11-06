<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin nosotros</title>
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
            <th>imagennos</th>
            <th>Editar</th>
          </tr>          

    <?php      
    
        
        $consulta = "SELECT * FROM nosotros";
        $ejecutar = mysqli_query($connection, $consulta);          

        $i=0;

        while($fila = mysqli_fetch_array($ejecutar)){
            $id = $fila['idnosotros'];
            $texto1 = $fila['texto1'];
            $imagennos = $fila['imagennos'];

            $i++;
    ?>

        <tr aligne = "center">
            <td><?php echo $id; ?></td>
            <td><?php echo $texto1; ?></td>
            <td><?php echo $imagennos; ?></td>
            <td><a href="adminnosotros.php?editar=<?php echo $id;?>">Editar</a></td>

    <?php } ?>

    </table>

    <?php 

        if(isset($_GET['editar'])){
					
		$editar_id = $_GET['editar']; 
		
		$consulta = "SELECT * FROM nosotros WHERE idnosotros='$editar_id'";
		$ejecutar = mysqli_query($connection, $consulta); 
		
		$fila=mysqli_fetch_array($ejecutar);
			
        $texto1 = $fila['texto1'];      
    
        }
?>

<br>

<form method="post" action="">
        <textarea name="texto1" id="" cols="70" rows="10" value="<?php echo $texto1;?>"></textarea><br><br>
		<input type="submit" name="actualizar" value="ACTUALIZAR DATOS"/>
	
</form>
	<?php 
	if(isset($_POST['actualizar'])){
	
        $actualizar_texto = $_POST['texto1'];        
		
		$actualizar = "UPDATE nosotros SET texto1='$actualizar_texto' WHERE idnosotros='$editar_id'";
		
		$ejecutar = mysqli_query($connection, $actualizar);
	
		if($ejecutar){
		
		echo "<script>alert('Datos actualizados!')</script>";
		echo "<script>window.open('adminnosotros.php','_self')</script>";
		}
	}
	
?> 
    
</body>
</html>