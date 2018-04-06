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
			<form method="POST" action="{{ route('usuario.editarperfil') }}">
				{{ method_field('GET') }}
				{{ csrf_field() }}
				<div class="form-row">
				 <div class="form-group col-md-6">
					<label for="nombrecont">Nombre</label>
					<input type="text" class="form-control" name="nombrecont" id="nombrecont" placeholder="Nombre" value={{ old ('nombrecont', $contador->nombre) }} readonly required>
				 </div>
				 <div class="form-group col-md-6">
					<label for="apellidocont">Apellido</label>
					<input type="text" class="form-control" name="apellidocont" id="apellidocont" placeholder="Apellido" value={{ old ('apellidocont', $contador->apellido) }} readonly required>
				 </div>
			  </div>
			  <div class="form-row">
				  <div class="form-group col-md-6">
						<label for="emailcont">Email</label>
						<input type="email" class="form-control" name="emailcont" id="emailcont" placeholder="Email" value={{ old ('emailcont', $contador->email)}} readonly required>
					 </div>
					 <div class="form-group col-md-6">
						<label for="cedulacont">Cédula de Identidad</label>
						<input type="text" class="form-control" name="cedulacont" id="cedulacont" placeholder="Cédula de Identidad" value={{ old ('cedulacont', $contador->cedula) }} readonly required>
				  </div>
				</div>
			  <div class="form-row">
				 <div class="form-group col-md-6">
						<label for="telfcont">Teléfono de contacto</label>
						<input type="text" class="form-control" name="telfcont" id="telflcont" placeholder="Teléfono" value={{ old ('telfcont', $contador->telefono)}} readonly required >
				 </div>
				 <div class="form-group col-md-6">
						<label for="nro_colegiado">Nro. de Colegiatura</label>
						<input type="text" class="form-control" name="nro_colegiado" id="nro_colegiado" value={{ $contador->nro_colegiado }} readonly required >
				 </div>
				 <div class="form-group col-md-6">
				 </div>
			  </div>
				<div class="form-row">
				 <div class="form-group col-md-6">
						<label for="inst_cont">Institución Universitaria</label>
						<input type="text" class="form-control" name="inst_cont" id="inst_cont" placeholder="Institución Universitaria" value="{{ old ('inst_cont', $contador->institucion_univ)}}" readonly required >
				 </div>
				 <div class="form-group col-md-6">
						<label for="ano_grad">Año de Graduación</label>
						<input type="text" class="form-control" name="ano_grad" id="ano_grad" value={{ $contador->ano }} readonly required >
				 </div>
				 <div class="form-group col-md-6">
				 </div>
			  </div>
			  <div class="form-group">
				<br>
			  <button type="submit" class="btn btn-danger">Modificar</button>
			</form>
		</div>
	</div>
@endsection
