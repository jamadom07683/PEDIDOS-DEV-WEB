$(document).ready(function(){
 $('.header').height($(window).height());

})

function validar(){
   var miCampo = document.getElementById("name1").value;
    var miTelefono = document.getElementById("numer").value;
    var miCorreo = document.getElementById("correo").value;
    var miMensaje = document.getElementById("mensaje2").value;
    var patronTexto=/^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
    var patronCorreo = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    if (miCampo.length === 0 || /^\s+$/.test(miCampo)) {
        alert('El campo de nombre esta vacio!');
    } else if(miCampo.length > 0 && miCampo.match(patronTexto)=== null){
        alert('El nombre debe tener solo letras');
    } else if (miCorreo.length === 0 || /^\s+$/.test(miCorreo)) {
        alert('El campo de correo esta vacio!');
    } else if (miCorreo.length > 0 && miCorreo.match(patronCorreo) === null){
        alert('El campo del correo debe ser un correo valido!')
    } else if (miTelefono.length == 0 || /^\s+$/.test(miTelefono)) {
        alert('El campo de telefono esta vacio!');
    } else if(miTelefono.length>0 && miTelefono.length !== 7 && miTelefono.length !==10){
        alert('El campo de telefono debe contener 7 o 10 digitos!')
    }else if (miMensaje.length == 0 || /^\s+$/.test(miMensaje)) {
        alert('El mensaje esta vacio!');
    }else{
        $(document).ready(function () {
            $("#validateButton").click(function () {
                $("#Contacto").load("Enlace.html");
            });
        });

        $(document).ready(function () {
            $("#validateButton").click(function () {
                $(this).hide();
            });
        });

    }

}
var buttonValidation = document.getElementById('validateButton');

buttonValidation.addEventListener('click', validar);
