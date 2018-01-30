@extends('layouts.app')


@section('content')
	<a href="/clients" class="btn btn-default">Go Back</a>
	<h1>{{$client->lname. " " . $client->fname}}</h1>
	<div>
		{{$client->notes}}
	</div>
	<hr>
	<small>Creation Date: {{$client->created_at}} by {{$client->user->name}}</small>
	<hr>
	<a href="/clients/{{$client->id}}/edit" class="btn btn-default">Edit</a>

	{!! Form::open(['action' => ['ClientsController@destroy', $client->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
		{{Form::hidden('_method', 'DELETE')}}
		{{form::submit('Delete', ['class' => 'btn btn-danger'])}}
	{!! Form::close() !!}
@endsection