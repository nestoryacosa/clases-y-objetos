<?php

class Alumno{
    // atributos o propiedades
    public $nombre;
    public $apellido;

    // métodos

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }

    function __construct($nom,$ape){
        $this->nombre = $nom;
        $this->apellido = $ape;

    }

}