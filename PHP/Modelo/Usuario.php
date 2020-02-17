<?php

class Usuario {

    
    private $nombre;
    private $apellido_paterno;
    private $apellido_materno;
    private $edad;
    private $email;
    private $celular;
    private $estatura;
    private $id_rol;
    private $escolaridad;
    private $estado_civil;



    function __construct($nombre, $apellido_paterno, $apellido_materno, $edad, $email, $celular, $estatura, $id_rol,$escolaridad,$estado_civil) {
        
        
        $this->nombre = $nombre;
        $this->apellido_paterno = $apellido_paterno;
        $this->apellido_materno = $apellido_materno;
        $this->edad = $edad;
        $this->email = $email;
        $this->celular = $celular;
        $this->estatura = $estatura;
        $this->id_rol = $id_rol;
        $this->escolaridad = $escolaridad;
        $this->estado_civil = $estado_civil;
        
        
    }
    

   

    function getNombre() {
        return $this->nombre;
    }

    function getApellido_paterno() {
        return $this->apellido_paterno;
    }

    function getApellido_materno() {
        return $this->apellido_materno;
    }

    function getEdad() {
        return $this->edad;
    }

    function getEmail() {
        return $this->email;
    }

    function getCelular() {
        return $this->celular;
    }

    function getEstatura() {
        return $this->estatura;
    }

    function getId_rol() {
        return $this->id_rol;
    }

     function getEscolaridad() {
        return $this->escolaridad;
    }

     function getEstado_civil() {
        return $this->estado_civil;
    }

    

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido_paterno($apellido_paterno) {
        $this->apellido_paterno = $apellido_paterno;
    }

    function setApellido_materno($apellido_materno) {
        $this->apellido_materno = $apellido_materno;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setEstatura($estatura) {
        $this->estatura = $estatura;
    }

    function setId_rol($id_rol) {
        $this->id_rol = $id_rol;
    }

    function setEscolaridad($escolaridad) {
        $this->escolaridad = $escolaridad;
    }

    function setEstado_civil($estado_civil) {
        $this->estado_civil = $estado_civil;
    }


    public function convertirAArreglo() {
        
        $arreglo = get_object_vars($this);
        
        return $arreglo;
    }
    

}

?>