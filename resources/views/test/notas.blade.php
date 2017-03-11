@extends('template')
@section('title')
Notas
@stop
@section('content')
	<ul>
		@foreach($notas as $nota)
		<li>{{$nota}}</li>
		@endforeach
	</ul>
			
@stop