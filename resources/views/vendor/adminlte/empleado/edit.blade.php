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
                <h2 align="center"><strong>Datos del empleado</strong></h2>
				<h3>Editar: {{ $empleado->NOMBRE}} {{ $empleado->APELLIDOPATERNO}} {{ $empleado->APELLIDOMATERNO}}</h3>
				@if (count($errors)>0)
				<div class="alert alert-danger">
					<ul>
					@foreach ($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
					</ul>
				</div>
				@endif
			

			{!!Form::model($empleado,['method'=>'PATCH','route'=>['empleado.update',$empleado->Id]])!!}
            {{Form::token()}}

            
                <p style="color:red;">* Campos Obligatorios</p>
                <div class="form-group has-feedback">
                    <label for="NOMBRE">Nombre *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Nombre') }}" name="NOMBRE" value="{{ $empleado->NOMBRE }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <label for="APELLIDOPATERNO">Apellido Paterno *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Apellido Paterno') }}" name="APELLIDOPATERNO" value="{{ $empleado->APELLIDOPATERNO }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <label for="APELLIDOMATERNO">Apellido Materno *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Apellido Materno') }}" name="APELLIDOMATERNO" value="{{ $empleado->APELLIDOMATERNO }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback">
                    <label for="DIRECCION">Dirección *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Dirección') }}" name="DIRECCION" value="{{ $empleado->DIRECCION }}"/>
                    <span class="form-control-feedback"></span>
                </div>

                <div class="form-inline">
                    <label for="ESTADO">Estado *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('') }}" name="ESTADO" value="{{ $empleado->ESTADO }}"/>

                    <label for="MUNICIPIO">Municipio*</label>
                    <input type="text" class="form-control" placeholder="{{ trans('') }}" name="MUNICIPIO" value="{{ $empleado->MUNICIPIO }}"/>
                    
                    <label for="CODIGOPOSTAL">Código Postal*</label>
                    <input type="text" class="form-control" placeholder="{{ trans('') }}" name="CODIGOPOSTAL" value="{{ $empleado->CODIGOPOSTAL }}"/>
                    <br><br>

                    <label for="TELEFONO">Teléfono</label>
                    <input type="tel" class="form-control" placeholder="{{ trans('Teléfono') }}" name="TELEFONO" value="{{ $empleado->TELEFONO }}"/>

                    <label for="CELULAR">Celular</label>
                    <input type="tel" class="form-control" placeholder="{{ trans('Número de celular') }}" name="CELULAR" value="{{ $empleado->CELULAR }}"/>

                    <label for="EMAIL">Correo Electrónico</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Correo electrónico') }}" name="EMAIL" value="{{ $empleado->EMAIL }}"/>
                    <br><br>

                    <label for="FECHANACIMIENTO">Fecha de Nacimiento *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('dd/mm/aaaa') }}" name="FECHANACIMIENTO" value="{{ $empleado->FECHANACIMIENTO }}"/>
                    <br><br>

                    <label for="EMPRESA">Empresa</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Nombre de Empresa') }}" name="EMPRESA" value="{{ $empleado->EMPRESA }}"/> 

                    <label for="CATEGORIA">Categoria</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Nombre de la Categoria') }}" name="CATEGORIA" value="{{ $empleado->CATEGORIA }}"/>

                    <label for="PROYECTOS">Proyectos</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Proyectos') }}" name="PROYECTOS" value="{{ $empleado->PROYECTOS }}"/>
                    <br><br>
                    

                    <label for="FECHADEINGRESO">Fecha de Ingreso</label>
                    <input type="date" class="form-control" placeholder="{{ trans('AAAA-MM-DD') }}" name="FECHADEINGRESO" value="{{ $empleado->FECHADEINGRESO }}"/>
                    <br>
                    
                    {{-- <label for="FECHADEBAJA"> &nbsp; &nbsp;Fecha de Baja</label>
                    <input type="date" class="form-control" placeholder="{{ trans('AAAA-MM-DD') }}" name="FECHADEBAJA" value="{{ $empleado->FECHADEBAJA }}"/>  --}}
                                                            
                </div>

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
