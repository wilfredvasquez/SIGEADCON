<!-- Encabezado -->
		<div class="row">
			<div class="col">
				<img class="" src="/var/www/html/sigeadcon/public/image/logo.jpg" width="80" height="80"> 
			</div>
			<div class="col">
				<br>
				<p class="text-center">
					{{ strtoupper($cliente->nombre)." ".strtoupper($cliente->apellido) }}
				</p>
				<p class="text-center font-weight-bold">
					RELACIÓN DE INGRESOS
				</p>
				<p class="text-center">
					Del {{ $ates->periodo_1 }}
				</p>
			</div>
		</div>

		<div class="subir-10">
			<table class="table table-sm border-0">
              <thead>
                <tr>
                  <th class="text-left subrayado border-0">Detalles de los Ingresos</th>
		      		<th class="text-center subrayado border-0">Bolívares</th>
                </tr>
              </thead>
					<br>
					<tbody>
						<tr>
							<td class="text-left ancho-td table-default border-0">1.- Sueldo</td>
							<td class="text-center ancho-td table-default border-0">{{ $rel->sueldo }}</td>
				 		</tr>
						<tr>
							<td class="text-left border-0">2.- Honorarios Profesionales</td>
							<td class="text-center border-0">{{ $rel->honorarios }}</td>
				 		</tr>
						<tr>
							<td class="text-left border-0">3.- Ventas de mercancias</td>
							<td class="text-center border-0">{{ $rel->ventas }}</td>
				 		</tr>	
						<tr>
							<td class="text-left border-0">4.- Alquiler de inmuebles</td>
							<td class="text-center border-0">{{ $rel->alquiler }}</td>
				 		</tr>
						<tr>
							<td class="text-left border-0">5.- Intereses obtenidos</td>
							<td class="text-center border-0">{{ $rel->intereses }}</td>
				 		</tr>	  
						<tr>
							<td class="text-left border-0">6.- Dividendos percibidos</td>
							<td class="text-center border-0">{{ $rel->dividendos }}</td>
				 		</tr>
						<tr>
							<td class="text-left border-0"></td>
							<td class="text-center border-0">_____________</td>
				 		</tr> 
						<tr>
							<td class="text-rigth font-weight-bold border-0">Total de Ingresos Trimestrales:</td>
							<td class="text-center font-weight-bold border-0">{{ $rel->ingresos }}</td>
				 		</tr>
						<tr>
							<td class="text-rigth border-0">PROMEDIO MENSUAL:</td>
							<td class="text-center border-0">{{ $rel->promedio }}</td>
				 		</tr>
              </tbody>
			</table>
	
			<div class="row">
				<div class="col">
					<!-- Párrafo -->
					<p class="text-justify">
					LEGITIMACIÓN DE CAPITALES: Todos y cada uno de los ingresos detallados en esta relación que le he facilitado para su revisión, por un monto promedio de Bs. {{ $rel->promedio }} mensuales, provienen de actividades legítimas y de comprobable lícito ejercicio. 
					</p><br>

					<!--Firma del Cliente -->
					<p class="text-center font-weight-bold">
					{{ strtoupper($cliente->nombre)." ".strtoupper($cliente->apellido) }}
					<br>
					Cédula de Identidad No. V- {{ $cliente->cedula }}
					</p>
	
					<!--Pie -->
					<p class="text-justify font-weight-bold bajar-45">
					Véase informe del contador público independiente sobre revisión de ingresos de personas
					 naturales elaborado en papel de Seguridad Nro. {{ $rel->nro_seguridad }} 
					</p>
				</div>
			</div>
		</div>
