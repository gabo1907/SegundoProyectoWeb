@extends('layouts.admin')
@section('content')
<div class="main_regT container">
	<div class="card titulo bienvenidos">
		<div class="container">
			<h2>Publica algo:)</h2>
		</div>
	</div>	
	<!-- form -->
	<div class="form card text-black mb-3 tarea verde mx-auto container p-3">
		<form class="text-white" method="POST" enctype="multipart/form-data" action="{{route('posts.store')}}">
			@csrf
			<textarea name="post" id="post"></textarea>
			<button type="submit" class="btn">Guardar</button>
		</form>

	</div>	
</div>
<!-- Para que el editor funcione -->
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<!-- Para poder pegar imágenes... -->
<!-- El nombre del textarea y el del replace debe ser el mismo -->
<script>
    CKEDITOR.replace( 'post', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endsection