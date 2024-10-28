<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 2</title>
    <style>
        h1{
            text-align: center;
        }
        ul{
            display: flex;
            justify-content: center;
        }
        
        li{
            list-style:none;
            margin: 0.75 rem;
            padding: 5px;
            border-right: 1px solid black;
            
            
            
        }
        a{
            text-decoration: none;
            color: black;
           
            
            
        }
        a:hover{
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
    <pre><!-- Pongo el <pre> para que los espacios en blanco me los cuente y no los rellene  -->
        <?php 
            include("clases/Trianglegenerator.php");
            echo triangleGenerator(8);
        
        
        
        ?>
        </pre>


    
</body>
</html>