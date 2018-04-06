@extends('user.layoutUser')

@section('titulo')
	Sistema SIGEADCON
@endsection

@section('nav_sup')
	
@endsection

@section('contenido')
	 <div class="row">
		<div class="col mx-auto">
		<h4><center>Lista de Clientes</center></h4>
          <div class="table-responsive">
				@yield("contenido")
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th class="text-center">Nro</th>
		      		<th class="text-center">Cliente</th>
		      		<th class="text-center">Cédula</th>
		      		<th class="text-center">Correo Electrónico</th>
						<th class="text-center">Teléfono</th>
						<th class="text-center">Acciones</th>
                </tr>
              </thead>
              <tbody>
 				  @if($clientes->isNotEmpty())
					@foreach ($clientes as $cliente)
					<tr>
						<td class="text-center" style="vertical-align:middle;">
							{{ $cliente->id }}
						</td>
					   <td class="text-center" style="vertical-align:middle;">
							{{ $cliente->nombre." ".$cliente->apellido }}
						</td>
					   <td class="text-center" style="vertical-align:middle;">
							{{ $cliente->cedula }}
						</td>
						<td class="text-center" style="vertical-align:middle;">
							{{ $cliente->email }}
						</td>
						<td class="text-center" style="vertical-align:middle;">{{ $cliente->telefono }}</td>
					   <td class="text-center" style="vertical-align:middle;">
						  <form method="POST" action="{{route('usuario.destroycliente',['cliente' => $cliente])}}">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<a href="{{route('usuario.mostrarcliente',['cliente'=>$cliente])}}" class="btn btn-link">
								<span title="Ver Cliente" class="oi oi-eye text-danger">
							</a> | 
							<a href="{{route('usuario.editarcliente',['cliente'=>$cliente])}}" class="btn btn-link">
								<span title="Editar Cliente" class="oi oi-pencil text-danger">
							</a> |
							<a href="" class="btn btn-link">
								<button type="submit" class="btn btn-link">
									<span title="Eliminar Cliente" class="oi oi-trash text-danger">
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
							<p><center>No hay resultados de búsqueda o no posee clientes registrados</center></p>
						</td>
		    		</tr>		
				  @endif
              </tbody>
            </table>
          </div>
		</div>
	</div>

@endsection

@section('javascr')

@endsection
