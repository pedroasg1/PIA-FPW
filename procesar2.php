<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Preferencias de Lenguajes de Programación</title>
    <link rel="stylesheet" href="main.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 380px;
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 10px;
        }
        p {
            color: #555;
            margin-bottom: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #e7f3fe;
            margin: 5px 0;
            padding: 10px;
            border-radius: 4px;
            color: #333;
        }
    </style>
</head>
<body>
<header class="header">
        <a href="main.html" class="logo">Pedro Sanchez</a>
        <nav class="navbar">
            <a href="main.html" class="nav-inicio">Inicio</a>
            <a href="etapa3.html">Get & Post</a>
            <a href="programa2.html">Programa 2</a>
        </nav>
    </header>


    <div class="container">
        <h1>Resultados de Preferencias</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = htmlspecialchars($_POST['nombre']);
            $lenguajes = isset($_POST['lenguajes']) ? $_POST['lenguajes'] : [];

            echo "<p>Nombre: " . $nombre . "</p>";

            if (!empty($lenguajes)) {
                echo "<p>Lenguajes de programación preferidos:</p>";
                echo "<ul>";
                foreach ($lenguajes as $lenguaje) {
                    echo "<li>" . htmlspecialchars($lenguaje) . "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>No seleccionaste ningún lenguaje de programación.</p>";
            }
        } else {
            echo "<p>Hubo un error al procesar el formulario.</p>";
        }
        ?>
    </div>
</body>
</html>
