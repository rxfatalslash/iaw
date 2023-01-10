<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            //Necesito el archivo conectaMySQL para tener conexión
            require 'conectaMySQL.php';

            //Ejecutar la conexión 
            $conexión = conectaMySQL();

            //Consulta preparada
            $nombre = 'Juan';
            $trabajo = 'Fontanero';
            $consulta= "insert into emp(ename, job) values (:p1, :p2)";
            
            try {
                //Crear consulta
                $st = $conexión -> prepare ($consulta);
                //Asociar parámetros
                $st -> bindparam(':p1', $nombre);
                $st -> bindparam(':p1', $trabajo);
                //Ejecutar la consulta preparada
                $st -> execute();
            }
                
            //Para que al usuario no le muestre el error como tal, un error bonito
            catch (PDOException $e) {
                echo $e -> getMessage();
            }

            //Guardamos el resultado
            $resultado = $conexión -> query ('select * from emp');

            //Mostrar el resultado
            foreach ($resultado as $emp) {
                echo "<br> $emp[ename] $emp[job]";
            }

            //Cerramos conexión
            $conexión = null;
        ?>
    </body>
</html>