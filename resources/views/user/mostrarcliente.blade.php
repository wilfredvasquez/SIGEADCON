@extends('user.layoutUser')

@section('titulo')
	Sistema SIGEADCON
@endsection

@section('nav_sup')
	
@endsection

@section('contenido')
	<div class="row">
		<div class="col-10 mx-auto">
			<h4 class="card-title"><center>Detalles del Cliente</center></h4>		
		</div>
		<div class="col-8 mx-auto card borderRight borderLeft borderTop">
		<br>	
		  <div class="row">
			<br>
			<div class="col-4">
				<p class="font-weight-bold text-center">Nombre y Apellido:</p>
				<p class="text-center">{{$cliente->nombre." ".$cliente->apellido}}</p>
			</div>
			<div class="col-4">
				<p class="font-weight-bold text-center">Cédula:</p>
				<p class="text-center">{{$cliente->cedula}}</p>
			</div>
			<div class="col-4 mx-auto">
				<p></p>
				<a class="text-center btn btn-danger" href="{{route('usuario.editarcliente',['cliente'=>$cliente])}}">Modificar Cliente</a>
			</div>
		  </div>
		  <div class="row">
			<br>
			<div class="col-4">
				<p class="font-weight-bold text-center">Correo Electrónico:</p>
				<p class="text-center">{{$cliente->email}}</p>
			</div>
			<div class="col-4">
				<p class="font-weight-bold text-center">Teléfono:</p>
				<p class="text-center">{{$cliente->telefono}}</p>
			</div>
			<div class="col-4 mx-auto">
				<a class="text-center btn btn-danger" href="{{ route('documentos.cargadatosdocumentos',['cliente'=>$cliente]) }}">Crear Documento</a>
			</div>
		  </div>
		</div>
	</div>
	<hr/>
	<div class="row">
		<div class="col-10 mx-auto">
			<h4><center>Historial de Documentos</center></h4>
			<br>			
		</div>
		<div class="col mx-auto">
			<div class="table-responsive">
				@yield("contenido")
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th class="text-center">Nro</th>
		      		<th class="text-center">Cliente</th>
		      		<th class="text-center">Estatus</th>
						<th class="text-center">Creado</th>
						<th class="text-center">Modificado</th>
						<th class="text-center">Acciones</th>
                </tr>
              </thead>
              <tbody>
					@if($documentos->isNotEmpty())
						@foreach ($documentos as $documento)
					<tr>
						<td class="text-center" style="vertical-align:middle;">
							{{ $documento->id }}
						</td>
					   <td class="text-center" style="vertical-align:middle;">
							{{ $cliente->nombre." ".$cliente->apellido }}
						</td>
					  
							@if($documento->estatus == 0) 
								 <td class="text-center text-danger" style="vertical-align:middle;"> 
									No cancelado 
								</td>
							@else
								 <td class="text-center text-success" style="vertical-align:middle;">
									Cancelado 
								</td>
							@endif  
						<td class="text-center" style="vertical-align:middle;">
							{{ $documento->created_at}}
						</td>
						<td class="text-center" style="vertical-align:middle;">
							{{ $documento->updated_at }}
						</td>
					   <td class="text-center">
						  <form method="POST" action="{{route('documentos.destroydocumento',['cliente'=>$cliente, 'id_doc' => $documento->id])}}">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<a target="_blank" href="{{route('documentos.pdf',['cedula_cliente'=>$cliente->cedula, 'id_doc'=>$documento->id])}}" class="btn btn-link">
								<span title="Generar PDF" class="oi oi-document text-danger">
							</a>|
							<a href="{{route('documentos.editardocumento',['cliente'=>$cliente, 'id_doc'=>$documento->id])}}" class="btn btn-link">
								<span title="Editar Documento" class="oi oi-pencil text-danger">
							</a>|
							<a href="{{route('documentos.cambiarestatus',['cliente'=>$cliente, 'id_doc' => $documento->id])}}" class="btn btn-link">
								<span title="Cambiar Estatus" class="oi oi-transfer text-danger">
							</a>|
							<a href="" class="btn btn-link">
								<button type="submit" class="btn btn-link">
									<span title="Eliminar Documento" class="oi oi-trash text-danger">
									</span>
								</button>
							</a>
						  </form>
					   </td>
		    		</tr>
					@endforeach
              @else
					<tr></tr>
				   <tr>
						<td colspan="6">
							<br>
							<p><center>No posee documentos registrados</center></p>
						</td>
		    		</tr>	
					@endif
              </tbody>
            </table>
          </div>
		</div>
	</div>

@endsection
