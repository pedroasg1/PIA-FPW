<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatorios</title>
    <link rel="stylesheet" href="programa1.css">
</head>
<body>
    <header class="header">
        <a href="main.html" class="logo">Pedro Sanchez</a>
        <nav class="navbar">
            <a href="main.html" class="nav-inicio">Inicio</a>
            <a href="etapa2.html">Variables</a>
            <a href="estructuras.html">Estructuras Condicionales</a>
            <a href="programa1.php">Programa 1</a>
        </nav>
    </header>

    <section class="inicio">
        <div class="form">
    <h1>Generar 10 Números Aleatorios</h1>

    <form method="post">
        <button type="submit" name="generar">Generar Números</button>
    </form>

    <?php
    if (isset($_POST['generar'])) {
        // Generar 10 números aleatorios en el rango de 10 a 50
        $numeros = [];
        $suma = 0;
        for ($i = 0; $i < 10; $i++) {
            $numero = rand(10, 50);
            $numeros[] = $numero;
            $suma += $numero;
        }

        $media = $suma / count($numeros);

        echo "<h2>Números Generados:</h2>";
        echo "<ul>";
        foreach ($numeros as $numero) {
            echo "<li>$numero</li>";
        }
        echo "</ul>";

        echo "<p><strong>Suma:</strong> $suma</p>";
        echo "<p><strong>Media Aritmética:</strong> $media</p>";
    }
    ?>
    </div>
    </section>


   
</body>
</html>
