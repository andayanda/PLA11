<!DOCTYPE html>
<html>
<head>
	<title>Chungo Bank</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/app.css')}}">
</head>
	
	<style type="text/css">
		input#altamov {float:right;}
	</style>
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
		<h4 class='center'>Detalle movimiento Cta Puntos</h4>
		<section>
			<form id='formulario_mov'>
				<label>CONTRATO PUNTOS:</label>
				<input type="text" id="entidad" disabled>
				<input type="text" id="oficina" disabled>
				<input type="text" id="digito" disabled>
				<input type="text" id="cuenta" disabled>
				<input type="hidden" id="nif" value=''>
				<br><br>
				<label>FECHA MOVIMIENTO:</label>
				<input type="date" id="fecha" disabled>
				<br><br>
				<label>CONCEPTO</label>
				<input type="text" id="concepto" disabled>
				<br><hr><br>
				<label>TARJETA</label>
				<input type="text" maxlength='4' id="pan1" disabled>
				<span>&nbsp&nbsp&nbsp</span>
				<input type="text" maxlength='4' id="pan2" disabled>
				<span>&nbsp&nbsp&nbsp</span>
				<input type="text" maxlength='4' id="pan3" disabled>
				<span>&nbsp&nbsp&nbsp</span>
				<input type="text" maxlength='4' id="pan4" disabled>
				<br><br>
				<label>LOCALIZADOR</label>
				<input type="text" id="localizador" disabled>
				<br><br>
				<label>COMERCIO</label>
				<input type="text" id="comercio" disabled>
				<br><br>
				<label>COMENTARIOS</label>
				<textarea id="comentarios" disabled></textarea>
				<br><br><br>
				<input type="button" id="salir" value='Abandonar' onclick="window.location.href = 'consulta-movimientos.html'">
				<span id='mensajes'>Zona de mensajes</span>
			</form>
		</section>
	</div>
</body>
</html>