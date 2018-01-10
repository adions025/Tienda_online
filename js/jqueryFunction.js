
$(document).ready(function(){

    $(".delete").click(function() {
        var id = $(this).attr("id-product");

        console.log(id);
        $('#carrito').load('controller/controlerTrolley.php?delete='+id, function () {

        });
        // alert(id);
    });


    selectCategory("3");
        $('.category').on('click', function(){
            var id = this.id;
            selectCategory( id)
            //alert(id);
        });



    $(".category-of-products").click(function() {
        var id = $(this).attr("id-category");
        //console.log(id);
        $('#categorias-de-productos').load('index.php?page=productos&Id_Categoria='+id, function () {
        });
           // alert(id);
    });


    $('#productos-de-categorias').on('click', '.product', function () {
            var id = this.id;
            $('#main-content').load('index.php?page=soloproducto&Id_producto='+id, function () {
            });
        //alert(id);

    });


    $('#main-content').on('click', '.addTo', function () {
        var id = $(this).attr("id-product");
        //alert(id);
        changeItemTrolley(id, true);
    });


    $('#main-content').on('click', '.addTo', function () {
        var id = $(this).attr("id-product");
        changePrice(id, true);
    });

});

function changeItemTrolley(id, addDel){

    data = {
        idProduct:id,
        addDel: addDel
    };
    console.log(data);
    $.post('controller/controlerTrolley.php', data, function (response) {
        console.log(response);
        /*var arrayResponse= JSON.parse(response);*/
        /*console.log( arrayResponse);*/
        $("#cabasmenu").load('controller/controlerCabasMenu.php');
        /*if(arrayResponse.valid){
           updateViewTrolley(arrayResponse.trolley);
        }else{
            alert("todo caca");
        }
        */
    });

}


function changePrice(id, addDel){

    data = {
        idProduct:id,
        addDel: addDel
    };
    console.log(data);
    $.post('controller/controlerTotalPrecio.php', data, function (response) {
        console.log(response);
        $("#cabasTotal").load('controller/controlerTotalPrecio.php');

    });

}





function selectCategory(id) {
    $(".category").removeClass('selected');
    $("#"+id).addClass('selected');
    $('#productos-de-categorias').load('index.php?page=productos&Id_Categoria='+id, function () {
        console.log('Load completed!');
    })
}

/*
function  updateViewTrolley(trolley) {
    alert(trolley.length);
}
*/



/*
function confirmRegistration(){
    alert("ESTAS SEGURO DE QUE QUIERES REGISTRARTE????");
    document.getElementById("main-content-registro").innerHTML= "<p>Te acabas de registrar con éxito, se ha enviado un email de confirmación a tu correo electrónico.</p>";
    return true;
}
*/













// en el PHPHPHPHPHPHPHPHPHHPPHPHHPHPHPHPHPHPH


