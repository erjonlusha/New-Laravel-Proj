@extends('layouts.app')

@section('content')
	<!-- Modal HTML -->
	<div class="riuscito d-flex flex-column justify-content-center">
		<h1>Completato con successo!</h1>
		<div class="container d-flex justify-content-between">
			<a class="btn btn-primary" href="{{ route('welcome')}}"  role="button">Home</a>
			<a class="btn btn-dark" href="{{ route('dashboard')}}" role="button">Dashboard</a>
		</div>
	</div>     
@endsection
