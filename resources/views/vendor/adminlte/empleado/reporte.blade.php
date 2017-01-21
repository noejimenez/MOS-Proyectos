<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<meta name="author" content="MOS Proyectos">
	<meta name="version" content="Enero 19 2017 v1.0">


	<title>Reporte de Empleados | MOS Proyectos</title>

	<link href="css/pdf.css" rel="stylesheet" type="text/css" />
	{{-- <link href="css/style.css" rel="stylesheet" type="text/css" /> --}}

</head>
<body>
	
	<header class="clearfix">
      <div id="logo">
        <img src="images/logo.png">
      </div>
      <h2>MOS Proyectos S.A. de C.V.</h2>
	  <h2>Reporte de Empleados</h2>
      <div id="company" class="clearfix">
        <div>MOS Proyectos S.A. de C.V.</div>
        <div>Av. Gómez Farias No. 619 Col. La Merced <br> CP. 50080<br>Toluca, México</div>
        <div>(722) 207-3316</div>
        <div><a href="mailto:mos@mosproyectos.com.mx">mos@mosproyectos.com.mx</a></div>
        <div><span>Fecha</span> <?php echo date("d-m-Y"); ?></div>
      </div>
    </header>
	<table class="empleado">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nombre</th>
				<th>Dirección</th>
				<th>Municipio</th>
				<th>Celular</th>
				<th>Empresa</th>
				<th>Categoria</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($empleado as $empleado)
			<tr>
				<td>{{ $empleado->Id}}</td>
				<td>{{ $empleado->NOMBRE}} {{ $empleado->APELLIDOPATERNO}} {{ $empleado->APELLIDOMATERNO}}</td>
				<td>{{ $empleado->DIRECCION}}</td>
				<td>{{ $empleado->MUNICIPIO}}</td>
				<td>{{ $empleado->CELULAR}}</td>
				<td>{{ $empleado->EMPRESA}}</td>
				<td>{{ $empleado->CATEGORIA}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<p>Número de Empleados activos en Sistema &nbsp; <strong>{{ $empleados }}</strong></p>

	<footer>
     	MOS Proyectos S.A. de C.V.
    </footer>
</body>
</html>