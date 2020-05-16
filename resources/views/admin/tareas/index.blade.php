@extends('layouts.admin')
@section('content')

<div class="card titulo bienvenidos">
	<div class="container">
		<h2 class="text-left d-inline-block">Consejos de salud</h2>
	</div>
</div><br>
<div class="container tareas tareas-admin">
	<p class="text-justify">La buena alimentación y la actividad física son pilares de un estilo de vida saludable. Pero no son los únicos. Evitar accidentes, disminuir el riesgo de enfermedades no transmisibles, y evitar el contagio de las que sí lo son también forman parte de las acciones para tener una buena calidad de vida, según la Organización Mundial de la Salud (OMS).
	<br>
	A continución se presentan una serie de tips:
	</p>
	<div id="carouselExampleControls" class="carousel slide mb-4" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<p class="text-center">Tener una sana alimentación es parte primordial para gozar de buena salud</p>
				<img src="img/dieta.jpg" class="d-block w-100 h-50" alt="Imagen de dieta">
			</div>
			<div class="carousel-item">
				<p class="text-center">Vaya que si una buena alimentación se acompaña de ejercicio puedes obtener grandes resultados en tu cuerpo</p>
				<img src="img/calistenia.jpg" class="d-block w-100" alt="Calistenia">
			</div>
			<div class="carousel-item">
				<p class="text-center">El descanso también juega un papel importante para que los músculos se recuperen del esfuerzo puesto en la rutina de ejercicios</p>
				<img src="img/descanso.jpg" class="d-block w-100 h-50" alt="Descanso">
			</div>
			<div class="carousel-item">
				<p class="text-center">Reducir el estrés provocado por las actividades cotidianas también forma parte del conjunto de cosas que debemos de practicar para tener una mejor salud</p>
				<img src="img/estres.jpg" class="d-block w-100 h-50" alt="Estrés">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

@endsection