{!!Form::Open(array('action'=>array('AutomovilController@destroy',$auto->id_auto),'method'=>'delete'))!!}

	<button class="btn btn-danger glyphicon glyphicon-remove" type="submit" onclick="eliminar()" title="¡ELIMINAR!"></button>

	<script type="text/javascript">
		function eliminar()
		{
			alert("Registro Eliminado");
		}
	</script>
	 

{!! Form::close() !!}