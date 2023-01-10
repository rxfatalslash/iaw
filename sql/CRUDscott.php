<?php
    //Necesito el archivo conectaMySQL para tener conexión
    require 'conectaMySQL.php';

    //Ejecutar la conexión 
    $conexion = conectaMySQL();

    // Variable
    if (empty($_GET['empno'])) {
        $v_empno = '';
    }
    else {
        $v_empno = $_GET['empno'];
    }

    // Realizamos la consulta
    if (empty($v_empno)) {
        $consultaDatos = "select * from emp";
    }
    else {
        $consultaDatos = "select * from emp where empno=$v_empno";
    }

    // Guardamos los datos
    $resultado = $conexion -> query($consultaDatos);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consulta</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <h1>Gestión de empleados (CRUD)</h1>
        <div id="altaEmpleado">
            <a id="new" href="./altaEmpleado.php">
                <img style="width: 100px;" src="./img/nuevo.png">
                <br>
                <b>Nuevo empleado</b>
            </a>
        </div>
        <hr>
        <div id="parametrosConsulta">
            <form id="filter" method="get" action="./CRUDscott.php">
                <fieldset id="filtro">
                    <legend><b>Filtro</b></legend>
                    <label for="empno">empno</label>
                    <input id="caja" type="text" name="empno" />
                    <input id="boton" type="submit" value="Consultar" />
                </fieldset>
            </form>
        </div>
        <br>
        <div id="resultadoConsulta">
            <fieldset id="tabla">
                <legend><b>Empleados</b></legend>
                <table border="1">
                    <thead>
                        <th>empno</th>
                        <th>ename</th>
                        <th>job</th>
                        <th>hiredate</th>
                        <th>mgr</th>
                        <th>sal</th>
                        <th>comm</th>
                        <th>deptno</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody> 
                            <?php foreach ($resultado as $empleado) {
                                echo "<tr>
                                        <td>". $empleado['empno']. "</td>
                                        <td>". $empleado['ename']. "</td>
                                        <td>". $empleado['job']. "</td>
                                        <td>". $empleado['hiredate']. "</td>
                                        <td>". $empleado['mgr']. "</td>
                                        <td>". $empleado['sal']. "</td>
                                        <td>". $empleado['comm']. "</td>
                                        <td>". $empleado['deptno']. "</td>
                                        <td>
                                            <a href=./modifica_empleados.php?empno=$empleado[empno]>
                                                <center>
                                                    <img id='foto1' src=./img/modificar.png>
                                                </center>
                                            </a>
                                        </td>
                                        <td>
                                            <a href=./eliminar_empleado.php?empno=$empleado[empno]>
                                                <center>
                                                    <img id='foto2' src=./img/eliminar.png>
                                                </center>
                                            </a>
                                        </td>
                                    </tr>";
                            } ?>
                    </tbody>
                </table>
            </fieldset>
        </div>
    </body>
</html>
<?php
    $conexion = null;
?>