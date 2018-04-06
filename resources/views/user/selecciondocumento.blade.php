@extends('user.layoutUser')

@section('titulo')
	Sistema SIGEADCON
@endsection

@section('nav_sup')
	
@endsection

@section('contenido')
	<div class="row">
		<div class="col-10 mx-auto">
			<h4 class="card-title"><center>Seleccione un Documento</center></h4>		
		</div>
	</div>
		  
	
		<div class="col-10 mx-auto">
		<hr/>
			<ul class="nav flex-column mb-8">
              <li class="nav-item">
                <a class="nav-link text-danger" href="{{route('documento.situacionfinanciera')}}">
                  <span data-feather="file-text"></span>
                  Estado de Situación Financiera
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-danger" href="#">
                  <span data-feather="file-text"></span>
                  Estado de Resultados
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-danger" href="#">
                  <span data-feather="file-text"></span>
                  Estado de Flujo de Efectivo
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-danger" href="#">
                  <span data-feather="file-text"></span>
                  Informe de Atestiguamiento sobre Ingresos de Personas Naturales
                </a>
              </li>
				   <li class="nav-item">
                <a class="nav-link text-danger" href="#">
                  <span data-feather="file-text"></span>
                  Relación de Ingresos
                </a>
              </li>
				   <li class="nav-item">
                <a class="nav-link text-danger" href="#">
                  <span data-feather="file-text"></span>
                  Carta de Presentación
                </a>
              </li>
            </ul>
		</div>
	

@endsection
