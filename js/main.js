$(document).ready(function (){
    // Seccion de adornos
    $("#sel_adornos").on('change',function(){
        if (this.value == 0){
            $("#img_adorno1").attr("src","");
            $("#img_adorno2").attr("src","");
            
        }
        
        if (this.value == 1){
            
            $("#img_adorno1").attr("src","img/adornos/correamercedes_4_0001.png");
            $("#img_adorno2").attr("src","img/adornos/hebillatobillo_119_0001.png");
            
        }
        if (this.value == 2){
            $("#img_adorno1").attr("src","img/adornos/hebillaempeineyt_119_0000.png");
            $("#img_adorno2").attr("src","img/adornos/correarita_4_0001.png");
            
        }
         if (this.value == 3){
            $("#img_adorno1").attr("src","img/adornos/hebillaempeineyt_119_0001.png");
            $("#img_adorno2").attr("src","img/adornos/correatbar_4_0001.png");
            
        }
        
        
    });
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
    $("#sel_capellada").on('change',function(){
        if (this.value == 0){
            $("#img_pala").attr("src","");
            $("#img_plantilla").attr("src","img/capellada/plantilla_4_0001.png");

            if($("#sel_color").val() == 1){
                $("#img_pala").attr("src","img/capellada/pala_31_0001.png");
            }else{
                $("#img_pala").attr("src","img/capellada/pala_4_0001.png");
            }
        }
        if (this.value == 1){
            $("#img_pala").attr("src","");
            $("#img_plantilla").attr("src","img/capellada/plantilla_4_0001.png");
            
            console.log($("#sel_color").val());
            
            if($("#sel_color").val() == 1){
                $("#img_pala").attr("src","img/capellada/pala_32_0001.png");
            }else{
                $("#img_pala").attr("src","img/capellada/pala_5_0001.png");
            }
            
        }
        if (this.value == 2){
            $("#img_pala").attr("src","");
            $("#img_plantilla").attr("src","img/capellada/plantilla_5_0001.png");
            
            if($("#sel_color").val() == 1){
                $("#img_pala").attr("src","img/capellada/pala_34_0001.png");
            }else{
                $("#img_pala").attr("src","img/capellada/pala_7_0001.png");
            }
            
        }
    });
})