<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Tintero</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<nav class="py-2 bg-body-tertiary border-bottom">
	<div class="container d-flex flex-wrap">
		<ul class="nav me-auto">
			<li class="nav-item"><h1>El Tintero</h1></li>
		</ul>
		<ul class="nav">
			<li class="nav-item"><a href="{{ route('account.create') }}" class="nav-link link-body-emphasis px-2"> Registrarse </a></li> 
		</ul>
	</div>
</nav>
<body>
<div class="row mb-3">
		<div class="col-8">
			<div class="list-group">
				<a class="list-group-item list-group-item-action d-flex gap-3 py-3">
					<div>
						<h2 class="mb-0">Bienvenidos!!!</h2>
						<h3 class="mb-0">Autor: Eduardo Mulhia</h3>
						<p class="mb-0 opacity-75">Este sitio es un espacio en el que escritores pueden compartir consejos y dudas con el resto de la comunidad, con el objetivo de ayudarse mutuamente.</p>
						<p class="mb-0 opacity-75">Aun faltan muchos detalles por pulir y funciones por implementar (como una base de datos para las publicaciones y usuarios), espero en un futuro poder implementarlos :D</p>
					</div>
				</div>
			</section>
		</div>
		<div class="col-4">
			<h2>Sección de noticias<h2>
			<h3>Aqui se mostraran los temas que son tendencia en la pagina</h3>	
		</div>
	</div>
</body>
</html>