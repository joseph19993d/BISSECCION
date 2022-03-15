"use strick";
/* 
METODO DE BISECCION
*/

let salida= document.getElementById("salida");

let calcular= document.getElementById("calcular");//boton


/* 
INICIO EVENTO QUE OCURRE CUANDO CLICKEAMOS CALCULAR
*/
function calcularDatos (e){

let funcion= document.getElementById("funcion"); funcion= funcion.value;//.toString();


let tolerancia= document.getElementById("tolerancia"); tolerancia= tolerancia.value;

let lim_inf= document.getElementById("lim_inf"); a= lim_inf.value;

let lim_sup= document.getElementById("lim_sup"); b= lim_sup.value;


//let longitud=funcion.length;;
//console.log("la longitud es:",longitud);
let m= (a+b)/2;
//funcion= Math.exp(2)*2;

console.log("funcion es",funcion);

//INICIO METODO REMPLAZAR
for(let i=0;i<=longitud; i++){
funcion= funcion.replace("exp","010");
funcion= funcion.replace("x",m);
console.log("H1");
}
for(let i=0;i<=longitud; i++){

    funcion= funcion.replace("010","exp");
}

//FIN METODO REMPLAZAR 

console.log("funcion es",funcion);
funcion= funcion*m;
let r= "Math.exp(3)*2";

let c= r*3;
console.log("funcion es",funcion);
salida.innerHTML=c;

e.preventDefault();

}
/* 
FIN EVENTO QUE OCURRE CUANDO CLICKEAMOS CALCULAR
*/




calcular.addEventListener("click",calcularDatos);//SABE SI CLIKEAMOS Y EJECUTA EL METODO CORRESPONDIENTE 
