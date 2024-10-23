<?php
class Alumnos extends Miembro
{
    protected $asignaturas;
    protected $cursoabonado;
    protected $edad;

    public function __construct($id, $nombre, $apellidos, $email, $edad)
    {
        parent::__construct($id, $nombre, $apellidos, $email);
        $this->edad = $edad;
        $this->cursoabonado = false;
        $this->asignaturas = array();
    }

    public function abonarCurso(): bool
    {
        $cursoabonado = true;

        return $cursoabonado;
    }

    public function matricularseEnAsignatura($idAsignatura): array
    {

        for ($i = 0; $i < sizeof($this->asignaturas); $i++) {
            $Repetido = false;

            if ($this->asignaturas[$i] == $idAsignatura) { //Lo que hace esto es que nos comprueba que si el array en la posicon $i es igual al id de la asignatura nos mostrara un mensaje de error y parará el bucle y devolvera el array como estaba al principio 
                echo "Este alumno ya se ha matriculado de esta asignatura";
                $Repetido = true;
                break;
            }
        }
        if (!$Repetido) { //Esto nos comprueba si la condicion de repetido es false, y en caso de serlo nos añade el id de asignatura a el array.

            $this->asignaturas[] = $idAsignatura;
        }
        return $this->asignaturas;
    }
}
