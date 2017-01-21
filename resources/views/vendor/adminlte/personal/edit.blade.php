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
				<h3>Editar: {{ $personal->nombre}}</h3>
				@if (count($errors)>0)
				<div class="alert alert-danger">
					<ul>
					@foreach ($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
					</ul>
				</div>
				@endif
			

			{!!Form::model($personal,['method'=>'PATCH','route'=>['personal.update',$personal->id_personal]])!!}
            {{Form::token()}}

            <h3><strong>Datos Personales</strong></h3>
				<p style="color:red;">* Campos Obligatorios</p>
				<div class="form-group has-feedback">
                    <label for="nombre">Nombre *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Nombre') }}" name="nombre" value="{{$personal->nombre}}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                	<label for="apaterno">Apellido Paterno *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Apellido Paterno') }}" name="apaterno" value="{{ $personal->apaterno }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                	<label for="amaterno">Apellido Materno *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Apellido Materno') }}" name="amaterno" value="{{ $personal->amaterno }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>

                <div class="form-inline">
                	<label for="estado_civil">Estado Civil *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Solter@, Casad@, etc') }}" name="estado_civil" value="{{ $personal->estado_civil }}"/>

                    <label for="estatura">Estatura*</label>
                    <input type="text" class="form-control" placeholder="{{ trans('') }}" name="estatura" value="{{ $personal->estatura }}"/>
                	<br><br>

                	<label for="fecha_nacimiento">Fecha de Nacimiento *</label>
                    <input type="date" class="form-control" placeholder="{{ trans('') }}" name="fecha_nacimiento" value="{{ $personal->fecha_nacimiento }}"/>

                    <label for="nacionalidad">Nacionalidad*</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Nacionalidad') }}" name="nacionalidad" value="{{ $personal->nacionalidad }}"/>
                	<br><br>
                	
                	<label for="edad">Edad</label>
                    <input type="number" class="form-control" placeholder="{{ trans('Edad') }}" name="edad" value="{{ $personal->edad }}"/>

                	<label for="sexo">Sexo</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Masculino/Femenino') }}" name="sexo" value="{{ $personal->sexo }}"/>

                	<label for="peso">Peso</label>
                    <input type="number" class="form-control" placeholder="{{ trans('Peso') }}" name="peso" value="{{ $personal->peso }}"/>	
                </div>
				<br>			
				
				<h3><strong>Datos Generales</strong></h3>
				<div class="form-inline">
                	<label for="celular">Celular</label>
                    <input type="tel" class="form-control" placeholder="{{ trans('Número de celular') }}" name="celular" value="{{ $personal->celular }}"/>

                	<label for="tel_casa">Teléfono de casa</label>
                    <input type="tel" class="form-control" placeholder="{{ trans('Teléfono') }}" name="tel_casa" value="{{ $personal->tel_casa }}"/>

                	<label for="tel_emergencia">Tel. Emergencia</label>
                    <input type="tel" class="form-control" placeholder="{{ trans('Teléfono de Emergencia') }}" name="tel_emergencia" value="{{ $personal->tel_emergencia }}"/>
					<br><br>

                    <label for="curp">CURP</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Clave CURP') }}" name="curp" value="{{ $personal->curp }}"/>	

                    <label for="licencia">Licencia</label>
                    <input type="text" class="form-control" placeholder="{{ trans('No. de Licencia') }}" name="licencia" value="{{ $personal->licencia }}"/>

                    <label for="vigencia_licencia">Vigencia de Licencia</label>
                    <input type="date" class="form-control" placeholder="{{ trans('') }}" name="vigencia_licencia" value="{{ $personal->vigencia_licencia }}"/>	
					<br><br>

                    <label for="imss">No. Seguro Social</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Número de SS') }}" name="imss" value="{{ $personal->imss }}"/>	

                    <label for="ife">No.de Identificación</label>
                    <input type="number" class="form-control" placeholder="{{ trans('No. IFE / INE') }}" name="ife" value="{{ $personal->ife }}"/>

                    <label for="rfc">RFC</label>
                    <input type="text" class="form-control" placeholder="{{ trans('RFC') }}" name="rfc" value="{{ $personal->rfc }}"/>
					<br><br>

                    <label for="email">Correo Electrónico</label>
                    <input type="email" class="form-control" placeholder="{{ trans('Correo electrónico') }}" name="email" value="{{ $personal->email }}"/>	
                </div>
                <br>

                <h3><strong>Información Laboral</strong></h3>
                <div class="form-inline">
                	<label for="departamento">Departamento</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Departamento') }}" name="departamento" value="{{ $personal->departamento }}"/>	

                    <label for="cargo">Cargo</label>
                    <input type="text" class="form-control" placeholder="{{ trans('') }}" name="cargo" value="{{ $personal->cargo }}"/>	
                    <br><br>

                    <label for="fecha_ingreso">Fecha de Ingreso</label>
                    <input type="date" class="form-control" placeholder="{{ trans('') }}" name="fecha_ingreso" value="{{ $personal->fecha_ingreso }}"/>

                    <label for="hora_entrada">Hora de Entrada</label>
                    <input type="time" class="form-control" placeholder="{{ trans('') }}" name="hora_entrada" value="{{ $personal->hora_entrada }}"/>
                    <label for="hora_salida">Hora de Salida</label>
                    <input type="time" class="form-control" placeholder="{{ trans('') }}" name="hora_salida" value="{{ $personal->hora_salida }}"/>
					<br><br>

					<label for="tipo_contrato">Tipo de Contrato</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Contrato') }}" name="tipo_contrato" value="{{ $personal->tipo_contrato }}"/>

                    <label for="salario">Salario</label>
                    <input type="number" class="form-control" placeholder="{{ trans('$$$$') }}" name="salario" value="{{ $personal->salario }}"/>	
                    <br><br>	
                    <label for="fecha_fin">Fecha de Baja</label>
                    <input type="date" class="form-control" placeholder="{{ trans('') }}" name="fecha_fin" value="{{ $personal->fecha_fin }}"/>           	
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
