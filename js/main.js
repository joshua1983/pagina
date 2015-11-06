
$(document).ready(function (){

    $("#img_boton_material").on("click",function(){
        $("#img_tabla_opciones").attr("src","tufab/editor/tabla_materiales.png");
        $("#div_subtitulo").html("Selecciona el material");
        $("#img_boton_estilos").attr("src","tufab/editor/boton_estilos.png");
        $("#img_boton_material").attr("src","tufab/editor/boton_material.png");
        $("#img_boton_tacon").attr("src","tufab/editor/boton_tacon.png");
        $("#div_zapato_visor").attr("src","tufab/editor/personalizado1.png");
    });

	$("#img_boton_estilos").on("click",function(){
        $("#img_tabla_opciones").attr("src","tufab/editor/lista_estilos.png");
        $("#div_subtitulo").html("Selecciona el estilo");
        $("#img_boton_estilos").attr("src","tufab/editor/btn_estilo.png");
        $("#img_boton_material").attr("src","tufab/editor/btn_materiales.png");
        $("#img_boton_tacon").attr("src","tufab/editor/boton_tacon.png");
        $("#div_zapato_visor").attr("src","tufab/editor/personalizado2.png");
    });


    $("#img_boton_tacon").on("click",function(){
        $("#img_tabla_opciones").attr("src","tufab/editor/zapatillasblancas.png");
        $("#div_subtitulo").html("Selecciona el tac\xf3n");
        $("#img_boton_estilos").attr("src","tufab/editor/boton_estilos.png");
        $("#img_boton_material").attr("src","tufab/editor/btn_materiales.png");
        $("#img_boton_tacon").attr("src","tufab/editor/tacon.png");
        $("#div_zapato_visor").attr("src","tufab/editor/personalizado3.png");
    });
    
    
});
