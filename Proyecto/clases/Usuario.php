<?php

class Usuario{
    public $nombre;
    public $email;
    public $password;

    //Se crea el constructor con parametros y dar valores a las variables.
    public function __construct($nombre,$email,$password){
        $this -> nombre = $nombre;
        $this -> email = $email;
        $this -> password = $password;
    }
}