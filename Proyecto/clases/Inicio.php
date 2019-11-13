<?php

class inicioAdmin{

    private $imagen;
    private $texto;

        public function getImagen(){
            return $this -> imagen;
        }
        public function getTexto(){
            return $this -> texto;
        }

        public function setImagen($imagen){
            $this -> imagen = $imagen;
        }
        public function setTexto($texto){
            $this -> texto = $texto;
        }

    }

?>