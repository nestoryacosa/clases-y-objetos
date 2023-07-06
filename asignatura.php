<?php

class Asignatura{
    public $nombre;
    public $curso;

    public function setNombre($nom){
        $this->nombre = $nom;
    }

    public function setCurso($cur){
        $this->curso = $cur;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getCurso(){
        return $this->curso;
    }

    public function __construct($nom,$cur){
        $this->nombre = $nom;
        $this->curso = $cur;
    }

}