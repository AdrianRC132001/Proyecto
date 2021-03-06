//Llamada de elementos por su ID.
const register = document.getElementById("register");
const nick = document.getElementById("nick");
const eMail = document.getElementById("eMail");
const password = document.getElementById("password");
const password2 = document.getElementById("password2");
const nombre = document.getElementById("nombre");
const apellido1 = document.getElementById("apellido1");
const apellido2 = document.getElementById("apellido2");
const telefono = document.getElementById("telefono");
const dni = document.getElementById("dni");
const cp = document.getElementById("cp");
const ca = document.getElementById("ca");
const provincia = document.getElementById("provincia");
const terminos = document.getElementById("terminos");
const descripcion = document.getElementById("descripcion");
const caracteres = document.getElementById("caracteres");
const direccion = document.getElementById("direccion");
const fechaNacimiento = document.getElementById("fechaNacimiento");
//Errores.
const errorNick = document.getElementById("errorNick");
const errorEMail = document.getElementById("errorEMail");
const errorPassword = document.getElementById("errorPassword");
const errorPassword2 = document.getElementById("errorPassword2");
const errorNombre = document.getElementById("errorNombre");
const errorApellido1 = document.getElementById("errorApellido1");
const errorApellido2 = document.getElementById("errorApellido2");
const errorTelefono = document.getElementById("errorTelefono");
const errorDNI = document.getElementById("errorDNI");
const errorCP = document.getElementById("errorCP");
const errorCA = document.getElementById("errorCA");
const errorProvincia = document.getElementById("errorProvincia");
const errorDescripcion = document.getElementById("errorDescripcion");
const errorDireccion = document.getElementById("errorDireccion");
const errorFechaDeNacimiento = document.getElementById("errorFechaDeNacimiento");
const errorMensaje = document.getElementById("errorMensaje");
errorNick.style.visibility = "hidden";
errorEMail.style.visibility = "hidden";
errorPassword.style.visibility = "hidden";
errorPassword2.style.visibility = "hidden";
errorNombre.style.visibility = "hidden";
errorApellido1.style.visibility = "hidden";
errorApellido2.style.visibility = "hidden";
errorTelefono.style.visibility = "hidden";
errorDNI.style.visibility = "hidden";
errorCP.style.visibility = "hidden";
errorCA.style.visibility = "hidden";
errorProvincia.style.visibility = "hidden";
errorDescripcion.style.visibility = "hidden";
errorDireccion.style.visibility = "hidden";
errorFechaDeNacimiento.style.visibility = "hidden";
errorMensaje.style.visibility = "hidden";
//Expresiones regulares.
const expresiones = {
	nick: /^[.\S]{1,45}$/,
    eMail: /^[.\S]+@[.\S]+\.[.\S]+$/,
	password: /^(?=.*[A-Z??????????])(?=.*[a-z??????????])(?=.*[0-9])\S{8,45}$/,
    password2: /^(?=.*[A-Z??????????])(?=.*[a-z??????????])(?=.*[0-9])\S{8,45}$/,
    nombre: /^[\D]{1,45}$/,
    apellido1: /^[\D]{1,45}$/,
    apellido2: /^[\D]{1,45}$/,
    telefono: /^.{1,45}$/,
	dni: /^[0-9]{8}[a-zA-Z]$/,
    cp: /^[0-9]{5}$/,
    ca: /^.\D{1,45}$/,
    provincia: /^.\D{1,45}$/,
	direccion: /^.{1,45}$/,
	fechaNacimiento: /^.+$/
}
const campos = {
	nick: false,
    eMail: false,
	password: false,
    password2: false,
    nombre: false,
    apellido1: false,
    apellido2: false,
    telefono: false,
	dni: false,
    cp: false,
    ca: false,
    provincia: false,
	direccion: false,
	fechaNacimiento: false
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
function validarEMail()
{
	if(expresiones.eMail.test(eMail.value))
	{
        document.getElementById("eMail").className = "form-control is-valid";
		campos['eMail'] = true;
		errorEMail.style.visibility = "hidden";
	}
	else
	{
        document.getElementById("eMail").className = "form-control is-invalid";
		campos['eMail'] = false;
		errorEMail.style.visibility = "visible";
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
    //Bot??n mostrar contrase??a.
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
    //Bot??n mostrar contrase??a.
    $('#ShowPassword').click(function()
	{
    	$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
function validarNombre()
{
    nombre.value = nombre.value.charAt(0).toUpperCase() + nombre.value.slice(1);
	if(expresiones.nombre.test(nombre.value))
	{
		document.getElementById("nombre").className = "form-control is-valid";
		campos['nombre'] = true;
		errorNombre.style.visibility = "hidden";
	}
	else
	{
		document.getElementById("nombre").className = "form-control is-invalid";
		campos['nombre'] = false;
		errorNombre.style.visibility = "visible";
	}
}
function validarApellido1()
{
    apellido1.value = apellido1.value.charAt(0).toUpperCase() + apellido1.value.slice(1);
	if(expresiones.apellido1.test(apellido1.value))
	{
		document.getElementById("apellido1").className = "form-control is-valid";
		campos['apellido1'] = true;
		errorApellido1.style.visibility = "hidden";
	}
	else
	{
		document.getElementById("apellido1").className = "form-control is-invalid";
		campos['apellido1'] = false;
		errorApellido1.style.visibility = "visible";
	}
}
function validarApellido2()
{
    apellido2.value = apellido2.value.charAt(0).toUpperCase() + apellido2.value.slice(1);
	if(expresiones.apellido2.test(apellido2.value))
	{
		document.getElementById("apellido2").className = "form-control is-valid";
		campos['apellido2'] = true;
		errorApellido2.style.visibility = "hidden";
	}
	else
	{
		document.getElementById("apellido2").className = "form-control is-invalid";
		campos['apellido2'] = false;
		errorApellido2.style.visibility = "visible";
	}
}
function validarTelefono()
{
	if(expresiones.telefono.test(telefono.value))
	{
		document.getElementById("telefono").className = "form-control is-valid";
		campos['telefono'] = true;
		errorTelefono.style.visibility = "hidden";
	}
	else
	{
		document.getElementById("telefono").className = "form-control is-invalid";
		campos['telefono'] = false;
		errorTelefono.style.visibility = "visible";
	}
}
function validarDNI()
{
	let n;
  	let l;
  	let letra;
  	let dNI = dni.value;
  	dni.value = dni.value.slice(0, 8) + dni.value.charAt(8).toUpperCase();
  	if(expresiones.dni.test(dNI) == true)
  	{
     	n = dNI.substr(0, dNI.length -1);
     	l = dNI.substr(dNI.length -1, 1);
     	n = n % 23;
     	letra = "TRWAGMYFPDXBNJZSQVHLCKET";
     	letra = letra.substring(n, n + 1);
    	if(letra != l.toUpperCase())
    	{
            document.getElementById("dni").className = "form-control is-invalid";
    		campos['dni'] = false;
       		errorDNI.style.visibility = "visible";
    	}
    	else
    	{
            document.getElementById("dni").className = "form-control is-valid";
    		campos['dni'] = true;
       		errorDNI.style.visibility = "hidden";
    	}
  	}
  	else
  	{
        document.getElementById("dni").className = "form-control is-invalid";
  		campos['dni'] = false;
     	errorDNI.style.visibility = "visible";
   	}
}
function validarCP1(cPostal)
{
    let provincias = {
        1: "??lava", 2: "Albacete", 3: "Alicante", 4: "Almer??a", 5: "??vila",
        6: "Badajoz", 7: "Islas Baleares", 08: "Barcelona", 09: "Burgos", 10: "C??ceres",
        11: "C??diz", 12: "Castell??n", 13: "Ciudad Real", 14: "C??rdoba", 15: "La Coru??a",
        16: "Cuenca", 17: "Gerona", 18: "Granada", 19: "Guadalajara", 20: "Guip??zcoa",
        21: "Huelva", 22: "Huesca", 23: "Ja??n", 24: "Le??n", 25: "L??rida",
        26: "La Rioja", 27: "Lugo", 28: "Madrid", 29: "M??laga", 30: "Murcia",
        31: "Navarra", 32: "Orense", 33: "Asturias", 34: "Palencia", 35: "Las Palmas de Gran Canaria",
        36: "Pontevedra", 37: "Salamanca", 38: "Santa Cruz de Tenerife", 39: "Cantabria", 40: "Segovia",
        41: "Sevilla", 42: "Soria", 43: "Tarragona", 44: "Teruel", 45: "Toledo",
        46: "Valencia", 47: "Valladolid", 48: "Vizcaya", 49: "Zamora", 50: "Zaragoza",
        51: "Ceuta", 52: "Melilla"
    };
    if(cPostal.length == 5 && cPostal <= 52999 && cPostal >= 1000)
    {
        return provincias[parseInt(cPostal.substring(0, 2))];
    }
    if(expresiones.cp.test(cp.value))
    {
        document.getElementById("cp").className = "form-control is-valid";
    	campos['cp'] = true;
       	errorCP.style.visibility = "hidden";
    }
    else
    {
        document.getElementById("cp").className = "form-control is-invalid";
  		campos['cp'] = false;
     	errorCP.style.visibility = "visible";
    }
}
function validarCP2(cPostal)
{
    let comunidades = {
        1: "Pa??s Vasco", 2: "Castilla-La Mancha", 3: "Comunidad Valenciana", 4: "Andaluc??a", 5: "Castilla y Le??n",
        6: "Extremadura", 7: "Islas Baleares", 08: "Catalu??a", 09: "Castilla y Le??n", 10: "Extremadura",
        11: "Andaluc??a", 12: "Comunidad Valenciana", 13: "Castilla-La Mancha", 14: "Andaluc??a", 15: "Galicia",
        16: "Castilla-La Mancha", 17: "Catalu??a", 18: "Andaluc??a", 19: "Castilla-La Mancha", 20: "Pa??s Vasco",
        21: "Andaluc??a", 22: "Arag??n", 23: "Andaluc??a", 24: "Castilla y Le??n", 25: "Catalu??a",
        26: "La Rioja", 27: "Galicia", 28: "Madrid", 29: "Andaluc??a", 30: "Murcia",
        31: "Navarra", 32: "Galicia", 33: "Asturias", 34: "Castilla y Le??n", 35: "Islas Canarias",
        36: "Galicia", 37: "Castilla y Le??n", 38: "Islas Canarias", 39: "Cantabria", 40: "Castilla y Le??n",
        41: "Andaluc??a", 42: "Castilla y Le??n", 43: "Catalu??a", 44: "Arag??n", 45: "Castilla-La Mancha",
        46: "Comunidad Valenciana", 47: "Castilla y Le??n", 48: "Pa??s Vasco", 49: "Castilla y Le??n", 50: "Arag??n",
        51: "Ceuta", 52: "Melilla"
    };
    if(cPostal.length == 5 && cPostal <= 52999 && cPostal >= 1000)
    {
        return comunidades[parseInt(cPostal.substring(0, 2))];
    }
    if(expresiones.cp.test(cp.value))
    {
        document.getElementById("cp").className = "form-control is-valid";
    	campos['cp'] = true;
       	errorCP.style.visibility = "hidden";
    }
    else
    {
        document.getElementById("cp").className = "form-control is-invalid";
  		campos['cp'] = false;
     	errorCP.style.visibility = "visible";
    }
}
let inputCP = document.getElementById("cp");
inputCP.onkeyup = function()
{
    document.getElementById("provincia").value = validarCP1(inputCP.value);
    document.getElementById("ca").value = validarCP2(inputCP.value);
}
function validarCA()
{
    ca.value = ca.value.charAt(0).toUpperCase() + ca.value.slice(1);
	if(expresiones.ca.test(ca.value))
	{
		document.getElementById("ca").className = "form-control is-valid";
		campos['ca'] = true;
		errorCA.style.visibility = "hidden";
	}
	else
	{
		document.getElementById("ca").className = "form-control is-invalid";
		campos['ca'] = false;
		errorCA.style.visibility = "visible";
	}
}
function validarProvincia()
{
    provincia.value = provincia.value.charAt(0).toUpperCase() + provincia.value.slice(1);
	if(expresiones.provincia.test(provincia.value))
	{
		document.getElementById("provincia").className = "form-control is-valid";
		campos['provincia'] = true;
		errorProvincia.style.visibility = "hidden";
	}
	else
	{
		document.getElementById("provincia").className = "form-control is-invalid";
		campos['provincia'] = false;
		errorProvincia.style.visibility = "visible";
	}
}
function validarDireccion()
{
	if(expresiones.direccion.test(direccion.value))
	{
		document.getElementById("direccion").className = "form-control is-valid";
		campos['direccion'] = true;
		errorDireccion.style.visibility = "hidden";
	}
	else
	{
		document.getElementById("direccion").className = "form-control is-invalid";
		campos['direccion'] = false;
		errorDireccion.style.visibility = "visible";
	}
}
function validarFechaDeNacimiento()
{
	if(expresiones.fechaNacimiento.test(fechaNacimiento.value))
	{
		document.getElementById("fechaNacimiento").className = "form-control is-valid";
		campos['fechaNacimiento'] = true;
		errorFechaDeNacimiento.style.visibility = "hidden";
	}
	else
	{
		document.getElementById("fechaNacimiento").className = "form-control is-invalid";
		campos['fechaNacimiento'] = false;
		errorFechaDeNacimiento.style.visibility = "visible";
	}
}
function validarFormulario()
{
	let register = document.register;	
	if(campos.nick && campos.eMail && campos.password && campos.password2 && campos.nombre && campos.apellido1 && campos.apellido2 && campos.telefono && campos.dni && campos.cp && campos.ca && campos.provincia && campos.direccion && campos.fechaNacimiento && terminos.checked)
	{
		register.submit();
	}
	else
	{
		errorMensaje.style.visibility = "visible";
		return false;
	}
}
function contarCaracteres()
{
	caracteres.innerHTML = 1000 - descripcion.value.length + "/1000 car??cteres restantes.";
	if(descripcion.value.length == 1000)
	{
		document.getElementById("caracteres").className = "amarillo";
	}
	else
	{
		document.getElementById("caracteres").className = "rojo";
	}
}
contarCaracteres();
//Oyentes de eventos.
nick.addEventListener("keyup", validarNick);
nick.addEventListener("blur", validarNick);
eMail.addEventListener("keyup", validarEMail);
eMail.addEventListener("blur", validarEMail);
password.addEventListener("keyup", validarPassword);
password.addEventListener("blur", validarPassword);
password2.addEventListener("keyup", validarPassword2);
password2.addEventListener("blur", validarPassword2);
nombre.addEventListener("keyup", validarNombre);
nombre.addEventListener("blur", validarNombre);
apellido1.addEventListener("keyup", validarApellido1);
apellido1.addEventListener("blur", validarApellido1);
apellido2.addEventListener("keyup", validarApellido2);
apellido2.addEventListener("blur", validarApellido2);
telefono.addEventListener("keyup", validarTelefono);
telefono.addEventListener("blur", validarTelefono);
dni.addEventListener("keyup", validarDNI);
dni.addEventListener("blur", validarDNI);
cp.addEventListener("keyup", validarCP1);
cp.addEventListener("blur", validarCP1);
cp.addEventListener("click", validarCP1);
cp.addEventListener("keyup", validarCP2);
cp.addEventListener("blur", validarCP2);
cp.addEventListener("click", validarCP2);
ca.addEventListener("keyup", validarCA);
ca.addEventListener("blur", validarCA);
cp.addEventListener("keyup", validarCA);
cp.addEventListener("blur", validarCA);
provincia.addEventListener("keyup", validarProvincia);
provincia.addEventListener("blur", validarProvincia);
cp.addEventListener("keyup", validarProvincia);
cp.addEventListener("blur", validarProvincia);
descripcion.addEventListener("keyup", contarCaracteres);
descripcion.addEventListener("blur", contarCaracteres);
direccion.addEventListener("keyup", validarDireccion);
direccion.addEventListener("blur", validarDireccion);
fechaNacimiento.addEventListener("keyup", validarFechaDeNacimiento);
fechaNacimiento.addEventListener("blur", validarFechaDeNacimiento);