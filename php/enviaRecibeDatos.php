<?php
    // Errores
    $errores = '';
    // Nombre
    if (!empty($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
    }
    else {
        $errores = $errores. "El nombre no puede estar vacío<br/>";
    }
    // Clave
    if (empty($_POST['clave'])) {
        $errores = $errores. "La contraseña no puede estar vacía<br/>";
    }
    else {
        $clave = $_POST['clave'];
        if (strlen($_POST['clave'])<=6 or strlen($_POST['clave'])>=12) {
            $errores = $errores. "La clave debe tener entre 6 y 12 caracteres<br/>";
        }
    }
    // Género
    if (isset($_POST['genero'])) {
        $genero = '';
        foreach ($_POST['genero'] as $seleccion) {
            $genero = $genero. $seleccion;
        }
    }
    else {
        $errores = $errores. "Se debe seleccionar un género<br/>";
    }
    // Fecha de nacimiento
    if (empty($_POST['fechaNacimiento'])) {
        $errores = $errores. "La fecha de nacimiento no puede estar vacía<br/>";
    }
    else {
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $fec = str_split($_POST['fechaNacimiento']);
        $fec2 = $fec[0]. $fec[1]. $fec[2]. $fec[3];
        $fecMayor = 2022 - $fec2;
        if ($fecMayor < 18) {
            $errores = $errores. "Debe ser mayor de 18 años<br/>";
        }
    }
    // País
    if (isset($_POST['pais'])) {
        $pais = '';
        foreach ($_POST['pais'] as $seleccion) {
            $pais = $pais. $seleccion;
        }
    }
    else {
        $errores = $errores. "El país no puede estar vacío<br/>";
    }
    // Acepto
    if (isset($_POST['acepto'])) {
        $acepto = $_POST['acepto'];
    }
    else {
        $errores = $errores. "Debe escoger si quiere recibir publicidad<br/>";
    }
    // Comentarios
    if (!empty($_POST['comentarios'])) {
        $comentarios = $_POST['comentarios'];
    }
    else {
        $comentarios = "No se han recibido comentarios";
    }
    // Archivo
    if (!empty($_FILES['foto']['name'])) {
        $archivo = $_FILES['foto']['name'];
        $temporal = $_FILES['foto']['tmp_name'];
        $ruta = 'upload'. '/'. $archivo;
        move_uploaded_file($temporal, $ruta);
    }
    else {
        $ruta = "No se ha enviado ningún archivo";
    }
    // Llamadas
    echo "<h1>Envía y recibe Aarón Sánchez</h1>";
    echo "<font color=\"red\">$errores</font>";
    if (empty($errores)) {
        echo "<h1>Se han recido los siguientes datos:</h1>";
        echo "<b>Nombre: </b>". $nombre. "<br/>";
        echo "<b>Contraseña: </b>". $clave. "<br/>";
        echo "<b>Género: </b>". $genero. "<br/>";
        echo "<b>Fecha de nacimiento: </b>" .$fechaNacimiento. "<br/>";
        echo "<b>País: </b>" .$pais. "<br/>";
        echo "<b>Publicidad: </b>". $acepto. "<br/>";
        echo "<b>Comentarios: </b>". $comentarios. "<br/>";
        echo "<b>Archivo: </b>". $ruta. "<br/>";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Envía y recibe</title>
        <script type="text/javascript" src="../js/validar.js"></script>
    </head>
    <body style="text-align: center; width: 50%; margin-left: 25%; background-color: #82E0AA">
    <fieldset style="border: none; border-radius: 15px;">
        <h1>Formulario de datos</h1>
        <fieldset style="background-color: #2ECC71; border: none; border-radius: 15px;">
            <form name="fdatos" method="post" onsubmit="return validar()" enctype="multipart/form-data">
            <b>Nombre:</b> <input style="background-color: #D5F5E3; border: none; border-radius: 15px;" type="text" name="nombre" /> <br/><br/>
            <b>Contraseña:</b> <input style="background-color: #D5F5E3; border: none; border-radius: 15px;" type="password" name="clave" /> <br/><br/>
            <b>Género:</b>
                Hombre: <input type="radio" name="genero[]" value="H" />
                Mujer: <input type="radio" name="genero[]" value="M" /> <br/><br/>
            <b>Fecha de nacimiento: </b> <input type="date" name="fechaNacimiento" /> <br/><br/>
            <b>País: </b> <select name="pais[]" multiple="multiple">
                <option value="España">España</option> <br/><br/>
                <option value="Francia">Francia</option> <br/><br/>
                <option value="Italia">Italia</option>
            </select> <br/><br/>

            <b>¿Quiere recibir publicidad?:</b> Si <input type="checkbox" name="acepto" value="Publicidad" /> <br/><br/>
            <b>Comentarios: </b> <textarea style="background-color: #D5F5E3; border: none; border-radius: 15px;" name="comentarios" rows="5" cols="50"></textarea> <br/><br/>
            <b>Subir archivos:</b>
                <input type="file" name="foto" accept="image/jpeg, image/gif, image/png" />
                <input type="hidden" name="max_file_size" value="5000000" /><br/><br/>

                <!--Enviar-->
                <button type="submit" value="Enviar" style="width:30px;">
                    <img src="./img/flecha.png" width="100%" />
                </button>
                <input type="reset" value="Limpiar" />
                <input type="button" value="Mostrar un mensaje" onclick="alert('Hola bicharraco')" />
            </form>
        </fieldset>
    </body>
</html>