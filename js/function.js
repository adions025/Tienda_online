console.log("Debug Consola JS"); //output messages to the consol
/*
function confirmRegistration(){
    alert("Al dar click aceptas los términos y condiciones");
    document.getElementById("main-content-registro").innerHTML= "<p>Te acabas de registrar con éxito, se ha enviado un email de confirmación a tu correo electrónico.</p>";
    return true;
}
*/
function confirmRegistration(){
    $("button#submit").click(function(){
        if($("#nombre").val() === "" || $("#email").val() === ""){
            $("div#mensaje").html("Ingrese datos");
            return false;
        }else{
            $.post($("#my_form").attr("action"),
                $("#my_form :input").serializeArray(),
                function(data){
                    $("div#mensaje").html(data);
                    if(data == "Usuario encontrado"){
                        window.location.href = "index.php";
                    }
                });
        }
        $("#my_form").submit(function(){
            return false;
        });
    })}
