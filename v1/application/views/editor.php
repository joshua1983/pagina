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

<div class="row">

		<div id="div_data">
			

			<div class="row">
				<div class="col-xs-6">
					<div id="zapato-container" class="contenedor feature">
					</div>
				</div>
				<div class="col-xs-6">
					<div id="opciones">
						opciones
					</div>
				</div>
			</div>



		</div>
		
	</div>


</div>
<script type="text/javascript">
	initHTML5();
</script>