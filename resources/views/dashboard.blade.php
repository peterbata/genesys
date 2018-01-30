@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
					@if (session('status'))
                        <div class="alert alert-success">
							{{ session('status') }}
                        </div>
                    @endif
					<a href="/clients/create" class="btn btn-primary">Create Client</a>
					<h3>Our Clients</h3>
					@if(count($clients) > 0)
					<table class="table table-striped">
						<tr>
							<th>Client Name</th>
							<th></th>
							<th></th>
						</tr>
						@foreach($clients as $client)
							<tr>
								<td>{{$client->lname . ',' . ' ' . $client->fname}}</td>
								<td><a href="/clients/{{$client->id}}/edit" class="btn btn-default">Edit</a></td>
								<td>
								{!! Form::open(['action' => ['ClientsController@destroy', $client->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
									{{Form::hidden('_method', 'DELETE')}}
									{{form::submit('Delete', ['class' => 'btn btn-danger'])}}
								{!! Form::close() !!}
								</td>
						</tr>	
						@endforeach
					</table>
					@else
						<p>You have not entered any clients</p>	
					@endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
