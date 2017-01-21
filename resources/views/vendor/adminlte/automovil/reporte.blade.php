<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="author" content="MOS Proyectos">
	<meta name="version" content="Enero 18 2017 v1.0">
	
	<!--Formato pra generar el reporte en PDF -->
	<title>Reporte Automóviles| MOS Proyectos</title>


	<link href="css/pdf.css" rel="stylesheet" type="text/css" />

</head>

<body>
	<header class="clearfix">
      <div id="logo">
        <img src="images/logo.png">
      </div>
      <h2>MOS Proyectos S.A. de C.V.</h2>
	  <h2>Reporte de Automóviles</h2>
      <div id="company" class="clearfix">
        <div>MOS Proyectos S.A. de C.V.</div>
        <div>Av. Gómez Farias No. 619 Col. La Merced <br> CP. 50080<br>Toluca, México</div>
        <div>(722) 207-3316</div>
        <div><a href="mailto:mos@mosproyectos.com.mx">mos@mosproyectos.com.mx</a></div>
        <div><span>Fecha</span> <?php echo date("d-m-Y"); ?></div><br>
      </div>
    </header>

	<table class="automovil">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nombre</th>
				<th>Marca</th>
				<th>Vehiculo</th>				
				<th>Modelo</th>
				<th>NIV</th>
				<th>Folio</th>
				<th>Placa</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($automovil as $auto)
				<tr>
					<td>{{ $auto->id_auto}}</td>
					<td>{{ $auto->nombre}}</td>
					<td>{{ $auto->marca}}</td>
					<td>{{ $auto->vehiculo}}</td>
					<td>{{ $auto->modelo}}</td>
					<td>{{ $auto->NIV}}</td>
					<td>{{ $auto->folio}}</td>
					<td>{{ $auto->placa}}</td>
				</tr>
			@endforeach
		</tbody>	
	</table>
	<footer>
     	MOS Proyectos S.A. de C.V.
    </footer>
</body>
</html>
