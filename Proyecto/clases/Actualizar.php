<?php
    require_once "Conexion.php";

    class Actualizar{
    private $connection;

        public function __construct(){
            $this -> connection = new Conexion;
        }

        public function actualizar($query){
            return $this -> connection -> conn -> query($query);
        }

    }
?>