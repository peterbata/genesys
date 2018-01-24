@extends('layouts.app')


@section('content')
	<a href="/clients" class="btn btn-default">Go Back</a>
	<h1>{{$client->lname. " " . $client->fname}}</h1>
	<div>
		{{$client->notes}}
	</div>
	<hr>
	<small>Creation Date: {{$client->created_at}}</small>
@endsection