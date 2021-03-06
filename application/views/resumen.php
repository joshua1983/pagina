
<script type="text/javascript">
	$("#mnuOpc1").removeClass("resaltar");
    $("#mnuOpc2").removeClass("resaltar");
    $("#mnuOpc3").removeClass("resaltar");
    $("#mnuOpc4").removeClass("resaltar");
    $("#mnuOpc4").addClass("resaltar");
</script>
<div class="row">
	<h3>Resumen del pedido</h3>
</div>
<div class="row">
	<div class="col-xs-6">
		<div class="row">
			<div class="col-xs-6">
				<h3><?php 
					if (isset($descripcion)){
						echo $descripcion;
					}else{
						echo "Personalizado";
					} 
					?></h3>
			</div>
			<div class="col-xs-6">
				<h3>
					Precio: <span class="label label-primary"><?php echo $precio ?></span>
					
				</h3>
			</div>
		</div>
		<div class="row">
			<?php 
			if (isset($render)){
				?>
					<img class="img-responsive" src="<?php echo base_url($render) ?>" alt="<?php echo $descripcion ?>">	
				<?php
			}else{
				?>
					<img class="imgpos " src="<?php  echo base_url($zuela) ?> " >
					<img class="imgpos " src="<?php  echo base_url($capellada) ?> " >
				<?php
			}
			?>
			
		</div>
		
	</div>
	<div class="col-xs-6">
	<div class="panel panel-default">
		<div class="panel-heading">
			Opciones del pedido
		</div>
		<div class="panel-body">
			<?php echo form_open(base_url('comprar/cerrarCompra')) ?>
			<?php echo form_input(array('name' => 'txtPrecio', 'id' => 'txtPrecio', 'class' => 'form-control', 'type' => 'hidden', 'value' => $precio)) ?>
			<?php 
				if (isset($zapato)){
					echo form_input(array('name' => 'txtZapato', 'id' => 'txtZapato', 'class' => 'form-control', 'type' => 'hidden', 'value' => $zapato)); 
				}
			?>
				<div class="form-group">
					<label for="txtAlmacen">Nombre del almacen</label>
					<?php echo form_input(array('name' => 'txtAlmacen', 'id' => 'txtAlmacen', 'class' => 'form-control', 'type' => 'text')) ?>
				</div>
				<div class="form-group">
					<label for="txtCorreo">Correo Electronico</label>
					<?php echo form_input(array('name' => 'txtCorreo', 'id' => 'txtCorreo', 'class' => 'form-control', 'type' => 'text')) ?>
				</div>
				<div class="form-group">
					<label for="txtCantidad">Cantidad</label>
					<?php echo form_input(array('name' => 'txtCantidad', 'id' => 'txtCantidad', 'class' => 'form-control', 'type' => 'text')) ?>
				</div>
				<div class="form-group">
					<label for="txtTotal">Total:</label>
					<?php echo form_input(array('name' => 'txtTotal', 'id' => 'txtTotal', 'class' => 'form-control', 'type' => 'text', 'readonly' => 'readonly')) ?>
				</div>
				<div class="form-group">
					<?php echo form_button(
							array('name' => 'button',
								  'class' =>'btn btn-success', 
								  'type' => 'submit', 
								  'content' => 'Solicitar pedido')) 
						?>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
	</div>
</div>

<script type="text/javascript">

$("#txtCantidad").on('keyup',function(){
	var precio = parseInt($("#txtPrecio").val());
	var cantidad = parseInt($(this).val());
	console.log(precio);
	console.log(cantidad);
	$("#txtTotal").val(precio * cantidad);
});

</script>