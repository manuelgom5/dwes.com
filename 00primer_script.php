<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width;initial-scale=1">
    </head>
    <body>
        <h1>Primer Script en PHP</h1>
    <?php
        echo "Esto es un script PHP<br>";   // la sentencia echo emite una expresión a la respuesta.
        echo "Esto lo ejecuta el motor de PHP<br>";
        // Sentencia compuesta
        {
            echo "Primer sentencia en un bloque de sentencias<br>";
            echo "Segunda sentencia en un bloque de sentencia<br>"; # Este es el último echo.
        }
        /*
            Esto es un comentario multilínea
            que ocupa varias líneas.
        */
    ?>
    <hr>
    <p>Fin del Script PHP</p>
    </body>
</html>