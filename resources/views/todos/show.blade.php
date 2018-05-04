@extends("layout.app")

    @section('content')
    <a href="/" class="btn btn-default">Go back</a>
        <h1>{{$todo->text}} <span><h5>{{$todo->due}}</h5></span></h1>
        <div class="col-md-12">{{$todo->body}}</div>
     <br/>
      <a href="/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a>
           {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
	  	   {{ Form::hidden('_method', 'DELETE') }}
		   {{ Form::submit('Delete!', ['class' => 'btn btn-success'])}}
		   {!! Form::close() !!}
    @endsection
