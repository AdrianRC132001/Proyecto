//Llamada de elementos por su ID.
const nueva = document.getElementById("nueva");
const eMail = document.getElementById("eMail");
//Errores.
const errorEMail = document.getElementById("errorEMail");
const errorMensaje = document.getElementById("errorMensaje");
errorEMail.style.visibility = "hidden";
errorMensaje.style.visibility = "hidden";
//Expresión regular.
const expresion = {
    eMail: /^[.\S]+@[.\S]+\.[.\S]+$/
}
const campo = {
    eMail: false
}
//Funciones.
function validarEMail()
{
	if(expresion.eMail.test(eMail.value))
	{
        document.getElementById("eMail").className = "form-control is-valid";
		campo['eMail'] = true;
		errorEMail.style.visibility = "hidden";
	}
	else
	{
        document.getElementById("eMail").className = "form-control is-invalid";
		campo['eMail'] = false;
		errorEMail.style.visibility = "visible";
	}
}
function validarFormulario()
{
	let nueva = document.nueva;	
	if(campo.eMail)
	{
		nueva.submit();
	}
	else
	{
		errorMensaje.style.visibility = "visible";
		return false;
	}
}
//Oyentes de eventos.
eMail.addEventListener("keyup", validarEMail);
eMail.addEventListener("blur", validarEMail);