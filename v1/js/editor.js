var modeloZapato = {
  zuela : "",
  idZuela: "",
  capellada: "",
  idCapellada: "",
  adorno: "",
  color: "",
  render: "",
  precio: ""
};

function initZapato(idFabrica, idLinea){
  $.ajax({
    type: 'POST',
    url: IP_SERVER + '/Fabrica/getZapato',
    dataType: 'json',
    data:{
        fabrica: idFabrica,
        linea: idLinea
    },
    error: function(xhr, settings, exception){
        console.log('No se puede contactar con el servidor.'+xhr.responseText);
    },
    success: function(data){
      modeloZapato.capellada = data[0].capellada;
      modeloZapato.zuela = data[0].zuela;
      modeloZapato.idZuela = data[0].idZuela;
      modeloZapato.idCapellada = data[0].idCapellada;
      modeloZapato.precio = data[0].precio;
      render();
    }
  });
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

function cargarPlataformas(idFabrica, idLinea){
  $("#data-opciones").html("<h4>Plataformas</h4>");

    $.ajax({
    type: 'POST',
    url: IP_SERVER + '/Fabrica/getPlataformas',
    dataType: 'json',
    data:{
        fabrica: idFabrica
    },
    error: function(xhr, settings, exception){
        console.log('No se puede contactar con el servidor.'+xhr.responseText);
    },
    success: function(data){
      var plantilla_datos = _.template($("#tpl_plataformas").html());
      $('#data-opciones').html(plantilla_datos(  { plataformas: data }));
    }
  });
}

function cambiarCapellada(id, ruta){
  modeloZapato.idCapellada = id;
  modeloZapato.capellada = ruta;
  render();
}

function cambiarZuela(id, ruta){
  modeloZapato.idZuela = id;
  modeloZapato.zuela = ruta;
  render();
}

function continuar(){
  window.location.replace(IP_SERVER + '/comprar/resumenoutmod/?plataforma='+modeloZapato.idZuela+'&capellada='+modeloZapato.idCapellada+'&precio='+modeloZapato.precio);
}

function render(){
  /*
  Dibujar el zapato con los valores de modeloZapato
  sobre la div zapato-container
  */
  $('#zapato-container').html('');
  var plantilla_datos = _.template($("#tpl_render").html());
  $('#zapato-container').html(plantilla_datos(  { data: modeloZapato }));

}

