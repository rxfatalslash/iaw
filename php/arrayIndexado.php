<?php

    // Definición variables

    $i = 0;
    $nombres = array('Luisa', 'Ana', 'Pepa');
    $longitud = count($nombres);

    // Bucles

    while ($i<$longitud) {
        echo "$nombres[$i] ";
        $i++;
    }

    $i = 0;

    do {
        echo "$nombres[$i] ";
        $i++;
    } while ($i<$longitud);

    $i = 0;

    for ($i=0; $i<$longitud; $i++) {
        echo "$nombres[$i] ";
    }
?>