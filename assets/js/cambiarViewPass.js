var boton = document.getElementById('eye');
var input = document.getElementById('password');
boton.addEventListener('click', mostrarContraseña);
function mostrarContraseña(){
    if(input.type == "password"){
        input.type = "text";
        boton.className = "icon-eye-off-1";
    }else{
        input.type = "password";
        boton.className = "icon-eye-1";
    }
}


