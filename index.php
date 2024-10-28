<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 2</title>
    <style>
        h1 {
            text-align: center;
        }

        nav>ul {
            display: flex;
            justify-content: center;
        }

        nav>ul>a>li {
            list-style: none;
            margin: 0.75 rem;
            padding: 5px;
            border-right: 1px solid black;



        }

        a {
            text-decoration: none;
            color: black;



        }

        a:hover {
            background-color: #c8c8c8;
        }
    </style>
</head>

<body>
    <header>
        <h1>Tarea 2 DWEC</h1>
        <nav>
            <ul>
                <a href="index.php">
                    <li>Inicio</li>
                </a>
                <a href="biblioteca.php">
                    <li>Biblioteca</li>
                </a>
                <a href="triangulo.php">
                    <li>Triangulo</li>
                </a>

            </ul>
        </nav>
    </header>
    <main>
        <h3>Listado de Alumnos</h3>
        <ul>
            <?php
            include("clases/Miembro.php");
            include("clases/Alumno.php");
            include("clases/Profesores.php");
            include("clases/Asignaturas.php");

            $alumno = new Alumno(0, "", "", "", 0);
            $alumnos  = $alumno->crearAlumnosMuestra();

            foreach ($alumnos as $alumno) {
                echo "<li>" . $alumno . "</li>";
            }
            ?>
        </ul>

        <h3>Listado Profesores</h3>
        <ul>

            <?php
            $profesor = new Profesores(0, "", "", "", 0);
            $profesoresCreados = $profesor->crearProfesoresDeMuestra();
            foreach ($profesoresCreados as $profesor) {
                echo "<li>" . $profesor . "</li>";
            }
            ?>
        </ul>


        <h3>Listado de Asignaturas</h3>
        <ul>
            <?php

            
            $asignaturas = new Asignaturas(0, "", 0);
            $asignatura = $asignaturas->crearAsignaturasDeMuestra();
            foreach ($asignatura as $asignaturas) {
                echo "<li>" . $asignaturas . "</li>";
            }
        


            ?>

        </ul>

        <h3>Listado alumnos<=23 </h3>
                <ul>
                    <?php

                    $filterAlum = array_filter($alumno->crearAlumnosMuestra(), function ($alumno) {
                        return $alumno->edad <= 23;
                    });

                    foreach ($filterAlum as $alumno) {
                        echo "<li>$alumno</li>";
                    }


                    ?>
                </ul>
        <h3>Alumnos con al menos dos Asignaturas</h3>
        <ul>
                    <?php 
                    


                    $alumnos[0]->matricularEnAsignatura($asignatura[0]);  
                    $alumnos[1]->matricularEnAsignatura($asignatura[0]);  
                    $alumnos[1]->matricularEnAsignatura($asignatura[1]);  
                    $alumnos[2]->matricularEnAsignatura($asignatura[0]);  
                    $alumnos[2]->matricularEnAsignatura($asignatura[2]);  
                    $alumnos[3]->matricularEnAsignatura($asignatura[0]);  
                    $alumnos[4]->matricularEnAsignatura($asignatura[0]);  
                    $alumnos[4]->matricularEnAsignatura($asignatura[1]);  
                    $alumnos[4]->matricularEnAsignatura($asignatura[2]);  
                    $alumnos[5]->matricularEnAsignatura($asignatura[0]);  
                    $alumnos[6]->matricularEnAsignatura($asignatura[1]);  
                    $alumnos[6]->matricularEnAsignatura($asignatura[1]);  
                    $alumnos[7]->matricularEnAsignatura($asignatura[2]);  
                    $alumnos[8]->matricularEnAsignatura($asignatura[1]);  
                    $alumnos[9]->matricularEnAsignatura($asignatura[0]);
                        $filterAsig = array_filter($alumnos, function ($alumno) {
                                return count($alumno->asignaturas) >= 2; //Cuenta el numero de asignaturas en las que un alumno esta matriculado y si esto es mayor o igual a dos nos lo devuelve.
                        }
                        );
                        foreach($filterAsig as $alumno) {
                            echo "<li>$alumno</li>";
                        }
                    ?>
        </ul>
        <h3>Asignaturas con algun alumno matriculado</h3>
        <ul>
            <?php 
            $filterAlumAsig = array_filter($alumno,function($alumno){
                count($alumno->asignatura)>0;
                


            })
            
            
            
            
            
            
            ?>










        </ul>







    </main>







</body>

</html>