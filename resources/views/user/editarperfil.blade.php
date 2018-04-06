@extends('user.layoutUser')

@section('titulo')
	Sistema SIGEADCON
@endsection

@section('nav_sup')
	
@endsection

@section('contenido')
	<div class="row">
		<div class="col-10 mx-auto">
			<h4><center>Perfil del Contador</center></h4>
			<br>	
			<form method="POST" action="{{ url('usuario/actualizar/perfil',['contador'=>$contador]) }}">
				{{ method_field('PUT') }}
				{{ csrf_field() }}

				<div class="form-row">
				 <div class="form-group col-md-6">
					<label for="nombrecont">Nombre</label>
					<input type="text" class="form-control" name="nombrecont" id="nombrecont" placeholder="Nombre" value={{ old ('nombrecont', $contador->nombre) }} required>
				 </div>
				 <div class="form-group col-md-6">
					<label for="apellidocont">Apellido</label>
					<input type="text" class="form-control" name="apellidocont" id="apellidocont" placeholder="Apellido" value={{ old ('apellidocont', $contador->apellido) }} required>
				 </div>
			  </div>

			  <div class="form-row">
				  <div class="form-group col-md-6">
						<label for="emailcont">Email</label>
						<input type="email" class="form-control" name="emailcont" id="emailcont" placeholder="Email" value={{ old ('emailcont', $contador->email)}} required>
					 </div>
					 <div class="form-group col-md-6">
						<label for="cedulacont">Cédula de Identidad</label>
						<input type="text" class="form-control" name="cedulacont" id="cedulacont" placeholder="Cédula de Identidad" value={{ old ('cedulacont', $contador->cedula) }} required>
				  </div>
				</div>

			  <div class="form-row">
				 <div class="form-group col-md-6">
						<label for="telfcont">Teléfono de contacto</label>
						<input type="text" class="form-control" name="telfcont" id="telflcont" placeholder="Teléfono" value={{ old ('telfcont', $contador->telefono)}} required >
				 </div>
				 <div class="form-group col-md-6">
						<label for="nro_colegiado">Nro. de Colegiatura</label>
						<input type="text" class="form-control" name="nro_colegiado" id="nro_colegiado" value={{ $contador->nro_colegiado }} required >
				 </div>
			  </div>

				<div class="form-row">
				 <div class="form-group col-md-6">
						<label for="inst_cont">Institución Universitaria (Opcional)</label>
						<input type="text" class="form-control" name="inst_cont" id="inst_cont" placeholder="Institución Universitaria" value="{{ old ('inst_cont', $contador->institucion_univ)}}"  >
				 </div>
				 <div class="form-group col-md-6">
						<label for="ano_grad">Año de Graduación (Opcional)</label>
						<input type="text" class="form-control" name="ano_grad" id="ano_grad" value={{ $contador->ano }} >
				 </div>
				</div>
				<div class="form-row">
				 <div class="form-group col-md-6">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Password" value={{ old ('password', $contador->password)}} required >
				 </div>
				 <div class="form-group col-md-6">
				 </div>
				</div>
				<br>
			  <button type="submit" class="btn btn-danger">Actualizar</button>
			</form>
			<br>
		</div>
	</div>
@endsection
