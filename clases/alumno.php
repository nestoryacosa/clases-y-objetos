<?php

    class Alumno{
        // atributos 
        public $nombre;
        public $apellido;
        public $edad;

        // métodos

        public function setNombre($nom){
            $this->nombre = $nom;
        }

        public function setApellido($ape){
            $this->apellido = $ape;
        }

        public function setEdad($edad){
            $this->edad = $edad;
        }


        public function getNombre(){
            return $this->nombre;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function getEdad(){
            return $this->edad;
        }

        // constructor de la clase que usará new
        public function __construct($n,$a,$e){
            $this->nombre = $n;
            $this->apellido = $a;
            $this->edad = $e;
        } 

        public function mostrarNombreCompleto(){
            $data = " Alumno: ".$this->nombre." ".$this->apellido;
            return  $data;
        }

    }

?>