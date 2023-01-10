<?php

    // Declaración de variables

    $x = 6;
    $mensaje = "La variable";
    $nombres = array('Luis', 'Ana', 'Jorge');
    $genero = 'F';
    switch ($genero) {
        case 'M': echo "Masculino";
            break;
        case 'F': echo "Femenino";
            break;
        default: echo "Neutro";
    }

    // Visualizacón de variables

    echo "<u>Visualización con print</u>: <br>";
    print "\$x = $x <br>";
    print "$mensaje". ' $x vale: '. "$x". "<br>";
    print_r ("$nombres[0]". "$nombres[1]". "$nombres[2] <br>");

    // Condicionales

    if ($x<=4) {
        echo "Suspenso";
    }
    elseif ($x==5) {
        echo "Raspado";
    }
    else {
        echo "Aprobado";
    }
?>