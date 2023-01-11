let v1 = 4;
let v2 = "pepa";
let v3 = true;
let empleado = {nombre:"Pepe", edad:35};
let paises = ["es", "it", "fr"];
let fecha = new Date();
let nada = null;
let x;

document.write("<table><thead><th>v1</th><th>v2</th><th>v3</th><th>empleado</th><th>paises</th><th>fecha</th><th>nada</th><th>x</th></thead><tbody><tr><td>" + typeof v1 + "</td><td>" + typeof v2 + "</td><td>" + typeof v3 + "</td><td>" + typeof empleado + "</td><td>" + typeof paises + "</td><td>" + typeof fecha + "</td><td>" + typeof nada + "</td><td>" + typeof x + "</td></tr></tbody></table>");

let valores = [true, 5, false, "hola", "adios", 2];

if ((valores[3] > valores[4])) {
    document.write(valores[3] + " es mayor que " + valores[4]);
}
else {
    document.write(valores[4] + " es mayor que " + valores[3]);
}

document.write("<br>");

document.write("Tus muertos");