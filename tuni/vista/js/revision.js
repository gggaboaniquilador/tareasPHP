
function vacio(element) {
verificador=element.value;
if(verificador != null && verificador.length !=0){
	element.style.background='green';
	return true;
}
else{
	element.style.background='red';
	return false;
}
function(){
	var formulario= document.getElementByName('formulario')[0];
		elementos= formulario.elements;
		boton = document.getElementByid('btn');
	var validarusr = function(){
		if(formulario.usr.value == 0){
			alert("Completa el campo Usuario");
		}
	}
	var validar = function(){
		validarusr();
	}
	formulario.addEventListener("submit",validar);
}