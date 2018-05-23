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
				<a class="btn btn-danger btn-lg" href="#" role="button">Devolver película</a>
				<a class="btn btn-warning btn-lg" href="{{ url('/catalog/edit/' . $pelicula->id ) }}" role="button"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar película</a>
				<a class="btn btn-default btn-lg" href="{{ url('/catalog') }}" role="button"><span class="glyphiconglyphicon-fast-backward" aria-hidden="true"></span>Volver al listado</a>
			</p>
		</div>
	</div>
@stop