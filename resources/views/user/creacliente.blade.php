@extends('user.layoutUser')

@section('titulo')
	Sistema SIGEADCON
@endsection

@section('nav_sup')
	
@endsection

@section('contenido')
	<div class="row">
		<div class="col-10 mx-auto">
			<h4><center>Agregar Cliente</center></h4>
			<br>	
			<form method="POST" action="{{ route('usuario.agregarcliente') }}">
			  {{ csrf_field() }}
			  <div class="form-row">
				 <div class="form-group col-md-6">
					<label for="nombrecli">Nombre</label>
					<input type="text" class="form-control" name="nombrecli" id="nombrecli" placeholder="Nombre" required>
				 </div>
				 <div class="form-group col-md-6">
					<label for="apellidocli">Apellido</label>
					<input type="text" class="form-control" name="apellidocli" id="apellidocli" placeholder="Apellido" required>
				 </div>
			  </div>
			  <div class="form-row">
				  <div class="form-group col-md-6">
						<label for="emailcli">Email</label>
						<input type="email" class="form-control" name="emailcli" id="emailcli" placeholder="Email" required>
					 </div>
					 <div class="form-group col-md-6">
						<label for="cedulacli">Cédula de Identidad</label>
						<input type="text" class="form-control" name="cedulacli" id="cedulacli" placeholder="Cédula de Identidad" required>
				  </div>
				</div>
			  <div class="form-row">
				 <div class="form-group col-md-6">
						<label for="telfcli">Teléfono de contacto</label>
						<input type="text" class="form-control" name="telfcli" id="telflcli" placeholder="Teléfono" required >
				 </div>
				 <div class="form-group col-md-6">
						<label for="nro_colegiado">Nro. de Colegiatura del Contador</label>
						<input type="text" class="form-control" name="nro_colegiado" id="nro_colegiado" value={{ $contador->nro_colegiado }} readonly required >
				 </div>
				 <div class="form-group col-md-6">
				 </div>
			  </div>
			  <div class="form-group">
				<br>
			  <button type="submit" class="btn btn-danger">Agregar</button>
			</form>
		</div>
	</div>
@endsection
