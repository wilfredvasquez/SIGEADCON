<div class="row">
<div id="cartapresentacion" class="col-10 mx-auto card marco-documento" style='display:none'>
	
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
					CARTA DE PRESENTACIÓN
				</p>
			</div>
			<div class="col">
				<!-- Fecha del Documento-->
				<p class="text-right">
					<input class="campo-rellernar text-right" size="40" type="text" name="fecha_cart" id="fecha_cart" placeholder="Lugar y Fecha" value="{{ $cart->fecha }}">
				</p>
				<!-- Contador y Dirección-->
				<p class="text-justify">
				Licenciado {{ $contador->nombre.' '.$contador->apellido  }}
				</p>
				<p class="text-justify">
					<input class="campo-rellernar" size="80" type="text" name="direccion" id="direccion" placeholder="Dirección" value="{{ $cart->direccion }}">
				</p>
				<br>

				<!--Párrafo -->
				<p class="text-justify">
				Estimado Licenciado
				</p>		
				<p class="text-justify">
				En relación a la revisión que ha realizado sobre mis ingresos por un monto de Bs. 
				<!-- Total ingresos texto-->
				<input class="campo-rellernar text-center total_ingresos_text" size="10" name="ingresos_cart" type="text" placeholder="Total" value={{ $rel->ingresos }} readonly>
				por el periodo comprendido entre el 
				<!-- Periodo-->
				<input class="campo-rellernar text-center" size="40" type="text" name="periodo_cart" id="periodo_cart" placeholder="Periodo" value="{{ $cart->periodo }}">, 
				me es grato confirmarle lo siguiente: 
				</p><br>

				<p class="text-justify">
				Reconozco que es de mi responsabilidad la determinación del monto de los ingresos por Bs. 
				<input class="campo-rellernar text-center total_ingresos_text" size="10" type="text" placeholder="Total" value={{ $rel->ingresos }} readonly> 
				Su responsabilidad es la de confrontar tales montos con la documentación presentada. 
				</p><br>			

				<p class="text-justify">
				La documentación que soporta tales ingresos está representada
				<input class="campo-rellernar" size="83" type="text" name="soporte" placeholder="Ej: Depósitos bancarios realizados en mi cuenta corriente en (Banco)." value="{{ $cart->soporte }}">
				</textarea>
				</p><br>

				<p class="text-justify">
				Todos los ingresos presentados por mí provienen de actividades legítimas y licitas, todas 
				comprobables.
				</p><br>

				<p class="text-center">
				Atentamente,
				</p><br>

				<!--Firma del Cliente -->
				<p class="text-center font-weight-bold">
					{{ $cliente->nombre.' '.$cliente->apellido }}
				</p>
				<p class="text-center font-weight-bold">
					Cédula de Identidad No. V- {{ $cliente->cedula }}
				</p><br>

			</div>
		</div>
		<br>



	</div>


</div>
</div>
