<?php

class Ubicacion{

    private $imagenFondo;
    private $texto1;
    private $texto2;
    private $imagen;

    public function getImagenFondo(){
        return $this -> imagenFondo;
    }
    public function getTexto1(){
        return $this -> texto1;
    }

    public function getTexto2(){
        return $this -> texto2;
    }

    public function getImagen(){
        return $this -> imagen;
    }
    public function setImagenFondo($imagenFondo){
        $this -> imagenFondo = $imagenFondo;
    }
    public function setTexto1($texto1){
        $this -> texto = $texto1;
    }
    public function setTexto2($texto2){
        $this -> texto = $texto2;
    }
    public function setImagen($imagen){
        $this -> imagen = $imagen;
    }
    
}

?>