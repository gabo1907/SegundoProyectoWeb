@extends('layouts.admin')
@section('content')
<div class="main_regT container">
	<div class="card titulo bienvenidos">
		<div class="container">
			<h2>Edita tu tarea</h2>
		</div>
	</div>	
	<!-- form -->
	<div class="form card text-black mb-3 tarea verde mx-auto container p-3">
		<form class="text-white" method="POST" action="{{route('admintareas.update',$tarea->id)}}" enctype="multipart/form-data">
		<!-- Es un método para actualizar los datos -->
		@method('PATCH')
		@csrf
			<div class="form-group">
				<label for="title">Título</label>
				<input value="{{$tarea->title}}" type="text" class="form-control" name="title">
			</div>
			<div class="form-group">
				<label for="description">Descripción</label>
				<textarea class="form-control" rows="3" name="description">
					{{$tarea->description}}
				</textarea>
			</div>
			<div class="form-group">
				<label for="filetype">Tipo de archivo permitido</label>
				<input value="{{$tarea->filetype}}" type="text" class="form-control" name="filetype">
			</div>
			<div class="form-group">
				<label>Fecha de Entrega</label><br>
				<label for="date">Día: </label>
				<input type="date" name="date" value="{{$tarea->date}}"
				min="2020-04-13" max="2020-06-13">
			</div>
			<div class="form-group">
				<label for="time">Hora: </label>
				<input type="time" name="time" value="{{$tarea->time}}">
			</div>
			@if($tarea->file != NULL)
			<div class="form-group">
				<label for="file">Archivo actual</label>
				<a href="{{asset("tareas/$tarea->file")}}">{{$tarea->file}}</a>
			</div>
			<div class="form-group">
				<label for="file">Modificar archivo</label>
				<input type="file" name="file" enctype>
			</div>
			@else
			<div class="form-group">
				<label for="file">Subir archivo</label>
				<input type="file" name="file" enctype>
			</div>
			@endif
			<br>
			<button type="submit" class="btn bg-white">Guardar</button>
		</form>
	</div>	
</div>	
@endsection