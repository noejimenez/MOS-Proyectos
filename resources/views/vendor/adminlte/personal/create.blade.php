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
				<h2 align="center"><strong> AGREGAR PERSONAL</strong></h2>
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
				{!!Form::open(array('url'=>'home/personal','method'=>'POST','autocomplete'=>'off'))!!}
            	{{Form::token()}}

				<h3><strong>Datos Personales</strong></h3>
				<p style="color:red;">* Campos Obligatorios</p>
				<div class="form-group has-feedback">
                    <label for="nombre">Nombre *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Nombre') }}" name="nombre" value="{{ old('nombre') }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                	<label for="apaterno">Apellido Paterno *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Apellido Paterno') }}" name="apaterno" value="{{ old('apaterno') }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                	<label for="amaterno">Apellido Materno *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Apellido Materno') }}" name="amaterno" value="{{ old('amaterno') }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>

                <div class="form-inline">
                	<label for="estado_civil">Estado Civil *</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Solter@, Casad@, etc') }}" name="estado_civil" value="{{ old('estado_civil') }}"/>

                    <label for="estatura">Estatura*</label>
                    <input type="text" class="form-control" placeholder="{{ trans('1.XX') }}" name="estatura" value="{{ old('estatura') }}"/>
                	

                	<label for="fecha_nacimiento">Fecha de Nacimiento *</label>
                    <input type="date" class="form-control" placeholder="{{ trans('dd/mm/aaaa') }}" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}"/>
                    <br><br>

                    <label for="nacionalidad">Nacionalidad*</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Nacionalidad') }}" name="nacionalidad" value="{{ old('nacionalidad') }}"/>
                	
                	<label for="edad">Edad *</label>
                    <input type="number" class="form-control" placeholder="{{ trans('Edad') }}" name="edad" value="{{ old('edad') }}"/>

                    <label for="peso">Peso *</label>
                    <input type="number" class="form-control" placeholder="{{ trans('Peso') }}" name="peso" value="{{ old('peso') }}"/>
                    <br><br>
                                                       		
                </div>

                <div class="form-inline">
                    {{-- <label for="sexo">Género</label><br>
                    <input type="radio" name="sexo" value="Femenino"/>Femenino
                    <input type="radio" name="sexo" value="Masculino">Masculino --}}
                    <div>
                        <label>Género</label>
                        <select  id="Gender" name="sexo" >
                            <option  value="Masculino" class="placeholder">Masculino</option>
                            <option  value="Femenino" class="placeholder">Femenino</option>
                        </select>
                    </div>
                </div>			
				
				<h3><strong>Datos Generales</strong></h3>
				<div class="form-inline">
                	<label for="celular">Celular</label>
                    <input type="tel" class="form-control" placeholder="{{ trans('Número de celular') }}" name="celular" value="{{ old('celular') }}"/>

                	<label for="tel_casa">Teléfono de casa</label>
                    <input type="tel" class="form-control" placeholder="{{ trans('Teléfono') }}" name="tel_casa" value="{{ old('tel_casa') }}"/>

                	<label for="tel_emergencia">Tel. Emergencia</label>
                    <input type="tel" class="form-control" placeholder="{{ trans('Teléfono de Emergencia') }}" name="tel_emergencia" value="{{ old('tel_emergencia') }}"/>
					<br><br>

                    <label for="curp">CURP</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Clave CURP') }}" name="curp" value="{{ old('curp') }}"/>	

                    <label for="licencia">Licencia</label>
                    <input type="text" class="form-control" placeholder="{{ trans('No. de Licencia') }}" name="licencia" value="{{ old('licencia') }}"/>

                    <label for="vigencia_licencia">Vigencia de Licencia</label>
                    <input type="date" class="form-control" placeholder="{{ trans('') }}" name="vigencia_licencia" value="{{ old('vigencia_licencia') }}"/>	
					<br><br>

                    <label for="imss">No. Seguro Social</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Número de SS') }}" name="imss" value="{{ old('imss') }}"/>	

                    <label for="ife">No.de Identificación</label>
                    <input type="number" class="form-control" placeholder="{{ trans('No. IFE / INE') }}" name="ife" value="{{ old('ife') }}"/>

                    <label for="rfc">RFC</label>
                    <input type="text" class="form-control" placeholder="{{ trans('RFC') }}" name="rfc" value="{{ old('rfc') }}"/>
					<br><br>

                    <label for="email">Correo Electrónico</label>
                    <input type="email" class="form-control" placeholder="{{ trans('Correo electrónico') }}" name="email" value="{{ old('email') }}"/>	
                </div>
                <br>

                <h3><strong>Información Laboral</strong></h3>
                <div class="form-inline">
                	<label for="departamento">Departamento</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Departamento') }}" name="departamento" value="{{ old('departamento') }}"/>	

                    <label for="cargo">Cargo</label>
                    <input type="text" class="form-control" placeholder="{{ trans('') }}" name="cargo" value="{{ old('cargo') }}"/>	
                    <br><br>

                    <label for="fecha_ingreso">Fecha de Ingreso</label>
                    <input type="date" class="form-control" placeholder="{{ trans('') }}" name="fecha_ingreso" value="{{ old('fecha_ingreso') }}"/>

                    <label for="hora_entrada">Hora de Entrada</label>
                    <input type="time" class="form-control" placeholder="{{ trans('') }}" name="hora_entrada" value="{{ old('hora_entrada') }}"/>
                    <label for="hora_salida">Hora de Salida</label>
                    <input type="time" class="form-control" placeholder="{{ trans('') }}" name="hora_salida" value="{{ old('hora_salida') }}"/>
					<br><br>

					<label for="tipo_contrato">Tipo de Contrato</label>
                    <input type="text" class="form-control" placeholder="{{ trans('Contrato') }}" name="tipo_contrato" value="{{ old('tipo_contrato') }}"/>

                    <label for="salario">Salario</label>
                    <input type="number" class="form-control" placeholder="{{ trans('$$$$') }}" name="salario" value="{{ old('salario') }}"/>	
                    <br><br>	
                    {{-- <label for="fecha_fin">Fecha de Baja</label>
                    <input type="date" class="form-control" placeholder="{{ trans('') }}" name="fecha_fin" value="{{ old('fecha_fin') }}"/>  --}}          	
                </div>

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