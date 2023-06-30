<!DOCTYPE html>
<html>

<body>
@include('components/title')
	@include('components/head')
	@include('components/header')
	@include('components/navbar')
	<div class='contenedor'>		
	
		<section>
			<form>
				<label>Nº Ident. Fiscal</label><br>
				<input type="text" id="nif" required  value=''>
				<input type="text" id='nombre' readonly value=''>
				<span id='mensajes'>Zona de mensajes</span>
				<br><br>
			</form>
		</section>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>