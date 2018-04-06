@extends('admin.layoutAdmin')

@section('titulo')
	Sistema SIGEADCON
@endsection

@section('contenido')
	<div class="row">
		<div class="col mx-auto">
			<h4><center>Lista de Contadores registrados en el Sistema</center></h4>
			<br>
			<div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th class="text-center">Usuario</th>
						<th class="text-center">Password</th>
						<th class="text-center">Acciones</th>
                </tr>
              </thead>
              <tbody>
 				  @if($administradores->isNotEmpty())
					@foreach ($administradores as $admin)
					<tr>
						<td class="text-center" style="vertical-align:middle;">
							{{ $admin->user }}
						</td>
						<td class="text-center" style="vertical-align:middle;">
							{{ $admin->password }}
						</td>
					   <td class="text-center" style="vertical-align:middle;">
							<form method="POST" action="{{route('admin.destroyadmin',['admin'=>$admin])}}">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<a href="" class="btn btn-link">
								<button type="submit" class="btn btn-link">
									<span title="Eliminar Admin" class="oi oi-trash text-danger">
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
							<p><center>No hay resultados de búsqueda o no hay contadore registrados</center></p>
						</td>
		    		</tr>		
				  @endif
              </tbody>
            </table>

				@if ($errors->has('msj_error_admin'))	
				<div class="msj-error col-4 mx-auto text-center">
					<p class="alert alert-danger primero">
						{{ $errors->first('msj_error_admin') }}
					</p>
				</div>	
				@endif
          </div>
		</div>
	</div>
@endsection
