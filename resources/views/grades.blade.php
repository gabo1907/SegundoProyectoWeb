@extends('layouts.app')
@section('content')
<div class="main_grades mx-auto">
	<div class="card titulo bienvenidos">
		<div class="container">
			<h2>Calificaciones</h2>
		</div>
	</div> 
	<div class="container mt-2 mt-md-3 grades">
		<table class="table table-hover mx-auto">
			<thead>
				<tr class="amarillo">
					<th scope="col" class="mr-3">Tarea</th>
					<th scope="col" class="pl-md-5 mr-md-5">Calificación</th>
				</tr>
			</thead>
			<tbody>
				@foreach($entregas as $entrega)
				@if($entrega->user_id==$user->id)
				<p class="d-none"></p>	
				<tr>
					<td class="pr-md-5 mr-md-5">{{$entrega->tarea->title}}</td>
					<td class="text-center pl-md-5 mr-md-5">{{$entrega->grade}}<b></b></td>
				</tr>
				@endif
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection