@extends('layouts.app')


@section('content')
	<h1>Clients</h1>
	@if(count($clients) > 0)
		@foreach($clients as $client)
			<div class="well">
				<h3><a href="/clients/{{$client->id}}">{{$client->lname . "," . " " .$client->fname}}</a></h3>
				<small>Creation Date: {{$client->created_at}}</small>
			</div>
		@endforeach
		{{$clients->links()}}
	@else
		<p>No Clients Found</p>
	@endif
@endsection