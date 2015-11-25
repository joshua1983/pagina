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
</style>
<script>
    
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
							<li role="presentation" id="opc1" class="active"><a href="#" onclick="javascript:cargarColores()">Color</a></li>
							<li role="presentation" id="opc2"><a href="#" onclick="javascript:cargarCapelladas()">Capellada</a></li>
							<li role="presentation" id="opc3"><a href="#" onclick="javascript:cargarAdornos()">Adornos</a></li>
						</ul>		
						<div id="data-opciones">
							
						</div>					
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12" align="center">
				<button class="btn btn-success">Guardar</button>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(".nav li").on("click", function() {
			$(".nav li").removeClass("active");
			$(this).addClass("active");
		});
		initZapato(<?php echo $idFabrica ?>, <?php echo $idLinea ?>);
		cargarColores();
	</script>
</div>


</div>