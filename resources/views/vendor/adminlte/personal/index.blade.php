@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-xs-12">
				<h3 align="center"><strong>PERSONAL</strong></h3>
				<br>
				<div class="col-md-4 col-xs-6">
					<a href="personal/create"><button class="btn btn-success">Nuevo</button></a>
				</div>
				<div class="col-md-4 col-md-offset-4 col-xs-6">
					<a href="personalreporte/1" target="_blank"><button class="btn btn-secondary">Ver Reporte</button></a>
					<a href="personalreporte/2" target="_blank"><button class="btn btn-primary" alt="Descargar">Descargar Reporte</button></a>
					<br><br>
				</div>
				@include('adminlte::personal.search')
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-xs-12">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
							<th>ID</th>
							<th>Nombre</th>
							<th>Apellido Paterno</th>
							<th>Apellido Materno</th>
							<th>No. de Celular</th>
							<th>CURP</th>
							<th>IFE</th>
							<th>No. de Seguro</th>
							<th>Departamento</th>
							<th>Ver</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</thead>
		               @foreach ($personal as $persona)
						<tr>
							<td>{{ $persona->id_personal}}</td>
							<td>{{ $persona->nombre}}</td>
							<td>{{ $persona->apaterno}}</td>
							<td>{{ $persona->amaterno}}</td>
							<td>{{ $persona->celular}}</td>
							<td>{{ $persona->curp}}</td>
							<td>{{ $persona->ife}}</td>
							<td>{{ $persona->imss}}</td>
							<td>{{ $persona->departamento}}</td>
							<td>
								<a href="{{URL::action('PersonalController@show',$persona->id_personal)}}"><button class="btn btn-info glyphicon glyphicon-list-alt" title="Visualizar"></button></a>	
							</td>
							<td>
								<a href="{{URL::action('PersonalController@edit',$persona->id_personal)}}"><button class="btn btn-primary glyphicon glyphicon-edit" title="Visualizar y Editar"></button></a>
							</td>
							<td>
		                        @include('adminlte::personal.delete')
							</td>
						</tr>
						@endforeach
					</table>
				</div>
				{{$personal->render()}}
			</div>
		</div>
	</div>
@endsection