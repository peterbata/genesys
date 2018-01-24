@extends('layouts.app')


@section('content')
	<h1>Create Client</h1>
	
	{!! Form::open(['action' => 'ClientsController@store', 'method' => 'POST']) !!}
		
		<div class="form-group">
			{{Form::label('fname', 'First Name')}}
			{{Form::text('fname', '', ['class' => 'form-control', 'placeholder' => 'First Name'])}}
		</div>
		<div class="form-group">	
			{{Form::label('lname', 'Last Name')}}
			{{Form::text('lname', '', ['class' => 'form-control', 'placeholder' => 'Last Name'])}}
		</div>

		<div class="form-group">
			{{Form::label('dob', 'Date of Birth')}}
			{{Form::text('dob', '', ['class' => 'form-control', 'placeholder' => 'Date of Birth'])}}
		</div>
		
		<div class="form-group">
			{{Form::label('notes', 'Notes')}}
			{{Form::text('notes', '', ['class' => 'form-control', 'placeholder' => 'Notes'])}}
		</div>
		{{form::submit('Submit', ['class' => 'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection