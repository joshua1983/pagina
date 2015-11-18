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
		<div class="row" align="center">
			<img src=<?php echo base_url("img/logo.png") ?> alt="TuFabrica.co">
		</div>
		<div class="row" align="center">
			<div class="col-xs-2"></div>
			<div class="col-xs-4" >
				<div class="form-group">
					<?php echo form_label('Usuario', 'txtUsuario',array( 'style' => 'color: white') ) ?>
					<?php echo form_input(array('name' => 'txtUsuario','id' => 'txtUsuario', 'class' => 'form-control')) ?>
				</div>
			</div>
			<div class="col-xs-4">
				<div class="form-group">
					<?php echo form_label('Password', 'txtPassword',array( 'style' => 'color: white') ) ?>
					<?php echo form_input(array('name' => 'txtPassword','id' => 'txtPassword', 'class' => 'form-control', 'type' => 'password')) ?>
				</div>
			</div>
			<div class="col-xs-2"></div>
		</div>
		<div class="row" align="center">
			<div class="col-xs-4"></div>
			<div class="col-xs-2">
				<?php echo form_input(array('name' => 'optLogin', 'class' => 'form-control', 'type' => 'radio', 'value' => '0')) ?>
				<div style="color: white">Almacenes</div> </br>
			</div>
			<div class="col-xs-2">
				<?php echo form_input(array('name' => 'optLogin', 'class' => 'form-control', 'type' => 'radio', 'value' => '1')) ?>
				<div style="color:white">Fabricas</div>
			</div>
			<div class="col-xs-4"></div>
		</div>
		<div class="row" align="center">
			<div class="col-xs-12">
				<?php echo form_button(
					array('name' => 'button',
						  'class' =>'btn btn-lg', 
						  'type' => 'submit', 
						  'content' => 'Entrar&nbsp;<span class="glyphicon glyphicon-star"></span>')) 
				?>
			</div>
		</div>
		<?php echo form_close(); ?>
		<div class="row" align="center">
			<div class="col-xs-2"></div>
			<div class="col-xs-8" >
				<div class="alert alert-danger" role="alert">
					<?php 
						if (isset($_SESSION['loginEstado'])){
							echo $_SESSION['loginEstado'];
						}else{
							echo validation_errors(); 	
						}
						
					?>
				</div>
			</div>			
			<div class="col-xs-2"></div>
		</div>
	</div>
</body>
</html>