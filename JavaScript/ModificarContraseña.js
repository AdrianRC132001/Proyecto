//Llamada de elementos por su ID.
const cambiar = document.getElementById("cambiar");
const password = document.getElementById("password");
const password2 = document.getElementById("password2");
//Errores.
const errorPassword = document.getElementById("errorPassword");
const errorPassword2 = document.getElementById("errorPassword2");
const errorMensaje = document.getElementById("errorMensaje");
errorPassword.style.visibility = "hidden";
errorPassword2.style.visibility = "hidden";
errorMensaje.style.visibility = "hidden";
//Expresiones regulares.
const expresiones = {
	password: /^(?=.*[A-ZÁÉÍÓÚ])(?=.*[a-záéíóú])(?=.*[0-9])\S{8,45}$/,
    password2: /^(?=.*[A-ZÁÉÍÓÚ])(?=.*[a-záéíóú])(?=.*[0-9])\S{8,45}$/
}
const campos = {
	password: false,
    password2: false
}
//Funciones.
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
function validarPassword2()
{
	if(password.value == password2.value)
	{
		document.getElementById("password2").className = "form-control is-valid";
        campos['password2'] = true;
		errorPassword2.style.visibility = "hidden";
	}
	else
	{
		document.getElementById("password2").className = "form-control is-invalid";
        campos['password2'] = false;
		errorPassword2.style.visibility = "visible";
	}
}
function mostrarPassword2()
{
    let visibilidad = document.getElementById("password2");
    if(visibilidad.type == "password")
	{
        visibilidad.type = "text";
        $('.icon2').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    }
	else
	{
        visibilidad.type = "password";
        $('.icon2').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
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
	let cambiar = document.cambiar;	
	if(campos.password && campos.password2)
	{
		cambiar.submit();
	}
	else
	{
		errorMensaje.style.visibility = "visible";
		return false;
	}
}
//Oyentes de eventos.
password.addEventListener("keyup", validarPassword);
password.addEventListener("blur", validarPassword);
password2.addEventListener("keyup", validarPassword2);
password2.addEventListener("blur", validarPassword2);