function validar() {
    // Nombre
    let nombre = document.getElementsByName('nombre').value;
    if (nombre == null || nombre == "") {
        alert("Añade un nombre");
    }

    // Contraseña
    let clave = document.getElementsByName('clave').value;
    if (clave == null || clave == "") {
        alert("Añade una contraseña");
    }

    // Género
    let gen_selected = false;
    let generos = document.getElementsByName('genero');
    for (let genero of generos) {
        if (genero.checked) {
            gen_selected = true;
        }
    }

    if (!gen_selected) {
        alert("Selecciona un género");
    }

    // Fecha de nacimiento
    let fecha = document.getElementsByName('fecha').value;
    if (fecha == null || fecha == "") {
        alert("Introduce una fecha");
    }

    // País
    let pais = document.getElementsByName('pais').value;
    if (pais == null || pais == "") {
        alert("Elige un país");
    }
}