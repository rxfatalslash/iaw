function validar() {
    let errores = "";

    // Nombre
    let nomVal = "[A-Za-z]{4}";
    let nombre = document.forms["fdatos"]["nombre"].value;
    if (nombre == null || nombre == "") {
        errores = "Introduce un nombre\n";
    }
    else if (nombre.match(nomVal) == null) {
        alert("El nombre debe tener 4 caracteres de la A a la Z");
    }

    // Contraseña
    let clave = document.forms["fdatos"]["clave"].value;
    if (clave == null || clave == "") {
        errores = errores + "Introduce una contraseña\n";
    }
    else if (clave.length < 6 || clave.length > 12) {
        alert("La contraseña debe tener entre 6 y 12 caracteres");
    }

    let genero = document.forms["fdatos"]["genero"].value;
    if (genero == null || genero == "") {
        errores = errores + "Selecciona un género\n";
    }

    // Fecha de nacimiento
    let fecha = document.forms["fdatos"]["fechaNacimiento"].value;
    if (fecha == null || fecha == "") {
        errores = errores + "Selecciona tu fecha de nacimiento\n";
    }

    // País
    let pais = document.forms["fdatos"]["pais[]"].value;
    if (pais == null || pais == "") {
        errores = errores + "Seleccione uno o más países\n";
    }

    // Afición
    let aficion = document.forms["fdatos"]["aficion"];
    let cont = 0;
    for (i in aficion) {
        if (aficion[i].checked) {
            cont++;
        }
    }
    if (cont == 0 || cont == 1) {
        errores = errores + "Debes seleccionar mínimo dos aficiones\n";
    }

    // Checkbox
    let acepto = document.forms["fdatos"]["aceptar"].value;
    if (acepto == null || acepto == "") {
        errores = errores + "Acepta la publicidad\n";
    }

    // Comentarios
    let comentarios = document.forms["fdatos"]["comentarios"].value;
    if (comentarios == null || comentarios == "") {
        errores = errores + "No se han enviado comentarios\n";
    }

    // Archivo
    let file = document.forms["fdatos"]["foto"].value;
    let type = /(.jpg|.jepg|.png|.gif)$/i;
    if (file == null || file == "") {
        errores = errores + "No se ha enviado ningún archivo";
    }
    else if (file.files[0].size > 450) {
        alert("El archivo pesa mucho");
    }

    if (!errores == null || !errores == "") {
        alert(errores);
    }
}