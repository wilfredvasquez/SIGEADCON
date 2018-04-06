<div class="row">
<div class="col-10 mx-auto card marco-documento" id="atestiguamiento" style='display:inline'>

	<br/>
	<div class="documento mx-auto">

		<!--Encabezado -->
		<div class="row">
			<div class="col-1">
				<img class="" src="{{ asset('image/logo.png') }}" width="80" height="80"> 
			</div>
			<div class="col-11">
				<br>
				<p class="text-center font-weight-bold">
					INFORME DE ATESTIGUAMIENTO SOBRE INGRESOS DE PERSONAS NATURALES
				</p>
			</div>
		</div>
		<br>
		
		<!--Cuerpo del Documento -->
		<div class="row">
			<div class="col">
				<!--Institución-->
				<p class="text-justify font-weight-bold">Señores:</p>
				<input class="campo-rellernar" size="40" type="text" name="institucion" id="institucion" placeholder="Institucion" value="{{ $ates->institucion }}">

				<!--Contenido Párrafo 1 -->
				<p></p><br>
				<p class="text-justify">
				He sido contratado para informar sobre los ingresos detallados en la relación adjunta, para el
				periodo entre el 
					<!--Período 1-->
				<input class="campo-rellernar text-center" size="40" type="text" name="periodo_1" id="periodo_1" placeholder="Periodo" value="{{ $ates->periodo_1 }}">, 
				del ciudadano  
					<!-- Nombre y Apellido del Cliente -->
				<input class="campo-rellernar text-center" size="20" type="text" name="nombrecli" id="nombrecli" value="{{ $cliente->nombre.' '.$cliente->apellido }}">
				, titular de la cédula de identidad No. V –
					<!-- Cédula del Cliente --> 
				<input class="campo-rellernar text-center" size="10" type="text" name="cedulacli" id="cedula_cli" value="{{ $cliente->cedula }}">
				, correspondientes a sus actividades dedicadas
					<!-- Actividad del Cliente -->
				<input class="campo-rellernar" size="83" type="text" name="actividad" id="actividad" placeholder="Actividad del Cliente" value="{{ $ates->actividad }}">
				</p><br>
				<p class="text-justify">
					<!-- Nombre y Apellid del Cliente -->
				<input class="campo-rellernar text-center nombrecli" size="20" type="text" value="{{ $cliente->nombre.' '.$cliente->apellido }}"> 
				es responsable de la información suministrada y de la determinación del monto de los ingresos. 
				</p><br>
				<p class="text-justify">
				Mi responsabilidad consiste en expresar una conclusión sobre la procedencia de dichos ingresos, 
 				con base en mis procedimientos, los cuales fueron realizados de conformidad con la Norma 
 				Internacional para Trabajos de Atestiguamiento, distintos de auditorías y revisión de estados 
				financieros, número 3000 (NITA 3000).
				</p><br>
				<p class="text-justify">
				Un trabajo de atestiguamiento para informar sobre los ingresos de personas naturales implica 
				llevar a cabo procedimientos de auditoria para obtener evidencia sobre la procedencia de dichos 
				ingresos. La norma prevé que cumpla con los requerimientos éticos, y que planifique y realice mis 
				procedimientos para obtener una seguridad razonable de que los ingresos presentados en la relación 
				adjunta tienen una procedencia adecuada. Los procedimientos seleccionados dependen del juicio del 
				auditor independiente, lo cual incluye la revisión de los documentos que demuestran la procedencia 
				adecuada de los ingresos. 
				</p><br>
				<p class="text-justify">
				Mi conclusión se ha formado sobre la base de la evidencia obtenida. Los criterios que utilice para 
				formar mi conclusión son los relacionados con la procedencia de los ingresos presentados en la 
				relación adjunta perteneciente al ciudadano 
					<!-- Nombre y Apellid del Cliente -->
				<input class="campo-rellernar text-center nombrecli" size="20" type="text" value="{{ $cliente->nombre.' '.$cliente->apellido }}">, 
				correspondiente al periodo comprendido entre el 
					<!-- Período 2 -->
				<input class="campo-rellernar text-center" size="40" type="text" name="periodo_2" id="periodo_2" placeholder="Periodo" value="{{ $ates->periodo_2 }}">. 
				En conclusión, respecto a todo lo importante, los ingresos presentados en la relación adjunta 
				tienen una procedencia adecuada. 
				</p><br>
				<p>
				Este informe está dirigido únicamente para
					<!-- Motivo del Documento -->
				<input class="campo-rellernar" size="45" type="text" name="motivo" id="motivo" placeholder="Motivo" value="{{ $ates->motivo }}">.  
				</p><br>
				
				<!--Firma del Contador -->
				<p class="text-center font-weight-bold">
				Lic. {{ $contador->nombre.' '.$contador->apellido }}
				</p>
				<p class="text-center font-weight-bold">
				No. {{ $contador->nro_colegiado }} del Distrito Capital
				</p><br>

				<!--Lugar y Fecha -->
				<p class="text-justify">
					<!-- Fecha del Documento -->
				<input class="campo-rellernar" size="40" type="text" name="fecha_ates" id="fecha_ates" placeholder="Lugar y Fecha" value="{{ $ates->fecha }}">
				</p>
			</div>
		</div>
	</div>
</div>
</div>
