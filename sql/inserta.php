<?php
    // 1. Conexión a la BD
    require 'conectaMySQL.php';

    // Establecer conexión
    $conexion = conectaMySQL();

    // 2. Consulta
    // 2.1 Definición de la consulta
    $consulta = "insert into user(Host, User) values('servidor05','luisa')";

    // 2.2 Ejecución de la consulta
    $conexion -> exec($consulta);
    echo '1 fila insertada';

    // 3. Visualizar la consulta
    $consulta = "select * from user";

    // 4. Ejecutar la consulta
    $resultado = $conexion -> query($consulta);
?>