<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TuFabrica.co - Login</title>
	<link rel="stylesheet" href=<?php echo base_url("css/bootstrap.css") ?> type="text/css" />
    <link rel="stylesheet" href=<?php echo base_url("css/estilos.css") ?> type="text/css" />
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
    </style>
</head>
<body class="fondo">
	<div class="container-fluid">
	<?php echo form_open(base_url('login/usuario')) ?>
		</br>
		<div class="row" align="center">
			<img src=<?php echo base_url("img/logo.png") ?> alt="TuFabrica.co">
		</div>
		</br>
		<div class="row" align="center">
			<div class="col-xs-12">
				<a href="<?php echo base_url('usuario') ?>">
					<img src="<?php echo base_url('img/boton_login.png') ?>" class="img-responsive" alt="">
				</a>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</body>
</html>