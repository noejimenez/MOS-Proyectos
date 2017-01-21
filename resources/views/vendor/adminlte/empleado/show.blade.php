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

			<h2 align="center"> <strong> Detalles de empleado</strong></h2>
			<h3 align="center"><strong> Nombre: {{ $empleado->NOMBRE }} {{ $empleado->APELLIDOPATERNO }}  {{ $empleado->APELLIDOMATERNO}}</strong></h3>

		    <div class="jumbotron text-center col-xs-12">
		        <p>
		            <strong>ID:</strong> {{ $empleado->Id }}<br>
		            <strong>Nombre:</strong> {{ $empleado->NOMBRE }} {{ $empleado->APELLIDOPATERNO }}  {{ $empleado->APELLIDOMATERNO}}<br>
		            <strong>Fecha de Nacimiento:</strong> {{ $empleado->FECHANACIMIENTO }}<br>
		            <strong>Dirección:</strong> {{ $empleado->DIRECCION }}<br>
		            <strong>Estado:</strong> {{ $empleado->ESTADO }}
		            <strong>Municipio:</strong> {{ $empleado->MUNICIPIO }}
		            <strong>CP:</strong> {{ $empleado->CODIGOPOSTAL }}<br><br>
									
					<strong>Información de Contacto</strong><br>
					<strong> Celular:</strong> {{ $empleado->CELULAR}}
					<strong> &nbsp; Teléfono:</strong> {{ $empleado->TELEFONO}}<br>
					<strong> Correo Electrónico:</strong> {{ $empleado->EMAIL }}<br><br>
					
					<strong> Empresa:</strong> {{ $empleado->EMPRESA }}
					<strong> &nbsp; Categoria:</strong> {{ $empleado->CATEGORIA }}<br>
					<strong> &nbsp; Proyectos:</strong> {{ $empleado->PROYECTOS }}<br>

					<strong> &nbsp; Fecha de Ingreso:</strong> {{ $empleado->FECHADEINGRESO }}<br><br>
					
					<a href="{{URL::action('EmpleadoController@edit',$empleado->Id)}}"><button class="btn btn-info" title="Editar">Editar</button></a>
		        </p>	
		    </div>

			</div>
		</div>
	</div>
@endsection