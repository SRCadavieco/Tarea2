<?php 
class Profesores extends Miembro{
    protected $titular;
    protected $asignatura;

    function __construct($id, $nombre, $apellidos, $email,$asignatura){
        parent::__construct($id,$nombre,$apellidos,$email);
        $this->titular=true;
        $this->asignatura=$asignatura;
    }




}