
<style>
.portfolio-item {
    margin-bottom: 25px;
}
</style>
<div class="row">

		<div id="div_data">
			&nbsp;
		</div>
		
	</div>


</div>
<script type="text/javascript">
	cargarFabricas();
</script>
<script id="tpl_fabricas" type="text/template">
	<%

		_.each(fabricas, function(data){
			%>
			<a href="#" onclick ="javascript:cargarLineas(<%= data.id %>, '<%= data.nombre %>')">
				<img src="<%= IP_SERVER + '/' + data.ruta %>" alt="fabricas zapatos bucaramanga <%= data.nombre%>">
			</a>
			<%
		});

	%>
</script>

<script id="tpl_lineas" type="text/template">
	<div class="row">
	<%
		var year_lanz = '';

		_.each(lineas, function(data){

			if (year_lanz != data.fecha_lanz.split('-')[0]){
				year_lanz = data.fecha_lanz.split('-')[0];
				%>
				<div class="well well-sm">Temporada <%= data.fecha_lanz %></div>
				<%
			}
			%>
			
			<div class="col-md-4 portfolio-item">
				
				<img class="img-responsive" src="<%=  IP_SERVER + '/' + data.ruta %>" alt="tendencias zapatos bucaramanga <%= data.nombre%>">
				<div class="caption">
					<h3><%= datosRuta.fabrica%> - <%= data.nombre%></h3>
					<p>
						<a href="<%=  IP_SERVER + '/' %>comprar/resumenout/<%= data.id%>" class="btn btn-primary" role="button">Comprar</a>
						<a href="<%=  IP_SERVER + '/' %>usuario/editarZapato/<%= data.fabrica%>/<%= data.id%>" class="btn btn-default" role="button">Modificar</a>
					</p>
				</div>
				
			</div>
			

			<%
		});

	%>
	</div>

</script>


