<?php 
class Conexion {

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "cafemexico";
    public $conn;

    //Se crea el constructor para abrir una conexión al serivdor de base de datos
    //Devuelve un objeto que representa la conexión al servidor MySQL.
    public function __construct(){        
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
        //Devuelve el último mensaje de error de la ultima llamada
        if ($this->conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

    }

}
?>