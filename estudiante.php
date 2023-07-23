<?php
class Estudiante{
    public $nombre;
    public $apellido;
    public $nacionalidad;
    
    // Métodos mágicos setter y getter genérico (llevan $ dos veces)
    public function setPropiedad($propiedad,$valor){
        $this->$propiedad = $valor;
    }

    public function getPropiedad($propiedad){
        return $this->$propiedad;
    }

    // Método construct, llamado también mágico
    function __construct($nombre,$apellido,$nacionalidad){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->nacionalidad = $nacionalidad;
    }

    // Métodos propios de la clase
    function nombreCompleto(){
        return $this->nombre. " " . $this->apellido;
    }

    function esUruguayo(){
        return $this->nacionalidad === "oriental";
    }
}


?>