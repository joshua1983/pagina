
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
				<img src="<%= data.ruta %>" alt="fabricas zapatos bucaramanga <%= data.nombre%>">
			</a>
			<%
		});

	%>
</script>

<script id="tpl_lineas" type="text/template">

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
			<div class="panel panel-warning">

			<div class="panel-heading" align="center">
				<h3><%= datosRuta.fabrica%> - <%= data.nombre %></h3>
			</div>

			<div class="panel-body"
				<div class="row" align="center">
					<img src="<%= data.ruta %>" alt="tendencias zapatos bucaramanga <%= data.nombre%>">
				</div>
				<div class="row" align="center">
					<div class="col-xs-6">
						<button class="btn btn-success">Compar</button>
					</div>
					<div class="col-xs-6">
						<a  class="btn btn-primary" href="usuario/editarZapato/<%= data.fabrica%>/<%= data.id%>">Modificar </a>
						
					</div>
				</div>
				</br>
			</div>

			</div>
			<%
		});

	%>

</script>


