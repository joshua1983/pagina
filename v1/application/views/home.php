<h2>Bienvenido <?php echo $nombre ?></h2>

<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading">
			Listado de pedidos
		</div>
		<div class="panel-body">
			<table class="table table-striped">
			<thead>
				<th>Zapato</th>
				<th>Cantidad</th>
				<th>Precio</th>
				<th>Fecha</th>
				<th>Estado</th>
			</thead>
			<tbody>
			
			<?php foreach ($pedidos as $pedido):?>
				
				<tr>
					<td>
						<img class="img-responsive" height="100px" width="100px" src="<?php echo base_url($pedido["render"]) ?>" alt="">
					</td>
					<td>
						<?php echo $pedido["cantidad"] ?>
					</td>
					<td>
						<?php echo intval($pedido["precio"]) * intval($pedido["cantidad"]) ?>
					</td>
					<td>
						<?php echo $pedido["fecha"] ?>
					</td>
					<td></td>
				</tr>
			<?php endforeach;?>	
			</tbody>
		</table>
		</div>
	</div>
</div>

