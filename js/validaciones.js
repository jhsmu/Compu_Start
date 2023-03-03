function nombre1() {
    let nombre = document.getElementById("nombre").value;
    let RegEx = /^[A-ZÑa-zñáéíóúÁÉÍÓÚ'° ]+$/g;

    if (RegEx.test(nombre) == true) {
        document.getElementById("nombre").style.borderColor = "#008000";
    } else {
        document.getElementById("nombre").style.borderColor = "#FF0000";
        Swal.fire({
            icon: 'info',
            title: 'Por Favor',
            text: 'Evite el uso de números y caracteres especiales(,.;{}[])',
            });
        document.getElementById("nombre").value = "";
        return false;
    }
}
function apellido1() {
    let apellido = document.getElementById("apellido").value;
    let RegEx = /^[A-ZÑa-zñáéíóúÁÉÍÓÚ'° ]+$/g;

    if (RegEx.test(apellido) == true) {
        document.getElementById("apellido").style.borderColor = "#008000";
    } else {
        document.getElementById("apellido").style.borderColor = "#FF0000";
        Swal.fire({
            icon: 'info',
            title: 'Por Favor',
            text: 'Evite el uso de números y caracteres especiales(,.;{}[])',
            });
        document.getElementById("apellido").value = "";
    }
}

function direccion1() {
    direccion = document.getElementById("direccion").value;

    document.getElementById("direccion").style.borderColor = "#008000";
    if (document.getElementById("direccion").value == ""){
        document.getElementById("direccion").style.borderColor = "#FF0000";
    }
}

function telefono1() {
    let telefono = document.getElementById("telefono").value;
    let RegEx = /^[0-9]+$/g;

    if (telefono.length == 10 & RegEx.test(telefono) == true) {
        document.getElementById("telefono").style.borderColor = "#008000";
    }else {
        document.getElementById("telefono").style.borderColor = "#FF0000";
        Swal.fire({
            icon: 'info',
            title: 'Por Favor',
            text: 'Ingrese números de 10 digitos',
            });
        document.getElementById("telefono").value = "";
        return false;
    }
}

function correo1() {
    let correo = document.getElementById("email_registro").value;

    if (correo.includes("@") & correo.includes(".")) {
        document.getElementById("email_registro").style.borderColor = "#008000";
    } else {
        document.getElementById("email_registro").style.borderColor = "#FF0000";
        Swal.fire({
            icon: 'info',
            title: 'Por Favor',
            text: 'Ingrese un correo valido añadiendo "@"'
            });
        document.getElementById("email_registro").value = "";
    }
}

function contraseña(){
    let contraseña = document.getElementById("clave").value;

    if(contraseña.length < 8){
        document.getElementById("clave").style.borderColor = "#FF0000";
        Swal.fire({
            icon: 'info',
            title: 'Por Favor',
            text: 'La contraseña debe tener 8 o mas caracteres'
            });
    } else if (/[A-Z]+/.test(contraseña) != true){
        document.getElementById("clave").style.borderColor = "#FF0000";
        Swal.fire({
            icon: 'info',
            title: 'Por Favor',
            text: 'La contraseña tiene que tener al menos una mayuscula'
            });
    } else if (/[a-z]+/.test(contraseña) != true){
        document.getElementById("clave").style.borderColor = "#FF0000";
        Swal.fire({
            icon: 'info',
            title: 'Por Favor',
            text: 'La contraseña tiene que tener al menos una minuscula'
            });
    } else if (/[0-9]+/.test(contraseña) != true){
        document.getElementById("clave").style.borderColor = "#FF0000";
        Swal.fire({
            icon: 'info',
            title: 'Por Favor',
            text: 'La contraseña tiene que tener al menos un número'
            });
    }else{
        document.getElementById("clave").style.borderColor = "#008000";
    }
}

function verificarContraseña(){
    let contraseña = document.getElementById("clave").value;
    let contraseña_c = document.getElementById("clave_c").value;

    if(contraseña === contraseña_c){
        document.getElementById("clave_c").style.borderColor = "#008000";
    }else{
        swal.fire({
            title:'Oops..',
            text: 'Las contraseñas no son iguales',
            icon: 'error'
        });
        document.getElementById("clave_c").value="";
        return false;
    }
}

function comprobar() {
    let nombre = document.getElementById("nombre").value;
    let apellido = document.getElementById("apellido").value;
    let direccion = document.getElementById("direccion").value;
    let telefono = document.getElementById("telefono").value;
    let correo = document.getElementById("email").value;
    let contraseña = document.getElementById("clave").value;
    let contraseña_c = document.getElementById("clave_c").value;


    if (nombre == "" || apellido == "" || direccion == "" || telefono == "" || correo == "" || contraseña == "" || contraseña_c == "") {
        Swal.fire({
            title: "Por favor",
            text: "llene el formulario completamente",
            icon: "info"
        });
        document.getElementById("crear").disabled=true;
        event.preventDefault();
    }else{
        Swal.fire({
            title: "Registro exitoso",
            text: "Ahora puedes iniciar tu sesión",
            icon: "success" 
        })
    }
}