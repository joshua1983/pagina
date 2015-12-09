var modeloZapato = {
  zuela : "",
  capellada: "",
  adorno: "",
  color: "",
  render: ""
};

function initZapato(idFabrica, idLinea){
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
      
    }
  });
}

function cargarColores(){
  $("#data-opciones").html("<h4>Colores</h4>");
}

function cargarCapelladas(idFabrica, idLinea){
  $("#data-opciones").html("<h4>Capelladas</h4>");

    $.ajax({
    type: 'POST',
    url: IP_SERVER + '/Fabrica/getCapelladas',
    dataType: 'json',
    data:{
        fabrica: idFabrica
    },
    error: function(xhr, settings, exception){
        console.log('No se puede contactar con el servidor.'+xhr.responseText);
    },
    success: function(data){
      var plantilla_datos = _.template($("#tpl_capelladas").html());
      $('#data-opciones').html(plantilla_datos(  { capelladas: data }));
    }
  });
}

function cargarAdornos(){
  $("#data-opciones").html("<h4>Adornos</h4>");
}

function cambiarCapellada(ruta){
  modeloZapato.capellada = ruta;
  render();
}

function render(){
  /*
  Dibujar el zapato con los valores de modeloZapato
  sobre la div zapato-container
  */
  $('#zapato-container').html('');
  modeloZapato.render = "img/yp/yp_1.png";
  var plantilla_datos = _.template($("#tpl_render").html());
  $('#zapato-container').html(plantilla_datos(  { data: modeloZapato }));

}

