
$(document).ready(function (){

    $("#img_boton_material").on("click",function(){
        $("#div_tabla_opciones").unbind('click');

        $("#div_tabla_opciones")
        .html('<img id="img_tab_1" class="img-responsive" src="tufab/editor/tabla_materiales_1.png" alt="">'+
        	  '<img id="img_tab_2" class="img-responsive" src="tufab/editor/tabla_materiales_2.png" alt="">');

        $("#img_tab_2").on('click',function(){
        	$("#div_zapato_visor").attr("src","tufab/editor/personalizado1.png");
        });

        $("#div_subtitulo").html("Selecciona el material");
        $("#img_boton_estilos").attr("src","tufab/editor/boton_estilos.png");
        $("#img_boton_material").attr("src","tufab/editor/boton_material.png");
        $("#img_boton_tacon").attr("src","tufab/editor/boton_tacon.png");
        
    });

	$("#img_boton_estilos").on("click",function(){
        $("#div_tabla_opciones").unbind('click');
        $("#div_tabla_opciones").html('<div class="row">'+
        	'<div class="col-xs-6 form-inline">'+
        	  '<img id="img_estilo_1" src="tufab/editor/lista_estilos_1_1.png" class="img-responsive" >'+ '</div>' +
        	'<div class="col-xs-6">'
        	+'<img id="img_estilo_2" src="tufab/editor/lista_estilos_1_2.png" class="img-responsive" >'+ '</div></div>' +
        	'<div class="row">' 
        	+ '<div class="col-xs-4">'+
        	  '<img id="img_estilo_2_1" src="tufab/editor/lista_estilos_2_1.png" class="img-responsive" >'
        	+'</div>'+
        	 '<div class="col-xs-4">'+
        	  '<img id="img_estilo_2_2" src="tufab/editor/lista_estilos_2_2.png" class="img-responsive" >'
        	+'</div>'+
        	 '<div class="col-xs-4">'+
        	  '<img id="img_estilo_2_3" src="tufab/editor/lista_estilos_2_3.png" class="img-responsive" >'
        	+'</div>'+
        	'</div>');

		$("#img_estilo_1").on("click", function(){
        	$("#div_zapato_visor").attr("src","tufab/editor/personalizado1.png");	
        });
        $("#img_estilo_2").on("click", function(){
        	$("#div_zapato_visor").attr("src","tufab/editor/personalizado2.png");	
        });
        $("#img_estilo_2_2").on("click", function(){
            console.log($("#div_zapato_visor"));
        	$("#div_zapato_visor").attr("src","tufab/editor/zapatopersonalizado2_1.png");	
        });
        $("#div_subtitulo").html("Selecciona el estilo");
        $("#img_boton_estilos").attr("src","tufab/editor/btn_estilo.png");
        $("#img_boton_material").attr("src","tufab/editor/btn_materiales.png");
        $("#img_boton_tacon").attr("src","tufab/editor/boton_tacon.png");
        
    });


    $("#img_boton_tacon").on("click",function(){
    	$("#div_tabla_opciones").html('<img src="tufab/editor/zapatillasblancas.png" class="img-responsive" >');        
        $("#div_subtitulo").html("Selecciona el tac\xf3n");
        $("#img_boton_estilos").attr("src","tufab/editor/boton_estilos.png");
        $("#img_boton_material").attr("src","tufab/editor/btn_materiales.png");
        $("#img_boton_tacon").attr("src","tufab/editor/tacon.png");

        $("#div_tabla_opciones").unbind('click');
        $("#div_tabla_opciones").on('click', function(){
        	$("#div_zapato_visor").attr("src","tufab/editor/personalizado3.png");
        })
        
    });
    
    
});
