//Llamada de elementos por su ID.
const mapa = document.getElementById("mapa");
const nombre = document.getElementById("nombre");
const plataforma = document.getElementById("plataforma");
const videojuego = document.getElementById("videojuego");
const historia = document.getElementById("historia");
const dlc = document.getElementById("dlc");
const publicacion = document.getElementById("publicacion");
const precio = document.getElementById("precio");
const stock = document.getElementById("stock");
const compania = document.getElementById("compania");
const descripcion = document.getElementById("descripcion");
const caracteres = document.getElementById("caracteres");
//Errores.
const errorNombre = document.getElementById("errorNombre");
const errorPlataforma = document.getElementById("errorPlataforma");
const errorVideojuego = document.getElementById("errorVideojuego");
const errorHistoria = document.getElementById("errorHistoria");
const errorDLC = document.getElementById("errorDLC");
const errorPublicacion = document.getElementById("errorPublicacion");
const errorPrecio = document.getElementById("errorPrecio");
const errorStock = document.getElementById("errorStock");
const errorCompania = document.getElementById("errorCompania");
const errorDescripcion = document.getElementById("errorDescripcion");
const errorMensaje = document.getElementById("errorMensaje");
errorNombre.style.visibility = "hidden";
errorPlataforma.style.visibility = "hidden";
errorVideojuego.style.visibility = "hidden";
errorHistoria.style.visibility = "hidden";
errorDLC.style.visibility = "hidden";
errorPublicacion.style.visibility = "hidden";
errorPrecio.style.visibility = "hidden";
errorStock.style.visibility = "hidden";
errorCompania.style.visibility = "hidden";
errorDescripcion.style.visibility = "hidden";
errorMensaje.style.visibility = "hidden";
//Expresiones regulares.
const expresiones = {
	nombre: /^.{1,45}$/,
	plataforma: /^.{1,45}$/,
	videojuego: /^.{1,45}$/,
	historia: /^.{1,45}$/,
    dlc: /^.{1,45}$/,
    publicacion: /^.+$/,
	precio: /^.+$/,
    stock: /^[0-9]+$/,
    compania: /^.{1,45}$/
}
const campos = {
	nombre: false,
	plataforma: false,
	videojuego: false,
	historia: false,
    dlc: false,
    publicacion: false,
	precio: false,
    stock: false,
    compania: false
}
//Funciones.
function validarNombre()
{
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
function validarPlataforma()
{
	if(expresiones.plataforma.test(plataforma.value))
	{
		document.getElementById("plataforma").className = "form-control is-valid";
		campos['plataforma'] = true;
		errorPlataforma.style.visibility = "hidden";
	}
	else
	{
		document.getElementById("plataforma").className = "form-control is-invalid";
		campos['plataforma'] = false;
		errorPlataforma.style.visibility = "visible";
	}
}
function validarVideojuego()
{
	if(expresiones.videojuego.test(videojuego.value))
	{
		document.getElementById("videojuego").className = "form-control is-valid";
		campos['videojuego'] = true;
		errorVideojuego.style.visibility = "hidden";
	}
	else
	{
		document.getElementById("videojuego").className = "form-control is-invalid";
		campos['videojuego'] = false;
		errorVideojuego.style.visibility = "visible";
	}
}
function validarHistoria()
{
	if(expresiones.historia.test(historia.value))
	{
		document.getElementById("historia").className = "form-control is-valid";
		campos['historia'] = true;
		errorHistoria.style.visibility = "hidden";
	}
	else
	{
		document.getElementById("historia").className = "form-control is-invalid";
		campos['historia'] = false;
		errorHistoria.style.visibility = "visible";
	}
}
function validarDLC()
{
	if(expresiones.dlc.test(dlc.value))
	{
		document.getElementById("dlc").className = "form-control is-valid";
		campos['dlc'] = true;
		errorDLC.style.visibility = "hidden";
	}
	else
	{
		document.getElementById("dlc").className = "form-control is-invalid";
		campos['dlc'] = false;
		errorDLC.style.visibility = "visible";
	}
}
function validarPublicacion()
{
	if(expresiones.publicacion.test(publicacion.value))
	{
		document.getElementById("publicacion").className = "form-control is-valid";
		campos['publicacion'] = true;
		errorPublicacion.style.visibility = "hidden";
	}
	else
	{
		document.getElementById("publicacion").className = "form-control is-invalid";
		campos['publicacion'] = false;
		errorPublicacion.style.visibility = "visible";
	}
}
function validarPrecio()
{
	if(expresiones.precio.test(precio.value))
	{
		document.getElementById("precio").className = "form-control is-valid";
		campos['precio'] = true;
		errorPrecio.style.visibility = "hidden";
	}
	else
	{
		document.getElementById("precio").className = "form-control is-invalid";
		campos['precio'] = false;
		errorPrecio.style.visibility = "visible";
	}
}
function validarStock()
{
	if(expresiones.stock.test(stock.value))
	{
		document.getElementById("stock").className = "form-control is-valid";
		campos['stock'] = true;
		errorStock.style.visibility = "hidden";
	}
	else
	{
		document.getElementById("stock").className = "form-control is-invalid";
		campos['stock'] = false;
		errorStock.style.visibility = "visible";
	}
}
function validarCompania()
{
	if(expresiones.compania.test(compania.value))
	{
		document.getElementById("compania").className = "form-control is-valid";
		campos['compania'] = true;
		errorCompania.style.visibility = "hidden";
	}
	else
	{
		document.getElementById("compania").className = "form-control is-invalid";
		campos['compania'] = false;
		errorCompania.style.visibility = "visible";
	}
}
function validarFormulario()
{
	let mapa = document.mapa;	
	if(campos.nombre && campos.plataforma && campos.videojuego && campos.historia && campos.dlc && campos.publicacion && campos.precio && campos.stock && campos.compania)
	{
		mapa.submit();
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
validarNombre();
validarPlataforma();
validarVideojuego();
validarHistoria();
validarDLC();
validarPublicacion();
validarPrecio();
validarStock();
validarCompania();
contarCaracteres();
//Oyentes de eventos.
nombre.addEventListener("keyup", validarNombre);
nombre.addEventListener("blur", validarNombre);
plataforma.addEventListener("keyup", validarPlataforma);
plataforma.addEventListener("blur", validarPlataforma);
videojuego.addEventListener("keyup", validarVideojuego);
videojuego.addEventListener("blur", validarVideojuego);
historia.addEventListener("keyup", validarHistoria);
historia.addEventListener("blur", validarHistoria);
dlc.addEventListener("keyup", validarDLC);
dlc.addEventListener("blur", validarDLC);
publicacion.addEventListener("keyup", validarPublicacion);
publicacion.addEventListener("blur", validarPublicacion);
precio.addEventListener("keyup", validarPrecio);
precio.addEventListener("blur", validarPrecio);
precio.addEventListener("click", validarPrecio);
stock.addEventListener("keyup", validarStock);
stock.addEventListener("blur", validarStock);
stock.addEventListener("click", validarStock);
compania.addEventListener("keyup", validarCompania);
compania.addEventListener("blur", validarCompania);
descripcion.addEventListener("keyup", contarCaracteres);
descripcion.addEventListener("blur", contarCaracteres);