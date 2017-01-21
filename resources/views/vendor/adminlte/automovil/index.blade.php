@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-xs-12">
				<h3 align="center"><strong>AUTOMÓVILES</strong></h3>
				<br>
				<div class="col-md-4 col-xs-6">
					<a href="automovil/create"><button class="btn btn-success">Nuevo</button></a>
				</div>
				<div class="col-md-4 col-md-offset-4 col-xs-6">
					<a href="autosreporte/1" target="_blank"><button class="btn btn-secondary">Ver Reporte</button></a>
					<a href="autosreporte/2" target="_blank"><button class="btn btn-primary">Descargar Reporte</button></a>
					<br><br>
				</div>
				@include('adminlte::automovil.search')
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-xs-12">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
							<th>ID</th>
							<th>Nombre</th>
							<th>RFC</th>
							<th>Marca</th>
							<th>Vehiculo</th>
							<th>Modelo</th>
							<th>NIV</th>
							<th>Folio</th>
							<th>Placa</th>
							<th>Observaciones</th>
							<th>Ver</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</thead>
		               @foreach ($automovil as $auto)
						<tr>
							<td>{{ $auto->id_auto}}</td>
							<td>{{ $auto->nombre}}</td>
							<td>{{ $auto->rfc}}</td>
							<td>{{ $auto->marca}}</td>
							<td>{{ $auto->vehiculo}}</td>
							<td>{{ $auto->modelo}}</td>
							<td>{{ $auto->NIV}}</td>
							<td>{{ $auto->folio}}</td>
							<td>{{ $auto->placa}}</td>
							<td>{{ $auto->observaciones}}</td>
							<td>
								<a href="{{URL::action('AutomovilController@show',$auto->id_auto)}}"><button class="btn btn-info glyphicon glyphicon-list-alt" title="Visualizar"></button></a>	
							</td>
							<td>
								<a href="{{URL::action('AutomovilController@edit',$auto->id_auto)}}"><button class="btn btn-primary glyphicon glyphicon-edit" title="Editar"></button></a>
							</td>
							<td>
								@include('adminlte::automovil.delete')
							</td>
						</tr>
						{{-- @include('almacen.categoria.modal') --}}
						@endforeach
					</table>
				</div>
				{{$automovil->render()}}
			</div>
		</div>
	</div>
@endsection