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
        nav>ul{
            display: flex;
            justify-content: center;
        }
        
        nav>ul>a>li{
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


    table, tr,td,th{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;

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
        <?php 
        $libros = [  
            "libro1" => [  
                "titulo" => "PHP para Principiantes",  
                "autor" => "Carlos Ruiz",  
                "precio" => 19.99,  
                "categoria" => "Desarrollo web"  
            ],  
            "libro2" => [  
                "titulo" => "JavaScript Avanzado",  
                "autor" => "Laura García",  
                "precio" => 25.99,  
                "categoria" => "Desarrollo web"  
            ],  
            "libro3" => [  
                "titulo" => "Algoritmos en Python",  
                "autor" => "Miguel Fernández",  
                "precio" => 29.99,  
                "categoria" => "Algoritmos"  
            ]  
        ];


        
        
        
        
        
        ?>
        <h2>Informacion De Todos Los Libros</h2>
        <table >
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Precio</th>
            <th>Categoria</th>



        </tr>



        <?php 
        foreach ($libros as $libro) {
            echo "<tr>";
            echo "<td>".$libro["titulo"]."</td>";
            echo "<td>".$libro["autor"]."</td>";
            echo "<td>".$libro["precio"]."</td>";
            echo "<td>".$libro["categoria"]."</td>";
   
            echo "</tr>";


        }
        ?>
        </table>
        <h2>Libros de categoria 'Desarrollo Web'</h2>
        <ul>
        <?php 
        $filterLib= array_filter($libros, function($libro){
            return $libro['categoria'] =="Desarrollo web";
        });
        foreach($filterLib as $libro){
            echo "<li>".$libro['titulo']."</li>";

        }
        ?>
        </ul>








</body>
</html>