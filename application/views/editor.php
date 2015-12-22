
<style>
	.navbar{
		background-color: rgb(202,3,190);
	}
	.layer {
		background-color: rgba(0, 156, 161, 0.2);
		position: absolute;
		top: 0;
		left: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
	}
	.fondo_usuario{
		background-color: rgba(0, 156, 161, 0.2);
		
	}
	body{
		background-image: url(<?php echo base_url("img/fabricas/stand.png")?>) ;
        background-size: cover;	
	}
	.contenedor {
        height: 300px;
        width: 300px;
        position: relative;
      }
    .feature {
        width: 300px;
        float: left;
      }
	.vistabasica {
		position: relative;
		width: 500px !important;
		height: 350px !important;
		cursor: pointer;

	}
	
	.superior{
		z-index: 99;
	}
	.imgpos{
		position: absolute;
	}
</style>
<script>
    $("#mnuOpc1").removeClass("resaltar");
    $("#mnuOpc2").removeClass("resaltar");
    $("#mnuOpc3").removeClass("resaltar");
    $("#mnuOpc4").removeClass("resaltar");
    $("#mnuOpc3").addClass("resaltar");
</script>

<div class="row">

	<div id="div_data">
		

		<div class="row">
			<div class="col-xs-6">
				<div id="zapato-container" class="contenedor feature">
					
				</div>
			</div>
			<div class="col-xs-6">
				<div id="opciones" class="panel panel-info">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<ul class="nav nav-pills">
							<li role="presentation" id="opc2"><a href="#" onclick="javascript:cargarCapelladas(<?php echo $idFabrica ?>, <?php echo $idLinea ?>)">Capellada</a></li>
							<li role="presentation" id="opc3"><a href="#" onclick="javascript:cargarPlataformas(<?php echo $idFabrica ?>, <?php echo $idLinea ?>)">Plataformas</a></li>
						</ul>		
						<div id="data-opciones">
							
						</div>					
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12" align="center">
				<button onclick="javascript:continuar()" class="btn btn-success">Guardar</button>
			</div>
		</div>
	</div>


</div>


</div>

<script type="text/template" id="tpl_render">
	<img class="imgpos " src="<%=  IP_SERVER + '/' + data.zuela %>" >
	<img class="imgpos " src="<%=  IP_SERVER + '/' + data.capellada %>" >
</script>

<script type="text/template" id="tpl_capelladas">
		<%
		
		_.each(capelladas, function(data){
			%>
			<a href="#" onclick="javascript:cambiarCapellada('<%=data.id%>','<%=data.render%>')">
			<img height="30%" width="30%" src="<%=  IP_SERVER + '/' + data.render %>" />
			</a>


			<%
		});
			%>
</script>
<script type="text/template" id="tpl_plataformas">
		<%
		
		_.each(plataformas, function(data){
			%>
			<a href="#" onclick="javascript:cambiarZuela('<%=data.id%>','<%=data.render%>')">
			<img height="30%" width="30%" src="<%=  IP_SERVER + '/' + data.render %>" />
			</a>


			<%
		});
			%>
</script>

<script type="text/javascript">
	$(".nav li").on("click", function() {
		$(".nav li").removeClass("active");
		$(this).addClass("active");
	});
	$("#opc2").addClass("active");
	cargarCapelladas(<?php echo $idFabrica ?>, <?php echo $idLinea ?>);
	initZapato(<?php echo $idFabrica ?>, <?php echo $idLinea ?>);
	render();
</script>