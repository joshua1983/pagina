<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href=<?php echo base_url("css/bootstrap.css") ?> type="text/css" />
    <link rel="stylesheet" href=<?php echo base_url("css/estilos.css") ?> type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>TuFabrica.co - Usuario: </title>
	<script src=<?php echo base_url("js/jquery.js") ?>></script>
	<script src=<?php echo base_url("js/editor.js") ?>></script>
	<script src=<?php echo base_url("js/three.js") ?>></script>
	<script src=<?php echo base_url("js/shifty.min.js") ?>></script>
	<script src=<?php echo base_url("js/underscore.js") ?>></script>
    <script src=<?php echo base_url("js/main.js") ?>></script>
</head>
<body>
	<div class="container">

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
			Usuario:  
			<?php 
			if (isset($nombre))
				echo '<a href="#" class="navbar-link">' . $nombre . '</a>';
			else
				echo '<a href="'.base_url("login").'" class="navbar-link">No registrado</a>';
			?></a>
		</div>
		<div class="col-xs-6" align="right">
		<?php if (isset($nombre)){ ?>
			<a href=<?php  echo base_url("login/salir") ?> class="navbar-link">Salir</a>
		<?php } ?>
		</div>

	</div>

	

