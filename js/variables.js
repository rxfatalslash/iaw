var v1 = 4;
var v2 = "pepa";
var v3 = true;
var empleado = {nombre:"Pepe", edad:35};
var paises = ["es", "it", "fr"];
var fecha = new Date();
var nada = null;
var x;

document.write("<table><thead><th>v1</th><th>v2</th><th>v3</th><th>empleado</th><th>paises</th><th>fecha</th><th>nada</th><th>x</th></thead><tbody><tr><td>" + typeof v1 + "</td><td>" + typeof v2 + "</td><td>" + typeof v3 + "</td><td>" + typeof empleado + "</td><td>" + typeof paises + "</td><td>" + typeof fecha + "</td><td>" + typeof nada + "</td><td>" + typeof x + "</td></tr></tbody></table>");

var valores = [true, 5, false, "hola", "adios", 2];
var long1 = valores[3].length;
var long2 = valores[4].length;

if (valores[3] > valores[4]) {
    document.write(valores[3] + " es mayor que " + valores[4]);
}
else {
    document.write(valores[4] + " es mayor que " + valores[3]);
}

document.write("<br>");

if (long1 > long2) {
    document.write(valores[3] + " es mayor que " + valores[4]);
}
else {
    document.write(valores[4] + " es mayor que " + valores[3]);
}

document.write("<br>");

function contar() {
    var count = 0;
    for (i in valores) {
        if (typeof valores[i] == "string") {
            count++;
        }
    }
    document.write("Hay " + count + " cadenas de texto");
}

var valores = [4, "pepe", true, 34, "que pasa con el ejercicio anterior?", false, 23, "nusé", 2, true]

contar();