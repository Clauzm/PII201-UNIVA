<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador de usuarios</title>
</head>
<body>
    <?php

        $server = "localhost";
        $username = "root";
        $password = ""; 
        $database = "cafemexico"; 
    
        $connection = mysqli_connect($server, $username, $password, $database);
        
    ?>

    <form action="adminusuario.php" method="POST">
        <label for="Nombre"></label>
        <input type="text" name="nombre" placeholder="nombre">
        <br><br>
        <input type="email" name="correo" placeholder="correo">
        <br><br>
        <input type="password" name="pass" placeholder="contraseña">
        <br><br>
        <input type="submit" name="insert" value="Registrar">
    </form>

    <?php

        if(isset($_POST['insert'])){
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $contrasena = $_POST['pass'];            

            $insertar = "INSERT INTO usuarios (nombre, correo, pass) VALUES ('$nombre','$correo','$contrasena')";

            $ejecutar = mysqli_query($connection, $insertar);

            if($ejecutar){
                echo "<script>alert('El usuario ha sido registrado!')</script>";
                echo "<script>window.open('adminusuario.php','_self')</script>";
            }

        }
    ?>

    <br   />

    <table width="500" border="1" style="background-color:#F9F9F9;">
          <tr>
            <th>Id</th>                           
            <th>Nombre</th>
            <th>Correo</th>
            <th>Password</th>
            <th>Editar</th>
            <th>Borrar</th>
          </tr>          

    <?php       

        $consulta = "SELECT * FROM usuarios";

        $ejecutar = mysqli_query($connection, $consulta);

        $i=0;

        while($fila = mysqli_fetch_array($ejecutar)){
            $id = $fila['id'];
            $usuario = $fila['nombre'];
            $correo = $fila['correo'];
            $pass = $fila['pass'];

            $i++;
    ?>

        <tr aligne = "center">
            <td><?php echo $id; ?></td>
            <td><?php echo $usuario; ?></td>
            <td><?php echo $correo; ?></td>
            <td><?php echo $pass; ?></td>
            <td><a href="adminusuario.php?editar=<?php echo $id;?>">Editar</a></td>
            <td><a href="adminusuario.php?borrar=<?php echo $id;?>">Eliminar</a></td>

    <?php } ?>

    </table>

    <?php
        
        if(isset($_GET['editar'])){
            include("editar.php");
        }

    ?>

    <?php 
        if(isset($_GET['borrar'])){
        
        $borrar_id = $_GET['borrar'];
        
        $borrar = "DELETE FROM usuarios WHERE id='$borrar_id'";
        
        $ejecutar = mysqli_query($connection,$borrar); 
            
            if($ejecutar){            
            echo "<script>alert('El usuario ha sido borrado!')</script>";
            echo "<script>window.open('adminusuario.php','_self')</script>";
            }
        
        }
        
        ?>

</body>
</html>