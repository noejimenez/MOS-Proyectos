@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-xs-12">
				<h3 align="center"><strong>EMPLEADOS</strong></h3>
				<br>
				<div class="col-md-4 col-xs-6">
					<a href="empleado/create"><button class="btn btn-success">Nuevo</button></a>
				</div>
				<div class="col-md-4 col-md-offset-4 col-xs-6">
					<a href="empleadosreporte/1" target="_blank"><button class="btn btn-secondary">Ver Reporte</button></a>
					<a href="empleadosreporte/2" target="_blank"><button class="btn btn-primary" alt="Descargar">Descargar Reporte</button></a>
					<br><br>
				</div>
				@include('adminlte::empleado.search')
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
							<th>ID</th>
							<th>Nombre</th>
							<th>Dirección</th>
							<th>Municipio</th>
							<th>Celular</th>
							<th>Empresa</th>
							<th>Categoria</th>
							<th>Ver</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</thead>
		               @foreach ($empleados as $empleado)
						<tr>
							<td>{{ $empleado->Id}}</td>
							<td>{{ $empleado->NOMBRE}} {{ $empleado->APELLIDOPATERNO}} {{ $empleado->APELLIDOMATERNO}}</td>
							<td>{{ $empleado->DIRECCION}}</td>
							<td>{{ $empleado->MUNICIPIO}}</td>
							<td>{{ $empleado->CELULAR}}</td>
							<td>{{ $empleado->EMPRESA}}</td>
							<td>{{ $empleado->CATEGORIA}}</td>
							<td>
								<a href="{{URL::action('EmpleadoController@show',$empleado->Id)}}"><button class="btn btn-info glyphicon glyphicon-list-alt" title="Visualizar"></button></a>	
							</td>
							<td>
								<a href="{{URL::action('EmpleadoController@edit',$empleado->Id)}}"><button class="btn btn-primary glyphicon glyphicon-edit" title="Visualizar y Editar"></button></a>
							</td>
							<td>
		                        @include('adminlte::empleado.delete')
							</td>
						</tr>
						@endforeach
					</table>
				</div>
				{{$empleados->render()}}
			</div>
		</div>
	</div>
@endsection