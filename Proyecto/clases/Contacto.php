<?php
class Contacto{
    private $nombre;
    private $email;
    private $comentario;
    private $fecha;


    public function getNombre(){
        return $this -> nombre;
    }
    public function getEmail(){
        return $this -> email;
    }
    public function getComentario(){
        return $this -> comentario;
    }
    public function getFecha(){
        return $this -> fecha;
    }
    public function setNombre($nombre){
        $this -> nombre = $nombre;
    }
    public function setEmail($email){
        $this -> email = $email;
    }
    public function setComentario($comentario){
        $this -> comentario = $comentario;
    }
    public function setFecha($fecha){
        $this -> fecha = $fecha;
    }
}

?>