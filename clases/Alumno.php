<?php
class Alumno extends Miembro
{
    protected $asignaturas;
    protected $cursoabonado;
    public $edad; //Esta puesta en publica porque al ponerla en protected solo la podrian utilzar las clases e index que esten en la misma carpeta, pero al estar tanto el index como la clase Alumno en distintas carpetas tengo que ponerlas en publico

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

    public function matricularEnAsignatura($idAsignatura): array
    {
        $Repetido = false;
        for ($i = 0; $i < sizeof($this->asignaturas); $i++) {
          

            if ($this->asignaturas[$i] == $idAsignatura) { //Lo que hace esto es que nos comprueba que si el array en la posicon $i es igual al id de la asignatura nos mostrara un mensaje de error y parará el bucle y devolvera el array como estaba al principio 
                //echo "Este alumno ya se ha matriculado de esta asignatura";
                $Repetido = true;
                break;
            }
        }
        if (!$Repetido) { //Esto nos comprueba si la condicion de repetido es false, y en caso de serlo nos añade el id de asignatura a el array.

            $this->asignaturas[] = $idAsignatura;
        }
        return $this->asignaturas;
    }
    public function bajaEnAsignatura($idAsignatura){
        array_diff($this->asignaturas,$idAsignatura);

    }
    public function crearAlumnosMuestra(): array{
        $alumnosMuestra=array();


$a1 = new Alumno(1, "Laura", "Martinez", "laura.martinez@email.com", 22);
$alumnosMuestra[] = $a1;

$a2 = new Alumno(2, "Sergio", "Lopez", "sergio.lopez@email.com", 25);
$alumnosMuestra[] = $a2;

$a3 = new Alumno(3, "Carlos", "Garcia", "carlos.garcia@email.com", 24);
$alumnosMuestra[] = $a3;

$a4 = new Alumno(4, "Marta", "Sanchez", "marta.sanchez@email.com", 23);
$alumnosMuestra[] = $a4;

$a5 = new Alumno(5, "Alba", "Fernandez", "alba.fernandez@email.com", 21);
$alumnosMuestra[] = $a5;

$a6 = new Alumno(6, "David", "Rodriguez", "david.rodriguez@email.com", 26);
$alumnosMuestra[] = $a6;

$a7 = new Alumno(7, "Laura", "Martinez", "lucia.jimenez@email.com", 20);
$alumnosMuestra[] = $a7;

$a8 = new Alumno(8, "Jorge", "Pérez", "jorge.perez@email.com", 22);
$alumnosMuestra[] = $a8;

$a9 = new Alumno(9, "Elena", "Romero", "elena.romero@email.com", 23);
$alumnosMuestra[] = $a9;

$a10 = new Alumno(10, "Pablo", "Torres", "pablo.torres@email.com", 24);
$alumnosMuestra[] = $a10;

        

    return $alumnosMuestra;}

public function __toString(){
return parent::__toString();

}
}
