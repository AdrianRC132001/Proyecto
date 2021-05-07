//Llamada de elementos por su ID.
const login = document.getElementById("login");
const nick = document.getElementById("nick");
const password = document.getElementById("password");
//Errores.
const errorNick = document.getElementById("errorNick");
const errorPassword = document.getElementById("errorPassword");
const errorMensaje = document.getElementById("errorMensaje");
errorNick.style.visibility = "hidden";
errorPassword.style.visibility = "hidden";
errorMensaje.style.visibility = "hidden";
//Expresiones regulares.
const expresiones = {
	nick: /^[.\S]{1,45}$/,
	password: /^(?=.*[A-ZÁÉÍÓÚ])(?=.*[a-záéíóú])(?=.*[0-9])\S{8,45}$/
}
const campos = {
	nick: false,
	password: false
}
//Funciones.
function validarNick()
{
	if(expresiones.nick.test(nick.value))
	{
		document.getElementById("nick").className = "form-control is-valid";
		campos['nick'] = true;
		errorNick.style.visibility = "hidden";
	}
	else
	{
		document.getElementById("nick").className = "form-control is-invalid";
		campos['nick'] = false;
		errorNick.style.visibility = "visible";
	}
}
function validarPassword()
{
	if(expresiones.password.test(password.value))
	{
		document.getElementById("password").className = "form-control is-valid";
		campos['password'] = true;
		errorPassword.style.visibility = "hidden";
	}
	else
	{
		document.getElementById("password").className = "form-control is-invalid";
		campos['password'] = false;
		errorPassword.style.visibility = "visible";
	}
}
function mostrarPassword()
{
    let visibilidad = document.getElementById("password");
    if(visibilidad.type == "password")
	{
        visibilidad.type = "text";
        $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    }
	else
	{
        visibilidad.type = "password";
        $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
}
$(document).ready(function()
{
    //Botón mostrar contraseña.
    $('#ShowPassword').click(function()
	{
    	$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
function validarFormulario()
{
	let login = document.login;	
	if(campos.nick && campos.password)
	{
		login.submit();
	}
	else
	{
		errorMensaje.style.visibility = "visible";
		return false;
	}
}
//Oyentes de eventos.
nick.addEventListener("keyup", validarNick);
nick.addEventListener("blur", validarNick);
password.addEventListener("keyup", validarPassword);
password.addEventListener("blur", validarPassword);