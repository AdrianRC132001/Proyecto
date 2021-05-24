//Llamada de elementos por su ID.
const plataforma = document.getElementById("plataforma");
const nombre = document.getElementById("nombre");
const lanzamiento = document.getElementById("lanzamiento");
const precio = document.getElementById("precio");
const stock = document.getElementById("stock");
const compania = document.getElementById("compania");
const descripcion = document.getElementById("descripcion");
const caracteres = document.getElementById("caracteres");
//Errores.
const errorNombre = document.getElementById("errorNombre");
const errorLanzamiento = document.getElementById("errorLanzamiento");
const errorPrecio = document.getElementById("errorPrecio");
const errorStock = document.getElementById("errorStock");
const errorCompania = document.getElementById("errorCompania");
const errorDescripcion = document.getElementById("errorDescripcion");
const errorMensaje = document.getElementById("errorMensaje");
errorNombre.style.visibility = "hidden";
errorLanzamiento.style.visibility = "hidden";
errorPrecio.style.visibility = "hidden";
errorStock.style.visibility = "hidden";
errorCompania.style.visibility = "hidden";
errorDescripcion.style.visibility = "hidden";
errorMensaje.style.visibility = "hidden";
//Expresiones regulares.
const expresiones = {
	nombre: /^.{1,45}$/,
    lanzamiento: /^.+$/,
	precio: /^.+$/,
    stock: /^[0-9]+$/,
    compania: /^.{1,45}$/
}
const campos = {
	nombre: false,
    lanzamiento: false,
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
function validarLanzamiento()
{
	if(expresiones.lanzamiento.test(lanzamiento.value))
	{
		document.getElementById("lanzamiento").className = "form-control is-valid";
		campos['lanzamiento'] = true;
		errorLanzamiento.style.visibility = "hidden";
	}
	else
	{
		document.getElementById("lanzamiento").className = "form-control is-invalid";
		campos['lanzamiento'] = false;
		errorLanzamiento.style.visibility = "visible";
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
	let plataforma = document.plataforma;	
	if(campos.nombre && campos.lanzamiento && campos.precio && campos.stock && campos.compania)
	{
		plataforma.submit();
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
contarCaracteres();
//Oyentes de eventos.
nombre.addEventListener("keyup", validarNombre);
nombre.addEventListener("blur", validarNombre);
lanzamiento.addEventListener("keyup", validarLanzamiento);
lanzamiento.addEventListener("blur", validarLanzamiento);
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