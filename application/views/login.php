<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TuFabrica.co - Login</title>
	<link rel="stylesheet" href=<?php echo base_url("css/bootstrap.css") ?> type="text/css" />
    <link rel="stylesheet" href=<?php echo base_url("css/estilos.css") ?> type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <style type="text/css">
        .fondo{
        	background-image: url( <?php echo base_url("img/fondo.png") ?> );
        	background-size: cover;	
        }
        .btn{
        	letter-spacing: 1px;
        	font-size: 2em;
        	color: white;
        	background-color: rgb(202,3,190);

        }
        .texto_lateral{
        	font-family: 'Comfortaa', cursive;
        }
        .bajo_imagen{
        	font-style: italic;
        }
    </style>
</head>
<body class="fondo">
	<div class="container-fluid">
	
		</br>
		<div class="row" align="center">
			<img src=<?php echo base_url("img/logo.png") ?> alt="TuFabrica.co" class="img-responsive" >
			<h2 class="bajo_imagen">Creando estilo a tu medida</h2>
		</div>
		</br>
		<div class="row">
			<div class="col-xs-6">
				<h2>Video</h2>
			</div>
			<div class="col-xs-6 texto_lateral">
				<h3>
					Entra y diseña tu propia linea de calzado, a tu gusto y con las modificaciones que desees a precios de fabrica.
				</h3>
				<p>
					<a href="<?php echo base_url('usuario') ?>">
						<img src="<?php echo base_url('img/boton_login.png') ?>" class="img-responsive" alt="">
					</a>
				</p>
			</div>
		</div>
		<p>
		<div class="row" align="center">
			<div class="col-xs-4">
				<a href="http://www.facebook.com/tufabrica.co">
					<img src="<?php echo base_url('img/facebook.png') ?>" class="img-responsive" alt="">
				</a>
			</div>
			<div class="col-xs-4">
				<a href="https://twitter.com/tufabricaco">
					<img src="<?php echo base_url('img/twitter.png') ?>" class="img-responsive" alt="">
				</a>
			</div>
			<div class="col-xs-4">
				<a href="mailto:info@tufabrica.co">
					<img src="<?php echo base_url('img/correo.png') ?>" class="img-responsive" alt="">	
				</a>
			</div>
		</div>
		</p>
		<p>
			<div class="row">
				<div class="col-xs-12" align="center">
					info@tufabrica.co - TuF&aacute;brica.co - 2016
				</div>
			</div>
		</p>
	</div>
</body>
</html>