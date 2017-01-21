@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-xs-12">
			<!--Button back -->
            <a href="javascript:history.back()"><button class="btn btn-primary glyphicon glyphicon-chevron-left"> Regresar</button></a>

			<h2> <strong> Detalles del Automóvil</strong></h2>
			<h2><strong> NIV: {{ $automovil->NIV }}</strong></h2>


		    <div class="jumbotron text-center">
		        <p>
		            <strong>ID:</strong> {{ $automovil->id_auto }}<br>
		            <strong>Nombre:</strong> {{ $automovil->nombre }}<br>
		            <strong>RFC:</strong> {{ $automovil->rfc }}<br>
		            <strong>Folio:</strong> {{ $automovil->folio }}<br>
		            <strong>Placa:</strong> {{ $automovil->placa }}<br>
					<strong>Marca:</strong> {{ $automovil->marca }}<br>
					<strong>Vehículo:</strong> {{ $automovil->vehiculo }}<br>
					<strong>Modelo:</strong> {{ $automovil->modelo }}<br>
					<strong>Clase y Tipo:</strong> {{ $automovil->clase_tipo }}<br>
					<strong>Oficina Exp:</strong> {{ $automovil->oficina_exp }}<br>
					<strong>Origen del Vehículo:</strong> {{ $automovil->veh_origen }}<br>
					<strong>Fecha Exp.:</strong> {{ $automovil->fecha_exp }}<br>
					<strong>Vigencia:</strong> {{ $automovil->vigencia }}<br>
					<strong>Motor:</strong> {{ $automovil->motor }}<br>
					<strong>Cilindros:</strong> {{ $automovil->cilindros }}<br>
					<strong>Tipo de Combustible:</strong> {{ $automovil->combustible }}<br>
					<strong>No. de Personas:</strong> {{ $automovil->personas }}<br>
					<strong>Uso:</strong> {{ $automovil->uso }}<br>
					<strong>Capacidad de carga:</strong> {{ $automovil->capacidad_carga }}<strong> kgs</strong><br>
					<strong>Estado de Verificación:</strong> {{ $automovil->verificacion }}<br>
					<strong>Meses de Verificación:</strong> {{ $automovil->fecha_verificacion }}<br>
					<strong>Estado de Certificación:</strong> {{ $automovil->certificacion }}<br>
					<strong>Color:</strong> {{ $automovil->color }}<br>
					<strong>Observaciones:</strong> {{ $automovil->observaciones }}<br>
					<br>
					<a href="{{URL::action('AutomovilController@edit',$automovil->id_auto)}}"><button class="btn btn-info" title="Editar">Editar</button></a>
		        </p>	
		    </div>

			</div>
		</div>

	</div>
@endsection