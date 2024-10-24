<?php 
class Profesores extends Miembro{
    protected $titular;
    protected $asignatura;

    function __construct($id, $nombre, $apellidos, $email,$asignatura){
        parent::__construct($id,$nombre,$apellidos,$email);
        $this->titular=true;
        $this->asignatura=$asignatura;
    }
    function crearProfesoresDeMuestra(){
        $profesores = array(); 

        $p1 = new Profesores(1, "Steve", "Wozniak", "steve@apple.com", "DWES");
        $profesores[] = $p1;
        
        $p2 = new Profesores(2, "Ada", "Lovelace", "ada@gmail.com", "DIW");
        $profesores[] = $p2;
        
        $p3 = new Profesores(3, "Taylor", "Otwell", "taylor@laravel.com", "DWEC");
        $profesores[] = $p3;
        
        $p4 = new Profesores(4, "Rasmus", "Lerdoff", "rasmus@php.com", "DAW");
        $profesores[] = $p4;
        
        return $profesores;}
        public function __toString(){
return parent::__toString();

}




}