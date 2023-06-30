<!DOCTYPE html>
<html>
<head>
	<title>Chungo Bank</title>
	<meta charset="utf-8">
	   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/app.css')}}">
</head>
<body>
<header>
	<img src="{{asset('assets/img/chungobank.png')}}">
		<h4>Chungobank Investments & Trusts</h4>
</header>
    <nav>
		<div><a href="/">Gestión comercial</a></div>
		<div><a href="/alta-mto-puntos">Cuenta Puntos</a> | 
		<a href="/alta-personas">Alta personas</a></div>
	</nav>
<h4 class='center'> {{$titulo}} </h4>
	<div class='contenedor'>		
	
		@yield('contenido')
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>