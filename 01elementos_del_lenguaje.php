<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width;initial-scale=1">
    </head>
    <body>
        <?php

        ?>
    <h2>Entradas y salidas.</h2>
    <p>La entrada de datos con PHP es con un formulario o con un enlace. 
        La salida de datos se produce con la función echo, y su forma abreviada, 
        y la función print. Además, para salida de datos con formato tenemos printf.
    <h3>Función echo</h3>
    <?php
        echo "<p>La función echo emite el resultado de una expresión a la salida. Se
        puede usar como función o como construcción del lenguaje (sin paréntesis).</p>";

        $nombre = "Coche Juan";
        echo 'Hola', $nombre, 'como estas?';
        echo ('Hola, $nombre, cómo estas?<br>');
        // echo ("Hola", $nombre, "cómo estas?"); Echo no acepta más de un argumento entre paréntesis.
        // Quiero un salto de línea al final de la línea.
        echo "Hola, esta línea acaba en un salto\n";
        echo "Supuestamente, esta línea es la siguiente a la anterior\ny esta va después.";

        $nombre = "José";
        $apellidos = "Gómez";

        echo "<br>Mi nombre es $nombre y el apellido es $apellidos<br>";
        echo "<br>Mi nombre es" . $nombre . " y mi apellido es " . $apellidos . "<br>";

        echo "<br>Uno más dos son ". 1 + 2 ." y tiene que hacer salido 3.<br>";
        // El operador . no tiene precedencia sobre el operador +.
        echo "<br>Uno más dos son ". 1 + 2.3 ." y tiene que hacer salido 3.<br>";

        echo "<h4>Forma abreviada de echo</h4>";
        echo "<p>Cuando hay que enviar a la salida el resultado de una expresión
        pequeña disponemos de la forma abreviada de echo que permite intecalarse en
        el código HTML con menos esfuerzo.</p>";
        $tiene_portatil = True;
    ?>
    <!-- La forma abreviada de echo va dentro de HTML.-->
    <!-- &lt; ?= expresion?&gt; equivale a &lt?php echo expresion ?&gt;-->
    <p>Mi nombre es <?= $nombre . " " . $apellidos?> y estoy programando en PHP</p>

    <!--Uso muy habitual. Valores por defecto en controles de formulario.-->
    <input type="text" name="nombre" size="15" value="<?=$nombre?>"><br>
    <input type="checkbox" name="portatil" <?= $tiene_portatil ? 'checked' : ''?>>¿Tienes portátil?

    <!--Consejo: las cadenas en PHP con " y en HTML con '.-->
    <?php
        echo "<br><input type='text' name='apellidos' size='50'>";
    ?>
    <h3>Función print</h3>
    <p>Funciona igual que echo</p>
    <?php
        print "<p>Esto es una cadena\nque tiene más de una línea\ny se envían a la salida.</p>";
        print "<p>Mi nombre es $nombre $apellidos<br>";
    ?>  
    <h3>Función printf</h3>
    <?php
        $pi = 3.14159;
        $radio = 3;
        $circunferencia = 2 * $pi * $radio;
        printf('<br>La circunferencia de radio %d es %10.2f', $radio, $circunferencia);
    ?>

    <h2>Tipos de datos</h2>
    <p>Tipos de datos escalares [primitivos]
    <ul>
        <li>Booleanos</li>
        <li>Numérico entero</li>
        <li>En coma flotante</li>
        <li>Cadena de caracteres</li>
    </ul>
    <p>Datos compuestos
    <ul>
        <li>Arrays</li>
        <li>Objetos</li>
        <li>Callable</li>
        <li>Iterable</li>
    </ul>
    <ul>
        <li>Resource</li>
        <li>Null</li>
    </ul>

    <h2>Boolean</h2>
    <p>Inicialmente las constantes True y False. Sin embargo, otros tipos de datos
        tienen conversión implícita al tipo booleano</p>
    <ul>
        <li>Numérico entero: 0 y el -0 es False, cualquier otra cosa es True.</li>
        <li>Numérico en coma flotante: 0.0 y -0.0 es False, otro valor es True.</li>
        <li>Un array con 0 elementos es False, otro valor distinto es True.</li>
        <li>Una variable no definida es False.</li>
    </ul>
    </body>
</html>