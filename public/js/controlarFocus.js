// document.getElementById("alq").style.backgroundColor = "#527420";

var boton1 = document.getElementById('alq');
boton1.className = 'button1 mb-3';
var boton2 = document.getElementById('comp');
boton2.className = 'button2';
var formu=document.getElementById('formulario');
a=formu.action;
formu.action=a+"?boton=2";//pasar por parametro estado del boton 
function activarAlq(){
    boton1.classList.remove('button1');
    boton1.classList.add('button2');//le pongo estilo oscuro
    boton2.classList.remove('button2');
    formu.action=a+"?boton=1";
    console.log(formu.action);
    boton2.classList.add('button1');//le pongo estilo claro
   
}
function activarComp(){
    boton2.classList.remove('button1');
    boton2.classList.add('button2');//le pongo estilo oscuro 
    boton1.classList.remove('button2');
    boton1.classList.add('button1');//le pongo estilo claro
    formu.action=a+"?boton=2";


}
