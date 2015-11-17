$(document).ready(function (){
    // Seccion de adornos
    
    
     $("#sel_color").on('change',function(){
        
            
         if (this.value == 0){
            $("#img_pala").attr("src","");
            $("#img_plantilla").attr("src","img/capellada/plantilla_4_0001.png");
            $("#img_pala").attr("src","img/capellada/pala_4_0001.png");
        }
        
        if (this.value == 1){
            
            $("#img_pala").attr("src","");
            $("#img_plantilla").attr("src","img/capellada/plantilla_4_0001.png");
            $("#img_pala").attr("src","img/capellada/pala_31_0001.png");
        }
        if (this.value == 2){
            $("#img_pala").attr("src","img/capellada/pala_32_0001.png");
            
        }
    });
    
    
});


// Al hacer click en el link de adornos

function cambiarAdornos(){
    // cargar las imagenes al hacer clic en adornos
    $("#img_min_1").attr("src","img/min/adornos/correamercedes1.png");
    $("#img_min_2").attr("src","img/min/adornos/correarita_4_0001.png");
    $("#img_min_3").attr("src","img/min/adornos/correitabar1.png");
    
    // cuando haga click en la imagen
    $("#img_min_1").unbind('click');
    $("#img_min_1").on('click',function(){
        $("#img_adorno1").attr("src","img/adornos/correamercedes_4_0001.png");
        $("#img_adorno2").attr("src","img/adornos/hebillatobillo_119_0001.png");
    });
    
    
    $("#img_min_2").unbind('click');
    $("#img_min_2").on('click',function(){
        $("#img_adorno1").attr("src","img/adornos/hebillaempeineyt_119_0000.png");
        $("#img_adorno2").attr("src","img/adornos/correarita_4_0001.png");
    });
    
    $("#img_min_3").unbind('click');
    $("#img_min_3").on('click',function(){
        $("#img_adorno1").attr("src","img/adornos/hebillaempeineyt_119_0001.png");
        $("#img_adorno2").attr("src","img/adornos/correatbar_4_0001.png");
    });
}

// Al hacer click en herrajes

function cambiarHerrajes(){
    $("#img_min_1").attr("src","img/min/herrajes/ad1_66_0001.png");
    $("#img_min_2").attr("src","img/min/herrajes/ad2_3_0001.png");
    $("#img_min_3").attr("src","img/min/herrajes/ad6_4_0001.png");
    
    // cuando haga click en la imagen
    $("#img_min_1").unbind('click');
    $("#img_min_1").on('click',function(){
        $("#img_accessorios").attr("src","img/accesorios/ad1_66_0001.png");
    });
    
    
    $("#img_min_2").unbind('click');
    $("#img_min_2").on('click',function(){
        $("#img_accessorios").attr("src","img/accesorios/ad2_3_0001.png");
    });
    
    $("#img_min_3").unbind('click');
    $("#img_min_3").on('click',function(){
        $("#img_accessorios").attr("src","img/accesorios/ad6_4_0001.png");
    });
}

// Al hacer click en capelladas

function cambiarCapellada(){
    $("#img_min_1").attr("src","img/min/capellada/pala_4_0001.png");
    $("#img_min_2").attr("src","img/min/capellada/pala_5_0001.png");
    $("#img_min_3").attr("src","img/min/capellada/pala_7_0001.png");
    
    // desvinculo la funcion para no acumular eventos
    $("#img_min_1").unbind('click');
    
    // cuando haga click en la imagen
    $("#img_min_1").on('click',function(){
        $("#img_pala").attr("src","");
        $("#img_plantilla").attr("src","img/capellada/plantilla_4_0001.png");
        $("#img_pala").attr("src","img/capellada/pala_4_0001.png");
    
    });
    
    
    $("#img_min_2").unbind('click');
    $("#img_min_2").on('click',function(){
        $("#img_pala").attr("src","");
        
        $("#img_plantilla").attr("src","img/capellada/plantilla_4_0001.png");
        $("#img_pala").attr("src","img/capellada/pala_5_0001.png");
        
    });
    
    $("#img_min_3").unbind('click');
    $("#img_min_3").on('click',function(){
        $("#img_pala").attr("src","");
        
        $("#img_plantilla").attr("src","img/capellada/plantilla_5_0001.png");
        $("#img_pala").attr("src","img/capellada/pala_7_0001.png");
        
    });
}