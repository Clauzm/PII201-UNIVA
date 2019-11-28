<?php
require "Conexion.php";
require_once "Inicio.php";
require_once "Nosotros.php";
require_once "Contacto.php";
require_once "Productos.php";

class Consulta{
    private $connection;

    //Método constructor que instancia la conexión para poderla usar posteriormente en el login
    public function __construct(){
        //Devolvemos un atributo con la instancia
        $this -> connection = new Conexion;

    }

    //Método que recibe un atributo ($query) para asignarla a result y result nos conecte a la BD si es correcto usuario y contraseña
    public function login($query){
        $result = $this -> connection -> conn-> query($query);
        if($result -> num_rows > 0){
            return true;
        }
        else{
            return false;
        }
}

    //Método que recibe un atributo ($query) para asignarla a result y result nos conecte a la BD si es correcto usuario y contraseña
    public function getIndex($query){
        //instanciamos InicioAdmin y la asignamos a inicio para usar los metodos get y set
        $inicio = new inicioAdmin;
        $result = $this -> connection -> conn -> query($query);
        if($result -> num_rows > 0){
            $row = $result -> fetch_assoc();
            //tomamos lo de página admininicio.php que a su vez lo guarda en la BD para ver los cambios en inicio.php
            $inicio-> setImagen($row['imagen']);
            $inicio -> setTexto($row['texto1']);
            return $inicio;
        }
        else{
            return null;
        }
    }

    public function getNosotros($query){
        $nosotros = new Nosotros;
        $result = $this -> connection -> conn -> query($query);
        if($result -> num_rows > 0){
            $row = $result -> fetch_assoc();
            $nosotros -> setImagen($row['imagennos']);
            $nosotros -> setTexto($row['texto1']);
            return $nosotros;
        }else{
            return null;
        }
    }

    //Método que   
    public function getUbicacion($query){
        $ubicacion = new Ubicacion;
        $result = $this -> connection -> conn -> query($query);
        if($result -> num_rows > 0){
            $row = $result -> fetch_assoc();            
            $ubicacion -> setTexto($row['texto1']);
            $ubicacion -> setImagen($row['imagenubicacion']);
            return $ubicacion;
        }else{
            return null;
        }
    }

    public function getContacto($query){
        $lista = array();
        $result = $this -> connection -> conn -> query($query);
        while($row = $result-> fetch_assoc()){
                $contacto = new Contacto;
                $contacto -> setNombre($row['nombre']);
                $contacto -> setEmail($row['email']);
                $contacto -> setComentario($row['comentario']);
                $contacto -> setFecha($row['fecha']);
                array_push($lista,$contacto);
        }
           
            return $lista;
        }

     public function getProductos($query){
        $lista = array();
        $result = $this -> connection -> conn -> query($query);
        while($row = $result-> fetch_assoc()){
            $producto = new Productos;
            $producto -> setId($row['idproductos']);
            $producto -> setTexto1($row['bebidascalientes']);
            $producto -> setPrecio1($row['preciobebidascalientes']);
            $producto -> setTexto2($row['bebidasfrias']);
            $producto -> setPrecio2($row['preciobebidasfrias']);
            $producto -> setTexto3($row['platillos']);
            $producto -> setPrecio3($row['precioplatillos']);
            $producto -> setImagen($row['imagen']);
            array_push($lista,$servicio);
        }
        return $lista;
     }
    
}
?>