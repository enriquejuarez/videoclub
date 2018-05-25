@extends('layouts.master')
@section('content')
	<div class="row">
		<div class="col-sm-4">
		{{-- TODO: Imagen de la película --}}
			<img src="{{$pelicula['poster']}}" style="height:450px"/>
		</div>
		<div class="col-sm-8">
		{{-- TODO: Datos de la película --}}
			<h1>{{ $pelicula->title }}</h1>
			<p>Año: {{ $pelicula->year }}</p>
			<p>Director: {{ $pelicula->director }}</p><br>
			<p><b>Resumen: </b>{{ $pelicula->synopsis }}</p><br>
			<p><b>Estado: </b>{{ $pelicula->rented===1 ? "Película actualmente alquilada" : "Película disponible" }}</p><br>
			<p>
				<a class="btn btn-primary" href="#" role="button">Devolver película</a>
				<a class="btn btn-warning" href="{{ url('/catalog/edit/' . $pelicula->id ) }}" role="button"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar película</a>
				<a class="btn btn-danger" href="{{ url('/catalog/delete/' . $pelicula->id ) }}" role="button"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Eliminar película</a>
				<a class="btn btn-default" href="{{ url('/catalog') }}" role="button"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span> Volver al listado</a>
			</p>
		</div>
	</div>
@stop