<?php
    // Require
    require 'conectaMySQL.php';

    // 1. Establecer la conexión
    $conexion = conectaMySQL();

    // 2. Defino la consulta
    $consulta = 'select * from user';

    // 2.1. Ejecución
    $resultado = $conexion -> query($consulta);

    // 2.3. Mostrar resultado
    foreach ($resultado as $user) {
        echo "$user[Host] $user[User] <br>";
    }

    //////////////////////////////

    // 3. Cierro conexión
    $conexion = null;
?>