
console.log("Debug Consola JS"); //output messages to the consol



function confirmRegistration(){
    alert("Al dar click aceptas los términos y condiciones");
    var nombre = $("input[name='nombre']").val();
    var password = $("input[name='password']").val();
    var email = $("input[name='email']").val();
    var address = $("input[name='address']").val();
    var ciudad = $("input[name='ciudad']").val();
    var cp = $("input[name='cp']").val();

    $.post( "/~tdiw-j6/controller/crearUsuario.php", { nombre: nombre, password: password, email: email, address: address, ciudad: ciudad,
    cp: cp})
        .done(function( data ) {
            //alert( "Data Loaded: " + data );
            document.getElementById("main-content-registro").innerHTML= "<p>"+data+"</p>";

        });

    return false;
}



/*
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
   */


function loadDoc(Id_categoria) {
    var xhttp = new XMLHttpRequest();
   /* var degreesTag = document.getElementById("degrees");*/
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML =
                this.responseText;
        }
    };
    xhttp.open("GET", "index.php?page=productos&Id_Categoria="+Id_categoria, true);
    /*  xmlhttp.open("GET","degreeMentions.php?degree="+degreesTag.value, true); */
    xhttp.send();
}


