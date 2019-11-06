<?php 
		if(isset($_GET['editar'])){
			
			$editar_id = $_GET['editar']; 
			
			$consulta = "SELECT * FROM usuarios WHERE id='$editar_id'";
			$ejecutar = mysqli_query($connection, $consulta); 
			
			$fila=mysqli_fetch_array($ejecutar);
			
            $usuario = $fila['nombre'];
            $correo = $fila['correo'];
            $pass = $fila['pass'];
			
            }
    

?>

<br>

<form method="post" action="">
		<input type="text" name="nombre" value="<?php echo $usuario;?>"/>
        <input type="text" name="correo" value="<?php echo $correo ;?>"/>
		<input type="password" name="pass" value="<?php echo $pass;?>"/>	
		<input type="submit" name="actualizar" value="ACTUALIZAR DATOS"/>
	
</form>
	<?php 
	if(isset($_POST['actualizar'])){
	
        $actualizar_nombre = $_POST['nombre'];
        $actualizar_email = $_POST['correo'];
		$actualizar_password = $_POST['pass'];		
		
		$actualizar = "UPDATE usuarios SET nombre='$actualizar_nombre', correo='$actualizar_email', 
        pass='$actualizar_password' WHERE id='$editar_id'";
		
		$ejecutar = mysqli_query($connection, $actualizar);
	
		if($ejecutar){
		
		echo "<script>alert('Datos actualizados!')</script>";
		echo "<script>window.open('adminusuario.php','_self')</script>";
		}
	}
	
?> 