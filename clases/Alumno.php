<?php
class Alumnos extends Miembro{
    protected $asignaturas=array();
    protected $cursoabonado = false;
    protected $edad;

    public function __construct($id, $nombre, $apellidos, $email,$edad){
        parent::__construct($id, $nombre, $apellidos, $email);
        $this->edad=$edad;
    }

    public function abonarCurso(): bool{
        $cursoabonado=true;

    return $cursoabonado;}

    public function matricularseEnAsignatura($asignaturas): array{

    return $asignaturas;}
}
