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
    if (empty($empno)) {
        echo "El campo empno no puede estar vacío";
    }
    elseif (!is_numeric($empno)) {
        echo "El campo empno debe ser un número";
    }

    // Consulta
    $consulta = "insert into emp (empno, ename, job, hiredate, mgr, sal, comm, deptno) values ('$empno', '$ename', '$job', '$hiredate', '$mgr', '$sal', '$comm', '$deptno')";

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
        <b style="font-size: 2em;">Se ha agregado correctamente</b>
        <br>
        <a href="./CRUDscott.php">
            <img style="width: 75px;" src="./img/principal.png">
            <br>
            <b>Volver a la página principal</b>
        </a>
    </body>
</html>