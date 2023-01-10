<?php
    // Función área del círculo
    $radio = 3;
    const PI = 3.141516;

    function area($radio) {
        return $resultado=pow ($radio,2)*PI;
        return $resultado;
    }
    echo "El área del círculo cuyo radio es ". $radio. " vale ". area($radio);
?>