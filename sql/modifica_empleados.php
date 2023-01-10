<?php
    // Conexión
    require 'conectaMySQL.php';

    // Ejecutar la conexión
    $conexion = conectaMySQL();

    // Variable
    $empnoGet = $_GET['empno'];

    // Consulta
    $consulta = "select * from emp where empno=$empnoGet";

    $resultado = $conexion -> query($consulta);

    $consulta2 = "select empno from emp";

    $res = $conexion -> query($consulta2);

    $consulta3 = "select deptno from dept";

    $res2 = $conexion -> query($consulta3);

    // Foreach
    foreach ($resultado as $empleado) {
        $ename = $empleado['ename'];
        $job = $empleado['job'];
        $hiredate = $empleado['hiredate'];
        $mgr = $empleado['mgr'];
        $sal = $empleado['sal'];
        $comm = $empleado['comm'];
        $deptno = $empleado['deptno'];
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modificar</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <h1>Modifica empleados</h1>
        <a href="./CRUDscott.php">Volver a la página principal</a>
        <br><br>
        <fieldset id="tabla">
            <legend><b>Datos del empleado</b></legend>
            <form name="modificaEmpleado" method="post" action="./modifica_empleados_post.php">
                <table border="0">
                    <tbody>
                        <tr>
                            <td>Empno: </td> 
                            <td><?php echo "<input type='text' name='empno' value=$empnoGet readonly />" ?></td>
                        </tr>
                        <tr>
                            <td>Ename: </td> 
                            <td><?php echo "<input type='text' name='ename' value=$ename />" ?></td>
                        </tr>
                        <tr>
                            <td>Job: </td>
                            <td><?php echo "<input type='text' name='job' value=$job />" ?></td>
                        </tr>
                        <tr>
                            <td>Hiredate: </td>
                            <td><?php echo "<input type='text' name='hiredate' value=$hiredate />" ?></td>
                        </tr>
                        <tr>
                            <td>Mgr: </td>
                            <td id="sel">
                                <select name="mgr">
                                    <?php foreach ($res as $empleado) {
                                        echo "<option value=$empleado[empno]>$empleado[empno]</option>";
                                    } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Sal: </td>
                            <td><?php echo "<input type='text' name='sal' value=$sal />" ?></td>
                        </tr>
                        <tr>
                            <td>Comm: </td>
                            <td><?php echo "<input type='text' name='comm' value=$comm />" ?></td>
                        </tr>
                        <tr>
                            <td>Deptno: </td>
                            <td id="sel">
                                <select name="deptno">
                                    <?php foreach ($res2 as $empleado) {
                                        echo "<option value=$empleado[deptno]>$empleado[deptno]</option>";
                                    } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input id="boton" type="submit" value="Modificar">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </fieldset>
    </body>
</html>