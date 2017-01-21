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
				<h2 align="center"><strong> AGREGAR AUTOMÓVIL</strong></h2>
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
				{!!Form::open(array('url'=>'home/automovil','method'=>'POST','autocomplete'=>'off'))!!}
            	{{Form::token()}}

				<h3><strong>Datos Generales</strong></h3>
				<p style="color:red;">* Todos los campos son obligatorios</p>
				<div class="form-group has-feedback">
                    <label for="nombre">Nombre *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Nombre') }}" name="nombre" value="{{ old('nombre') }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                
                <div class="form-inline">
                	<label for="rfc">RFC *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('RFC') }}" name="rfc" value="{{ old('rfc') }}"/>

                    <label for="marca">Marca *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('') }}" name="marca" value="{{ old('marca') }}"/>
                
                	<label for="vehiculo">Vehiculo *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('') }}" name="vehiculo" value="{{ old('vehiculo') }}"/>
                    <br><br>

                    <label for="modelo">Modelo *</label>
                    <input type="number" class="form-control" placeholder="{{ trans('Modelo Año') }}" name="modelo" value="{{ old('modelo') }}"/>
                	

                    <label for="clase_tipo">Clase y Tipo *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Clase y Tipo') }}" name="clase_tipo" value="{{ old('clase_tipo') }}"/>
                    <br><br>

                    <label for="oficina_exp">Oficina de Expedición</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Oficina') }}" name="oficina_exp" value="{{ old('oficina_exp') }}"/>

                    <label for="veh_origen">Origen del Vehículo *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Origen') }}" name="veh_origen" value="{{ old('veh_origen') }}"/>
                    <br><br>

                    <label for="fecha_exp">Fecha de Expedición</label>
                    <input type="date" class="form-control" placeholder="{{ trans('') }}" name="fecha_exp" value="{{ old('fecha_exp') }}"/> 
                    
                    <label for="vigencia">Tipo Vigencia *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Vigencia') }}" name="vigencia" value="{{ old('vigencia') }}"/>
                    
                </div>
				<br>

				<hr>
                <div class="form-group has-feedback">
                    <label for="NIV"><strong>NIV *</strong></label>
                    <input type="text" class="form-control" placeholder="{{ trans('Número de Identificación Vehicular') }}" name="NIV" value="{{ old('NIV') }}"/>
                    <span class="glyphicon glyphicon-barcode form-control-feedback"></span>
                </div>

				<div class="form-inline">
                	<label for="motor">Motor</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Motor') }}" name="motor" value="{{ old('motor') }}"/>

                	<label for="cilindros">Cilindros</label>
                    <input type="number" class="form-control" placeholder="{{ trans('No. de Cilindros') }}" name="cilindros" value="{{ old('cilindros') }}"/>
                                    
                    <label for="combustible">Combustible</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Tipo de combustible') }}" name="combustible" value="{{ old('combustible') }}"/>  
                    <br><br>            

                    <label for="personas">Personas</label>
                    <input type="number" class="form-control" placeholder="{{ trans('No. de Personas') }}" name="personas" value="{{ old('personas') }}"/>
                    
                    <label for="uso">Uso</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Tipo de uso') }}" name="uso" value="{{ old('uso') }}"/>

                    <label for="capacidad_carga">Capacidad de carga</label>
                    <input type="number" class="form-control" placeholder="{{ trans('Capacidad en Kgs') }}" name="capacidad_carga" value="{{ old('capacidad_carga') }}"/>	
                    <br><br>

                    <label for="folio">Folio</label>
                    <input type="text" class="form-control" placeholder="{{ trans('No. de Folio') }}" name="folio" value="{{ old('folio') }}"/>

                    <label for="placa">Placa</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Placa') }}" name="placa" value="{{ old('placa') }}"/>
                    <br><br>

                    <label for="verificacion">Estado de Verificación</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Verificación') }}" name="verificacion" value="{{ old('verificacion') }}"/>

                    <label for="fecha_verificacion">Fecha de Verificación</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Meses Verificación') }}" name="fecha_verificacion" value="{{ old('fecha_verificacion') }}"/>
                    <br><br>

                    <label for="certificacion">Estado de Certificación</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Estado de Certificación') }}" name="certificacion" value="{{ old('certificacion') }}"/>
                    <label for="color">Color del Vehículo</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Color del vehículo') }}" name="color" value="{{ old('color') }}"/>
                    <br><br>
                   
                </div>

                <div class="form-group">
                    <label for="observaciones">Observaciones</label><br>
                    <textarea class="form-control" placeholder="{{ trans('Escriba sus observaciones...') }}" name="observaciones" value="{{ old('observaciones') }}"></textarea>
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