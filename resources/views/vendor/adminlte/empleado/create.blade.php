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
				<br>
				<h2 align="center"><strong> AGREGAR EMPLEADO</strong></h2>
				@if (count($errors)>0)
					<div class="alert alert-danger">
						<ul>
						@foreach ($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
						</ul>
					</div>
				@endif
				<br>
				
				<!-- Form -->
				{!!Form::open(array('url'=>'home/empleado','method'=>'POST','autocomplete'=>'off'))!!}
            	{{Form::token()}}

				<h3><strong>Datos Personales</strong></h3>
				<p style="color:red;">* Campos Obligatorios</p>
				<div class="form-group has-feedback">
                    <label for="NOMBRE">Nombre *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Nombre') }}" name="NOMBRE" value="{{ old('NOMBRE') }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                	<label for="APELLIDOPATERNO">Apellido Paterno *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Apellido Paterno') }}" name="APELLIDOPATERNO" value="{{ old('APELLIDOPATERNO') }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                	<label for="APELLIDOMATERNO">Apellido Materno *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Apellido Materno') }}" name="APELLIDOMATERNO" value="{{ old('APELLIDOMATERNO') }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback">
                    <label for="DIRECCION">Dirección *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Dirección') }}" name="DIRECCION" value="{{ old('DIRECCION') }}"/>
                    <span class="form-control-feedback"></span>
                </div>

                <div class="form-inline">
                	<label for="ESTADO">Estado *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('') }}" name="ESTADO" value="{{ old('ESTADO') }}"/>

                    <label for="MUNICIPIO">Municipio*</label>
                    <input type="text" class="form-control" placeholder="{{ trans('') }}" name="MUNICIPIO" value="{{ old('MUNICIPIO') }}"/>
                	
                    <label for="CODIGOPOSTAL">Código Postal*</label>
                    <input type="text" class="form-control" placeholder="{{ trans('') }}" name="CODIGOPOSTAL" value="{{ old('CODIGOPOSTAL') }}"/>
                    <br><br>

                    <label for="TELEFONO">Teléfono</label>
                    <input type="tel" class="form-control" placeholder="{{ trans('Teléfono') }}" name="TELEFONO" value="{{ old('TELEFONO') }}"/>

                    <label for="CELULAR">Celular</label>
                    <input type="tel" class="form-control" placeholder="{{ trans('Número de celular') }}" name="CELULAR" value="{{ old('CELULAR') }}"/>

                    <label for="EMAIL">Correo Electrónico</label>
                    <input type="email" class="form-control" placeholder="{{ trans('Correo electrónico') }}" name="EMAIL" value="{{ old('EMAIL') }}"/>
                    <br><br>

                	<label for="FECHANACIMIENTO">Fecha de Nacimiento *</label>
                    <input type="date" class="form-control" placeholder="{{ trans('AAAA-MM-DD') }}" name="FECHANACIMIENTO" value="{{ old('FECHANACIMIENTO') }}"/>
                    <br><br>

                    <label for="EMPRESA">Empresa</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Nombre de Empresa') }}" name="EMPRESA" value="{{ old('EMPRESA') }}"/> 

                    <label for="CATEGORIA">Categoria</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Nombre de la Categoria') }}" name="CATEGORIA" value="{{ old('CATEGORIA') }}"/>

                    <label for="PROYECTOS">Proyectos</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Proyectos') }}" name="PROYECTOS" value="{{ old('PROYECTOS') }}"/>
                    <br><br>
                    

                    <label for="FECHADEINGRESO">Fecha de Ingreso</label>
                    <input type="date" class="form-control" placeholder="{{ trans('AAAA-MM-DD') }}" name="FECHADEINGRESO" value="{{ old('FECHADEINGRESO') }}"/>

                    {{-- <label for="fecha_fin">Fecha de Baja</label>
                    <input type="date" class="form-control" placeholder="{{ trans('') }}" name="fecha_fin" value="{{ old('fecha_fin') }}"/>  --}} 
                                                      		
                </div>
                <br>

				{{-- <p style="color:red;">* Campos Obligatorios</p> --}}
				<br>
				<div class="form-group">
	            	<button class="btn btn-success" type="submit">Guardar</button>
	            	<button class="btn btn-danger" type="reset">Cancelar</button>
	            </div>
				{!!Form::close()!!}	<!--end Form -->
			</div>
		</div>
	</div>
@endsection