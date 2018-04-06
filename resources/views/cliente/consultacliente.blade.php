
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Sistema de Gestión Administrativo Contable</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
	 <link href={{ asset('css/footer.css') }} rel="stylesheet">
	 <link href={{ asset('css/style.css') }} rel="stylesheet">
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="{{ route('home') }}" >
			<img src="{{ asset('image/sigeadcon.png') }}" alt="" width="200" height="40">
		  </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
		  <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
          </ul>
            <a href="{{ route('home') }}" class="btn btn-danger my-2 my-sm-0 text-light">Regresar</a>
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">		
	
		<!-- Cabecera -->
		<div class="row">
			<div class="col-10 mx-auto verticalCenter">
				<h4 class="card-title"><center>Bienvenido (a) {{ $cliente->nombre." ".$cliente->apellido }}</center></h4>		
			</div>
		</div>
		<hr>
		
		<!-- Listado de Documentos -->
		<div class="row">
			<div class="col mx-auto">
				<h4><center>Lista de Documentos</center></h4>
				<br>			
			</div>
		</div>
		<div class="row">
			<div class="col-10 mx-auto">
				<div class="table-responsive">
		         <table class="table table-striped table-sm">
		           <thead>
		             <tr>
		               <th class="text-center">Contador</th>
							<th class="text-center">Nro. Colegiado</th>
							<th class="text-center">Tipo Documentos</th>
				   		<th class="text-center">Estatus</th>
							<th class="text-center">Creado</th>
		             </tr>
		           </thead>
		           <tbody>
						@if(count($infos)!=0)
							@foreach ($infos as $info)
						<tr class="verticalCenter">
							<td class="text-center" style="vertical-align:middle;">Lic. {{ $info->nombre." ".$info->apellido }}</td>
							<td class="text-center" style="vertical-align:middle;">{{ $info->nro_colegiado }}</td>
						  	<td class="text-center" style="vertical-align:middle;">Informe de Atestiguamiento<br> Relación de Ingresos <br> Carta de Presentación</td>
								@if($info->estatus == 0) 
									 <td class="text-center text-danger" style="vertical-align:middle;"> Por pagar </td>
								@else
									 <td class="text-center text-success" style="vertical-align:middle;"> Pagado </td>
								@endif  
							<td class="text-center" style="vertical-align:middle;">{{ $info->created_at}}</td>
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
    </main>


    <footer class="footer text-center">
        	<span class="text-muted col" >FECLAVE RIF J-XXXXXXXX-X © Todos los derechos reservados 2018</span>
			<span class="text-muted col">Desarrollado por Ing. Wilfred Vásquez (wilfredvas@gmail.com) </span>
      </div>
    </footer>			

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

