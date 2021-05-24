//Llamada de elementos por su ID.
const videojuego = document.getElementById("videojuego");
const titulo = document.getElementById("titulo");
const publicacion = document.getElementById("publicacion");
const precio = document.getElementById("precio");
const stock = document.getElementById("stock");
const compania = document.getElementById("compania");
const descripcion = document.getElementById("descripcion");
const caracteres = document.getElementById("caracteres");
//Errores.
const errorTitulo = document.getElementById("errorTitulo");
const errorPublicacion = document.getElementById("errorPublicacion");
const errorPrecio = document.getElementById("errorPrecio");
const errorStock = document.getElementById("errorStock");
const errorCompania = document.getElementById("errorCompania");
const errorDescripcion = document.getElementById("errorDescripcion");
const errorMensaje = document.getElementById("errorMensaje");
errorTitulo.style.visibility = "hidden";
errorPublicacion.style.visibility = "hidden";
errorPrecio.style.visibility = "hidden";
errorStock.style.visibility = "hidden";
errorCompania.style.visibility = "hidden";
errorDescripcion.style.visibility = "hidden";
errorMensaje.style.visibility = "hidden";
//Expresiones regulares.
const expresiones = {
	titulo: /^.{1,45}$/,
    publicacion: /^.+$/,
	precio: /^.+$/,
    stock: /^[0-9]+$/,
    compania: /^.{1,45}$/
}
const campos = {
	titulo: false,
    publicacion: false,
	precio: false,
    stock: false,
    compania: false
}
//Funciones.
function validarTitulo()
{
	if(expresiones.titulo.test(titulo.value))
	{
		document.getElementById("titulo").className = "form-control is-valid";
		campos['titulo'] = true;
		errorTitulo.style.visibility = "hidden";
	}
	else
	{
		document.getElementById("titulo").className = "form-control is-invalid";
		campos['titulo'] = false;
		errorTitulo.style.visibility = "visible";
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
	let videojuego = document.videojuego;	
	if(campos.titulo && campos.publicacion && campos.precio && campos.stock && campos.compania)
	{
		videojuego.submit();
	}
	else
	{
		errorMensaje.style.visibility = "visible";
		return false;
	}
}
function contarCaracteres()
{
	caracteres.innerHTML = 1000 - descripcion.value.length + "/1000 carácteres restantes.";
	if(descripcion.value.length == 1000)
	{
		document.getElementById("caracteres").className = "amarillo";
	}
	else
	{
		document.getElementById("caracteres").className = "rojo";
	}
}
validarTitulo();
validarPublicacion();
validarPrecio();
validarStock();
validarCompania();
contarCaracteres();
//Oyentes de eventos.
titulo.addEventListener("keyup", validarTitulo);
titulo.addEventListener("blur", validarTitulo);
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