<?php

class Ubicacion{

    private $texto;
    private $imagen;


    public function getTexto(){
        return $this -> texto;
    }

    public function getImagen(){
        return $this -> imagen;
    }

    public function setTexto($texto1){
        $this -> texto = $texto1;
    }

    public function setImagen($imagen){
        $this -> imagen = $imagen;
    }
    
}

?>