<html>
    <head>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Estos son sus datos</h1>
        <?php
            // Nombre
            echo "Nombre: ". $_POST['nombre']."<br/>";
            // Oculto
            echo "Oculto: ". $_POST['oculto']."<br/>";
            // Comentarios
            echo "Comentarios: ". $_POST['comentarios']."<br/>";
            // Idioma
            echo "Idioma: ". $_POST['radio']."<br/>";
            // Publicidad
            echo "Publicidad: ". $_POST['publicidad']."<br/>";
            // Medio
            $cadmedio = '';
            foreach ($_POST['medio'] as $seleccion) {
                $cadmedio = $cadmedio. $seleccion. ' ';
            }
            echo "Medio: ". $cadmedio. "<br/>";
            // Año de finalización select simple
            echo "Año de finalización: ". $_POST['fin']."<br/>";
            // Ciudades select múltiple
            $cadciudades = '';
            foreach ($_POST['ciudades'] as $seleccion) {
                $cadciudades = $cadciudades. $seleccion. ' ';
            }
            echo "Ciudades: ". $cadciudades."<br/>";
            // Archivos
            echo "Archivo: ". $_FILES['archivo']['name']."<br/>";
            $nombre = $_FILES['archivo']['name'];
            $temporal = $_FILES['archivo']['tmp_name'];
            $ruta = 'upload'.'/'."$nombre";
            echo 'Temporal: '."$temporal"."<br/>";
            echo 'Ruta: '."$ruta"."<br/>";

            move_uploaded_file($temporal, $ruta);

            var_dump($_POST); var_dump($_FILES);
        ?>
    </body>
</html>