<?php
    // Conexión
    require 'conectaMySQL.php';

    // Ejecutar la conexión
    $conexion = conectaMySQL();

    // Consulta
    $consulta = "select empno from emp";

    $resultado = $conexion -> query($consulta);

    $consulta2 = "select deptno from dept";

    $resultado2 = $conexion -> query($consulta2);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alta Empleado</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <h1>Alta empleado</h1>
        <a href="./CRUDscott.php">Volver a la página principal</a>
        <br><br>
        <fieldset id="tabla">
            <legend><b>Datos del empleado</b></legend>
            <form name="altaEmpleado" method="post" action="./alta_empleados_post.php">
                <table border="0">
                    <tbody>
                        <tr>
                            <td>Empno: </td> 
                            <td><input type="text" name="empno" /></td>
                        </tr>
                        <tr>
                            <td>Ename: </td> 
                            <td><input type="text" name="ename" /></td>
                        </tr>
                        <tr>
                            <td>Job: </td>
                            <td><input type="text" name="job" /></td>
                        </tr>
                        <tr>
                            <td>Hiredate: </td>
                            <td><input type="text" name="hiredate" /></td>
                        </tr>
                        <tr>
                            <td>Mgr: </td>
                            <td id="sel">
                                <select name="mgr">
                                    <?php foreach ($resultado as $empleado) {
                                        echo "<option value=$empleado[empno]>$empleado[empno]</option>";
                                    } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Sal: </td>
                            <td><input type="text" name="sal" /></td>
                        </tr>
                        <tr>
                            <td>Comm: </td>
                            <td><input type="text" name="comm" /></td>
                        </tr>
                        <tr>
                            <td>Deptno: </td>
                            <td id="sel">
                                <select name="deptno">
                                    <?php foreach ($resultado2 as $empleado) {
                                        echo "<option value=$empleado[deptno]>$empleado[deptno]</option>";
                                    } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input id="boton" type="submit" value="Alta">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </fieldset>
    </body>
</html>