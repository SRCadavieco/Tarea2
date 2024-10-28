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

            $alumnos=Alumno::crearAlumnosMuestra();//Lo que hace esto es Llamar a la clase asignaturas, con los :: llama a los metodos estaticos de la clase, en este caso crearAlumnosMuestra
            foreach ($alumnos as $alumno) {
                echo "<li>" . $alumno . "</li>";
            }
            ?>
        </ul>

        <h3>Listado Profesores</h3>
        <ul>

            <?php
            $profesoresCreados=Profesores::crearProfesoresDeMuestra();
            foreach ($profesoresCreados as $profesor) {
                echo "<li>" . $profesor . "</li>";
            }
            ?>
        </ul>


        <h3>Listado de Asignaturas</h3>
        <ul>
            <?php
            
            $asignaturas = Asignaturas::crearAsignaturasDeMuestra(); 
            foreach ($asignaturas as $asignatura) {
                echo "<li>" . $asignatura . "</li>";
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
                    


                    $alumnos[0]->matricularEnAsignatura($asignaturas[0]);  
                    $alumnos[1]->matricularEnAsignatura($asignaturas[0]);  
                    $alumnos[1]->matricularEnAsignatura($asignaturas[1]);  
                    $alumnos[2]->matricularEnAsignatura($asignaturas[0]);  
                    $alumnos[2]->matricularEnAsignatura($asignaturas[2]);  
                    $alumnos[3]->matricularEnAsignatura($asignaturas[0]);  
                    $alumnos[4]->matricularEnAsignatura($asignaturas[0]);  
                    $alumnos[4]->matricularEnAsignatura($asignaturas[1]);  
                    $alumnos[4]->matricularEnAsignatura($asignaturas[2]);  
                    $alumnos[5]->matricularEnAsignatura($asignaturas[0]);  
                    $alumnos[6]->matricularEnAsignatura($asignaturas[1]);  
                    $alumnos[6]->matricularEnAsignatura($asignaturas[1]);  
                    $alumnos[7]->matricularEnAsignatura($asignaturas[2]);  
                    $alumnos[8]->matricularEnAsignatura($asignaturas[1]);  
                    $alumnos[9]->matricularEnAsignatura($asignaturas[0]);
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