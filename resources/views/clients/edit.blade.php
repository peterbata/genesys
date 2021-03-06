@extends('layouts.app')

@section('content')
	<h1>Edit Client</h1>
	
	{!! Form::open(['action' => ['ClientsController@update', $client->id], 'method' => 'POST']) !!}
		
		<div class="form-group">
			{{Form::label('fname', 'First Name')}}
			{{Form::text('fname', $client->fname, ['class' => 'form-control', 'placeholder' => 'First Name'])}}
		</div>
		<div class="form-group">	
			{{Form::label('lname', 'Last Name')}}
			{{Form::text('lname', $client->lname, ['class' => 'form-control', 'placeholder' => 'Last Name'])}}
		</div>

		<div class="form-group">
			{{Form::label('dob', 'Date of Birth')}}
			{{Form::text('dob', $client->dob, ['class' => 'form-control', 'placeholder' => 'Date of Birth'])}}
		</div>
		
		<div class="form-group">
			{{Form::label('notes', 'Notes')}}
			{{Form::text('notes', $client->notes, ['class' => 'form-control', 'placeholder' => 'Notes'])}}
		</div>
		{{Form::hidden('_method', 'PUT')}}
		{{form::submit('Submit', ['class' => 'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection