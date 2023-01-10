<html>
    <head>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Estos son tus datos</h1>
        <?php
            // Nombre
            if (!empty($_POST['nombre'])) {
                $nombre = $_POST['nombre'];
            }
            else {
                $nombre = 'No se ha recibido ningún valor para el nombre';
            }
            echo "<b>Nombre: </b>". $nombre. "<br/>";
            // Clave
            if (!empty($_POST['clave'])) {
                $clave = $_POST['clave'];
            }
            else {
                $clave = 'No se ha recibido ningún valor para la clave';
            }
            echo "<b>Clave: </b>". $clave. "<br/>";
            // Oculto
            if (!empty($_POST['oculto'])) {
                $oculto = $_POST['oculto'];
            }
            else {
                $oculto = 'No se ha recibido ningún valor para oculto';
            }
            echo "<b>Oculto: </b>". $oculto. "<br/>";
            // Colores
            if (isset($_POST['colores'])) {
                $colores = '';
                foreach ($_POST['colores'] as $seleccion) {
                    $colores = $colores. $seleccion;
                }
            }
            else {
                $colores = 'No se ha recibido ningún valor para género';
            }
            echo "<b>Colores: </b>". $colores. "<br/>";
            // Publicidad
            if (isset($_POST['publicidad'])) {
                $publicidad = $_POST['publicidad'];
            }
            else {
                $publicidad = 'No se ha recibido ningún valor para publicidad';
            }
            echo "<b>Publicidad: </b>". $publicidad. "<br/>";
            // Fecha de nacimiento
            if (isset($_POST['fechaNacimiento'])) {
                $fechaNacimiento = $_POST['fechaNacimiento'];
            }
            else {
                $fechaNacimiento = 'No se ha recibido ningún valor para la fecha de nacimiento';
            }
            echo "<b>Fecha de nacimiento: </b>". $fechaNacimiento. "<br/>";
            // Ciudades
            if (isset($_POST['ciudades'])) {
                $ciudades = '';
                foreach ($_POST['ciudades'] as $seleccion) {
                    $ciudades = $ciudades. $seleccion. ' ';
                }
            }
            else {
                $ciudades = 'No se ha recibido ningún valor para ciudades';
            }
            echo "<b>Ciudades: </b>". $ciudades. "<br/>";
            // Idiomas
            if (isset($_POST['idiomas'])) {
                $idiomas = '';
                foreach ($_POST['idiomas'] as $seleccion) {
                    $idiomas = $idiomas. $seleccion. ' ';
                }
            }
            else {
                $idiomas = 'No se ha recibido ningún valor para el país';
            }
            echo "<b>Idiomas: </b> ". $idiomas. "<br/>";
            // Acepto
            if (isset($_POST['acepto'])) {
                $acepto = $_POST['acepto'];
            }
            else {
                $acepto = 'No se ha recibido ningún valor para acepto';
            }
            echo "<b>Acepto: </b>". $acepto. "<br/>";
            // Comentarios
            if (!empty($_POST['comentarios'])) {
                $comentarios = $_POST['comentarios'];
            }
            else {
                $comentarios = 'No se ha recibido ningún valor para comentarios';
            }
            echo "<b>Comentarios: </b>". $comentarios. "<br/>";
            // Archivo
            if (!empty($_FILES['foto']['name'])) {
                $archivo = $_FILES['foto']['name'];
                $temporal = $_FILES['foto']['tmp_name'];
                $ruta = 'upload'. '/'. $archivo;
                move_uploaded_file($temporal, $ruta);
            }
            else {
                $ruta = 'No se ha recibido ningún archivo';
            }
            echo "<b>Archivo: </b>". $ruta. "<br/>";
            // Coordenadas
            if (isset($_POST['imagen_x'])) {
                $imagenx = $_POST['imagen_x'];
            }
            // Coordenadas Y
            if (isset($_POST['imagen_y'])) {
                $imageny = $_POST['imagen_y'];
            }
            echo "Imagen: ". $imagenx. ", ". $imageny. "<br/>";
        ?>
    </body>
</html>