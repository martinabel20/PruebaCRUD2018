<?php

class Persona{
    public $id;
    public $nombres;
    public $appaterno;
    public $apmaterno;
    public $telefono;
    
    //getters
    function getId() {
        return $this->id;
    }

    function getNombres() {
        return $this->nombres;
    }

    function getAppaterno() {
        return $this->appaterno;
    }

    function getApmaterno() {
        return $this->apmaterno;
    }

    function getTelefono() {
        return $this->telefono;
    }
    
    //setters
    function setId($id) {
        $this->id = $id;
    }

    function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    function setAppaterno($appaterno) {
        $this->appaterno = $appaterno;
    }

    function setApmaterno($apmaterno) {
        $this->apmaterno = $apmaterno;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }




    
       
}
