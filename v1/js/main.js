var IP_SERVER = 'http://localhost/pagina/v1';

function cargarFabricas(){
    $.ajax({
        type: 'GET',
        url: IP_SERVER + '/Fabrica/getFabricas',
        dataType: 'json',
        error: function(xhr, settings, exception){
            console.log('No se puede contactar con el servidor.'+xhr.responseText);
        },
        success: function(data){
            var plantilla_datos = _.template($("#tpl_fabricas").html(),  { fabricas: data });
            $('#div_data').html(plantilla_datos);
        }
    });
}