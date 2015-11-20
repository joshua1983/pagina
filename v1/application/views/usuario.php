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
	body{
		background-image: url("img/fabricas/stand.png");
        background-size: cover;	
	}
</style>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		
		<div class="navbar-header">

			<div class="row">
				<div class="col-xs-10">
					<a style="color: white" class="navbar-brand" href="http://tufabrica.co">
						TuFabrica.co
					</a>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				    	<ul class="nav navbar-nav">
				    		<li><a style="color: white" href="#" onclick="javascript:cargarFabricas()">1. Selecciona tu Fabrica</a></li>
				    		<li><a style="color: white" href="#">2. Selecciona el Modelo</a></li>
				    		<li><a style="color: white" href="#">3. Modifica tu modelo</a></li>
				    		<li><a style="color: white" href="#">4. Haz tu pedido</a></li>
				    	</ul>
				    	<p style="color: white" class="navbar-text navbar-right">Usuario: 
				    		<a style="color: white" href="#" class="navbar-link"><?php echo $nombre ?></a>
				    	</p>
			    	</div>
		    	</div>
				<div class="col-xs-1">
					<a style="color: white" href=<?php echo base_url("login/salir") ?> class="navbar-link">Salir</a>
				</div>
		    	<div class="col-xs-1">
					<img src=<?php echo base_url("img/logo_s.png") ?> alt="TuFabrica">
				</div>
			</div>
			
		</div>

	</div>
				
</nav>

<div class="row">

	<div id="div_data">
		&nbsp;
	</div>
	
</div>



<script id="tpl_fabricas" type="text/template">
	<%

	_.each(fabricas,function(data){
		%>
		<img src="<%= data.ruta %>" alt="<%= data.nombre %>" class="img-thumbnail">
		<%
	});

	%>
</script>


