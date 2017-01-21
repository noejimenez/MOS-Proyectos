{!!Form::Open(array('action'=>array('EmpleadoController@destroy',$empleado->Id),'method'=>'delete'))!!}

	<button class="btn btn-danger glyphicon glyphicon-remove" type="submit" title="¡ELIMINAR!"></button>
	
{!! Form::close() !!}