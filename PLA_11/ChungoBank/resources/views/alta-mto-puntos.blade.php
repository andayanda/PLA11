<!DOCTYPE html>
<html>
<head>
	<title>Chungo Bank</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/app.css')}}">
</head>
<body>
	<div class='contenedor'>
		<header>
			<img src="assets/img/chungobank.png">
			<h4>Chungobank Investments & Trusts</h4>
		</header>
		<nav>
			<div><a href="gestion.html">Gestión comercial</a></div>
			<div><a href="alta-mto-puntos.html">Cuenta Puntos</a> | 
			<a href="alta-personas.html">Alta personas</a></div>
		</nav>
		<h4 class='center'>Alta y Mantenimiento Cta Puntos</h4>
		<section>
			<form id='formulario'>
				<label>CONTRATO PUNTOS:</label>
				<input type="text" id="entidad" disabled>
				<input type="text" id="oficina" disabled>
				<input type="text" id="digito" disabled>
				<input type="text" id="cuenta" disabled>
				<br><br>
				<label>TITULAR:</label>
				<input type="text" id="nif" value='' disabled>
				<input type="text" id="titular" value='' disabled>
				<br><br><hr><br><br>
				<label>CÓDIGO PROGRAMA:</label>
				<select id='codigo'>
					<option disabled selected value=''>Seleccione código</option>
					<option>PBS</option>
					<option>PAV</option>
					<option>PPR</option>
				</select>
				<br><br>
				<label>DESCRIPCIÓN PROGRAMA:</label>
				<input type="text" id='descripcion' disabled>
				<br><br>
				<label>RENUNCIA EXTRACTO:</label>
				<input type="checkbox" name="extracto" value='si'>
				<br><br>
				<label>RENUNCIA OBTENCIÓN PUNTOS:</label>
				<input type="checkbox" name="renuncia" value='si'>
				<br><br><br>
				<input type="button" id="altapuntos" value='Alta'>
				<input type="button" id="modifpuntos" value='Modificar'>
				<input type="button" id="bajapuntos" value='Baja'>
				<input type="button" id="movimientos" value='Consulta mvtos' onclick="window.location.href = 'consulta-movimientos.html'">
				<input type="button" id="salir" value='Abandonar' onclick="window.location.href = 'gestion.html'">
				<span id='mensajes'>Zona de mensajes</span>
			</form>
		</section>
	</div>
</body>
</html>