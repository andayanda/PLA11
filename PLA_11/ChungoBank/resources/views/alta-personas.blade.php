<!DOCTYPE html>
<html>
<head>
	<title>Chungo Bank</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/app.css')}}">
</head>
</head>
<body>
	<div class='contenedor'>
		<header>
			<img src="assets/img/chungobank.png">
			<h4>Chungobank Investments & Trusts</h4>
		</header>
		<nav>
			<div><a href="/gestion">Gestión comercial</a></div>
			<div><a href="/alta-mto-puntos">Cuenta Puntos</a> | 
			<a href="/alta-personas">Alta personas</a></div>
		</nav>
		<h4 class='center'>Alta Personas</h4>
		<section>
			<form id='formulario'>
				<label>NIF:</label>
				<input type="text" id="nif">
				<br><br>
				<label>NOMBRE:</label>
				<input type="text" id="nombre">
				<br><br>
				<label>APELLIDOS:</label>
				<input type="text" id="apellidos">
				<br><br>
				<label>DIRECCION:</label>
				<input type="text" id="direccion">
				<br><br>
				<label>EMAIL:</label>
				<input type="text" id="email">				
				<br><br>
				<label>TARJETA</label>
				<input type="text" maxlength='4' id="pan1" disabled>
				<span>&nbsp&nbsp&nbsp</span>
				<input type="text" maxlength='4' id="pan2" disabled>
				<span>&nbsp&nbsp&nbsp</span>
				<input type="text" maxlength='4' id="pan3" disabled>
				<span>&nbsp&nbsp&nbsp</span>
				<input type="text" maxlength='4' id="pan4" disabled>
				<br><br><br>
				<input type="button" id="alta" value='Alta'>
				<input type="button" id="salir" value='Abandonar' onclick="window.location.href = 'gestion.html'">
				<span id='mensajes'>Zona de mensajes</span>
			</form>
		</section>
	</div>
</body>
</html>