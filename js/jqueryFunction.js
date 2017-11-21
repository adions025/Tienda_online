
console.log("Debug Consola JS"); //output messages to the consol

$(document).ready(function(){

        $('#categoria1').click(function(){
            $('#demo').load('index.php?page=productos&Id_Categoria=1', function () {
                // Aquest exemple no us funcionarà si no canvieu la url de la petició
                console.log('Load completed!');
            })
        });
        $('#categoria2').click(function(){
            $('#demo').load('index.php?page=productos&Id_Categoria=2', function () {
                // Aquest exemple no us funcionarà si no canvieu la url de la petició
                console.log('Load completed!');
            })
        });

        $('#categoria3').click(function(){
            $('#demo').load('index.php?page=productos&Id_Categoria=3', function () {
                // Aquest exemple no us funcionarà si no canvieu la url de la petició
                console.log('Load completed!');
            })
        });


        });

