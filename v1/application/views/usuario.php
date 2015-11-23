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
</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					
					<div class="navbar-header">

						<div class="row">
							<div class="col-xs-1">
								<img src=<?php echo base_url("img/logo_s.png") ?> alt="TuFabrica">
							</div>
							<div class="col-xs-11">
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							    	<ul class="nav navbar-nav">
							    		<li><a style="color: white" href="#" onclick="javascript:cargarFabricas()">1. Selecciona tu Fabrica</a></li>
							    		<li><a style="color: white" href="#">2. Selecciona el Modelo</a></li>
							    		<li><a style="color: white" href="#">3. Modifica tu modelo</a></li>
							    		<li><a style="color: white" href="#">4. Haz tu pedido</a></li>
							    	</ul>
						    	</div>
					    	</div>
						</div>
						
					</div>

				</div>
							
			</nav>
		</div>
	</div>
	<div class="row fondo_usuario">
		
		<div class="col-xs-6">
			Usuario:  <a href="#" class="navbar-link"><?php echo $nombre ?></a>
		</div>
		<div class="col-xs-6" align="right">
			<a href=<?php echo base_url("login/salir") ?> class="navbar-link">Salir</a>
		</div>

	</div>

	<div class="row">

		<div id="div_data">
			&nbsp;
		</div>
		
	</div>


</div>

<script id="tpl_fabricas" type="text/template">
	<%

		_.each(fabricas, function(data){
			%>
			<a href="#" onclick ="javascript:cargarLineas(<%= data.id %>, '<%= data.nombre %>')">
				<img src="../<%= data.ruta %>" alt="fabricas zapatos bucaramanga <%= data.nombre%>">
			</a>
			<%
		});

	%>
</script>

<script id="tpl_lineas" type="text/template">

	<%

		_.each(lineas, function(data){
			%>
			<div class="panel panel-danger">

			<div class="panel-heading" align="center">
				<h3><%= datosRuta.fabrica%></h3>
			</div>

			<div class="panel-body"
				<div class="row" align="center">
					<img src="../<%= data.ruta %>" alt="tendencias zapatos bucaramanga <%= data.nombre%>">
				</div>
				<div class="row" align="center">
					<div class="col-xs-6">
						<button class="btn btn-success">Compar</button>
					</div>
					<div class="col-xs-6">
						<button class="btn btn-primary">Modificar</button>
					</div>
				</div>
			</div>

			</div>
			<%
		});

	%>

</script>


