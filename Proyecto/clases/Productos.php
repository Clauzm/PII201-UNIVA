<?php

//Definimos la clase
class Productos{

    //Atributos
    private $id;
    private $texto1;
    private $precio1;
    private $texto2;
    private $precio2;
    private $texto3;
    private $precio3;
    private $imagen;

    // Metodos
    public function getId(){
        //Devolvemos un atributo
        return $this -> id;
    }
    public function getTexto1(){
        return $this -> texto1;
    }

    public function getPrecio1(){
        return $this -> precio1;
    }

    public function getTexto2(){
        return $this -> texto2;
    }

    public function getPrecio2(){
        return $this -> precio2;
    }

    public function getTexto3(){
        return $this -> texto3;
    }

    public function getPrecio3(){
        return $this -> precio3;
    }

    public function getImagen(){
        return $this -> imagen;
    }
 
    public function setId($id){
        //Le damos un valor a un atributo
        $this -> id = $id;
    }
    public function setTexto1($texto1){
        $this -> texto = $texto1;
    }
    public function setPrecio1($precio1){
        $this -> texto = $precio1;
    }
    public function setTexto2($texto2){
        $this -> texto = $texto2;
    }
    public function setPrecio2($precio2){
        $this -> texto = $precio2;
    }
    public function setTexto3($texto3){
        $this -> texto = $texto3;
    }
    public function setPrecio3($precio3){
        $this -> texto = $precio3;
    }
    public function setImagen($imagen){
        $this -> imagen = $imagen;
    }
    
    
}

?>