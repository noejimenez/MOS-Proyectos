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
				<h2>Editar: {{ $automovil->NIV}}</h2>
				@if (count($errors)>0)
				<div class="alert alert-danger">
					<ul>
					@foreach ($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
					</ul>
				</div>
				@endif
			
			{!!Form::model($automovil,['method'=>'PATCH','route'=>['automovil.update', $automovil->id_auto]])!!}
            {{Form::token()}}
            
            <br><br>                    
                
				<p style="color:red;">* Campos Obligatorios</p>
                <br>
                <div class="form-group has-feedback">
                    <label for="nombre">Nombre *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Nombre') }}" name="nombre" value="{{ $automovil->nombre }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                
                <div class="form-inline">
                    <label for="rfc">RFC *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('RFC') }}" name="rfc" value="{{ $automovil->rfc }}"/>

                    <label for="marca">Marca *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('') }}" name="marca" value="{{ $automovil->marca }}"/>
                
                    <label for="vehiculo">Vehiculo *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('') }}" name="vehiculo" value="{{ $automovil->vehiculo }}"/>
                    <br><br>

                    <label for="modelo">Modelo *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Modelo') }}" name="modelo" value="{{ $automovil->modelo }}"/>
                    

                    <label for="clase_tipo">Clase y Tipo *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Clase y Tipo') }}" name="clase_tipo" value="{{ $automovil->clase_tipo }}"/>
                    <br><br>

                    <label for="oficina_exp">Oficina de Expedición</label>
                    <input type="number" class="form-control" placeholder="{{ trans('Oficina') }}" name="oficina_exp" value="{{ $automovil->oficina_exp}}"/>

                    <label for="veh_origen">Origen del Vehículo *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Origen') }}" name="veh_origen" value="{{ $automovil->veh_origen }}"/>
                    <br><br>

                    <label for="fecha_exp">Fecha de Expedición</label>
                    <input type="date" class="form-control" placeholder="{{ trans('') }}" name="fecha_exp" value="{{ $automovil->fecha_exp }}"/> 
                    
                    <label for="vigencia">Tipo Vigencia *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Vigencia') }}" name="vigencia" value="{{ $automovil->vigencia }}"/>
                    
                </div>
                <br>

                <hr>
                <div class="form-group has-feedback">
                    <label for="NIV"><strong>NIV *</strong></label>
                    <input type="text" class="form-control" placeholder="{{ trans('Número de Identificación Vehicular') }}" name="NIV" value="{{ $automovil->NIV }}"/>
                    <span class="glyphicon glyphicon-barcode form-control-feedback"></span>
                </div>

                <div class="form-inline">
                    <label for="motor">Motor</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Motor') }}" name="motor" value="{{ $automovil->motor }}"/>

                    <label for="cilindros">Cilindros</label>
                    <input type="number" class="form-control" placeholder="{{ trans('No. de Cilindros') }}" name="cilindros" value="{{ $automovil->cilindros }}"/>
                                    
                    <label for="combustible">Combustible</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Tipo de combustible') }}" name="combustible" value="{{ $automovil->combustible }}"/>  
                    <br><br>            

                    <label for="personas">Personas</label>
                    <input type="number" class="form-control" placeholder="{{ trans('No. de Personas') }}" name="personas" value="{{ $automovil->personas }}"/>
                    
                    <label for="uso">Uso</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Tipo de uso') }}" name="uso" value="{{ $automovil->uso}}"/>

                    <label for="capacidad_carga">Capacidad de carga</label>
                    <input type="number" class="form-control" placeholder="{{ trans('Capacidad en Kgs') }}" name="capacidad_carga" value="{{ $automovil->capacidad_carga }}"/>   
                    <br><br>

                    <label for="folio">Folio</label>
                    <input type="text" class="form-control" placeholder="{{ trans('No. de Folio') }}" name="folio" value="{{ $automovil->folio }}"/>

                    <label for="placa">Placa</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Placa') }}" name="placa" value="{{ $automovil->placa }}"/>
                    <br><br>

                    <label for="verificacion">Estado de Verificación</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Verificación') }}" name="verificacion" value="{{ $automovil->verificacion }}"/>

                    <label for="fecha_verificacion">Fecha de Verificación</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Meses Verificación') }}" name="fecha_verificacion" value="{{ $automovil->fecha_verificacion }}"/>
                    <br><br>

                    <label for="certificacion">Estado de Certificación</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Estado de Certificación') }}" name="certificacion" value="{{ $automovil->certificacion }}"/>
                    <label for="color">Color del Vehículo</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Color del vehículo') }}" name="color" value="{{ $automovil->color }}"/>
                    <br><br>
                   
                </div>

                <div class="form-group has-feedback">
                    <label for="observaciones">Observaciones </label>
                    <input type="text" class="form-control" placeholder="{{ trans('Escriba sus observaciones') }}" name="observaciones" value="{{ $automovil->observaciones }}"/>
                </div>
                <br>

				{{-- <p style="color:red;">* Campos Obligatorios</p> --}}
				<br>
				<div class="form-group">
	            	<button class="btn btn-success" type="submit">Guardar</button>
	            	<button class="btn btn-danger" type="reset">Cancelar</button>
	            </div>

                {!!Form::close()!!}	
            </div>
        </div>
    </div>
@endsection
