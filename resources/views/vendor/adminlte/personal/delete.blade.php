{!!Form::Open(array('action'=>array('PersonalController@destroy',$persona->id_personal),'method'=>'delete'))!!}

	<button class="btn btn-danger glyphicon glyphicon-remove" type="submit" title="¡ELIMINAR!"></button>
	

{!! Form::close() !!}