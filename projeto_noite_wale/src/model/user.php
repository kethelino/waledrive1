<?php

class User {
    //Atributos
    private $name;
    private $pass;

    //Método construtor

    public function __construct($n, $p) {
        $this->name = $n;
        $this->pass = $p;

        }

    //Método validar login

    public function login () {

        return ($this->name == "admin" && $this->pass == "1234");

    }

    }

?>
