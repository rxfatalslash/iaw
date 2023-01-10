<?php
    // Conexión
    require 'conectaMySQL.php';
    $conexion = conectaMySQL();

    // Datos
    $empno = $_POST['empno'];
    $ename = $_POST['ename'];
    $job = $_POST['job'];
    $hiredate = $_POST['hiredate'];
    $mgr = $_POST['mgr'];
    $sal = $_POST['sal'];
    $comm = $_POST['comm'];
    $deptno = $_POST['deptno'];

    // Control de errores
    if (empty($mgr)) {
        $mgr = NULL;
    }
    if (empty($comm)) {
        $comm = NULL;
    }

    // Consulta
    $consulta = "update emp set ename='$ename', job='$job', hiredate='$hiredate', mgr='$mgr', sal='$sal', comm='$comm', deptno='$deptno' where empno='$empno'";

    // Ejecucuión
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
        <b style="font-size: 2em;">Se ha modificado correctamente</b>
        <br>
        <a href="./CRUDscott.php">
            <img style="width: 75px;" src="./img/principal.png">
            <br>
            <b>Volver a la página principal</b>
        </a>
    </body>
</html>