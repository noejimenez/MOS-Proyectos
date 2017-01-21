<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<meta name="author" content="MOS Proyectos">
	<meta name="version" content="Enero 18 2017 v1.0">


	<title>Reporte de Personal | MOS Proyectos</title>

	<link href="css/pdf.css" rel="stylesheet" type="text/css" />

</head>
<body>
	<h1>MOS Proyectos S.A. de C.V.</h1>
	<h2>Reporte de Personal</h2>
	<table class="table table-striped table-bordered table-condensed table-hover">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nombre</th>
				<th>Departamento</th>
				<th>Cargo</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($personal as $persona)
			<tr>
				<td>{{ $persona->id_personal}}</td>
				<td>{{ $persona->nombre}} {{ $persona->apaterno}} {{ $persona->amaterno}}</td>
				<td>{{ $persona->departamento}}</td>
				<td>{{ $persona->cargo}}</td>
			</tr>
			@endforeach
		</tbody>	
	</table>
</body>
</html>