var IP_SERVER = 'http://localhost/pagina';

var dataRuta = {
    fabrica: "",
    linea: ""
}

function cargarFabricas(){
    $("#mnuOpc1").removeClass("resaltar");
    $("#mnuOpc2").removeClass("resaltar");
    $("#mnuOpc3").removeClass("resaltar");
    $("#mnuOpc4").removeClass("resaltar");
    $("#mnuOpc1").addClass("resaltar");
    $.ajax({
        type: 'GET',
        url: IP_SERVER + '/Fabrica/getFabricas',
        dataType: 'json',
        error: function(xhr, settings, exception){
            console.log('No se puede contactar con el servidor.'+xhr.responseText);
        },
        success: function(data){
            
            var plantilla_datos = _.template($("#tpl_fabricas").html());
            $('#div_data').html(plantilla_datos(  { fabricas: data }));
        }
    });
}

function cargarLineas(idFabrica, nombreFabrica){
    $("#mnuOpc1").removeClass("resaltar");
    $("#mnuOpc2").removeClass("resaltar");
    $("#mnuOpc3").removeClass("resaltar");
    $("#mnuOpc4").removeClass("resaltar");
    $("#mnuOpc2").addClass("resaltar");
    dataRuta.fabrica = nombreFabrica;
    $.ajax({
        type: 'POST',
        url: IP_SERVER + '/Fabrica/getLineasZapatos',
        dataType: 'json',
        data:{
            fabrica: idFabrica
        },
        error: function(xhr, settings, exception){
            console.log('No se puede contactar con el servidor.'+xhr.responseText);
        },
        success: function(data){

            var plantilla_datos = _.template($("#tpl_lineas").html());
            $('#div_data').html(plantilla_datos(  { lineas: data, datosRuta: dataRuta }));
        }
    });
}
