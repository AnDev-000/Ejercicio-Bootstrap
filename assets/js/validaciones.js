
//variables
const nombre = document.getElementById('nombreInput');
const apellido = document.getElementById('apellidoInput');
const email = document.getElementById('emailInput');
const telefono = document.getElementById('telefonoInput');
const accesoPlat = document.getElementById('accesoCheck')
const comentario = document.getElementById('comentarioTextarea')
var formaPago = document.getElementById('anioIngreso')
const fecha = document.getElementById('fechaInput');
var radios = document.querySelectorAll('input[name=‘clienteContrato’]');
var formulario = document.getElementById('form');
var error = document.getElementById('error');

//Estilo para la advertencia visual errores validacion
error.style.color = 'grey';

//expresiones regulares
const emailExpr = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/; //correo
const telefonoExpr = /^\d+$/; //solo numeros
const fechaExpr = /^\d{2}\/\d{2}\/\d{4}$/; // dd/mm/yyyy
// const fechaExpr = /^([0-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-\d{4}$/;   //dd-mm-yyyy

//se ejecutara cuando se produzca el evento submit
formulario.addEventListener('submit', function(evento){
    
    var mensajesError = [];

    //validar nombre
    if(nombre.value === null || nombre.value === ''){
        //prevenir el comportamiento del submit
        evento.preventDefault();
        //mensaje de error
        mensajesError.push('Debe ingresar el nombre')
    }

    // validar apellido
    if(apellido.value === null || apellido.value === ''){
        evento.preventDefault();
        mensajesError.push('Debe ingresar el apellido')
    }

    //validar correo
    if(!emailExpr.test(email.value)){
        evento.preventDefault();
        mensajesError.push("Ingrese el formato correcto del email")
    }

    //validar telefono
    if(!telefonoExpr.test(telefono.value)){
        evento.preventDefault();
        mensajesError.push("El campo telefono solo se acepta numeros")
    }

    //validar acceso a la plataforma 
    if(!document.querySelector('input[name="accesoPlataforma"]:checked')){
        evento.preventDefault();
        mensajesError.push('Casilla acceso a la plataforma no marcada');
    }

    //validar Contrato cliente
    if(!document.querySelector('input[name="clienteContrato"]:checked')){
        evento.preventDefault();
        mensajesError.push('Contrato cliente pendiente');
    }

    //validar select año ingreso
    if(formaPago.value ==0 || formaPago.value==""){
        evento.preventDefault();
        mensajesError.push('Año de ingreso invalido');
    }

    //validar fecha de nacimiento
    if(!fechaExpr.test(fecha.value)){
        evento.preventDefault();
        mensajesError.push("Debe ingresar la fecha de nacimiento")
    }

    //validar comentario
    if(comentario.value === null || comentario.value === ''){
        evento.preventDefault();
        mensajesError.push('Debe ingresar algun comentario');
    }

    //mensaje error concatenar en array con una coma
    error.innerHTML = mensajesError.join(', ');

}
)

