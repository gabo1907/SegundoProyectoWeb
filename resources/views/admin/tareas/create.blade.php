@extends('layouts.admin')
@section('content')

<div class="main_regT container">
	<div class="card titulo bienvenidos">
		<div class="container">
			<h2>Registra tu tarea</h2>
		</div>
	</div>	
	<!-- form -->
	<div class="form card text-black mb-3 tarea verde mx-auto container p-3">
		<!-- enctype es para que pueda recibir archivos -->
		<form class="text-white" method="POST" action="{{route('admintareas.store')}}" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label for="title">Título</label>
				<input type="text" class="form-control" name="title">
			</div>
			
			<div class="form-group">
				<label for="description">Descripción</label>
				<textarea class="form-control" rows="3" name="description"></textarea>
			</div>
			<div class="form-group">
				<label for="filetype">Tipo de archivo permitido</label>
				<input type="text" class="form-control" name="filetype">
			</div>
			<div class="form-group">
				<label>Fecha de Entrega</label><br>
				<label for="date">Día: </label>
				<input type="date" name="date" value="2020-04-13"
				min="2020-04-13" max="2020-06-13">
			</div>
			<div class="form-group">
				<label for="time">Hora: </label>
				<input type="time" name="time" value="00:00:00">
			</div>
			<div class="form-group">
				<label for="file">Archivo Opcional</label>
				<input type="file" name="file" enctype>
			</div>
			<br>
			<button type="submit" class="btn bg-white">Guardar</button>
		</form>
	</div>	
</div>	
@endcontent