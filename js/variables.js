var v1 = 4;
var v2 = "pepa";
var v3 = true;
var empleado = {nombre:"Pepe", edad:35};
var paises = ["es", "it", "fr"];
var fecha = new Date();
var nada = null;
var x;

// Ejercicio 2
document.write("<table><thead><th>v1</th><th>v2</th><th>v3</th><th>empleado</th><th>paises</th><th>fecha</th><th>nada</th><th>x</th></thead><tbody><tr><td>" + typeof v1 + "</td><td>" + typeof v2 + "</td><td>" + typeof v3 + "</td><td>" + typeof empleado + "</td><td>" + typeof paises + "</td><td>" + typeof fecha + "</td><td>" + typeof nada + "</td><td>" + typeof x + "</td></tr></tbody></table>");

var valores = [true, 5, false, "hola", "adios", 2];
var long1 = valores[3].length;
var long2 = valores[4].length;

// Ejercicio 4
// Ejercicio 4.1
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

// Ejercicio 4.2
if (valores[0] == true && valores[2] == false) {
    document.write(valores[0] + " es true y " + valores[2] + " es false<br>");
}

// Ejercicio 4.3
var suma = valores[1] + valores[5];
var resta = valores[1] - valores[5];
var multi = valores[1] * valores[5];
var div = valores[1] / valores[5];
var mod = valores[1] % valores[5];

document.write("La suma es " + suma + ", la resta es " + resta + ", la multiplicación es " + multi + ", la división es " + div + " y el módulo es " + mod + "<br>");

// Ejercicio 4.5
document.write(valores.sort() + "<br>");

// Ejercicio 5
function contar() {
    var count = 0;
    for (i in valores) {
        if (typeof valores[i] == "string") {
            count++;
        }
    }
    document.write("Hay " + count + " cadenas de texto");
}

function contarTipos() {
    var countStr = 0;
    var countNmb = 0;
    var countBool = 0;
    var countObj = 0;
    var countUnd = 0;
    for (i in valores) {
        if (typeof valores[i] == "string") {
            countStr++;
        }
        else if (typeof valores[i] == "number") {
            countNmb++;
        }
        else if (typeof valores[i] == "boolean") {
            countBool++;
        }
        else if (typeof valores[i] == "object") {
            countObj++;
        }
        else if (typeof valores[i] == "undefined") {
            countUnd++;
        }
    }
    document.write("Hay " + countStr + " strings, " + countNmb + " numbers, " + countBool + " booleans, " + countObj + " objects y " + countUnd + " undefineds");
}

function contarObjeto() {
    var count = 0;
    for (i in valores) {
        count++;
    }
    document.write("Hay " + count + " elementos dentro del objeto");
}

function contarStr() {
    var count = 0;
    for (i in valores) {
        if (typeof valores[i] == "string") {
            count = i;
        }
    }
    for (i = count; i < valores.length; i++) {
        if (typeof valores[i] == "string") {
            count1 = i;
        }
    }

    if (valores[count] > valores[count1]) {
        document.write(valores[count] + " es mayor que " + valores[count1]);
    }
    else {
        document.write(valores[count1] + " es mayor que " + valores[count]);
    }
}

valores = [4, "pepe", true, 34, "que pasa con el ejercicio anterior?", false, 23, "nusé", 2, true];

contar();

document.write("<br>");

contarObjeto();

document.write("<br>");

contarTipos();

document.write("<br>");

contarStr();

document.write("<br>");

var en = document.getElementById("enlace");
en.innerHTML = "Hola";

var pa = document.getElementsByTagName("p");
document.write(pa[0].innerHTML);
document.write(pa[1].innerHTML);

var d = document.getElementsByClassName("porclase");
d[0].innerHTML = ("Ahora ha cambiado");