<?php
    // Conexión
    require 'conectaMySQL.php';

    // Ejecutar conexión
    $conexion = conectaMySQL();

    // Variable
    $empnoGet = $_GET['empno'];
    
    // Consulta
    $consulta = "delete from emp where empno='$empnoGet'";

    // Ejecución
    $conexion -> exec($consulta);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <b style="font-size: 2em;">Se ha eliminado correctamente</b>
        <br>
        <a href="./CRUDscott.php">
            <img style="width: 75px;" src="./img/principal.png">
            <br>
            <b>Volver a la página principal</b>
        </a>
    </body>
</html>