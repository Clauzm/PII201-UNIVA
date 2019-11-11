<?php

class Nosotros{

    private $imagenFondo;
    private $texto;
    private $imagen;

    public function getImagenFondo(){
        return $this -> imagenFondo;
    }
    public function getTexto(){
        return $this -> texto;
    }
    public function getImagen(){
        return $this -> imagen;
    }
    public function setImagenFondo($imagenFondo){
        $this -> imagenFondo = $imagenFondo;
    }
    public function setTexto($texto){
        $this -> texto = $texto;
    }
    public function setImagen($imagen){
        $this -> imagen = $imagen;
    }
    
}

?>