var modeloZapato = {
  zuela : "",
  capellada: "",
  adorno: "",
  color: ""
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

function cargarCapelladas(){
  $("#data-opciones").html("<h4>Capelladas</h4>");
}

function cargarAdornos(){
  $("#data-opciones").html("<h4>Adornos</h4>");
}

function render(){
  /*
  Dibujar el zapato con los valores de modeloZapato
  sobre la div zapato-container
  */


}

