console.log("DEBUG");

$(document).ready(function(){

    $(".delete").click(function() {
        var id = $(this).attr("id-product");
        console.log(id);
        $('#carrito').load('controller/controlerTrolley.php?delete='+id, function () {
        });
     });

    selectCategory("3");
        $('.category').on('click', function(){
            var id = this.id;
            selectCategory( id)
        });

    $(".category-of-products").click(function() {
        var id = $(this).attr("id-category");
        $('#categorias-de-productos').load('index.php?page=productos&Id_Categoria='+id, function () {
        });
    });

    $('#productos-de-categorias').on('click', '.product', function () {
        var id = this.id;
        $('#main-content').load('index.php?page=soloproducto&Id_producto='+id, function () {
        });
    });

    $('#main-content').on('click', '.addTo', function () {
        var id = $(this).attr("id-product");
        precio = $(this).attr("precio");
        //alert(id);
        changeItemTrolley(id, true, precio);
    });

});

function changeItemTrolley(id, addDel, precio){
    data = {
        idProduct:id,
        addDel: addDel,
        precio:precio
         };
    console.log(data);
    $.post('controller/controlerTrolley.php', data, function (response) {
        console.log(response);
        $("#cabasmenu").load('controller/controlerCabasMenu.php');
        //$("#cabasTotal").load('controller/controlerTotalPrecio.php');

    });
}



function selectCategory(id) {
    $(".category").removeClass('selected');
    $("#"+id).addClass('selected');
    $('#productos-de-categorias').load('index.php?page=productos&Id_Categoria='+id, function () {
        console.log('Load completed!');
    })
}

