function validar() {
    var errores;

    var name = document.forms["fdatos"]["nombre"].value;
    if (name == null || name == "") {
        errores = "Debes proporcionar un nombre";
    }
    
    var password = document.forms["fdatos"]["clave"].value;
    if (password == null || password == "") {
        clave = errores + "<br>Debes proporcionar una contraseña";
    }

    var genre = document.forms["fdatos"]["genero"].value;
    if (genre == null || genre == "") {
        errores = errores + "<br>Debes seleccionar un género";
    }

    var birthDate = document.forms["fdatos"]["fechaNacimiento"];
    if (birthDate == null || birthDate == "") {
        errores = errores + "<br>Debes seleccionar una fecha de nacimiento";
    }

    var country = document.forms["fdatos"]["pais"].value;
    if (country == null || country == "") {
        errores = errores + "<br>Debes seleccionar un país"
    }

    var accept = document.forms["fdatos"]["acepto"].value;
    if (accept == null || accept == "") {
        errores = errores + "<br>Debes escoger si quieres publicidad";
    }

    var comments = document.forms["fdatos"]["comentarios"].value;
    if (comments == null || comments == "") {
        errores = errores + "<br>No se han recibido comentarios";
    }

    var file = document.forms["fdatos"]["foto"].value;
    if (file == null || file == "") {
        errores = errores + "<br>No se ha recibido ninguna foto";
    }

    alert(errores);
}