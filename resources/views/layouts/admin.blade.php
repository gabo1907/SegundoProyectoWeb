<!-- Añadir los assets -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Página principal</title>
	<link rel="stylesheet" href="{{asset('css/styles.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/mediaqueries.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Oxygen|Rufina&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<!-- nav-->
		<nav class="navbar navbar-expand-lg navbar-dark">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="{{route('admintareas.index')}}">Consejos de salud</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('posts.index')}}">Rutinas</a>
					</li>
					
				</ul>
			</div>
		</nav>
	</header>
	<main>
		@yield('content')
	</main> 
	<footer>
		<p class="pt-3 text-center"><b>Todos los derechos reservados G.Z.M ©</b></p>
		<p class="text-center">Sígueme en:</p>
		<div id="imagenesFoot">
			<a target="_blank" href="https://www.facebook.com/gabriel.zarcomunoz">
				<img id="foot" src="img/icons8-facebook-48.png" alt="Facebook de Gabo">
			</a>
			<a target="_blank" href="https://www.instagram.com/?hl=es-la">
				<img id="foot" src="img/icons8-instagram-48.png" alt="Insta de Gabo">
			</a>
		</div>
	</div>
</footer>
</body>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</html>