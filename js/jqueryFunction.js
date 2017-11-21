
console.log("Debug Consola JS"); //output messages to the consol

$(document).ready(function(){

    /*
    data = {
        nombre: 'julanito',
        password:"sdsa",

    };
console.log(data);
    $.post('controller/crearUsuario.php', data, function (response) {

        var arrayResponse= JSON.parse(response);

        console.log(arrayResponse);


        if(arrayResponse.valid){
            alert("todo ok");
        }else{
            alert("todo caca");
        }


    });
    */


    selectCategory("3");
        $('.category').click(function(){
            var id = this.id;
            selectCategory( id)

            //alert(id);
        });


    $('#productos-de-categorias').on('click', '.product', function () {
        var id = this.id;

        $('#main-content').load('index.php?page=soloproducto&Id_producto='+id, function () {

            console.log('Load completed!');
        });
        //alert(id);

    });


        });


function selectCategory(id) {
    $(".category").removeClass('selected');
    $("#"+id).addClass('selected');

    $('#productos-de-categorias').load('index.php?page=productos&Id_Categoria='+id, function () {

        console.log('Load completed!');
    })
}

function confirmRegistration(){
    alert("ESTAS SEGURO DE QUE QUIERES REGISTRARTE????");
    document.getElementById("main-content-registro").innerHTML= "<p>Te acabas de registrar con éxito, se ha enviado un email de confirmación a tu correo electrónico.</p>";
    return true;
}













// en el PHPHPHPHPHPHPHPHPHHPPHPHHPHPHPHPHPHPH


