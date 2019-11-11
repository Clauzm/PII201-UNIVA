<?php

class inicioAdmin{

    private $imagen;
    private $texto1;

        public function getImagen(){
            return $this -> imagen;
        }
        public function getTexto1(){
            return $this -> texto1;
        }

        public function setImagen($imagen){
            $this -> imagen = $imagen;
        }
        public function setTexto($texto1){
            $this -> texto1 = $texto1;
        }

    }

?>