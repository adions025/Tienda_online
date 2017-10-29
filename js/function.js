console.log("Debug Consola JS"); //output messages to the consol


function confirmRegistration(){
    alert("Al dar click aceptas los términos y condiciones");
    document.getElementById("main-content-registro").innerHTML= "<p>Te acabas de registrar con éxito, se ha enviado un email de confirmación a tu correo electrónico.</p>";   
    return false;
}
