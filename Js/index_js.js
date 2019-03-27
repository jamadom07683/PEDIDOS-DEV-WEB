alert("Hola Mundo");
$(document).ready(function(){
 $('.header').height($(window).height());

})


function validar(){
    var miCampo=document.getElementById("#name1").value;
    var miTelefono.getElementById("#numer").value;
    var miCorreo=document.getElementById("#correo").value;
    var miMensaje=document.getElementById("#mensaje2").value;
    valueForm.object.value;
    var patronCorreo=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    if(miCampo.length==0 || /^\s+$/.test(miCampo)){
        alert('El campo de texto esta vacio!');
        return false;
    }
    return true;
    if(valueForm.search(patronCorreo)==0){
        return true
    }
    else{
        alert('El correo electronico no es valido')
    }
    if(miTelefono.length==0 || /^\s+$/.test(miTelefono)){
        alert('El campo de texto esta vacio!');
        return false;
    }
    return true
    if(miMensaje.length==0 || /^\s+$/.test(miMensaje)){
        alert('El campo de texto esta vacio!');
        return false;
    }

}

