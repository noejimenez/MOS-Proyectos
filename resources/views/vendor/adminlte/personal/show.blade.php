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

			<h2> <strong> Detalles de Personal</strong></h2>
			<h2><strong> Nombre: {{ $personal->nombre }} {{ $personal->apaterno }}  {{ $personal->amaterno}}</strong></h2>

		    <div class="jumbotron text-center col-xs-12">
		        <p>
		            <strong>ID:</strong> {{ $personal->id_personal }}<br>
		            <strong>Nombre:</strong> {{ $personal->nombre }} {{ $personal->apaterno }}  {{ $personal->amaterno}}<br>
		            <strong>CURP:</strong> {{ $personal->curp }}
		            <strong> &nbsp;IFE/INE:</strong> {{ $personal->ife }}
		            <strong> &nbsp;RFC:</strong> {{ $personal->rfc }}<br>
		            <strong> &nbsp; Número de Seguro Social:</strong> {{ $personal->imss }}<br>
		            <strong>Estado Civil:</strong> {{ $personal->estado_civil }}
		            <strong> &nbsp; Género:</strong> {{ $personal->sexo }}<br>
		            <strong>Edad:</strong> {{ $personal->edad }}<strong> años</strong>
		            <strong> &nbsp; Peso:</strong> {{ $personal->peso }}<strong> kgs </strong><strong> &nbsp; Estatura:</strong>{{ $personal->estatura }} <strong> m</strong><br>
					<strong>Fecha de Nacimiento:</strong> {{ $personal->fecha_nacimiento }}
					<strong> &nbsp; Nacionalidad:</strong> {{ $personal->nacionalidad }}<br>
					<strong> Correo Electrónico:</strong> {{ $personal->email }}<br>
					<strong>Teléfonos</strong><br>
					<strong> &nbsp; Celular:</strong> {{ $personal->celular }}
					<strong> &nbsp; Teléfono de Casa:</strong> {{ $personal->tel_casa }}
					<strong> &nbsp; Tel. emergencia:</strong> {{ $personal->tel_emergencia }}<br>
					<strong>Licencia:</strong> {{ $personal->licencia }}
					<strong> &nbsp; Vigencia de Licencia:</strong> {{ $personal->vigencia_licencia }}<br>
					<strong>Departamento:</strong> {{ $personal->departamento }}
					<strong> &nbsp; Cargo:</strong> {{ $personal->cargo }}
					<strong> &nbsp; Fecha de Ingreso:</strong> {{ $personal->fecha_ingreso }}<br>
					<strong> Hora entrada:</strong> {{ $personal->hora_entrada }}
					<strong> &nbsp; Hora salida:</strong> {{ $personal->hora_salida }}<br>
					<strong>Tipo de contrato:</strong> {{ $personal->tipo_contrato }}
					<strong> &nbsp; Salario:</strong> ${{ $personal->salario }}<br>
					
					<a href="{{URL::action('PersonalController@edit',$personal->id_personal)}}"><button class="btn btn-info" title="Editar">Editar</button></a>
		        </p>	
		    </div>

			</div>
		</div>
	</div>
@endsection